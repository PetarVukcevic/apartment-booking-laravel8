@props(['apartments'])
@foreach($apartments as $apartment)
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 product-item clearfix">
            <div class="product-img">
                <img src={{ $apartment->profile_img }} alt="Apartment">
                <div class="product-hover">
                    <div class="product-cart">
                        <a class="btn btn-secondary btn-block" href="{{ 'catalog/'.$apartment->slug }}">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-6 clearfix pt-md">
            <div class="product-bio">
                <h4>
                    Title:
                    <a href="{{ url('catalog/'.$apartment->slug) }}"> {{ $apartment->title }}</a>

                </h4>
                <p class="product-price">Price per night: <strong>{{ $apartment->price }}.00 €</strong></p>

                <p>Landlord:  <a href="{{ url('catalog/?landlord=').$apartment->landlord->username }}">{{ $apartment->landlord->username }}</a></p>

                <span>Category: <a href="{{ url('catalog?category='.$apartment->category->slug) }}">{{ $apartment->category->name }}</a></span>

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

@endforeach
