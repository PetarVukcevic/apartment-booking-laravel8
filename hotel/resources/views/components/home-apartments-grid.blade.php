<div id="projects-all" class="row">

    @foreach($apartments as $apartment)

    <div class="col-xs-12 col-sm-6 col-md-4 project-item {{ $apartment->category->slug }}">
        <div class="project-img">
            <img class="" src="{{ asset($apartment->lg_profile_img) }}" alt="Image"/>
            <div class="project-hover">
                <div class="project-meta">
                    <h6>by {{ $apartment->landlord->first_name }} {{ $apartment->landlord->last_name }}</h6>
                    <h4>
                        <a href="#">{{ $apartment->title }}</a>
                    </h4>
                </div>
                <div class="project-zoom">
{{--                    <a class="img-popup" href="assets/images/projects/full/15.jpg" title="New Office Room"><i class="fa fa-plus"></i></a>--}}
                    <h3><a  href="{{ 'catalog/'.$apartment->slug }}">View</a></h3>
                </div>
            </div>
            <!-- .project-hover end -->
        </div>
        <!-- .project-img end -->

    </div>
    <!-- .project-item end -->
    @endforeach
</div>
