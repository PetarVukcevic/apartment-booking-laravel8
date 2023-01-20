@if(session()->has('success'))
    <div
        x-data ="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
