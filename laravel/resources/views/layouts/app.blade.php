 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','PHS')}}</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- Fonts -->
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      
    </head>
    <body>

        @include('inc.navbar')
         
       
       @yield('content')
       
    </body>
</html>
