<x-layout>
    <section class=" bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src={{ asset("assets/images/page-title/contact,png.jpg") }} alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <section>
                        <div class="container bg-gray p-md rounded">
                            <h1>Register form</h1>
                            <hr/>

                            <form method="POST" action="/register" name="register_form">
                                @csrf
                                <div class="form-row">


                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" value="{{ old('first_name') }}" placeholder="Enter your first name" required>
                                        @error('first_name')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" id="exampleFormControlInput1" placeholder="Enter your last name" required>
                                        @error('last_name')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>
                                <div class="form-row">


                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Email Address</label>
                                        <input type="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput1" required>
                                        @error('email')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>



                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Phone number</label>
                                        <input type="text" name="phone_number" placeholder="Enter your phone number" class="form-control" id="exampleFormControlInput1" value="{{ old('phone_number') }}" required>
                                        @error('phone_number')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Enter your username" id="exampleFormControlInput1" value="{{ old('username') }}" required>
                                        @error('username')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Password</label>
                                        <input type="password" name="password" placeholder="Enter your password" class="form-control" id="exampleFormControlInput1" value="{{ old('password') }}" required>
                                        @error('password')
                                        <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary btn-black btn-block">Register</button>
                            </form>

                        </div>
                    </section>

                    <!-- .page-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

</x-layout>
