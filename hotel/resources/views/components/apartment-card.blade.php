@props(['apartment'])

<div class="product-img">
    <img src="assets/images/shop/grid/apartman_pr.png" alt="Apartment">
    <div class="product-hover">
        <div class="product-cart">
            <a class="btn btn-secondary btn-block" href="#">Book</a>
        </div>
    </div>
</div>
<!-- .product-img end -->
<div class="product-bio">
    <h4>
        <a href="#">{{ $apartment->title }}</a>
    </h4>
    <p class="product-price">{{ $apartment->price }}.00 €</p>
</div>
