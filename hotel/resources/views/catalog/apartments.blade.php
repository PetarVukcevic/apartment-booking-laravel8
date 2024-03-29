<x-layout>
    <!-- Page Title
============================================= -->
    <section class="bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src={{url("assets/images/page-title/catalog.png")}} alt="Background"/>
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
                                <a href="{{ url('/') }}">Home</a>
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
                                            <!-- FILTERS START -->
                                            <div class="product-sort mb-15-xs">
                                                <span>sort by:</span>
                                                <select id="sorting">
                                                    <option value="title" @if($sorting == 'title') selected @endif>Apartment title</option>
                                                    <option value="newest" @if($sorting == 'newest') selected @endif>Newest</option>
                                                    <option value="oldest" @if($sorting == 'oldest') selected @endif>Oldest</option>
                                                    <option value="highest_price" @if($sorting == 'highest_price') selected @endif>Highest Price</option>
                                                    <option value="lowest_price" @if($sorting == 'lowest_price') selected @endif>Lowest Price</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span>Show:</span>
                                                <select id="pagination">
                                                    <option value="5" @if($items == 5) selected @endif>5 items / page</option>
                                                    <option value="10" @if($items == 10) selected @endif>10 items / page</option>
                                                    <option value="25" @if($items == 25) selected @endif>25 items / page</option>
                                                    <option value="50" @if($items == 50) selected @endif>50 items / page</option>
                                                </select>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                                <!-- .product-options end -->
                                <div class="product-view-mode text-right pull-none-xs">
                                    <span>view as:</span>
                                    <a href="{{ request()->fullUrlWithQuery(['view' => 'grid']) }}" class="{{ $viewMode === 'grid' ? 'active' : '' }}"><i class="fa fa-th-large"></i></a>
                                    <a href="{{ request()->fullUrlWithQuery(['view' => 'list']) }}" class="{{ $viewMode === 'list' ? 'active' : '' }}"><i class="fa fa-th-list"></i></a>
                                </div>
                                <!-- .product-num end -->
                            </div>
                            <!-- .shop-options end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- FILTERS END -->

                    <!-- .row end -->
                    <div class="row">

                        @if($apartments->count())
                            @if($viewMode === 'grid')
                                <x-apartments-grid :apartments="$apartments"/>
                            @else
                                <x-apartments-list :apartments="$apartments"/>
                            @endif
                            {{ $apartments->links() }}
                        @else
                            <h1 class="text-center mt-30">No apartments found. Please check back later.</h1>
                        @endif

                    </div>
                    <!-- .row end -->


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
                    <x-catalog-sidebar>
                        <x-category-sidebar/>
                    </x-catalog-sidebar>




                    <!-- Filter
                    ============================================= -->
                    <x-price-filter/>

                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>


    {{--  Paginate script -> changes the route according to items count --}}
    <script type="text/javascript">
        document.getElementById('pagination').onchange = function() {
            window.location = "{{ $apartments->url(1) }}&items=" + this.value;
        };
        document.getElementById('sorting').onchange = function() {
            window.location = "{{ $apartments->url(1) }}&sorting=" + this.value;
        };


    </script>


</x-layout>

