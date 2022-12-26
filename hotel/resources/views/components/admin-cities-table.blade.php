<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}">--}}


            <form method="POST" action="{{ url('admin-categories/') }}">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="city_delete_id" id="city_delete_id">
                    <h5>Are you sure you want to delete this Category?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

<tr>
    <th scope="row">{{ $city->id }}</th>
    <td>{{ $city->name }}</td>
    <td>{{ $city->description }}</td>
    <td>{{ $city->created_at }}</td>
    <td>{{ $city->updated_at }}</td>


    <td style="display: flex; gap: 2px;">
        <a class="btn btn-success" href="/cities-edit/{{ $city->id }}" >Edit</a>

        <button type="button" value="{{ $city->id }}" class="btn btn-danger deleteCity" title='Delete'>Delete</button>
    </td>

</tr>

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteCity').click(function (e){
                e.preventDefault();

                var app_id = $(this).val();
                $('#city_delete_id').val(app_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection


