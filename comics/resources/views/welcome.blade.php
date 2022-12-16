@extends('layout.app')

@section('content')


<section class="jumbotron">
</section>

<section class="comics_card ">
    <div class="container text-center">
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
        <button class="btn btn-primary mt-4 px-5 rounded-0 text-uppercase">load more</button>
    </div>
</section>



@endsection