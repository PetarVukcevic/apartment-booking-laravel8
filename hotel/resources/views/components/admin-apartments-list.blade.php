<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
{{--            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}">--}}
            <form method="POST" action="{{ url('admin-apartments/') }}">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Apartment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="apartment_delete_id" id="apartment_id">
                    <h5>Are you sure you want to delete this Apartment?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

<tr>
    <th scope="row">{{ $apartment->id }}</th>
        <td>{{ $apartment->title }}</td>
        <td>{{ $apartment->category->name }}</td>
        <td>{{ $apartment->landlord->first_name }} {{ $apartment->landlord->last_name }}</td>
        <td>{{ $apartment->city->name }}</td>
        <td>
            <a class="btn btn-success">Edit</a>

            <button type="button" value="{{ $apartment->id }}" class="btn btn-danger deleteApartment" title='Delete'>Delete</button>

        </td>
</tr>

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteApartment').click(function (e){
               e.preventDefault();

               var app_id = $(this).val();
               $('#apartment_id').val(app_id);
               $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
