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
            @auth()
                @if($apartment->landlord->id === auth()->user()->id)
                    <h2>This is your apartment.</h2>
                @elseif($apartment->bookings()->where('user_id', auth()->user()->id)->where('check_out', '>', \Carbon\Carbon::now())->exists())                    <h2>You have booked this apartment currently.</h2>
                @else
                    <h2>
                        <a href="{{ url('booking/' . $apartment->slug) }}">Book {{ $apartment->title }} now.</a>
                    </h2>
                @endif

            @endauth
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div id="project-carousel" class="project-carousel mb-30">
                        <div class="item">
                            <img src="{{ asset($apartment->view_img) }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset($apartment->view_img) }}" alt="Apartman">
                        </div>
                        <div class="item">
                            <img src="{{ asset($apartment->view_img) }}" alt="Apartman">
                        </div>
                    </div>
                    <!-- .project-carousel end -->


                    <!-- .row end -->

                </div>


                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="project-widget project-block">
                        <div class="project-title">
                            <a class="bold pull-right font-18" href="{{ url('catalog') }}">Back</a>

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
                                    <span><a href="{{ url('catalog?category='.$apartment->category->slug) }}">{{ $apartment->category->name }}</a></span>
                                </li>

                                <li class="mt-xs">Price per night:
                                    <span>{{ $apartment->price }}.00 €</span>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review text-left text-center-xs mt-md">
							<x-rating-stars :average="$apartment->ratings->average('grade')"/>
                            <span>{{ $apartment->ratings->count() }} Review(s)</span>
                            /
                            <span>
							    Rating: {{ round($apartment->ratings->average('grade'), 2) }}
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
                            <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews({{ $apartment->ratings->count() }})</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        {{--   descroption start    --}}
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <p>{{ $apartment->description }} </p>
                        </div>
                        {{--   description start    --}}



                        {{--     reviews start     --}}
                        <div role="tabpanel" class="tab-pane reviews" id="reviews">
                            <ul class="product-review list-unstyled">

                                <!-- .review-comment end -->
                                @if($apartment->ratings != null)
                                    @foreach($apartment->ratings as $rating)
                                        <x-review-comment :rating="$rating"/>
                                    @endforeach
                                @endif
                                <!-- .review-comment end -->
                            </ul>
                            @auth()
                            <div class="form-review">
                                <h3>Rate the apartment</h3>
                                <form action="{{ url()->current() }}" method="post" id="rating">
                                    @csrf

                                    <select class="form-control" name="grade">
                                        <option value="">Grade(1-5)</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @error('grade')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <textarea class="form-control" id="review" name="comment" rows="2" placeholder="Comment">{{ old('comment') }}</textarea>
                                    @error('comment')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <button type="submit" class="btn btn-primary btn-black btn-block">Post Your review</button>
                                </form>
                            </div>
                            @else
                                <p><a href="{{ url('register') }}">Register</a> or <a href="{{ url('login') }}">Log in</a> to rate the apartment.</p>
                            @endauth

                        </div>
                        <!-- #reviews end -->

                    </div>
                    <!-- #tab-content end -->
                </div>

                <!-- paginate -->

                <!-- paginate end -->
            </div>

            <!-- .row end -->
            <div class="col-xs-12 col-sm-12 col-md-12 pager-2">
                <div class="page-prev">
                    <a href="
                    {{ optional($prevApartment)->slug ? url('catalog/'.optional($prevApartment)->slug) : ''}}"
                        {{ optional($prevApartment)->slug ? '' : 'disabled'}}><i class="fa fa-angle-left"></i>
                        <span>Previous Apartment</span>
                    </a>
                </div>
                <div class="page-next">
                    <a href="
                    {{ optional($nextApartment)->slug ? url('catalog/'.optional($nextApartment)->slug) : ''}}"
                        {{ optional($nextApartment)->slug ? '' : 'disabled'}}>
                        <span>Next Apartment</span>
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

        </div>
        <!-- .container end -->

    </section>

</x-layout>
