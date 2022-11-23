<x-layout>
    <!-- Page Title
============================================= -->
    <section class="bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src="assets/images/page-title/1.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title title-1 text-center">
                        <div class="title-bg">
                            <h2>Our Apartments</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">Catalog</li>
                        </ol>
                    </div>
                    <!-- .page-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <!-- Shop
============================================= -->
    <section class="shop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 shop-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="shop-options">
                                <div class="product-options2 pull-left pull-none-xs">
                                    <ul class="list-inline">
                                        <li>
                                            <div class="product-sort mb-15-xs">
                                                <span>sort by:</span>
                                                <select>
                                                    <option selected="" value="Default">Product Name</option>
                                                    <option value="Larger">Newest Items</option>
                                                    <option value="Larger">oldest Items</option>
                                                    <option value="Larger">Hot Items</option>
                                                    <option value="Small">Highest Price</option>
                                                    <option value="Medium">Lowest Price</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-sort">
                                                <span>Show:</span>
                                                <select>
                                                    <option selected="" value="10">10 items / page</option>
                                                    <option value="25">25 items / page</option>
                                                    <option value="50">50 items / page</option>
                                                    <option value="100">100 items / page</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .product-options end -->
                                <div class="product-view-mode text-right pull-none-xs">
                                    <span>view as:</span>
                                    <a class="active" href="#"><i class="fa fa-th-large"></i></a>
                                    <a href="#"><i class="fa fa-th-list"></i></a>
                                </div>
                                <!-- .product-num end -->
                            </div>
                            <!-- .shop-options end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                    <div class="row">

                        @if($apartments->count())
                            <x-apartments-grid :apartments="$apartments"/>
                        @else
                            <h1 class="text-center mt-30">No posts found. Please check back later.</h1>
                        @endif

                    </div>
                    <!-- .row end -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pager mb-30-xs mb-30-sm">
                            <div class="page-prev">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="page-next">
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .shop-content end -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar sidebar-full">
                    <!-- .sidebar end -->
                    <!-- Search
                    ============================================= -->
                    <x-search/>

                    <!-- Categories
                    ============================================= -->
                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h3>categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Tiling &amp; Painting</a>
                                </li>
                                <li>
                                    <a href="#">Renovations</a>
                                </li>
                                <li>
                                    <a href="#">Design &amp; Build</a>
                                </li>
                                <li>
                                    <a href="#">Consulting</a>
                                </li>
                                <li>
                                    <a href="#">Management</a>
                                </li>
                                <li>
                                    <a href="#">Wood Flooring</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- Filter
                    ============================================= -->
                    <div class="widget widget-filter">
                        <div class="widget-title">
                            <h3>Filter</h3>
                        </div>
                        <div class="widget-content">
                            <div id="slider-range">
                            </div>
                            <p>
                                <label for="amount">Price: </label>
                                <input type="text" id="amount" readonly>
                            </p>
                            <a class="btn btn-secondary" href="#">filter</a>
                        </div>
                    </div>

                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>


</x-layout>
