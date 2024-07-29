<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>@yield('title') || Restaurant</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="keywords"
        content="restaurant, restaurant website templates, restaurant template, food, restro, hotel, bootstrap 5, bootstrap, html, frontend, swigo, responsive template, shop, cart, menu, taste, blog, service, cook, customers, website, hungry, shop cart, fast food, table booking, website templates for restaurants, food website templates">
    <meta name="description"
        content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
    <meta property="og:title" content="Swigo - Empowering Your Restaurant Website Templates | DexignZone">
    <meta property="og:description"
        content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
    <meta property="og:image" content="social-home.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/tempus-dominus/css/tempus-dominus.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/rangeslider/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switcher/switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&amp;family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

</head>

<body id="bg">
    <div id="loading-area" class="loading-page-3">
        <img src="assets/images/loading.gif" alt="">
    </div>
    <div class="page-wraper">

        <!-- Header -->
        <header class="site-header mo-left header header-transparent transparent-white style-1">
            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">

                        <!-- Website Logo -->
                        <div class="logo-header mostion">
                            <a href="" class="anim-logo"><img src="assets/images/logo.png" alt="/"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <ul>
                                    <li>
                                        <a class="btn btn-white btn-square btn-shadow" data-bs-toggle="offcanvas"
                                            href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin">
                                            <i class="flaticon-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-white btn-square btn-shadow cart-btn">
                                            <i class="flaticon-shopping-bag-1"></i>
                                            <span class="badge">6</span>
                                        </button>
                                        <ul class="dropdown-menu cart-list">
                                            <li class="cart-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="product-detail.html">
                                                            <img alt="/" class="media-object"
                                                                src="assets/images/shop/pic2.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="dz-title"><a href="product-detail.html"
                                                                class="media-heading">Double Burger</a></h6>
                                                        <span class="dz-price">$28.00</span>
                                                        <span class="item-close">&times;</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="product-detail.html">
                                                            <img alt="/" class="media-object"
                                                                src="assets/images/shop/pic3.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="dz-title"><a href="product-detail.html"
                                                                class="media-heading">Cheese Burger</a></h6>
                                                        <span class="dz-price">$20.00</span>
                                                        <span class="item-close">&times;</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="product-detail.html">
                                                            <img alt="/" class="media-object"
                                                                src="assets/images/shop/pic4.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="dz-title"><a href="product-detail.html"
                                                                class="media-heading">Burger</a></h6>
                                                        <span class="dz-price">$15.00</span>
                                                        <span class="item-close">&times;</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item text-center d-flex justify-content-between">
                                                <h6 class="text-primary mb-0">Total:</h6>
                                                <h6 class="text-primary mb-0">$63</h6>
                                            </li>
                                            <li class="text-center d-flex">
                                                <a href="shop-cart.html"
                                                    class="btn btn-primary me-2 w-100 d-block btn-hover-1"><span>View
                                                        Cart</span></a>
                                                <a href="our-menu-1.html"
                                                    class="btn btn-outline-primary w-100 d-block btn-hover-1"><span>Menu</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- EXTRA NAV -->

                        <!-- Header Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="/" class="anim-logo"><img src="assets/images/logo.png"
                                        alt="/"></a>
                            </div>
                            <ul class="nav navbar-nav navbar">
                                <li class="sub-menu-down"><a href="javascript:void(0);">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                    </ul>
                                </li>
                                <li class="has-mega-menu">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul class="mega-menu">
                                        <li><a href="javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-detail.html">Team Detail</a></li>
                                                <li><a href="testimonial.html">Testimonial</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="service-detail.html">Service Detail</a></li>
                                                <li><a href="error-404.html">Error 404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="under-maintenance.html">Under Maintenance</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">Our Menus</a>
                                            <ul>
                                                <li><a href="our-menu-1.html">Menu Style 1</a></li>
                                                <li><a href="our-menu-2.html">Menu Style 2</a></li>
                                                <li><a href="our-menu-3.html">Menu Style 3</a></li>
                                                <li><a href="our-menu-4.html">Menu Style 4</a></li>
                                                <li><a href="our-menu-5.html">Menu Style 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="header-adv p-0"><img src="assets/images/adv-media.jpg"
                                                alt="/"></li>
                                    </ul>
                                </li>
                                <li class="sub-menu-down"><a href="javascript:void(0);">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-style-1.html">Shop Style 1</a></li>
                                        <li><a href="shop-style-2.html">Shop Style 2</a></li>
                                        <li><a href="shop-cart.html">Shop Cart</a></li>
                                        <li><a href="shop-wishlist.html">Shop Wishlist</a></li>
                                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-mega-menu">
                                    <a href="javascript:void(0);">Blogs</a>
                                    <ul class="mega-menu">
                                        <li> <a href="javascript:;">Blog Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                                <li><a href="blog-grid-3.html">Blog Grid 3</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Blog List</a>
                                            <ul>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                                </li>
                                                <li><a href="blog-both-sidebar.html">Blog Both Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Blog Single</a>
                                            <ul>
                                                <li><a href="blog-standard.html">Blog Detail</a></li>
                                                <li><a href="blog-open-gutenberg.html">Blog Open Gutenberg</a></li>
                                                <li><a href="blog-detail-left-sidebar.html">Blog Details Left
                                                        Sidebar</a></li>
                                                <li><a href="blog-detail-right-sidebar.html">Blog Details Right
                                                        Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">Blog Masonry</a>
                                            <ul>
                                                <li><a href="blog-grid-3-masonary.html">Blog Grid 3 Masonry</a></li>
                                                <li><a href="blog-grid-4-masonary.html">Blog Grid 4 Masonry</a></li>
                                                <li><a href="blog-wide-list-sidebar.html">Blog Wide List Sidebar</a>
                                                </li>
                                                <li><a href="blog-wide-grid-sidebar.html">Blog Wide Grid Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us">Contact Us</a></li>
                            </ul>
                            <div class="dz-social-icon">
                                <ul>
                                    <li><a target="_blank" class="fab fa-facebook-f"
                                            href="https://www.facebook.com/"></a></li>
                                    <li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a>
                                    </li>
                                    <li><a target="_blank" class="fab fa-linkedin-in"
                                            href="https://www.linkedin.com/"></a></li>
                                    <li><a target="_blank" class="fab fa-instagram"
                                            href="https://www.instagram.com/"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Header End -->
        </header>
        <!-- Header -->

        @yield('content')

        <!--Footer-->
        <footer class="site-footer  style-1 bg-dark" id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="dz-form-card bg-primary">
                                <div class="section-head">
                                    <h4 class="title m-0">Contact us</h4>
                                    <p class="m-t10">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                                <form class="dzForm dezPlaceAni" method="POST"
                                    action="https://swigo.dexignzone.com/xhtml/script/contact_smtp.php">
                                    <input type="hidden" class="form-control" name="dzToDo" value="Contact">
                                    <input type="hidden" class="form-control" name="reCaptchaEnable"
                                        value="0">
                                    <div class="dzFormMsg"></div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-group input-line">
                                                <input name="dzName" required type="text" class="form-control"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-group input-line">
                                                <input name="dzEmail" required type="text" class="form-control"
                                                    placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-group input-line">
                                                <input name="dzOther[Subject]" required type="text"
                                                    class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 ">
                                            <div class="input-group input-line">
                                                <textarea name="dzMessage" required class="form-control" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" value="submit"
                                                class="btn btn-md btn-white btn-hover-1"><span>Send
                                                    Message</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="widget widget_getintuch">
                                <h5 class="footer-title">Contact</h5>
                                <ul>
                                    <li>
                                        <i class="flaticon-placeholder"></i>
                                        <p>1247/Plot No. 39, 15th Phase, Colony, Kkatpally, Hyderabad</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-telephone"></i>
                                        <p>+91 987-654-3210<br>
                                            +91 123-456-7890</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-email-1"></i>
                                        <p><a href="https://swigo.dexignzone.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="127b7c747d52776a737f627e773c717d7f">[email&#160;protected]</a><br>
                                            <a href="https://swigo.dexignzone.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="335a5d555c73564b525e435f561d505c5e">[email&#160;protected]</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Our Links</h5>
                                <ul>
                                    <li><a href="index.html"><span>Home</span></a></li>
                                    <li><a href="about-us.html"><span>About Us</span></a></li>
                                    <li><a href="services.html"><span>Services</span></a></li>
                                    <li><a href="team.html"><span>Team</span></a></li>
                                    <li><a href="blog-standard.html"><span>Blog</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Help Center</h5>
                                <ul>
                                    <li><a href="faq.html"><span>FAQ</span></a></li>
                                    <li><a href="shop-style-1.html"><span>Shop</span></a></li>
                                    <li><a href="shop-style-2.html"><span>Category Filter</span></a></li>
                                    <li><a href="testimonial.html"><span>Testimonials</span></a></li>
                                    <li><a href="contact-us.html"><span>Contact Us</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Part -->
            <div class="container">
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 text-md-start">
                            <p>Copyright 2023 All rights reserved.</p>
                        </div>
                        <div class="col-xl-6 col-md-6 text-md-end">
                            <span class="copyright-text">Crafted With <span class="heart"></span> by <a
                                    href="https://dexignzone.com/" target="_blank">DexignZone</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bg1 dz-move" src="assets/images/background/pic5.png" alt="/">
            <img class="bg2 dz-move" src="assets/images/background/pic6.png" alt="/">
        </footer>

        <!-- Footer -->
        <div class="scroltop-progress scroltop-primary">
            <svg width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    <!-- JAVASCRIPT FILES ========================================= -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELEECT -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/vendor/popper/popper.js') }}"></script><!-- Popper -->
    <script src="{{ asset('assets/vendor/tempus-dominus/js/tempus-dominus.min.js') }}"></script><!-- Tempus Dominus -->
    <script src="{{ asset('assets/vendor/tilt/tilt.jquery.min.js') }}"></script><!-- TILT -->
    <script src="{{ asset('assets/js/dz.carousel.min.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script><!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/dznav-init.js') }}"></script><!-- DZNAV INIT -->
    <script src="{{ asset('assets/vendor/rangeslider/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/vendor/switcher/switcher.js') }}"></script>
</body>


</html>
