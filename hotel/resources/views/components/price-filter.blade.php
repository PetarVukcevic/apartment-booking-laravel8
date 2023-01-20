<div class="widget widget-filter">
    <div class="widget-title">
        <h3>Filter</h3>
    </div>
    <div class="widget-content">
        <form id="filter-form" action="{{ url()->current() }}" method="GET">
            <div id="slider-range">
            </div>
            <p>
                <label for="amount">Price: </label>
                <input type="text" id="amount" readonly>
                <input type="hidden" id="minPrice" name="minPrice">
                <input type="hidden" id="maxPrice" name="maxPrice">
                <button type="submit" class="btn btn-secondary">filter</button>

            </p>
    </form>
    </div>

</div>

<script>

    var minPrice = {{ $minPrice ?? 0 }};
    var maxPrice = {{ $maxPrice ?? 1000 }};

</script>
