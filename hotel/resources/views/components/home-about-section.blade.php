@props(['about'])
<section id="shortcode-2" class="shortcode-2 about-home text-center-xs text-center-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-1 mb-0">
                            <p>{{ $about->main_helper }}</p>
                            <h2>{{ $about->main_heading }}</h2>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-xs-12 col-md-12 mb-50">
                        <p>{{ $about->short_description }}</p>
                        <p  class="mb-0">{{ $about->main_description }}</p>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="feature feature-2 mb-30-xs mb-30-sm">
                            <div class="feature-icon">
                                <i class="lnr lnr-license font-40 color-theme"></i>
                            </div>
                            <h4 class="text-uppercase font-16">safety</h4>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="feature feature-2 mb-30-xs mb-30-sm">
                            <div class="feature-icon">
                                <i class="lnr lnr-users font-40 color-theme"></i>
                            </div>
                            <h4 class="text-uppercase font-16">Community</h4>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="feature feature-2 mb-30-xs">
                            <div class="feature-icon">
                                <i class="lnr lnr-cloud-sync font-40 color-theme"></i>
                            </div>
                            <h4 class="text-uppercase font-16">Sustainability</h4>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="feature feature-2 mb-30-xs">
                            <div class="feature-icon">
                                <i class="lnr lnr-construction font-40 color-theme"></i>
                            </div>
                            <h4 class="text-uppercase font-16">Integrity</h4>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-8 end -->

            <div class="col-xs-12 col-sm-5 col-md-4">
                <div class="cta-form">
                    <div class="cta cta-2 bg-theme">
                        <div class="cta-icon">
                            <i class="lnr lnr-apartment"></i>
                        </div>
                        <div class="cta-devider">
                        </div>
                        <div class="cta-desc">
                            <p>Don’t Hesitate To Ask</p>
                            {{--                                <h5>Request A Quote</h5>--}}
                            <h5>Ask a question</h5>

                        </div>
                    </div>
                    <!-- .cta-2 end -->
                    <div class="form">
                        <form action="/" method="post">
                            @csrf
                            <input type="text" class="form-control" value="{{ old('full_name') }}"
                                   name="full_name" id="name" placeholder="Your Name" required/>
                            @error('full_name')
                            <p style="color: red">
                                {{ $message }}
                            </p>
                            @enderror

                            <input type="email" class="form-control" value="{{ old('email') }}"
                                   name="email" id="email" placeholder="Email" required/>
                            @error('email')
                            <p style="color: red">
                                {{ $message }}
                            </p>
                            @enderror

                            <input type="text" class="form-control" value="{{ old('telephone') }}"
                                   name="telephone" id="telephone" placeholder="Telephone" required/>
                            @error('telephone')
                            <p style="color: red">
                                {{ $message }}
                            </p>
                            @enderror

                            <input type="text" class="form-control" value="{{ old('subject') }}"
                                   name="subject" id="telephone" placeholder="Subject" required/>
                            @error('subject')
                            <p style="color: red">
                                {{ $message }}
                            </p>
                            @enderror

                            <textarea class="form-control" name="body"  id="quote" placeholder="Message..." rows="2" required></textarea>
                            @error('body')
                            <p style="color: red">
                                {{ $message }}
                            </p>
                            @enderror

                            <button type="submit" class="btn btn-primary btn-black btn-block">send message</button>
                            <!--Alert Message-->
                            {{--                                <div id="quote-result" class="mt-xs">--}}
                            {{--                                </div>--}}
                            <x-flash/>
                        </form>
                    </div>

                </div>
                <!-- .cta-form -->
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
