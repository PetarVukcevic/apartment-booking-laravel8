<tr>
    <th scope="row">{{ $apartment->id }}</th>
        <td>{{ $apartment->title }}</td>
        <td>{{ $apartment->category->name }}</td>
        <td>{{ $apartment->landlord->first_name }} {{ $apartment->landlord->last_name }}</td>
        <td>{{ $apartment->city->name }}</td>
        <td>
            <a class="btn btn-success">Edit</a>
            <button class="btn btn-danger">Delete</button>
        </td>
</tr>
