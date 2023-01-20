@props(['badges'])
<div class="col-xs-12 col-sm-12 col-md-6">
    <div class="row">

        @foreach($badges as $badge)
        <div class="col-xs-12 col-sm-6 col-md-6 feature feature-1">
            <div class="feature-icon">
                <i class="{{ $badge->icon_class }}"></i>
            </div>
            <h4 class="text-uppercase">{{ $badge->title }}</h4>
            <p>{{ $badge->description }}</p>
        </div>
        @endforeach
        <!-- .col-md-6 end -->
    </div>
    <!-- .row end -->
</div>
