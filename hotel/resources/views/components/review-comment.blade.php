@props(['rating'])
<li class="review-comment">
    <h6>{{ $rating->user->first_name }} {{ $rating->user->last_name }}</h6>
    <p class="review-date">Posted <time>{{ $rating->created_at->format('F j, Y, g:i a') }}</time></p>
    <x-comment-stars :rating="$rating->grade"/>
    <div class="product-comment">
        <p>{{ $rating->comment }}</p>
    </div>
</li>
