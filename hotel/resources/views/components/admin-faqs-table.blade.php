<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}">--}}
            <form method="POST" action="{{ url('admin-faqs') }}">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="faq_delete_id" id="faq_delete_id">
                    <h5>Are you sure you want to delete this FAQ?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

<tr>
    <th scope="row">{{ $faq->id }}</th>
    <td>{{ $faq->title }}</td>
    <td>{{ $faq->description }}</td>
    <td>{{ $faq->created_at }}</td>
    <td>{{ $faq->updated_at }}</td>

    <td style="display: flex; gap: 2px;">
        <a class="btn btn-success" href="/faqs-edit/{{ $faq->id }}" >Edit</a>

        <button type="button" value="{{ $faq->id }}" class="btn btn-danger deleteFaq" title='Delete'>Delete</button>
    </td>

</tr>

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteFaq').click(function (e){
                e.preventDefault();

                var app_id = $(this).val();
                $('#faq_delete_id').val(app_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
