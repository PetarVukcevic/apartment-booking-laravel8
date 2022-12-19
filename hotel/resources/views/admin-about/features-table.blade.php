<x-layout>

    <section class=" bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-section" >
            <img src={{ asset("assets/images/page-title/contact,png.jpg") }} alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title title-1 text-center">
                        <div class="title-bg">
                            <h2>Administrator</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="active">admin section</li>
                        </ol>
                    </div>
                    <!-- .page-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <section>
        <div class="container">
            <h1>All Features</h1>

            <x-flash/>
            <div class="row">
                <a href="{{ url('/features-create') }}" class="btn btn-success">Create new</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($features->count())
                    @foreach($features as $feature)
                        <x-admin-features-table :feature="$feature"/>
                    @endforeach
                    @else
                        <div>
                            <h1>No Features in the database</h1>
                        </div>
                    @endif
                    </tbody>
                </table>


            </div>
        </div>
    </section>

</x-layout>
