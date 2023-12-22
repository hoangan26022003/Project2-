<!doctype html>
<html class="no-js" lang="zxx">

<!-- single-product-affiliate31:50-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version Four || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{asset('user/css/material-design-iconic-font.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{asset('user/css/fontawesome-stars.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('user/css/meanmenu.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{asset('user/css/slick.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{asset('user/css/jquery-ui.min.css')}}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('user/css/venobox.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('user/css/helper.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('user/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">
    <!-- Modernizr js -->
    <script src="{{asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<style>
    .hb-menu nav > ul > li > a::after{
        display: none;
    }
    /*.product-variants {*/
    /*    !* Thêm các thuộc tính CSS tùy chọn tại đây *!*/
    /*    width: 200px;*/
    /*    height: 200px;*/
    /*    background-color: #f0f0f0;*/
    /*    border: 1px solid #ccc;*/
    /*    padding: 10px;*/
    /*}*/
    .product-variants-content {
        background-color: #fff; /* Màu nền */
        padding: 10px; /* Khoảng cách giữa nội dung và biên ngoài */
        border: 1px solid #ccc; /* Viền xung quanh */
        font-size: 16px; /* Kích thước chữ */
        color: #333; /* Màu chữ */
        text-align: center; /* Căn giữa nội dung */
        width: 150px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* Đổ bóng */
    }
    /* CSS cho label trong .product-variants-content */
    .product-variants-content label {
        display: block; /* Hiển thị mỗi label trên một dòng */
        font-size: 15px; /* Kích thước chữ */
        color: #333; /* Màu chữ */
        margin-bottom: 8px; /* Khoảng cách giữa các label */
        font-weight: bold;
    }
    /* CSS cho .product-variants-content khi active */
    .product-variants-content.active {
        background-color: #f0f0f0; /* Màu nền khi active */
        border: 1px solid #ccc; /* Viền khi active */
        position: relative; /* Để làm cho phần .product-variants-content có thể chứa biểu tượng */
    }

    .product-variants-content.active::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 32px; /* Điều chỉnh kích thước của phần nền của biểu tượng */
        height: 32px; /* Điều chỉnh kích thước của phần nền của biểu tượng */
        background-color: red; /* Màu nền của phần nền của biểu tượng khi active */
        clip-path: polygon(100% 0, 0% 0, 100% 100%); /* Tạo hình tam giác */
    }

    /* CSS cho biểu tượng */
    .icon-active {
        position: absolute;
        top: 0;
        right: 0;
        color: white; /* Điều chỉnh màu chữ của biểu tượng */
        font-size: 14px; /* Điều chỉnh kích thước chữ của biểu tượng */
        margin-bottom: 42px;
        margin-top: 0px;
        margin-left: 0px;
        width: 5px;
        height: 25px;
        margin-right: 10px;

    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: none; /* Eliminar bordes */
        padding: 8px;
        text-align: left;
        font-family: 'Poppins', sans-serif;
    }
    th {
        font-size: 19px;
    }
    td{
        font-size: 15px;
    }
    th {
        background-color: whithe;
        font-weight: bold;
    }
    tr:nth-child(odd) td {
        background-color: #fff; /* Fondo gris */
    }
    tr:nth-child(even) td {
        background-color: #ebeced; /* Fondo blanco */
    }

    .cart-quantity .add-to-cart:hover {
        background: #5cfa50;
        color: #ffffff;
    }

</style>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper">
    <!-- Begin Header Area -->
    <header class="li-header-4">
        <!-- Begin Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Top Left Area -->
                    <div class="col-lg-3 col-md-4">
                        <div class="header-top-left">
                            <ul class="phone-wrap">
                                <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Left Area End Here -->
                    <!-- Begin Header Top Right Area -->
                    <div class="col-lg-9 col-md-8">
                        <div class="header-top-right">
                            <ul class="ht-menu">
                                <!-- Begin Setting Area -->
                                <li>
                                    <div class="ht-setting-trigger"><span>Setting</span></div>
                                    <div class="setting ht-setting">
                                        <ul class="ht-setting-list">
                                            @if(Auth::check() || Auth::guard('customer')->check())
                                                <!-- Hiển thị liên kết "My Account" khi đã đăng nhập -->
                                                <li><a href="{{ asset('user/my-account') }}">My Account</a></li>
                                                <li><a href="{{ route('user.logout') }}">Log Out</a></li>
                                            @else
                                                <!-- Hiển thị liên kết "Sign In" nếu chưa đăng nhập -->
                                                <li><a href="{{ route('user.loginRegister') }}">Sign In</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                                <!-- Setting Area End Here -->
                                <!-- Begin Currency Area -->
                                <!-- Currency Area End Here -->
                                <!-- Begin Language Area -->
                                <li>
                                    <span class="language-selector-wrapper">Language :</span>
                                    <div class="ht-language-trigger"><span>English</span></div>
                                    <div class="language ht-language">
                                        <ul class="ht-setting-list">
                                            <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                            <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Language Area End Here -->
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Top Area End Here -->
        <!-- Begin Header Middle Area -->
        <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Logo Area -->
                    <div class="col-lg-3">
                        <div class="logo pb-sm-30 pb-xs-30">
                            <a href="index.html">
                                <img src="{{ asset('user/images/menu/logo/2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                        <!-- Begin Header Middle Searchbox Area -->
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- Header Middle Searchbox Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="header-middle-right">
                            <ul class="hm-menu">
                                <!-- Begin Header Middle Wishlist Area -->
                                <li class="hm-wishlist">
                                    <a href="wishlist.html">
                                        <span class="cart-item-count wishlist-item-count">0</span>
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </li>
                                <!-- Header Middle Wishlist Area End Here -->
                                <!-- Begin Header Mini Cart Area -->
                                <li class="hm-minicart">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text">Cart</span>
                                    </div>
                                    <span></span>
                                    <div class="minicart">
                                        <div class="minicart-button">
                                            <a href="{{asset('user/cart')}}" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                <span>View Full Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Header Mini Cart Area End Here -->
                            </ul>
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Middle Area End Here -->
        <!-- Begin Header Bottom Area -->
        <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Header Bottom Menu Area -->
                        <div class="hb-menu">
                            <nav>
                                <ul>
                                    <li class="dropdown-holder"><a href="{{asset('user/index')}}">Home</a></li>
                                    @foreach($categories as $category)
                                        <li class="megamenu-holder"><a href="{{route('user.laptop', ['category' => $category->name])}}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                    <li class="dropdown-holder" style="display: inline-block; position: relative; padding-right: 40px; transition: all 0.3s ease-in-out;"><a href="{{asset('user/blog')}}">Blog</a>
                                    </li>
                                    <li style="padding-right: 25px;"><a href="{{asset('user/about')}}">About Us</a></li>
                                    <li style=""><a href="{{asset('user/contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Bottom Menu Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Area End Here -->
        <!-- Begin Mobile Menu Area -->
        <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End Here -->
    </header>
    <!-- Header Area End Here -->
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">{{ $products->name }} {{ $configuration->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper">
        <div class="container">
{{--            @foreach($productDetails as $productDetail)--}}
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            <div class="lg-image">
                                <img src="{{ asset('img-sanpham/' . $products->img) }}" alt="product image" style="padding-top: 60px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content sp-affiliate-content pt-60">
                        <div class="product-info">
                            <h2>{{ $products->name }} {{ $configuration->name }}</h2>
                            <span class="product-details-ref">Brand: {{ $products->brand->name }}</span>
                            <div class="rating-box pt-20">
                                <ul class="rating rating-with-review-item">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="review-item"><a href="#">Read Review</a></li>
                                    <li class="review-item"><a href="#">Write Review</a></li>
                                </ul>
                            </div>
                            <div class="price-box pt-20">
                                <span class="new-price new-price-2">{{ number_format($configuration->price, 0, ',', '.') }} VND</span>
                            </div>
                            <div class="product-desc">
                                <p>
                                    {!! $products->description !!}
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="display:flex">
                                    @foreach($configurations as $configuration)
                                        @if($configuration->name !== null)
                                            <div href="" class="form-group  col-md-3 configuration-link" data-configuration="{{ json_encode($configuration) }}" style="padding-left: 0px">
                                                <div class="product-variants-content {{ $configuration->active ? 'active' : '' }}">
                                                    <label style="margin-bottom: 0px; color: black">{{ $configuration->name }}</label>
                                                    <label style="margin-bottom: 0px; color: red">{{ number_format($configuration->price, 0, ',', '.') }} VND</label>
                                                    <i class="icon-active" style="{{ $configuration->active ? 'display: block;' : 'display: none;' }}">&#10004;</i>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="single-add-to-cart">
                                <div class="cart-quantity">
                                    <a href="{{ route('cart.add', ['product_id' => $products->id, 'configuration_id' => $configurationId]) }}" class="add-to-cart" type="submit">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
    <!-- Begin Product Area -->
    <div class="product-area pt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a></li>
                            <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                            <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description" class="tab-pane active show" role="tabpanel">
                    <div class="product-description">
                        {!! $products->description !!}
                    </div>
                </div>
                <div id="product-details" class="tab-pane" role="tabpanel">
                    <br>
                    <table>
                        <tr style="width: 50%">
                            <th>Tên thông số kĩ thuật</th>
                            <th>Giá trị thông số</th>
                        </tr>
                        @foreach($specifications as $specification)
                        <tr style="width: 50%">
                            <td>{{ $specification->name }}</td>
                            <td>{{ $specification->value }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div id="reviews" class="tab-pane" role="tabpanel">
                    <div class="product-reviews">
                        <div class="product-details-comment-block">
                            <div class="comment-review">
                                <span>Grade</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <div class="comment-author-infos pt-25">
                                <span>HTML 5</span>
                                <em>01-12-18</em>
                            </div>
                            <div class="comment-details">
                                <h4 class="title-block">Demo</h4>
                                <p>Plaza</p>
                            </div>
                            <div class="review-btn">
                                <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Write Your Review!</a>
                            </div>
                            <!-- Begin Quick View | Modal Area -->
                            <div class="modal fade modal-wrapper" id="mymodal" >
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h3 class="review-page-title">Write Your Review</h3>
                                            <div class="modal-inner-area row">
                                                <div class="col-lg-6">
                                                    <div class="li-review-product">
                                                        <img src="images/product/large-size/3.jpg" alt="Li's Product">
                                                        <div class="li-review-product-desc">
                                                            <p class="li-product-name">Today is a good day Framed poster</p>
                                                            <p>
                                                                <span>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Design </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="li-review-content">
                                                        <!-- Begin Feedback Area -->
                                                        <div class="feedback-area">
                                                            <div class="feedback">
                                                                <h3 class="feedback-title">Our Feedback</h3>
                                                                <form action="#">
                                                                    <p class="your-opinion">
                                                                        <label>Your Rating</label>
                                                                        <span>
                                                                                    <select class="star-rating">
                                                                                      <option value="1">1</option>
                                                                                      <option value="2">2</option>
                                                                                      <option value="3">3</option>
                                                                                      <option value="4">4</option>
                                                                                      <option value="5">5</option>
                                                                                    </select>
                                                                                </span>
                                                                    </p>
                                                                    <p class="feedback-form">
                                                                        <label for="feedback">Your Review</label>
                                                                        <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                    </p>
                                                                    <div class="feedback-input">
                                                                        <p class="feedback-form-author">
                                                                            <label for="author">Name<span class="required">*</span>
                                                                            </label>
                                                                            <input id="author" name="author" value="" size="30" aria-required="true" type="text">
                                                                        </p>
                                                                        <p class="feedback-form-author feedback-form-email">
                                                                            <label for="email">Email<span class="required">*</span>
                                                                            </label>
                                                                            <input id="email" name="email" value="" size="30" aria-required="true" type="text">
                                                                            <span class="required"><sub>*</sub> Required fields</span>
                                                                        </p>
                                                                        <div class="feedback-btn">
                                                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">Close</a>
                                                                            <a href="#">Submit</a>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Feedback Area End Here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick View | Modal Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-30 pb-50">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>8 other products</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($randomProducts as $randomProduct)
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="{{ route('user.productDetail', ['productId' => $randomProduct->id, 'configurationId' => $randomProduct->randomConfiguration->id]) }}">
                                            <img src="{{ asset('img-sanpham/' . $randomProduct->img) }}" alt="Li's Product Image">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="#">{{ $randomProduct->brand->name }}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="{{ route('user.productDetail', ['productId' => $randomProduct->id, 'configurationId' => $randomProduct->randomConfiguration->id]) }}">{{ $randomProduct->name }} {{ $randomProduct->randomConfiguration->name }}</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">{{ number_format($randomProduct->randomConfiguration->price, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active" style="width: 100%;"><a href="#">Add to cart</a></li>
{{--                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>--}}
{{--                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Li's Laptop Product Area End Here -->
    <!-- Begin Footer Area -->
    <div class="footer">
        <!-- Begin Footer Static Top Area -->
        <div class="footer-static-top">
            <div class="container">
                <!-- Begin Footer Shipping Area -->
                <div class="footer-shipping pt-60 pb-25">
                    <div class="row">
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>Free Delivery</h2>
                                    <p>And free returns. See checkout for delivery dates.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/2.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>Safe Payment</h2>
                                    <p>Pay with the world's most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/3.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>Shop with Confidence</h2>
                                    <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/4.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>24/7 Help Center</h2>
                                    <p>Have a question? Call a Specialist or chat online.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                    </div>
                </div>
                <!-- Footer Shipping Area End Here -->
            </div>
        </div>
        <!-- Footer Static Top Area End Here -->
        <!-- Begin Footer Static Middle Area -->
        <div class="footer-static-middle">
            <div class="container">
                <div class="footer-logo-wrap pt-50 pb-35">
                    <div class="row">
                        <!-- Begin Footer Logo Area -->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-logo">
                                <img src="{{ asset('user/images/menu/logo/1.jpg') }}" alt="Footer Logo">
                                <p class="info">
                                    We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                </p>
                            </div>
                            <ul class="des">
                                <li>
                                    <span>Address: </span>
                                    6688Princess Road, London, Greater London BAS 23JK, UK
                                </li>
                                <li>
                                    <span>Phone: </span>
                                    <a href="#">(+123) 123 321 345</a>
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Logo Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Product</h3>
                                <ul>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Our company</h3>
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-4">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Follow Us</h3>
                                <ul class="social-link">
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="rss">
                                        <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                            <i class="fa fa-rss"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Begin Footer Newsletter Area -->
                            <div class="footer-newsletter">
                                <h4>Sign up to newsletter</h4>
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form form-group" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                            <button  class="btn" id="mc-submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Area End Here -->
                        </div>
                        <!-- Footer Block Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->
        <div class="footer-static-bottom pt-55 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Footer Links Area -->
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">Online Shopping</a></li>
                                <li><a href="#">Promotions</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Most Populars</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Special Products</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Our Stores</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Warantee</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Policy Shipping</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links Area End Here -->
                        <!-- Begin Footer Payment Area -->
                        <div class="copyright text-center">
                            <a href="#">
                                <img src="{{ asset('user/images/payment/1.png') }}" alt="">
                            </a>
                        </div>
                        <!-- Footer Payment Area End Here -->
                        <!-- Begin Copyright Area -->
                        <div class="copyright text-center pt-25">
                            <span><a href="https://www.templatespoint.net" target="_blank">Templates Point</a></span>
                        </div>
                        <!-- Copyright Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Bottom Area End Here -->
    </div>
    <!-- Footer Area End Here -->
    <!-- Begin Quick View | Modal Area -->
    <div class="modal fade modal-wrapper" id="exampleModalCenter" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/1.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/2.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/3.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/4.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/5.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/6.jpg') }}" alt="product image">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/1.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/2.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/3.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/4.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/5.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/6.jpg') }}" alt="product image thumb"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2>Today is a good day Framed poster</h2>
                                    <span class="product-details-ref">Reference: demo_15</span>
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="review-item"><a href="#">Read Review</a></li>
                                            <li class="review-item"><a href="#">Write Review</a></li>
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">$57.98</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<!-- Body Wrapper End Here -->
<!-- jQuery-V1.12.4 -->
<script src="{{asset('user/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('user/js/vendor/popper.min.js')}}"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<!-- Ajax Mail js -->
<script src="{{asset('user/js/ajax-mail.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('user/js/jquery.meanmenu.min.js')}}"></script>
<!-- Wow.min js -->
<script src="{{asset('user/js/wow.min.js')}}"></script>
<!-- Slick Carousel js -->
<script src="{{asset('user/js/slick.min.js')}}"></script>
<!-- Owl Carousel-2 js -->
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{asset('user/js/isotope.pkgd.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{asset('user/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Mixitup js -->
<script src="{{asset('user/js/jquery.mixitup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('user/js/jquery.countdown.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('user/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('user/js/waypoints.min.js')}}"></script>
<!-- Barrating -->
<script src="{{asset('user/js/jquery.barrating.min.js')}}"></script>
<!-- Jquery-ui -->
<script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
<!-- Venobox -->
<script src="{{asset('user/js/venobox.min.js')}}"></script>
<!-- Nice Select js -->
<script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
<!-- ScrollUp js -->
<script src="{{asset('user/js/scrollUp.min.js')}}"></script>
<!-- Main/Activator js -->
<script src="{{asset('user/js/main.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy tất cả các liên kết cấu hình
        const configurationLinks = document.querySelectorAll(".configuration-link");

        // Xử lý sự kiện khi một liên kết cấu hình được bấm
        configurationLinks.forEach((link) => {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Ngăn chặn trình duyệt chuyển hướng

                // Lấy thông tin cấu hình từ data-attribute
                const configurationData = JSON.parse(link.getAttribute("data-configuration"));

                // Hiển thị thông tin cấu hình (ví dụ: log ra console)
                console.log("Selected Configuration:", configurationData);

                // Đoạn này, bạn có thể sử dụng thông tin cấu hình để hiển thị sản phẩm tương ứng hoặc thực hiện các thao tác khác.
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy tất cả các liên kết cấu hình
        const configurationLinks = document.querySelectorAll(".configuration-link");

        // Tìm cấu hình ban đầu được đánh dấu là active
        const initialActiveConfiguration = Array.from(configurationLinks).find(link => {
            const configurationData = JSON.parse(link.getAttribute("data-configuration"));
            return configurationData.active;
        });

        // Nếu tìm thấy cấu hình ban đầu, đảm bảo rằng nó là active
        if (initialActiveConfiguration) {
            const initialConfigurationData = JSON.parse(initialActiveConfiguration.getAttribute("data-configuration"));
            initialActiveConfiguration.querySelector(".product-variants-content").classList.add("active");
            initialActiveConfiguration.querySelector(".icon-active").style.display = "block";
            initialConfigurationData.active = true;
        }

        // Xử lý sự kiện khi một liên kết cấu hình được bấm
        configurationLinks.forEach((link) => {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Ngăn chặn trình duyệt chuyển hướng

                // Lấy thông tin cấu hình từ data-attribute
                const configurationData = JSON.parse(link.getAttribute("data-configuration"));

                // Loại bỏ lớp CSS "active" và biểu tượng active từ tất cả các cấu hình
                configurationLinks.forEach((otherLink) => {
                    const otherConfiguration = JSON.parse(otherLink.getAttribute("data-configuration"));
                    otherLink.querySelector(".product-variants-content").classList.remove("active");
                    otherLink.querySelector(".icon-active").style.display = "none";
                    otherConfiguration.active = false; // Đảm bảo cập nhật thuộc tính active
                });

                // Thêm lớp CSS "active" và biểu tượng active cho cấu hình được chọn
                link.querySelector(".product-variants-content").classList.add("active");
                link.querySelector(".icon-active").style.display = "block";
                configurationData.active = true; // Đảm bảo cập nhật thuộc tính active
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy tất cả các liên kết cấu hình
        const configurationLinks = document.querySelectorAll(".configuration-link");

        // Xử lý sự kiện khi một liên kết cấu hình được bấm
        configurationLinks.forEach((link) => {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Ngăn chặn trình duyệt chuyển hướng

                // Lấy thông tin cấu hình từ data-attribute
                const configurationData = JSON.parse(link.getAttribute("data-configuration"));
                const configurationId = configurationData.id; // Đảm bảo rằng bạn có ID của cấu hình
                const productId = configurationData.product_id; // Đảm bảo rằng bạn có ID của sản phẩm

                // Tạo URL dựa trên thông tin cấu hình và chuyển hướng đến trang sản phẩm
                const productDetailUrl = `/realProject2/public/user/productDetail/${productId}/${configurationId}`;
                window.location.href = productDetailUrl;
            });
        });
    });
</script>


</body>

<!-- single-product-affiliate31:50-->
</html>
