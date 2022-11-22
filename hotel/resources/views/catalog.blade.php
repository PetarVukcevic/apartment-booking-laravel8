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
    <section class="shop pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="product-num pull-left pull-none-xs">
                                <h3>Showing 1 : 16 of
                                    <span class="color-theme">245</span>
                                    product</h3>
                            </div>
                            <!-- .product-num end -->
                            <div class="product-options pull-right text-right pull-none-xs">
                                <select>
                                    <option selected="" value="Default">Default Sorting</option>
                                    <option value="Larger">Newest Items</option>
                                    <option value="Larger">oldest Items</option>
                                    <option value="Larger">Hot Items</option>
                                    <option value="Small">Highest Price</option>
                                    <option value="Medium">Lowest Price</option>
                                </select>
                            </div>
                            <!-- .product-options end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->

                    <div class="row">

                      <x-apartments-grid :apartments="$apartments"/>

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
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

</x-layout>
