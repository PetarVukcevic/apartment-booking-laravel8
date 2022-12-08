@props(['blogs'])
<div class="col-xs-12 col-sm-12 col-md-6">
    <div id="testimonial-oc-5"  class="testimonial-slide testimonial testimonial-3">

        <!-- single blog start-->
        @foreach($blogs as $blog)
            <x-blog :blog="$blog"/>
        @endforeach
        <!-- single blog end-->

    </div>
</div>
