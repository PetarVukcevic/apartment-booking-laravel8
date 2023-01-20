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
                            <h2>My Booked Apartments</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="active">admin section</li>
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

    <section>
        @if($bookings->count())
            <div class="container">
                <h1>My Booked Apartments</h1>
                <hr/>
                <x-flash/>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Apartment</th>
                            <th scope="col">Check-in Date</th>
                            <th scope="col">Check-out Date</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Guest</th>
                            <th scope="col">Guest's Phone</th>
                            <th scope="col">Guest's Email</th>
                            <th scope="col">Booked On</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)

                            <tr>
                                <th scope="row">{{ $booking->id }}</th>
                                <td><a href="{{ url('catalog/'. $booking->apartment->slug) }}">{{ $booking->apartment->title }}</a></td>
                                <td>{{ date('F d, Y', strtotime($booking->check_in)) }}</td>
                                <td>{{ date('F d, Y', strtotime($booking->check_out)) }}</td>
                                <td>{{ $booking->total_price }} €</td>
                                <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                                <td>{{ $booking->user->phone_number }}</td>
                                <td>{{ $booking->user->email }}</td>
                                <td>{{ date('F d, Y', strtotime($booking->created_at)) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h2>Total earnings: {{ $totalEarnings }} €</h2>
                </div>
            </div>


        @else
            <div class="container">
                <h1 class="text-center">You don't have booked apartments yet.</h1>
            </div>
        @endif
    </section>


</x-layout>
