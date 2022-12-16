<header>
    <div class="header_top">
        <div class="container d-flex align-items-center justify-content-end">

            <div class="visa text-uppercase me-3">
                dc power visa
            </div>
            <div class="more_sites text-uppercase">
                addditional dc sites
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header_bottom d-flex align-items-center justify-content-between">
            <div class="logo">
                <img src=" {{ Vite::asset('resources/img/dc-logo.png')}} " alt="">
            </div>
            <nav class="nav justify-content-center aling-items-center">
                <a class="nav-link text-uppercase {{Route::currentRouteName() === 'charachter' ? 'active' : ''}}" href="{{route('charachter')}}">charachter</a>
                <a class="nav-link text-uppercase {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">comics</a>
                <a class="nav-link text-uppercase  {{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="#">movies</a>
                <a class="nav-link text-uppercase {{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="#">tv</a>
                <a class="nav-link text-uppercase {{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="#">games</a>
                <a class="nav-link text-uppercase {{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="#">collectibles</a>
                <a class="nav-link text-uppercase {{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="#">videos</a>
                <a class="nav-link text-uppercase  {{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="#">fans</a>
                <a class="nav-link text-uppercase  {{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="#">news</a>
                <a class="nav-link text-uppercase  {{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="#">shop</a>

            </nav>
            <div class="input_bar">
                <input type="search" name="search" id="search" placeholder="search">
            </div>
        </div>
    </div>
</header>