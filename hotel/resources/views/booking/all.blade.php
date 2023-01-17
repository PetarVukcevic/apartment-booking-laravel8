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
                            <h2>My Booking</h2>
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
        @if($apartments->count())
            <div class="container">
                <h1>My Booking History</h1>
                <hr/>
                <x-flash/>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Apartment</th>
                            <th scope="col">Check-in Date</th>
                            <th scope="col">Checkout Date</th>
                            <th scope="col">Nights</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Adults</th>
                            <th scope="col">Children</th>
                            <th scope="col">Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($apartments as $apartment)

                            <tr>
                                <th scope="row">{{ $apartment->id }}</th>
                                <td><a href="{{ url('catalog/'. $apartment->apartment->slug) }}">{{ $apartment->apartment->title }}</a></td>
                                <td>{{ $apartment->check_in }}</td>
                                <td>{{ $apartment->check_out }}</td>
                                <td>{{ $apartment->total_price / $apartment->apartment->price}}</td>
                                <td>{{ $apartment->total_price }} €</td>
                                <td>{{ $apartment->adults }}</td>
                                <td>{{ $apartment->children }}</td>
                                <td>{{ $apartment->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>


        @else
            <div>
                <h1>No Apartments in the database</h1>
            </div>
        @endif
    </section>


</x-layout>
