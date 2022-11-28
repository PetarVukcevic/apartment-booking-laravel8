    <li>
        <a href="/catalog">all</a>
    </li>
    @foreach($categories as $category)
        <li>
            <a href="{{ url('/catalog?category='.$category->slug) }}">{{$category->name}}</a>
        </li>
    @endforeach

