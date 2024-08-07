@extends('layout.layoutDesignTwo')

@section('title', 'Products')

@section('content')






    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dz-bnr-inr style-1 text-center bg-parallax"
            style="background-image:url('assets/images/banner/bnr2.jpg'); background-size:cover; background-position:center;">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Products</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Search Section -->
        <section class="content-inner-1">
            <div class="container">
                <div class="row search-wraper text-center">
                    <div class="col-lg-8 m-auto">
                        <form>
                            <div class="input-group">
                                <input required="required" type="text" class="form-control" placeholder="Type here">
                                <div class="input-group-addon">
                                    <button name="submit" value="submit" type="submit"
                                        class="btn btn-primary btn-hover-2">
                                        <span>Search</span><i class="icon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <aside class="side-bar left sticky-top">
                            <div class="shop-filter">
                                <div class="widget widget_tag_cloud ">
                                    <div class="d-flex justify-content-between">
                                        <div class="widget-title">
                                            <h4 class="title">Current Search</h4>
                                        </div>
                                        <a href="javascript:void(0);" class="panel-close-btn"><i
                                                class="fa-solid fa-xmark"></i></a>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="product-detail.html">Burger</a>
                                        <a href="product-detail.html">Restaurant</a>
                                        <a href="product-detail.html">Pizza</a>
                                    </div>
                                </div>
                                <div class="widget dz-widget_services">
                                    <div class="widget-title">
                                        <h4 class="title">Refine By Categories</h4>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-01">
                                        <label class="form-check-label" for="productCheckBox-01">
                                            Pizza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-02">
                                        <label class="form-check-label" for="productCheckBox-02">
                                            Hamburger
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-03">
                                        <label class="form-check-label" for="productCheckBox-03">
                                            Cold Drink
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-04">
                                        <label class="form-check-label" for="productCheckBox-04">
                                            Sandwich
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-05">
                                        <label class="form-check-label" for="productCheckBox-05">
                                            Muffin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-06">
                                        <label class="form-check-label" for="productCheckBox-06">
                                            Burrito
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-07">
                                        <label class="form-check-label" for="productCheckBox-07">
                                            Taco
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="productCheckBox-08">
                                        <label class="form-check-label" for="productCheckBox-08">
                                            Hot Dog
                                        </label>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4 class="title">Price Range</h4>
                                    </div>
                                    <div class="range-slider style-1">
                                        <div id="slider-tooltips"></div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="title mb-md-3 mb-lg-4 m-b20 d-none d-lg-block">Search Results</h5>
                            <strong class="filter-item-show m-b20">Search: 51,740 items</strong>
                            <a href="javascript:void(0);" class="btn btn-primary panel-btn">Filter</a>
                        </div>
                        <ul id="masonry" class="row">
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic1.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 4.5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$4.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic2.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Chicken Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$17.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic3.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 3.5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pineapple Pizza</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$24.50</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic4.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 5.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pineapple Soup</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$11.02</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic5.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 4.2</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Momos</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$4.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic6.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pancake</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$12.20</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic3.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 4.1</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pineapple Pizza</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$10.50</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic1.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 4.0</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Spicy Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$4.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic2.jpg" alt="/">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="seller">Top Seller</li>
                                                <li class="rating"><i class="fa-solid fa-star"></i> 3.8</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Cheese Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$17.56</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Search Section -->

    </div>



@endsection
