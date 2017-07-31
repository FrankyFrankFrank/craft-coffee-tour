<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>
<body>
    @component('components.analytics')
    @endcomponent
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.svg') }}" alt="Dispute Bills">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="container-fluid footer">
            <div class="row">
                <div class="flex justify-center align-center">
                    <div class="column logo padded-sm">
                        @component('svg/logo-stacked')
                        @endcomponent
                    </div>
                    <div class="column about padded-sm">
                        <h4 class="mb-tiny mt-tiny">Toronto Craft Coffee Tour</h4>
                        <div class="social">
                            <a 
                                class="text-plain" 
                                href="https://www.instagram.com/craftcoffeeto/"  
                                target="_blank"
                            >
                                <i class="fa fa-instagram fa-2x pt-tiny pr-tiny pb-tiny" aria-hidden="true"></i>
                            </a>
                            <a 
                                class="text-plain" 
                                href="https://twitter.com/craftcoffeeto"  
                                target="_blank"
                            >
                                <i class="fa fa-twitter fa-2x padded-tiny" aria-hidden="true"></i>
                            </a>
                            <a 
                                class="text-plain" 
                                href="https://www.facebook.com/CraftCoffeeTO/"  
                                target="_blank"
                            >
                                <i class="fa fa-facebook-official fa-2x padded-tiny" aria-hidden="true"></i>
                            </a>
                        </div>
                        <p class="mb-tiny">
                            In partnership with The Roasters Pack<br/>
                            <a href="http://www.theroasterspack.com" target="_blank">
                                <strong>www.theroasterspack.com</strong>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://use.typekit.net/dkg1wjh.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>
