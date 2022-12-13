<tr>
    <th scope="row">{{ $apartment->id }}</th>
        <td>{{ $apartment->title }}</td>
        <td>{{ $apartment->category->name }}</td>
        <td>{{ $apartment->landlord->first_name }} {{ $apartment->landlord->last_name }}</td>
        <td>{{ $apartment->city->name }}</td>
        <td>
            <a class="btn btn-success">Edit</a>

            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}" style="display: inline">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger delete" title='Delete'>Delete</button>
            </form>
        </td>
</tr>
