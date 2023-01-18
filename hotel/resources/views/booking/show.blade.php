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
                            <h2>{{ $apartment->title }}</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('catalog') }}">Catalog</a>
                            </li>

                            <li class="active">{{ $apartment->title }}</li>
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

    {{--    apartment     --}}
    <section class="single-project pb-0">
        <div class="container">


                <div class="container bg-gray p-md mb-30">
                            {{--          booking start              --}}
                    <a class="bold pull-right font-18 p-xs" href="{{ url()->previous() }}">Back</a>

                    <h3 class="text-center p-xs">Book {{ $apartment->title }} now</h3>
                                <hr/>
                                <form class="needs-validation mt-30" id="dates" action="{{ url()->current() }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="checkin_date">Check-in Date:</label>
                                            <input type="date" class="form-control" id="checkin_date" name="check_in"
                                                   required min="{{date('m-d-y')}}" onchange="checkDate()">
                                            @error('check_in')
                                            <p style="color: red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="checkout_date">Check-out Date:</label>
                                            <input type="date" class="form-control" id="checkout_date" name="check_out"
                                                   min="{{date('m-d-y')}}" onchange="checkDate()">
                                            @error('check_out')
                                            <p style="color: red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="adults">Adults:</label>
                                            <input min="0" max="{{ $apartment->adults }}" placeholder="Please enter the number of adults..." required class="form-control" type="number" name="adults" id="adults">

                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="children">Children:</label>
                                            <input min="0" max="{{ $apartment->children > 0 }}" placeholder="Please enter the number of children..."  class="form-control" type="number" name="children" id="children">

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <h5 id="price" class="p-xs">Total Price:</h5>
                                        <input type="hidden" style="background-color: white" class="form-control text-black-50" id="total_price" name="total_price" readonly>
                                    </div>
                                    <div class="container">
                                        <button class="btn btn-primary" type="submit">Book Apartment</button>

                                    </div>
                                </form>


                        <!-- #tab-content end -->

                </div>
        </div>
        <!-- .container end -->

    </section>
    <script type="text/javascript">
        document.getElementById("checkin_date").min = new Date().toISOString().split("T")[0];
        document.getElementById("checkout_date").min = new Date().toISOString().split("T")[0];
        var room_price = {{ $apartment->price }};

        function checkDate() {
            var checkin_date = new Date(document.getElementById("checkin_date").value);
            var checkout_date = new Date(document.getElementById("checkout_date").value);
            var checkin_date_input = document.getElementById("checkin_date");
            var checkout_date_input = document.getElementById("checkout_date");
            checkout_date_input.min = checkin_date.toISOString().split("T")[0];
            var diff_in_time = checkout_date.getTime() - checkin_date.getTime();
            var diff_in_days = diff_in_time / (1000 * 3600 * 24);
            var total_price = diff_in_days * room_price;
            document.getElementById("total_price").value = total_price;
            if(diff_in_time > 0) {
                document.getElementById('price').innerHTML = 'Total Price: ' + total_price + '€ for ' + diff_in_days + ' night(s).';
            }
            else if (diff_in_days === 0) {
                diff_in_days = 1
                document.getElementById('price').innerHTML = 'Total Price: ' + room_price + '€ for ' + diff_in_days + ' night(s).';

            }
        }


    </script>


</x-layout>
