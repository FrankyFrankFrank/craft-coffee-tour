<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '338089793271285'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=338089793271285&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

</head>
<body>
    @component('components.analytics')
    @endcomponent
    <div>
        <nav class="navbar navbar-custom navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.svg') }}" alt="Craft Coffee Tour Logo">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right text-uppercase lspace-med">
                        <li><a href="/locations">Locations</a></li>
                        <li><a class="hover-tilt">Buy</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="container-fluid footer">
            <div class="row">
                <div class="flex justify-center align-center mt-med mb-med">
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
                    <div class="column trp padded-sm">
                        @component('svg/logo-trp')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://use.typekit.net/dkg1wjh.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Gleam -->
    <script src="https://js.gleam.io/oi-7Vvahb7r.js" async="async"></script>

    @yield('scripts')
    
</body>
</html>
