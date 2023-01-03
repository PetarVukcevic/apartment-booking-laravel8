@props(['rating'])
<li class="review-comment">
    <h6>{{ $rating->name }}</h6>
    <p class="review-date">Posted <time>{{ $rating->created_at }}</time></p>
    <div class="product-rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    <div class="product-comment">
        <p>{{ $rating->comment }}</p>
    </div>
</li>
