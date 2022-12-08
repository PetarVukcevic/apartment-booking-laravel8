<x-layout>

    <section class=" bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src={{ asset("assets/images/page-title/contact,png.jpg") }} alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title title-1 text-center">
                        <div class="title-bg">
                            <h2>contact us</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">contact</li>
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

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-4">
                        <div class="heading-bg heading-right">
                            <p class="mb-0">We Wanna Hear From You !</p>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <!-- .heading end -->
                </div>
                <!-- .col-md-12 end -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 widgets-contact mb-60-xs">
                            <div class="widget">
                                <div class="widget-contact-icon pull-left">
                                    <i class="lnr lnr-map"></i>
                                </div>
                                <div class="widget-contact-info">
                                    <p class="text-capitalize">visit us</p>
                                    <p class="text-capitalize font-heading">podgorica, crna gora</p>
                                </div>
                            </div>
                            <!-- .widget end -->
                            <div class="clearfix">
                            </div>
                            <div class="widget">
                                <div class="widget-contact-icon pull-left">
                                    <i class="lnr lnr-envelope"></i>
                                </div>
                                <div class="widget-contact-info">
                                    <p class="text-capitalize ">email us</p>
                                    <p class="font-heading">pvukcevic@gmail.com</p>
                                </div>
                            </div>
                            <!-- .widget end -->
                            <div class="clearfix">
                            </div>
                            <div class="widget">
                                <div class="widget-contact-icon pull-left">
                                    <i class="lnr lnr-phone"></i>
                                </div>
                                <div class="widget-contact-info">
                                    <p class="text-capitalize">call us</p>
                                    <p class="text-capitalize font-heading">+382 67 255 888</p>
                                </div>
                            </div>
                            <!-- .widget end -->
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <div class="row">

                                <form  action="{{ route('contact') }}" method="POST">  {{--id="contact-form--}}
                                    @csrf

                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-30" name="full_name" id="name" value="{{ old('full_name') }}" placeholder="Your Name" required/>

                                        @error('full_name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>



                                    <div class="col-md-6">
                                        <input type="email" class="form-control mb-30" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email" required/>

                                        @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-30" value="{{ old('telephone') }}" name="telephone" id="telephone" placeholder="Telephone" required/>

                                        @error('telephone')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-30" name="subject" value="{{ old('subject') }}" id="subject" placeholder="Subject" required/>

                                        @error('subject')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control mb-30" name="body" id="message"  rows="2" placeholder="Message Details" required></textarea>
                                        @error('body')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" id="submit-message" class="btn btn-primary btn-black btn-block">Send Message</button>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-xs">

{{--                                        @if($errors->any())--}}
{{--                                            <ul style="list-style-type: none">--}}
{{--                                                @foreach(@$errors->all() as $error)--}}
{{--                                                    <li class="text-danger" style="color: red">{{ $error }}</li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        @endif--}}

                                        <!--Alert Message-->
                                        <div id="contact-result">
                                        </div>

                                        <x-flash/>

                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- .col-md-8 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

</x-layout>
