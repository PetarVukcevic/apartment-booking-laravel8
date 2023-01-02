<x-layout>
    <section class=" bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src={{ asset("assets/images/page-title/contact,png.jpg") }} alt="Background"/>
        </div>


            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-3 col-xs-1">

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-10 bg-gray p-md mt-md mb-md" style="border-radius: 5px">
                        <h1 class="text-center">Log In!</h1>
                        <hr/>
                        <form method="POST" action="/login" name="login">
                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter your username" id="exampleFormControlInput1" value="{{ old('username') }}" required>
                                @error('username')
                                <p style="color: red">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput2">Password</label>
                                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="exampleFormControlInput2" value="{{ old('password') }}" required>
                                @error('password')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-black btn-block">Log In</button>

                        </form>

                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-1">

                    </div>

                </div>



            </div>



                <!-- .col-md-12 end -->
                <!-- .row end -->
        <!-- .container end -->
    </section>


</x-layout>
