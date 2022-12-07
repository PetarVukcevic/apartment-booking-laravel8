<div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
    <ul class="list-inline">
        <li>
            <a class="active-filter" href="#" data-filter="*">All Apartments</a>
        </li>

        @foreach($categories as $category)
            <li>
                <a href="#" data-filter=".{{ $category->slug }}">{{ $category->name }}</a>
            </li>
        @endforeach

    </ul>
</div>
