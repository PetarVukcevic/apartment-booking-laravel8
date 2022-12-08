@props(['about', 'features', 'blogs', 'badges'])
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
<!-- MAIN HEADING START -->
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

            <!-- BADGES START start -->
            @if($badges->count())
                <x-about-badges :badges="$badges"/>
            @endif
            <!-- BADGES START end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- MAIN HEADING END -->


<!-- Heading One
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
<!-- heading one end -->

<!-- Heading Two Start
============================================= -->
<section>
    <!-- container start -->
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
