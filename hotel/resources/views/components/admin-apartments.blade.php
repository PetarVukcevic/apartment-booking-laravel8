@props(['apartments'])
<div class="container">
    <h1>All Apartments</h1>

    <x-flash/>
    <div class="row">
        <a href="{{ url('/apartments-create') }}" class="btn btn-success">Create new</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Landlord</th>
                <th scope="col">City</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                    @foreach($apartments as $apartment)
                        <x-admin-apartments-list :apartment="$apartment"/>
                    @endforeach
                </tbody>
            </table>


    </div>
</div>
