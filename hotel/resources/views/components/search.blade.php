<div class="widget widget-search">
    <div class="widget-content">
        <form class="form-search" method="GET">

            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group">
                <input type="text" name="search" class="form-control"
                       placeholder="Type Your Search Words"
                       value="{{ request('search') }}">

                <span class="input-group-btn">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </span>

            </div>
            <!-- /input-group -->
        </form>
    </div>
</div>
