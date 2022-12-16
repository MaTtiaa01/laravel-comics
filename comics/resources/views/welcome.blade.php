@extends('layout.app')

@section('content')

<main>
    <section class="jumbotron">
    </section>

    <section class="comics_card ">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 g-4">
                @forelse($comics as $comic)
                <div class="col">
                    <div class="card">
                        <div class="card-head">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div class="card-body">
                            <h5>{{$comic['series']}}</h5>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col">
                    <p>No comics to show yet!</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

</main>

@endsection