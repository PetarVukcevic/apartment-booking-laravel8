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
            <h1>Create new blog</h1>
            <hr/>

            <form method="POST" action="/blogs-create"  name="create_feature">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Blog Author</label>
                        <input type="text" name="author" class="form-control" id="exampleFormControlInput1" value="{{ old('author') }}" placeholder="Author" required>
                        @error('title')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Author's Role</label>
                        <input type="text" name="author_role" class="form-control" id="exampleFormControlInput1" value="{{ old('author_role') }}" placeholder="Author's Role" required>
                        @error('title')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>

                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required>
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Insert Author image (50x50)</label>
                    <input type="file" name="author_img_url" value="{{ old('author_img_url') }}" class="form-control-file" id="exampleFormControlFile1" required>
                    @error('author_img_url')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-black btn-block">Submit</button>
            </form>

        </div>
    </section>

</x-layout>
