<!DOCTYPE html>
<html>
    <head>
        <title>TO DO</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet"  href="{{ asset('bootstrap/bootstrap.css') }}">
        <link rel="stylesheet"  href="{{ asset('bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet"  href="{{ asset('css/style.css') }}">


    </head>
    <body>
<img src="{{ asset('/images/1.jpg') }}">

<div class="container">
    @yield('content')
</div>

    </body>
</html>
