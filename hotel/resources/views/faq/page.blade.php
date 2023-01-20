<x-layout>
    <!-- Page Title
    ============================================= -->
    <section class="bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src="assets/images/page-title/2.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title title-1 text-center">
                        <div class="title-bg">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">FAQS</li>
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

    <!-- Services
    ============================================= -->
    <section>
        <div class="container">
            <div class="row">

                <!-- .sidebar end -->

                        <x-questions-list :faq="$faq"/>
                        <!-- .panel end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
</x-layout>
