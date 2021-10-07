<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{--      CSS --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
   {{--  JS --}}
    <link rel="stylesheet" href="{{asset('js/tailwind.js')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
    
</head>
<body>
    @include('backoffice.partials.nav')

    <section class="home-section">
        <div class="text">
            <h2 class="page-section-heading text-center text-uppercase py-5">

                @yield('nousagi')

            </h2>

            
        </div>
</body>
</html>