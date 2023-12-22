<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
            ->leftJoin('configurations', 'products.id', '=', 'configurations.product_id')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select(
                'products.id',
                'products.name AS NameProduct',
                'products.img',
                'products.description',
                'configurations.amount',
                'configurations.id AS ConfigurationId',
                'configurations.name AS ConfigurationName',
                'configurations.price',
                'categories.name AS CategoryName',
                'brands.name AS BrandName'
            )
            ->orderBy('products.id', 'desc') // Sắp xếp theo ID giảm dần
            ->get(); // Lấy bản ghi đầu tiên


        return view('product.product', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.addProduct', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['created_at'] = now();
        Product::create($data);
        // Redirect to a success page with a message
        return redirect()->route('product.product')->with('success', 'Đã thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            // Xử lý trường hợp không tìm thấy sản phẩm
            return redirect()->route('product.index')->with('error', 'Không tìm thấy sản phẩm.');
        }

        // Lấy danh sách cấu hình liên quan đến sản phẩm
        $configurations = $product->configurations;

        // Trả về view với các biến này
        return view('product.showDetail', compact('configurations', 'product'));

    }

    public function showDetail($configurationId)
    {
        // Lấy thông tin cấu hình dựa trên configurationId
        $configuration = Configuration::find($configurationId);

        if (!$configuration) {
            // Xử lý khi không tìm thấy cấu hình
        }

        // Lấy danh sách các thông số kỹ thuật của cấu hình
        $specifications = $configuration->specifications;

        // Trả về view với thông tin cấu hình và thông số kỹ thuật
        return view('product.showDetail', compact('configuration', 'specifications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.editProduct',  compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {
            // Store the new image and update the product's 'img' attribute
            $imagePath = $request->file('img')->store('img-sanpham', 'public');
            $data['img'] = $imagePath;
        } else {
            // If no new image is provided, remove 'img' from the $data array to avoid overwriting
            unset($data['img']);
        }

        $product->update($data);

        return redirect()->route('product.product')->with('success', 'Cập nhập sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('product.product')->with('success', 'Xóa sản phẩm thành công');
    }
}
