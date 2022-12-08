@props(['features'])
<div class="col-xs-12 col-sm-12 col-md-6">
    <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

        <!-- Features start -->
       @foreach($features as $feature)
           <x-feature :feature="$feature"/>
        @endforeach
        <!-- Features end -->

    </div>
    <!-- End .Accordion-->
</div>
