<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon-32x32.png')}}">
    <title>@yield('title') - {{ get_company_name() }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('new/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/css/auth.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('new/images/Bg1.png');">
            @yield('content')
        </div>
    </div>
</body>

</html>