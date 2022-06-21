<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(Session::has('seo_was_set'))
    {!! SEO::generate() !!}
    @else
    <title>@yield('title') - {{ get_company_name() }}</title>
    @endif
    <link rel="canonical" href="{{$canonical_url}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard/images/logo-mini.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="{{ asset('new/css/style.css') }}" rel="stylesheet">
    {!! settings('website_header_script') !!}
    @include('website.google_analytics')
    @stack('stylesheets')
    <style>
        #hero {
            background-image: url("new/images/hero.jpg");
            background-image:
                linear-gradient(to right, #315453, #ffffff00),
                url('new/images/hero.jpg');

            max-height: max-content;
            width: 100%;
            background-size: cover;

        }

        #bgtouch {
            background-image: url("new/images/Bg1.png");
        }
    </style>
</head>

<body>
    <div id="app">
        @include('website.layouts.header')
        <main>
            @yield('content')
        </main>
        @include('website.layouts.footer')
    </div>

    <!-- javascript libraries -->
    <script type="text/javascript">
        window.currencyConfig = {!! currencyConfig()!!};
    </script>
    <script src="{{ asset('calculator/app.js') }}"></script>
    <!-- <script src="{{ mix('/js/app.js') }}"></script> -->

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {!! settings('website_footer_script') !!}
    @stack('scripts')
</body>

</html>