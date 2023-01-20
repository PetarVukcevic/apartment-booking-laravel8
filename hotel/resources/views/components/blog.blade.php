<div class="testimonial-item">
    <div class="testimonial-content">
        <p>{{ $blog->description }}</p>
        <div class="testimonial-img">
            <img src="{{ asset($blog->author_img_url) }}" alt="author"/>
        </div>
    </div>
    <div class="testimonial-meta">
        <strong>{{ $blog->author }}</strong>, {{ $blog->author_role }}
    </div>
</div>
