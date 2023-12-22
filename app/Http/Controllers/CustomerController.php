<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('user.loginRegister', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $data = $request->all();

        // Kiểm tra xem trường password_confirmation có giống với trường password hay không
        if ($data['password'] !== $data['password_confirmation']) {
            // Trường password_confirmation không khớp, trả về thông báo lỗi
            return redirect()->route('user.loginRegister')->withErrors(['password_confirmation' => 'Mật khẩu xác nhận không khớp.'])->withInput();
        }

        // Hash mật khẩu trước khi lưu vào cơ sở dữ liệu
        $data['password'] = Hash::make($data['password']);

        // Loại bỏ trường password_confirmation khỏi dữ liệu
        unset($data['password_confirmation']);

        // Tạo bản ghi mới
        Customer::create($data);

        // Thêm thông báo đăng ký thành công vào Session
        session()->flash('success', 'Bạn đã đăng ký thành công.');

        return redirect()->route('user.loginRegister');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $categories = Category::all();
        $customer = Auth::guard('customer')->user();

        return view('user.editAccount', compact('customer', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,'.Auth::guard('customer')->id(),
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
        ]);

        Auth::guard('customer')->user()->update($request->only('name', 'email', 'address', 'phone_number'));

        return redirect()->back()->with('success', 'Account information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function LoginProcess(Request $request){
        $accountCustomer = $request->only(['email', 'password']);

        if (Auth::guard('customer')->attempt($accountCustomer)){
            $customer = Auth::guard('customer')->user();
            Auth::login($customer);
            session(['customer' => $customer]);
            return redirect()->route('user.index');
        }
        else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        // Xóa giỏ hàng
        session()->forget('cart');

        // Đăng xuất khỏi guard 'customer'
        Auth::guard('customer')->logout();

        // Xóa session dành cho guard 'customer'
        session()->forget(Auth::guard('customer')->getName());

        // Chuyển hướng đến trang đăng nhập
        return redirect()->route('user.loginRegister');
    }

    public function showUserProfile()
    {
        $categories = Category::all();
        // Retrieve the authenticated customer
        $customer = Auth::guard('customer')->user();

        if (!$customer) {
            // Handle the case where the user is not authenticated
            return redirect()->route('user.loginRegister'); // Redirect to the login page or another appropriate action
        }

        $orders = Order::with('customer', 'paymentMethod', 'orderDetails')
            ->where('customer_id', $customer->id)
            ->orderBy('purchase_date', 'desc') // Sắp xếp theo thời gian mua giảm dần (mới nhất lên đầu)
            ->orderBy('id', 'desc') // Sắp xếp lại theo ID đơn hàng từ cao đến thấp (mới nhất ở đầu)
            ->get();


        foreach ($orders as $order) {
            $totalPrice = $order->orderDetails->sum('until_price'); // Tính tổng tiền từ các chi tiết đơn hàng
            $order->totalPrice = $totalPrice; // Gán tổng tiền cho đơn hàng
        }

        return view('user.myAccount', compact('customer', 'categories', 'orders'));
    }

    public function showChangePasswordForm()
    {
        $customer = Auth::guard('customer')->user();
        return view('user.changePass', compact('customer'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password_current' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $customer = Auth::guard('customer')->user();

        // Check if the current password matches the hashed password
        if (Hash::check($request->password_current, $customer->password)) {
            // Update the password with the new hashed password
            $customer->password = Hash::make($request->password);
            $customer->save();

            return redirect()->route('user.changePassword')->with('success', 'Password changed successfully');
        } else {
            return redirect()->route('user.changePassword')->withErrors(['password_current' => 'Current password is incorrect']);
        }
    }

    public function showOrderDetail($order_id)
    {
        // Truy vấn cơ sở dữ liệu để lấy chi tiết đơn hàng dựa trên $order_id
        $orderDetails = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payment_methods', 'orders.payment_id', '=', 'payment_methods.id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('product_details', 'order_details.pro_de_id', '=', 'product_details.id')
            ->join('configurations', 'product_details.config_id', '=', 'configurations.id')
            ->join('products', 'configurations.product_id', '=', 'products.id')
            ->where('orders.id', $order_id)
            ->select(
                'orders.id as order_id',
                'orders.status',
                'orders.purchase_date',
                'products.name AS NameProduct',
                'configurations.name as nameconfig',
                'configurations.price',
                'customers.name as customer_name',
                'customers.address',
                'customers.phone_number',
                'order_details.amount',
                'order_details.until_price',
                'payment_methods.name as payment_method'
            // Thêm các cột khác mà bạn muốn lấy từ các bảng khác
            )
            ->get();

        if (!$orderDetails) {
            abort(404); // Hiển thị trang lỗi 404 nếu đơn hàng không tồn tại
        }

        return view('user.showDetailOrder', compact('orderDetails')); // Hiển thị view chi tiết đơn hàng
    }

    public function complete($order_id)
    {
        // Lấy thông tin đơn hàng từ CSDL
        $order = Order::find($order_id);

        // Kiểm tra trạng thái của đơn hàng
        if ($order->status == 4) {
            // Nếu trạng thái là 3 (Đang giao hàng), thì chuyển sang trạng thái 4 (Đã giao hàng cho khách)
            $order->status = 5;
            $order->save();

            return redirect()->back()->with('success', 'Bạn đã nhận đơn hàng thành công');
        } elseif ($order->status == 6) {
            // Nếu trạng thái là 5 hoặc 6 (Hoàn Thành Đơn Hàng hoặc Hủy đơn hàng), không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể hủy đơn hàng với trạng thái hiện tại');
        } else {
            // Trường hợp còn lại, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể thực hiện với trạng thái hiện tại');
        }
    }

    public function cancel($order_id)
    {
        // Lấy thông tin đơn hàng từ CSDL
        $order = Order::find($order_id);

        // Kiểm tra trạng thái của đơn hàng
        if ($order->status == 1 || $order->status == 2) {
            // Nếu trạng thái là 3 (Đang giao hàng), thì chuyển sang trạng thái 4 (Đã giao hàng cho khách)
            $order->status = 6;
            $order->save();

            return redirect()->back()->with('success', 'Bạn đã hủy đơn hàng thành công');
        } elseif ($order->status == 3 || $order->status == 4 || $order->status == 5) {
            // Nếu trạng thái là 5 hoặc 6 (Hoàn Thành Đơn Hàng hoặc Hủy đơn hàng), không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể hủy đơn hàng với trạng thái hiện tại');
        } else {
            // Trường hợp còn lại, không thực hiện thay đổi và thông báo lỗi
            return redirect()->back()->with('error', 'Không thể thực hiện với trạng thái hiện tại');
        }
    }


}
