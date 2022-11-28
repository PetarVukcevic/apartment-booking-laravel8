    <li>
        <a href="/catalog">all</a>
    </li>
    @foreach($categories as $category)
        <li>
            <a href="{{ url('/catalog?category='.$category->name) }}">{{$category->name}}</a>
        </li>
    @endforeach

