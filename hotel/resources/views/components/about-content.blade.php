@props(['about', 'features', 'blogs'])
<section class="bg-overlay bg-overlay-gradient pb-0">
    <div class="bg-section" >
        <img src="{{ asset('assets/images/page-title/about.png') }}" alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>{{ $about->main_heading }}</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">about us</li>
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

<section id="shotcode-1" class="shotcode-1 text-center-xs text-center-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">{{ $about->main_helper }}</p>
                                <h2>{{ $about->main_heading }}</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                </div>
            </div>
            <!-- .col-md-12 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h3 class="color-heading mb-sm font-18">{{ $about->short_description }}</h3>
                <p class="mb-60">{{ $about->main_description }}</p>
                <a class="btn btn-secondary mb-30-xs" href="{{ url('catalog') }}">our catalog</a>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 feature feature-1">
                        <div class="feature-icon">
                            <i class="lnr lnr-calendar-full"></i>
                        </div>
                        <h4 class="text-uppercase">Always Available</h4>
                        <p>all construction sites open for visitors, with 24/7 video surveillance being conducted at all objects</p>
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 feature feature-1">
                        <div class="feature-icon">
                            <i class="lnr lnr-briefcase"></i>
                        </div>
                        <h4 class="text-uppercase">Qualified Agents</h4>
                        <p>We have a team of specialists capable of maximizing the result and delivering the projects</p>
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 feature feature-1 mb-0">
                        <div class="feature-icon">
                            <i class="lnr lnr-database"></i>
                        </div>
                        <h4 class="text-uppercase">Fair Prices</h4>
                        <p>you can be 100% sure that it will be delivered right on time, within the set budget limits</p>
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 feature  feature-1 mb-0">
                        <div class="feature-icon">
                            <i class="lnr lnr-cart"></i>
                        </div>
                        <h4 class="text-uppercase">Best Offers</h4>
                        <p>All aspects of the operations being transparent and clear for clients and partners</p>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>



<!-- Call To Action #3
============================================= -->
<section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
    <div class="bg-section" >
        <img src="{{ asset('assets/images/call/2.jpg') }}" alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <h2>{{ $about->heading_one }}</h2>
                <p>{{ $about->description_one }}</p>
                <div class="signiture">
                    <img src={{ asset($about->signature_img_url) }} alt="signiture"/>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #cta-3 end -->

<!-- Shortcode #10
============================================= -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">{{ $about->helper_two }}</p>
                                <h2>{{ $about->heading_two }}</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                </div>
            </div>

            <!-- FEATURES START -->
            @if($features->count())
                <x-features-list :features="$features"/>
            @endif
            <!-- FEATURES END -->



            <!-- BLOGS START -->
            @if($blogs->count())

                <x-blogs-list :blogs="$blogs"/>

            @endif
            <!-- BLOGS END -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
