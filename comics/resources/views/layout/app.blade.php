<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dc comics {{$title}}</title>

    @vite('resources/js/app.js')
</head>


<body>
    @include('partials.header')
    <!-- /header -->
    <main>
        @include('partials.jumbotron')

        <!-- /jumbotron -->

        @yield('content')

        @include('partials.banner')
        <!-- /banner -->
    </main>
    <!-- /main -->

    @include('partials.footer')
    <!-- /footer -->
</body>


</html>