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
            <h1>Create new aparmtent</h1>
            <hr/>

            <form>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Apartment Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Apartment Address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Category</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select Category</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Price per night</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select City</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Landlord</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select Landlord</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlInput1">Number of rooms</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlInput1">Number of adults</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="2">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlInput1">Number of children</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlFile1">Insert Profile image (270x343)</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlFile1">Insert View image (1660x934)</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlFile1">Insert Large Profile image (370x370)</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <button class="btn btn-primary btn-black btn-block">Submit</button>
            </form>

        </div>
    </section>

</x-layout>
