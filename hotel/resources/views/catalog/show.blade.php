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
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div id="project-carousel" class="project-carousel mb-30">
                        <div class="item">
                            <img src="{{ asset($apartment->single_img_url) }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset($apartment->single_img_url) }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset($apartment->single_img_url) }}" alt="Apartman">
                        </div>
                    </div>
                    <!-- .project-carousel end -->


                    <!-- .row end -->

                </div>


                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="project-widget project-block">
                        <div class="project-title">
                            <h3>{{ $apartment->title }}</h3>
                        </div>
                        <div class="project-desc">
                            <ul class="list-unstyled">
                                <li class="mt-xs">Landlord:
                                    <span><a href="{{ url('/catalog?landlord='. $apartment->landlord->username) }}">{{ $apartment->landlord->first_name }} {{ $apartment->landlord->last_name }}</a></span>
                                </li>

                                <li class="mt-xs">City:
                                    <span><a href="{{ url('/catalog?city='. $apartment->city->name) }}">{{ $apartment->city->name }}</a></span>
                                </li>
                                <li class="mt-xs">Address:
                                    <span>{{ $apartment->address }}</span>
                                </li>

                                <li class="mt-xs">Adults:
                                    <span>{{ $apartment->adults }}</span>
                                </li>
                                @if($apartment->children != null)
                                    <li class="mt-xs">Children:
                                        <span>{{ $apartment->children }}</span>
                                    </li>
                                @endif

                                <li class="mt-xs">Category:
{{--                                    <span><a href="./?category={{ $apartment->category->slug }}">{{ $apartment->category->name }}</a></span>--}}
                                    <span><a href="{{ url('catalog?category='.$apartment->category->slug) }}">{{ $apartment->category->name }}</a></span>

                                </li>

                                <li class="mt-xs">Price per night:
                                    <span>{{ $apartment->price }}.00 €</span>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review text-left text-center-xs mt-md">
							<span class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
							</span>
                            <span>5 Review(s)</span>
                            /
                            <span>
							<a href="#">Add Review</a>
							</span>
                        </div>


                    </div>

                </div>

            </div>

            <!-- Apartment description row -->
            <div class="row">

                <div class="product-tabs mb-50">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a>
                        </li>
                        <li role="presentation">
                            <a href="#details" aria-controls="details" role="tab" data-toggle="tab">details</a>
                        </li>
                        <li role="presentation">
                            <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(2)</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <p>{!! $apartment->description !!}</p>
                        </div>
                        <!-- #description end -->
                        <div role="tabpanel" class="tab-pane" id="details">
                            <h5>Technical Details</h5>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>Part Number</td>
                                    <td>60-MCTE</td>
                                </tr>
                                <tr>
                                    <td>Item Weight</td>
                                    <td>54 pounds</td>
                                </tr>
                                <tr>
                                    <td>Product Dimensions</td>
                                    <td>92.8 x 92.8 x 92.8 inches</td>
                                </tr>
                                <tr>
                                    <td>Item model number</td>
                                    <td>60-MCTE</td>
                                </tr>
                                <tr>
                                    <td>Item Package Quantity</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Number of Handles</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Batteries Required?</td>
                                    <td>No</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- #details end -->
                        <div role="tabpanel" class="tab-pane reviews" id="reviews">
                            <ul class="product-review list-unstyled">
                                <li class="review-comment">
                                    <h6>Mostafa Amin</h6>
                                    <p class="review-date">22/02/2016</p>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-comment">
                                        <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
                                    </div>
                                </li>
                                <!-- .review-comment end -->

                                <li class="review-comment">
                                    <h6>Mohamed Habaza</h6>
                                    <p class="review-date">21/02/2016</p>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-comment">
                                        <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
                                    </div>
                                </li>
                                <!-- .review-comment end -->
                            </ul>
                            <div class="form-review">
                                <form>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"/>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"/>
                                    <select class="form-control">
                                        <option selected="" value="Default">Your Rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <textarea class="form-control" id="review" rows="2" placeholder="Review"></textarea>
                                    <button type="submit" class="btn btn-primary btn-black btn-block">Post Your review</button>
                                </form>
                            </div>
                        </div>
                        <!-- #reviews end -->
                    </div>
                    <!-- #tab-content end -->
                </div>


                <!-- paginate -->
                <div class="col-xs-12 col-sm-12 col-md-12 pager-2">
                    <div class="page-prev">
                        <a href="#"><i class="fa fa-angle-left"></i>
                            <span>Previous Apartment</span>
                        </a>
                    </div>
                    <div class="page-next">
                        <a href="#">
                            <span>Next Apartment</span>
                            <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- paginate end -->
            </div>
            <!-- .row end -->

        </div>
        <!-- .container end -->

    </section>

</x-layout>
