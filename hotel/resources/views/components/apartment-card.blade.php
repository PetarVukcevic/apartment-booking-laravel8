@props(['apartment'])

<div class="product-img">
    <img src={{ url("assets/images/shop/grid/apartman_pr.png") }} alt="Apartment">
    <div class="product-hover">
        <div class="product-cart">
            <a class="btn btn-secondary btn-block" href="{{ 'catalog/'.$apartment->slug }}">View</a>
        </div>
    </div>
</div>
<!-- .product-img end -->
<div class="product-bio">
    <h4>
        <a href="{{ url('catalog/'.$apartment->slug) }}">{{ $apartment->title }}</a>

    </h4>
    <p class="product-price">{{ $apartment->price }}.00 €</p>

    <p>By  <a href="{{ url('catalog/?landlord=').$apartment->landlord->username }}">{{ $apartment->landlord->username }}</a></p>

</div>
