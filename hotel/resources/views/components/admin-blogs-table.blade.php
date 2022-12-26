<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}">--}}
            <form method="POST" action="{{ url('admin-blogs/') }}">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="feature_delete_id" id="blog_id">
                    <h5>Are you sure you want to delete this Blog?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

<tr>
    <th scope="row">{{ $blog->id }}</th>
    <td>{{ $blog->author }}</td>
    <td>{{ $blog->author_role }}</td>
    <td>{{ $blog->description }}</td>

    <td style="display: flex; gap: 2px;">
        <a class="btn btn-success" href="/features-edit/{{ $blog->id }}" >Edit</a>

        <button type="button" value="{{ $blog->id }}" class="btn btn-danger deleteBlog" title='Delete'>Delete</button>
    </td>

</tr>

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteBlog').click(function (e){
                e.preventDefault();

                var app_id = $(this).val();
                $('#blog_id').val(app_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
