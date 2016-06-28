<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet"  href="{{ asset('bootstrap/bootstrap.css') }}">
        <link rel="stylesheet"  href="{{ asset('bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet"  href="{{ asset('css/style.css') }}">


    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
