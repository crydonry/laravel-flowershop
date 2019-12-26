<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flower_Shop</title>


    <link rel="icon" type="image/png" href="http://localhost/flower/public/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="http://localhost/flower/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="http://localhost/flower/public/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="http://localhost/flower/public/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/hamburgers.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/animsition.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/select2.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/util.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/main.css">
    <!--===============================================================================================-->


    <link rel="stylesheet" type="text/css" href="http://localhost/flower/public/css/jquery-ui.min.css">


    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="http://localhost/flower/public/page/css/plugins.css">
    <link rel="stylesheet" href="http://localhost/flower/public/page/style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="http://localhost/flower/public/page/css/custom.css">

    <!-- Modernizer js -->
    <script src="http://localhost/flower/public/page/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body class="animsition">
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <header class="header-v4">
            <!-- Header desktop -->
            <div class="container-menu-desktop">
                <!-- Topbar -->
                <div class="top-bar">
                    <div class="content-topbar flex-sb-m h-full container">
                        <div class="left-top-bar">
                            Free shipping for standard order over $100
                        </div>

                        <div class="right-top-bar flex-w h-full">
                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                Help & FAQs
                            </a>
                            @if (Auth::guest())
                            <a href="{{ url('/login') }}" class="flex-c-m trans-04 p-lr-25">
                                Login
                            </a>

                            <a href="{{ url('/register') }}" class="flex-c-m trans-04 p-lr-25">
                                register
                            </a>
                            @else
                            <a href="{{ url('/dashboard') }}" class="flex-c-m trans-04 p-lr-25">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <a href="{{ url('/logout') }}" class="flex-c-m trans-04 p-lr-25"><i
                                    class="fa fa-btn fa-sign-out"></i> Logout</a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="wrap-menu-desktop">
                    <nav class="limiter-menu-desktop container">

                        <!-- Logo desktop -->
                        <a href="{{ url('/') }}" class="logo">
                            <h3 class="ltext-103 cl5">
                                <span style="color: #ff9999;">Flower</span> <span style="color: #FFF;">Shop</span>
                            </h3>
                        </a>

                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="{{ url('/dashboards') }}">Home</a>
                                </li>

                                <li>
                                    <a href="{{ url('/product') }}">Shop</a>
                                </li>

                                <li class="label1" data-label1="hot">
                                    <a href="shoping-cart.html">Features</a>
                                </li>

                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m">
                            <div class="bor17 of-hidden pos-relative">
                                <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search"
                                    placeholder="Search">

                                <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </div>
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                                data-notify="2">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="{{ url('/') }}" class="logo">
                        <h3 class="ltext-103 cl5">
                            <span style="color: #ff9999;">Flower</span> <span style="color: #ff9999;">Shop</span>
                        </h3>
                    </a>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                        data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>


            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li>
                        <div class="left-top-bar">
                            Free shipping for standard order over $100
                        </div>
                    </li>

                    <li>

                        <div class="right-top-bar flex-w h-full">
                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                Help & FAQs
                            </a>
                            @if (Auth::guest())
                            <a href="{{ url('/login') }}" class="flex-c-m trans-04 p-lr-25">
                                Login
                            </a>

                            <a href="{{ url('/register') }}" class="flex-c-m trans-04 p-lr-25">
                                register
                            </a>
                            @else
                            <a href="{{ url('/dashboards') }}" class="flex-c-m trans-04 p-lr-25">
                                {{ Auth::user()->name }}
                            </a>
                            <a href="{{ url('/logout') }}" class="flex-c-m trans-04 p-lr-25"><i
                                    class="fa fa-btn fa-sign-out"></i>Logout</a>
                            @endif
                        </div>
                    </li>
                </ul>

                <ul class="main-menu-m">
                    <li>
                        <a href="{{ url('/dashboards') }}">Home</a>
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="{{ url('/product') }}">Shop</a>
                    </li>

                    <li>
                        <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                    </li>

                    <li>
                        <a href="blog.html">Blog</a>
                    </li>

                    <li>
                        <a href="about.html">About</a>
                    </li>

                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </header>
        <!-- Cart -->
        <div class="wrap-header-cart js-panel-cart">
            <div class="s-full js-hide-cart"></div>

            <div class="header-cart flex-col-l p-l-65 p-r-25">
                <div class="header-cart-title flex-w flex-sb-m p-b-8">
                    <span class="mtext-103 cl2">
                        Your Cart
                    </span>
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>

                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full">
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="http://localhost/flower/public/images/item-cart-01.jpg" alt="IMG" height="80"
                                    width="60">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    ดอกไม้
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $16.64
                                </span>
                            </div>
                        </li>

                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="http://localhost/flower/public/images/item-cart-02.jpg" alt="IMG" height="80"
                                    width="60">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    ดอกไม้
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $52.66
                                </span>
                            </div>
                        </li>

                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="http://localhost/flower/public/images/item-cart-03.jpg" alt="IMG" height="80"
                                    width="60">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    ดอกไม้
                                </a>

                                <span class="header-cart-item-info">
                                    1 x $25.85
                                </span>
                            </div>
                        </li>
                    </ul>

                    <div class="w-full">
                        <div class="header-cart-total w-full p-tb-40">
                            Total: $95.15
                        </div>

                        <div class="header-cart-buttons flex-w w-full">
                            <a href="shoping-cart.html"
                                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                View Cart
                            </a>

                            <a href="shoping-cart.html"
                                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                        <div class="shop__sidebar">
                            <aside class="wedget__categories poroduct--cat">
                                <h3 class="wedget__title">Product Categories</h3>
                                <ul>
                                    <li><a href="#">Ready to ship <span>(3)</span></a></li>
                                    <li><a href="#">Single flower <span>(4)</span></a></li>
                                    <li><a href="#">Flower bouquet<span>(4)</span></a></li>
                                    <li><a href="#">Ordination ceremony<span>(5)</span></a></li>
                                    <li><a href="#">Auspicious event<span>(6)</span></a></li>
                                    <li><a href="#">Cremation<span>(8)</span></a></li>
                                    <li><a href="#">Festival<span>(10)</span></a></li>
                                    <li><a href="#">Party<span>(4)</span></a></li>
                                    <li><a href="#">Purple<span>(3)</span></a></li>
                                    <li><a href="#">Blue<span>(2)</span></a></li>
                                    <li><a href="#">Green<span>(7)</span></a></li>
                                    <li><a href="#">Yellow<span>(15)</span></a></li>
                                    <li><a href="#">Orange<span>(8)</span></a></li>
                                    <li><a href="#">Red<span>(1)</span></a></li>
                                    <li><a href="#">White<span>(6)</span></a></li>

                                </ul>
                            </aside>
                            <aside class="wedget__categories pro--range">
                                <h3 class="wedget__title">Filter by price</h3>
                                <div class="content-shopby">
                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount" readonly="">
                                                    </div>
                                                    <div class="price--filter">
                                                        <a href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                            <aside class="wedget__categories poroduct--tag">
                                <h3 class="wedget__title">Product Tags</h3>
                                <ul>
                                    <li><a href="#">Ready to ship</a></li>
                                    <li><a href="#">Single flower</a></li>
                                    <li><a href="#">Flower bouquet</a></li>
                                    <li><a href="#">Ordination ceremony</a></li>
                                    <li><a href="#">Auspicious event</a></li>
                                    <li><a href="#">Cremation</a></li>
                                    <li><a href="#">Festival</a></li>
                                    <li><a href="#">Party</a></li>
                                    <li><a href="#">Birthday</a></li>
                                    <li><a href="#">Purple</a></li>
                                    <li><a href="#">Blue</a></li>
                                    <li><a href="#">Green</a></li>
                                    <li><a href="#">Yellow</a></li>
                                    <li><a href="#">Orange</a></li>
                                    <li><a href="#">Red</a></li>
                                    <li><a href="#">White</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div
                                    class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                    <div class="shop__list nav justify-content-center" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid"
                                            role="tab"><i class="fa fa-th"></i></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i
                                                class="fa fa-list"></i></a>
                                    </div>
                                    <p>Showing 1–12 of 40 results</p>
                                    <div class="orderby__wrapper">
                                        <span>Sort By</span>
                                        <select class="shot__byselect">
                                            <option>Default sorting</option>
                                            <option>HeadPhone</option>
                                            <option>Furniture</option>
                                            <option>Jewellery</option>
                                            <option>Handmade</option>
                                            <option>Kids</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex-w flex-sb-m p-b-52">
                                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1"
                                            data-filter="*">
                                            All Products
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                                            data-filter=".Ordination ceremony">
                                            Ordination ceremony
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                                            data-filter=".Auspicious event">
                                            Auspicious event
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                                            data-filter=".Cremation">
                                            Cremation
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                                            data-filter=".Festival">
                                            Festival
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                                            data-filter=".Party">
                                            Party
                                        </button>
                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                                            data-filter=".Birthday">
                                            Birthday
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab__container">
                            <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                <div class="row isotope-grid">
                                    <!-- Start Single Product -->
                                    @foreach($flower as $key => $data)
                                    <div
                                        class="product product__style--3col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $data->occasion }}">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="http://localhost/flower/public/images/product/{{ substr($data->images, 0,13) }}"
                                                    alt="IMG-PRODUCT">

                                                <a href="{{ URL('detail/'.$data->id) }}"
                                                    class="block2-btn flex-c-m stext-101 cl2 size-102 bg0 bor2 hov-btn3 p-lr-15 trans-04">
                                                    View detail
                                                </a>
                                            </div>

                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="{{ URL('detail/'.$data->id) }}"
                                                        class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        รหัสสินค้า {{ $data->product_id }}
                                                    </a>
                                                    <a href="{{ URL('detail/'.$data->id) }}"
                                                        class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        {{ $data->name }}
                                                    </a>

                                                    <span class="stext-105 cl3">
                                                        ${{ $data->price }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- End Single Product -->
                                </div>
                                <ul class="wn__pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
                                <div class="list__view__wrapper isotope-grid">
                                    @foreach($flower as $key => $data)
                                    <!-- Start Single Product -->
                                    <div class="list__view mt--40 isotope-item {{ $data->occasion }}">
                                        <div class="thumb">
                                            <a class="first__img" href="{{ URL('detail/'.$data->id) }}"><img
                                                    src="http://localhost/flower/public/images/product/{{ substr($data->images, 0,13) }}"
                                                    alt="product images"></a>
                                        </div>
                                        <div class="content">
                                            <h2><a href="{{ URL('detail/'.$data->id) }}">{{ $data->name }}
                                                    (รหัสสินค้า
                                                    {{ $data->product_id }})</a></h2>
                                            <ul class="prize__box">
                                                <li>${{ $data->price }}</li>

                                            </ul>
                                            <p>${{ $data->detail }}</p>
                                            <button
                                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Page -->
        <!-- Footer -->
        <footer class="bg3 p-t-75 p-b-32">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Your Store
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Flower Store
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Recently Viewed
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Store Curators
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Recently Updated
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Help
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Flower
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Purchases
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    My Account
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            GET IN TOUCH
                        </h4>

                        <p class="stext-107 cl7 size-201">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or
                            call
                            us
                            on (+1) 96 716 6879
                        </p>

                        <div class="p-t-27">
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Subscription Information
                        </h4>

                        <form>
                            <div class="wrap-input1 w-full p-b-4">
                                <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                    placeholder="email@example.com">
                                <div class="focus-input1 trans-04"></div>
                            </div>

                            <div class="p-t-18">
                                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="p-t-40">
                    <div class="flex-c-m flex-w p-b-18">
                        <a href="#" class="m-all-1">
                            <img src="http://localhost/flower/public/images/icons/icon-pay-01.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="http://localhost/flower/public/images/icons/icon-pay-02.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="http://localhost/flower/public/images/icons/icon-pay-03.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="http://localhost/flower/public/images/icons/icon-pay-04.png" alt="ICON-PAY">
                        </a>

                        <a href="#" class="m-all-1">
                            <img src="http://localhost/flower/public/images/icons/icon-pay-05.png" alt="ICON-PAY">
                        </a>
                    </div>

                    <p class="stext-107 cl6 txt-center">

                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> FLOWER STORE by <a href="#" target="_blank">BENTLEY</a>

                    </p>
                </div>
            </div>
        </footer>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="http://localhost/flower/public/page/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/flower/public/page/js/popper.min.js"></script>
    <script src="http://localhost/flower/public/page/js/bootstrap.min.js"></script>
    <script src="http://localhost/flower/public/page/js/plugins.js"></script>
    <script src="http://localhost/flower/public/page/js/active.js"></script>
    <!-- JavaScripts -->
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/jquery-3.2.1.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/animsition.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/bootstrap/js/bootstrap.js"></script>
    <script src="http://localhost/flower/public/bootstrap/js/tooltip.js"></script>
    <script src="http://localhost/flower/public/bootstrap/js/popper.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/select2.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/moment.js"></script>
    <script src="http://localhost/flower/public/js/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/slick.js"></script>
    <script src="http://localhost/flower/public/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/parallax100.js"></script>
    <script src="http://localhost/flower/public/js/main.js"></script>

    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/jquery.magnific-popup.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/isotope.pkgd.js"></script>
    <!--===============================================================================================-->
    <script src="http://localhost/flower/public/js/sweetalert.js"></script>
    <script src="http://localhost/flower/public/js/perfect-scrollbar.js"></script>

    <script src="http://localhost/flower/public/js/carousel.js"></script>
    <script>
    $('.js-addwish-b2').on('click', function(e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });
    </script>




</body>

</html>