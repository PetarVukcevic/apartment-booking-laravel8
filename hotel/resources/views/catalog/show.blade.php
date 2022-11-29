<x-layout>

<section class="bg-overlay bg-overlay-gradient pb-0">
    <div class="bg-section" >
        <img src={{ asset("assets/images/page-title/2.jpg") }} alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>{{ $apartment->title }}</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/catalog">Catalog</a>
                        </li>

                        <li class="active">{{ $apartment->title }}</li>
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

{{--    apartment     --}}
    <section class="single-project pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div id="project-carousel" class="project-carousel mb-30">
                        <div class="item">
                            <img src="{{ asset("assets/images/shop/grid/apartman_single.png") }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset("assets/images/shop/grid/apartman_single.png") }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset("assets/images/shop/grid/apartman_single.png") }}" alt="Apartman">
                        </div>
                    </div>
                    <!-- .project-carousel end -->


                    <!-- .row end -->

                </div>


                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="project-widget project-block">
                        <div class="project-title">
                            <h3>{{ $apartment->title }}</h3>
                        </div>
                        <div class="project-desc">
                            <ul class="list-unstyled">
                                <li>Landlord:
                                    <span><a href="/catalog?landlord={{ $apartment->landlord->username }}">{{ $apartment->landlord->first_name }} {{ $apartment->landlord->last_name }}</a></span>
                                </li>

                                <li>City:
                                    <span>{{ $apartment->city->name }}</span>
                                </li>
                                <li>Address:
                                    <span>{{ $apartment->address }}</span>
                                </li>

                                <li>Adults:
                                    <span>{{ $apartment->adults }}</span>
                                </li>
                                @if($apartment->children != null)
                                    <li>Children:
                                        <span>{{ $apartment->children }}</span>
                                    </li>
                                @endif

                                <li>Category:
                                    <span><a href="./?=category={{ $apartment->category->slug }}">{{ $apartment->category->name }}</a></span>
                                </li>

                                <li>Price per night:
                                    <span>{{ $apartment->price }}.00 €</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .project-block end -->

                    <!-- .project-widget end -->


                    <!-- .project-widget end -->
                </div>

                <!-- rating -->
                <div class="product-review text-center text-center-xs">
							<span class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
							</span>
                    <span>5 Review(s)</span>
                    /
                    <span>
							<a href="#">Add Review</a>
							</span>
                </div>
                <!-- rating end -->
            </div>

            <!-- Apartment description row -->
            <div class="row">
                <div class="project-widget">
                    <div class="project-title">
                        <h3>Description</h3>
                    </div>
                    <div class="project-desc">
                        <p>{!! $apartment->description !!}</p>
                    </div>
                </div>

                <!-- paginate -->
                <div class="col-xs-12 col-sm-12 col-md-12 pager-2">
                    <div class="page-prev">
                        <a href="#"><i class="fa fa-angle-left"></i>
                            <span>Previous Apartment</span>
                        </a>
                    </div>
                    <div class="page-next">
                        <a href="#">
                            <span>Next Apartment</span>
                            <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- paginate end -->
            </div>
            <!-- .row end -->

        </div>
        <!-- .container end -->

    </section>

</x-layout>
