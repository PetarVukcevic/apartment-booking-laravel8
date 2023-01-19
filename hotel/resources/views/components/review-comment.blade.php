@props(['rating'])
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--            <form method="POST" action="{{ route('apartments.destroy' , $apartment->id) }}">--}}
            <form method="POST" action="{{ url()->current() }}">

                @method('DELETE')
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="review_delete_id" id="review_id">
                    <h5>Are you sure you want to delete this Review?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>


<li class="review-comment">
    <h6>{{ $rating->user->first_name }} {{ $rating->user->last_name }}</h6>
    @if(@auth()->user()->id === $rating->user->id)
        <button type="button" value="{{ $rating->id }}" style="margin-left: 5px" class="pull-right btn btn-danger deleteReview" title='Delete'>Delete</button>
        <a class="btn btn-success pull-right text-white">Edit</a>


    @endif

    <p class="review-date">Posted <time>{{ $rating->created_at->format('F j, Y, g:i a') }}</time></p>
    <x-comment-stars :rating="$rating->grade"/>
    <div class="product-comment">
        <p>{{ $rating->comment }}</p>
    </div>
</li>

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteReview').click(function (e){
                e.preventDefault();
                var app_id = $(this).val();
                $('#review_id').val(app_id);
                $('#deleteModal').modal('show');
                $('#deleteForm').attr("method", "DELETE");
            });
        });
    </script>
@endsection

