<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Configuration;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $product_id, $configuration_id)
    {
        // Kiểm tra xem người dùng đã đăng nhập là khách hàng hay chưa
        if (Auth::guard('customer')->check()) {
            // Lấy sản phẩm và cấu hình từ database
            $product = Product::find($product_id);
            $configuration = Configuration::find($configuration_id);

            // Kết nối với product_detail
            $productDetail = ProductDetail::where('config_id', $configuration_id)->first();

            // Lấy giỏ hàng từ session
            $cart = $request->session()->get('cart', []);

            // Kiểm tra xem sản phẩm và cấu hình đã tồn tại trong giỏ hàng hay chưa
            $existingCartItem = null;
            foreach ($cart as $key => $cartItem) {
                if ($cartItem['product']->id == $product_id && $cartItem['configuration']->id == $configuration_id) {
                    $existingCartItem = $key;
                    break;
                }
            }

            // Nếu sản phẩm và cấu hình đã tồn tại, tăng số lượng
            if ($existingCartItem !== null) {
                $cart[$existingCartItem]['quantity']++;
            } else {
                // Nếu sản phẩm và cấu hình chưa tồn tại, thêm vào giỏ hàng
                $cartItem = [
                    'product' => $product,
                    'configuration' => $configuration,
                    'quantity' => 1, // Số lượng sản phẩm bạn muốn thêm
                    'price' => $configuration->price, // Giá của cấu hình
                    'image' => $product->img, // Hình ảnh của sản phẩm
                    'pro_de_id' => $productDetail->id, // Add the product_detail_id
                ];

                $cart[] = $cartItem;
            }

            // Cập nhật session giỏ hàng với giá trị mới
            $request->session()->put('cart', $cart);

            // Điều hướng đến trang giỏ hàng
            return redirect()->route('user.cart');
        } else {
            // Nếu khách hàng chưa đăng nhập, chuyển hướng họ đến trang đăng nhập
            return redirect()->route('user.loginRegister');
        }
    }

    public function viewCart(Request $request)
    {
        if (Auth::guard('customer')->check()) {
            $categories = Category::all();
            $paymentMethods = PaymentMethod::all();
            // Lấy giỏ hàng từ session
            $cart = $request->session()->get('cart', []);

            // Tính tổng giá trị đơn hàng
            $total = 0;
            foreach ($cart as $cartItem) {
                $total += $cartItem['price'] * $cartItem['quantity'];
            }

            return view('user.cart', compact('cart', 'total', 'paymentMethods', 'categories'));
        } else {
            // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('user.loginRegister');
        }
    }

    public function updateCart(Request $request)
    {
        $cart = $request->session()->get('cart');

        // Loop through the cart items and update the quantities
        foreach ($cart as $key => $cartItem) {
            $newQuantity = $request->input("quantity.$key");
            $cartItem['quantity'] = max(1, $newQuantity); // Ensure quantity is at least 1

            // Update the total price for the cart item
            $cartItem['total_price'] = $cartItem['price'] * $cartItem['quantity'];

            $cart[$key] = $cartItem;
        }

        // Update the session with the modified cart data
        $request->session()->put('cart', $cart);

        // Redirect back to the cart page with a success message
        return redirect()->route('user.cart')->with('success', 'Cart updated successfully');
    }



    public function removeFromCart(Request $request, $index)
    {
        // Kiểm tra xem session giỏ hàng đã tồn tại chưa
        if ($request->session()->has('cart')) {
            // Lấy giỏ hàng từ session
            $cart = $request->session()->get('cart');

            // Kiểm tra xem chỉ số ($index) có tồn tại trong mảng giỏ hàng không
            if (array_key_exists($index, $cart)) {
                // Xóa sản phẩm khỏi giỏ hàng dựa trên chỉ số
                unset($cart[$index]);

                // Cập nhật session giỏ hàng với giá trị mới
                $request->session()->put('cart', $cart);
            }
        }

        // Điều hướng trở lại trang giỏ hàng sau khi xóa sản phẩm
        return redirect()->route('user.cart');
    }

    public function clearCart(Request $request)
    {
        session()->forget('cart');
        // Clear the cart by removing the 'cart' session data
        $request->session()->forget('cart');

        // Redirect back to the cart page with a success message
        return redirect()->route('user.cart')->with('success', 'Cart cleared successfully');
    }


    public function buyNow(Request $request)
    {
        // Check if the user is logged in
        $customer = Auth::guard('customer')->user();

        if (!$customer) {
            return redirect()->route('user.loginRegister');
        }

        $cart = $request->session()->get('cart', []);

        foreach ($cart as $cartItem) {
            $productDetail = ProductDetail::find($cartItem['pro_de_id']);
            if ($productDetail) {
                $amountInConfiguration = $productDetail->configuration->amount;

                // Kiểm tra xem số lượng có đủ để trừ đi không
                if ($amountInConfiguration >= $cartItem['quantity']) {
                    $amountInConfiguration -= $cartItem['quantity'];
                    $productDetail->configuration->amount = $amountInConfiguration;
                    $productDetail->configuration->save();
                } else {
                    return redirect()->back()->with('error', 'Số lượng sản phẩm trong kho không đủ');
                }
            }
        }

        // Create a new order
        $order = new Order([
            'status' => 1, // Set the initial status (you can change this)
            'purchase_date' => now(),
            'payment_id' => $request->input('payment_id'), // Assuming you have a select input for payment method
            'admin_id' => 1, // Set the admin ID (you can change this)
            'customer_id' => $customer->id,
        ]);

        $order->save();

        // Create order details
        $orderDetails = [];

        foreach ($cart as $cartItem) {
            $orderDetails[] = new OrderDetail([
                'amount' => $cartItem['quantity'],
                'until_price' => $cartItem['price'] * $cartItem['quantity'],
                'pro_de_id' => $cartItem['pro_de_id'], // You should have the product_detail_id in your cart item
            ]);
        }

        $order->orderDetails()->saveMany($orderDetails);

        // Clear the cart after the purchase is completed
        $request->session()->forget('cart');

        return redirect()->route('user.myAccount')->with('success', 'Đơn hàng được đặt thành công.');
    }
}
