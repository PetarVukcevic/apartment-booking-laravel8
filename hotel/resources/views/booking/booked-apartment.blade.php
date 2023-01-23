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
                            <h2>{{ $booking->apartment->title }}</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('my-bookings') }}">My Booking History</a>
                            </li>

                            <li class="active">{{ $booking->apartment->title }}</li>
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

    <section class="single-project pb-0">
        <div class="container">
            <h1>Thanks for choosing {{ $booking->apartment->title }}!</h1>

            @if(!$booking->where('user_id', auth()->user()->id)->where('check_out', '>', \Carbon\Carbon::now())->exists())
                <h3><a href="{{ url('catalog/' . $booking->apartment->slug)}}">
                        Book {{ $booking->apartment->title }} again?
                    </a></h3>
            @endif


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div id="project-carousel" class="project-carousel mb-30">
                        <div class="item">
                            <img src="{{ asset($booking->apartment->view_img) }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset($booking->apartment->view_img) }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset($booking->apartment->view_img) }}" alt="Apartman">
                        </div>
                    </div>
                    <!-- .project-carousel end -->


                    <!-- .row end -->

                </div>


                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="project-widget project-block">
                        <div class="project-title">
                            <a class="bold pull-right font-18" href="{{ url()->previous() }}">Back</a>

                            <h3>{{ $booking->apartment->title }}</h3>

                        </div>

                        <div class="project-desc">
                            <ul class="list-unstyled">
                                <li class="mt-xs">Landlord:
                                    <span>{{ $booking->apartment->landlord->first_name }} {{ $booking->apartment->landlord->last_name }}</span>
                                </li>

                                <li class="mt-xs">Landlord's phone number:
                                    <span>{{ $booking->apartment->landlord->phone_number }}</span>
                                </li>

                                <li class="mt-xs">Landlord's email:
                                    <span>{{ $booking->apartment->landlord->email }}</span>
                                </li>

                                <li class="mt-xs">City:
                                    <span>{{ $booking->apartment->city->name }}</span>
                                </li>

                                <li class="mt-xs">Address:
                                    <span>{{ $booking->apartment->address }}</span>
                                </li>

                                <li class="mt-xs">Check-in date:
                                    <span>{{ date('F d, Y', strtotime($booking->check_in)) }}</span>
                                </li>

                                <li class="mt-xs">Check-out date:
                                    <span>{{ date('F d, Y', strtotime($booking->check_out)) }}</span>
                                </li>

                                <li class="mt-xs">Total price:
                                    <span>{{ $booking->total_price }}.00 €</span>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>


            </div>

            <x-flash/>
        </div>

    </section>

</x-layout>
