<x-layout>

    <section class=" bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src={{ asset("assets/images/page-title/9.jpg") }} alt="Background"/>
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

                                <form id="contact-form" action="/contact" method="POST">
                                    @csrf

                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-30" name="full_name" id="name" placeholder="Your Name" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control mb-30" name="email" id="email" placeholder="Your Email" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-30" name="telephone" id="telephone" placeholder="Telephone" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Subject" required/>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control mb-30" name="body" id="message" rows="2" placeholder="Message Details" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" id="submit-message" class="btn btn-primary btn-black btn-block">Send Message</button>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-xs">
                                        <!--Alert Message-->
                                        <div id="contact-result">
                                        </div>

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
