<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $products = DB::table('products')
            ->leftJoin('configurations', 'products.id', '=', 'configurations.product_id')
            ->leftJoin('product_details', 'configurations.id', '=', 'product_details.config_id')
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
                'brands.name AS BrandName',
                'product_details.id AS ProductDetailId' // Add the new column from product_details
            )
            ->paginate(12);


        return view('user.index', compact('categories', 'products'));

    }

    public function laptop($category)
    {
        $selectedCategory = Category::where('name', $category)->first();

        if (!$selectedCategory) {
            // Handle the case when the category doesn't exist
            abort(404);
        }

        // Get the brands related to the selected category
        $brands = Brand::whereHas('products', function ($query) use ($selectedCategory) {
            $query->where('cat_id', $selectedCategory->id);
        })->get();

        // Lấy sản phẩm thuộc danh mục đã chọn
        $laptopProducts = Product::query()
            ->leftJoin('configurations', 'products.id', '=', 'configurations.product_id')
            ->leftJoin('product_details', 'configurations.id', '=', 'product_details.config_id')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('categories.id', $selectedCategory->id)
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
                'brands.name AS BrandName',
                'product_details.id AS ProductDetailId'
            )
            ->paginate(8);

        $categories = Category::all();

        return view('user.laptop', compact('selectedCategory', 'laptopProducts', 'brands', 'categories'));
    }

    public function getProductsByCategoryAndBrand($category, $brand)
    {
        // Tìm danh mục theo tên
        $selectedCategory = Category::where('name', $category)->first();

        if (!$selectedCategory) {
            abort(404); // Xử lý trường hợp danh mục không tồn tại
        }

        // Tìm thương hiệu theo tên
        $selectedBrand = Brand::where('name', $brand)->first();

        if (!$selectedBrand) {
            abort(404); // Xử lý trường hợp thương hiệu không tồn tại
        }

        // Lấy sản phẩm thuộc cả danh mục và thương hiệu đã chọn
        $brandProducts = DB::table('products')
            ->leftJoin('configurations', 'products.id', '=', 'configurations.product_id')
            ->leftJoin('product_details', 'configurations.id', '=', 'product_details.config_id')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('categories.id', $selectedCategory->id)
            ->where('brands.id', $selectedBrand->id)
            ->select(
                'products.id',
                'products.name AS NameProduct',
                'products.img',
                'products.description',
                'configurations.id AS ConfigurationId',
                'configurations.name AS ConfigurationName',
                'configurations.price',
                'configurations.amount',
                'categories.name AS CategoryName',
                'brands.name AS BrandName',
                'product_details.id AS ProductDetailId'
            )
            ->paginate(8);



        // Retrieve all brands
        $brands = Brand::all();

        // Retrieve all categories
        $categories = Category::all();

        return view('user.access', compact('selectedCategory', 'selectedBrand', 'brandProducts', 'brands', 'categories'));
    }

//    public function showProductDetail($productId, $configurationId)
//    {
//        $categories = Category::all();
//
//        $products = Product::find($productId);
//
//        if (!$products) {
//            return redirect()->route('user.index')->with('error', 'Sản phẩm không tồn tại.');
//        }
//
//        $configuration = $products->configurations()->find($configurationId);
//
//        if (!$configuration) {
//            return redirect()->route('user.index')->with('error', 'Cấu hình không tồn tại hoặc không thuộc về sản phẩm.');
//        }
//        $configurations = $products->configurations;
//
//        $specifications = $configuration->specifications; // Lấy danh sách các thông số của cấu hình
//
//        return view('user.productDetail', compact('products', 'configuration', 'categories', 'specifications','configurations'));
//    }

    public function showProductDetail($productId, $configurationId)
    {
        $categories = Category::all();

        $products = Product::find($productId);

        if (!$products) {
            return redirect()->route('user.index')->with('error', 'Sản phẩm không tồn tại.');
        }

        $configuration = $products->configurations()->find($configurationId);

        if (!$configuration) {
            return redirect()->route('user.index')->with('error', 'Cấu hình không tồn tại hoặc không thuộc về sản phẩm.');
        }

        $configurations = $products->configurations;

        $specifications = $configuration->specifications; // Lấy danh sách các thông số của cấu hình

        // Retrieve 8 random products
        $randomProducts = Product::inRandomOrder()->limit(8)->get();

        // Lặp qua danh sách sản phẩm ngẫu nhiên và lấy thông tin cấu hình của mỗi sản phẩm
        foreach ($randomProducts as $product) {
            $product->randomConfiguration = $product->configurations()->inRandomOrder()->first();
        }

        return view('user.productDetail', compact('products', 'configuration', 'categories', 'specifications', 'configurations', 'randomProducts', 'configurationId'));
    }

    public function showProduct($product_id, $configuration_id)
    {
        $product = Product::find($product_id);
        $configuration = Configuration::find($configuration_id);

        return view('user.index', compact('product', 'configuration'));
    }


}
