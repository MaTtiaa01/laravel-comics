@extends('layout.app')

@section('content')

<div class="banner_char"></div>
<section class="comic_description py-4">
    <div class="container_60">
        <div class="row">
            <div class="col-7">
                <h3>{{$comics[0]['title']}}</h3>
                <div class="buy_details py-3">
                    <div class="row">
                        <div class="col-7 d-flex justify-content-between">
                            <div class="price">
                                <span>U.S. Price : </span>
                                <span>{{$comics[0]['price']}}</span>
                            </div>
                            <div class="text-uppercase">available</div>
                        </div>
                        <div class="col-5 d-flex align-items-center justify-content-center">
                            <div>Check Availability</div>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <p>
                        {{$comics[0]['description']}}
                    </p>
                </div>
            </div>
            <div class="col-5">
                <div class="advertisment">
                    <h5>advertisment</h5>
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection