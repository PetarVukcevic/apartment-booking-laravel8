    <li>
        <a href="/catalog">all</a>
    </li>
    @foreach($categories as $category)
        <li>
            <a href="{{ url('/catalog?category='.$category->slug) }}&{{ http_build_query(request()->except('category')) }}">{{$category->name}}</a>
        </li>
    @endforeach

