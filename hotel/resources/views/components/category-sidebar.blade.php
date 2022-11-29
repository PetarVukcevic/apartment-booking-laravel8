    <li>
        <a href="/catalog?{{ http_build_query(request()->except('category', 'page')) }}"
           :active="request()->routeIs('catalog')">all</a>
    </li>
    @foreach($categories as $category)
        <li>
            <a href="{{ url('/catalog?category='.$category->slug) }}&{{ http_build_query(request()->except('category', 'page')) }}">{{$category->name}}</a>
        </li>
    @endforeach

