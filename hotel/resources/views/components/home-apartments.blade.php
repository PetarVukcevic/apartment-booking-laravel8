@props(['apartments', 'categories'])
<section id="projects" class="projects-grid projects-3col  bg-gray mt-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-3 mb-0 text-center">
                    <div class="heading-bg">
                        <p class="mb-0">Great &amp; Awesome Housing</p>
                        <h2>Our Apartments</h2>
                    </div>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">

            <!-- Projects Filter
                    ============================================= -->
           <x-home-categories :categories="$categories"/>
            <!-- .projects-filter end -->
        </div>
        <!-- .row end -->

        <!-- Projects Item
        ============================================= -->
        <x-home-apartments-grid  :apartments="$apartments"/>
        <!-- Row end -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-secondary mt-sm" href="{{ url('catalog') }}"> more apartments <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->

</section>
