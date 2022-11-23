@props(['apartments'])
<!-- product #1 -->
@foreach($apartments as $apartment)
    <div class="col-xs-12 col-sm-4 col-md-4 product-item clearfix">
        {{--    <div class="col-xs-12 col-sm-4 col-md-3 product-item  clearfix">--}}
    <x-apartment-card
        :apartment="$apartment"
    />
    <!-- .product-bio end -->
</div>
@endforeach
<!-- .product-item clearfix end -->


