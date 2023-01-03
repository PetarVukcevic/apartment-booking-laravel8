@props(['rating'])
<li class="review-comment">
    <h6>{{ $rating->name }}</h6>
    <p class="review-date">Posted <time>{{ $rating->created_at }}</time></p>
    <x-comment-stars :rating="$rating->grade"/>
    <div class="product-comment">
        <p>{{ $rating->comment }}</p>
    </div>
</li>
