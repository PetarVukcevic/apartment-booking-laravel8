<x-layout>
    <section class="bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src="{{ asset('assets/images/page-title/about.png') }}" alt="Background"/>
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
                                <a href="/">Home</a>
                            </li>
                            <li class="active">about us</li>
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
            <h1>Edit About Us Page</h1>
            <x-flash/>
            <hr/>

            <form method="POST" action="/admin-about" enctype="multipart/form-data" name="update">
                @csrf
                @method('PATCH')

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Main Heading</label>
                        <input type="text" name="main_heading" class="form-control" id="exampleFormControlInput1" value="{{ $about->main_heading }}" placeholder="Title" required>
                        @error('main_heading')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Main Helper</label>
                        <input type="text" name="main_helper" class="form-control" value="{{ $about->main_helper }}" id="exampleFormControlInput1" placeholder="Address" required>
                        @error('main-helper')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                </div>


                <div class="form-group" >
                    <label for="exampleFormControlTextarea1">Short Description</label>
                    <input type="text" name="short_description" class="form-control" value="{{ $about->short_description }}" id="exampleFormControlInput1" required>

                    @error('short_description')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group" >
                    <label for="exampleFormControlTextarea1">Main Description</label>
                    <textarea class="form-control" name="main_description" id="exampleFormControlTextarea1" rows="3" required>
                       {{ $about->main_description }}
                    </textarea>
                    @error('main_description')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group" >
                    <label for="exampleFormControlTextarea1">Heading One</label>
                    <input type="text" name="heading_one" class="form-control" value="{{ $about->heading_one }}" id="exampleFormControlInput1" required>

                    @error('heading_one')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group" >
                    <label for="exampleFormControlTextarea1">Description One</label>
                    <textarea class="form-control" name="description_one" id="exampleFormControlTextarea1" rows="3" required>
                       {{ $about->description_one }}
                    </textarea>
                    @error('description_one')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlFile1">Insert Signature image (99x26)</label>
                        <input type="file" name="signature_img_url" value="{{ old('signature_img_url') }}" class="form-control-file" id="exampleFormControlFile1">
                        @error('signature_img_url')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                        <img class="mt-sm" src="{{ asset( $about->signature_img_url )}}" alt="current" width="100px" height="130px">

                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Heading Two</label>
                        <input type="text" name="heading_two" class="form-control" value="{{ $about->heading_two }}" id="exampleFormControlInput1" required>

                        @error('heading_two')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput6" >Helper Two</label>
                        <input type="text" name="helper_two" class="form-control" value="{{ $about->helper_two }}" id="exampleFormControlInput6" placeholder="Address" required>
                        @error('helper_two')
                        <p style="color: red">{{ $message }}</p>
                        @enderror

                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-black btn-block">Update</button>
            </form>

        </div>
    </section>

</x-layout>
