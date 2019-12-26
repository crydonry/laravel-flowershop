<!DOCTYPE html>
<html lang="en">

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



</head>

<body class="animsition">
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


    @yield('content')

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
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call
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

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

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
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
    </script>

    <!--===============================================================================================-->
    <script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
    </script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
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
    <script>
    jQuery(document).ready(function($) {

        // Define a blank array for the effect positions. This will be populated based on width of the title.
        var bArray = [];
        // Define a size array, this will be used to vary bubble sizes
        var sArray = [4, 6, 8, 10];

        // Push the header width values to bArray
        for (var i = 0; i < $('.bubbles').width(); i++) {
            bArray.push(i);
        }

        // Function to select random array element
        // Used within the setInterval a few times
        function randomValue(arr) {
            return arr[Math.floor(Math.random() * arr.length)];
        }

        // setInterval function used to create new bubble every 350 milliseconds
        setInterval(function() {

            // Get a random size, defined as variable so it can be used for both width and height
            var size = randomValue(sArray);
            // New bubble appeneded to div with it's size and left position being set inline
            // Left value is set through getting a random value from bArray
            $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) +
                'px; width: ' + size + 'px; height:' + size + 'px;"></div>');

            // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
            // Callback function used to remove finsihed animations from the page
            $('.individual-bubble').animate({
                'bottom': '100%',
                'opacity': '-=0.7'
            }, 3000, function() {
                $(this).remove()
            });


        }, 350);

    });
    </script>





</body>

</html>