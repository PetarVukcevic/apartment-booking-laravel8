@if ($paginator->hasPages())
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pager mb-30-xs mb-30-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="page-prev disabled" area-disabled="true">
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                </div>
            @else
                <div class="page-prev">
                    <a href="{{ request()->fullUrlWithQuery(['page' => $paginator->currentPage() - 1]) }}" rel="prev"><i class="fa fa-angle-left"></i></a>
                </div>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <div class="page-next">
                    <a href="{{ request()->fullUrlWithQuery(['page' => $paginator->currentPage() + 1]) }}" rel="next"><i class="fa fa-angle-right"></i></a>
                </div>
            @else
                <div class="page-next disabled" area-disabled="true">
                    <a href="{{ $paginator->nextPageUrl() }}" ><i class="fa fa-angle-right"></i></a>
                </div>
            @endif
        </div>
    </div>
@endif
