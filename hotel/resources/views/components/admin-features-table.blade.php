<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}">--}}
            <form method="POST" action="{{ url('admin-features/') }}">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Feature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="feature_delete_id" id="feature_id">
                    <h5>Are you sure you want to delete this Feature?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

<tr>
    <th scope="row">{{ $feature->id }}</th>
    <td>{{ $feature->title }}</td>
    <td>{{ $feature->description }}</td>

    <td style="display: flex; gap: 2px;">
        <a class="btn btn-success" href="/features-edit/{{ $feature->id }}" >Edit</a>

        <button type="button" value="{{ $feature->id }}" class="btn btn-danger deleteFeature" title='Delete'>Delete</button>
    </td>

</tr>

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteFeature').click(function (e){
                e.preventDefault();

                var app_id = $(this).val();
                $('#feature_id').val(app_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
