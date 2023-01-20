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
                            <h2>Administrator</h2>
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
        <div class="container bg-gray p-md rounded">
            <h1>Create new apartment</h1>
            <hr/>

            <form method="POST" action="/apartments-create" enctype="multipart/form-data" name="create_apart">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Apartment Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{ old('title') }}" placeholder="Title" required>
                        @error('title')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Apartment Address</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}" id="exampleFormControlInput1" placeholder="Address" required>
                        @error('address')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Category</label>
                        <select class="form-control" name="category_id" id="exampleFormControlSelect1" required>
                            <option>Select Category</option>
                            @if($categories->count())
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category') == $category->id  ? 'selected': ''}}
                                    >{{ $category->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('category')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Price per night</label>
                        <input type="number" value="{{ old('price') }}" min="0" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Enter price" required>
                        @error('price')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="form-control" name="city_id" id="exampleFormControlSelect1" required>
                            <option value="">Select City</option>
                            @if($cities->count())
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}"
                                        {{ old('city') == $city->id  ? 'selected': ''}}
                                    >{{ $city->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('city')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Landlord</label>
                        <select class="form-control" name="user_id" id="exampleFormControlSelect1" required>
                            <option value="">Select Landlord</option>
                            @if($landlords->count())
                                @foreach($landlords as $landlord)
                                    <option value="{{ $landlord->id }}"
                                        {{ old('$landlord') == $landlord->id  ? 'selected': ''}}
                                    >{{ $landlord->username }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('landlord')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlInput1">Number of rooms</label>
                        <input type="number" name="rooms" value="{{ old('rooms') }}" class="form-control" id="exampleFormControlInput1" required>
                        @error('rooms')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlInput1">Number of adults</label>
                        <input type="number" name="adults" class="form-control" id="exampleFormControlInput1" value="{{ old('adults') }}" required>
                        @error('adults')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlInput1">Number of children</label>
                        <input type="number" name="children" class="form-control" id="exampleFormControlInput1" value="{{ old('children') }}" required>
                        @error('children')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlFile1">Insert Profile image (270x343)</label>
                        <input type="file" name="profile_img" value="{{ old('profile_img') }}" class="form-control-file" id="exampleFormControlFile1" required>
                        @error('profile_img')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlFile1">Insert View image (1660x934)</label>
                        <input type="file" name="view_img" value="{{ old('view_img') }}" class="form-control-file" id="exampleFormControlFile1" required>
                        @error('view_img')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlFile1">Insert Large Profile image (370x370)</label>
                        <input type="file" name="lg_profile_img" value="{{ old('lg_profile_img') }}"
                               class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                    @error('lg_profile_img')
                    <p style="color: red">{{ $message }}</p>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="margin-top: 50px;">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required>
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary btn-black btn-block">Submit</button>
            </form>

        </div>
    </section>

</x-layout>
