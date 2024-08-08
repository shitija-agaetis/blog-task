<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>{{ $category->name }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <div class="header_section">
        <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="logo" href="{{ url('/') }}"><img src="{{ asset('images/logo.jpg') }}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('favourite') ? 'active' : '' }}" href="{{ route('favourite') }}">Favorites</a>
                                </li>
                                <li class="nav-item">
                                    <x-app-layout></x-app-layout>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container mt-5">
        <h5>
        <h4>{{ $category->name }}</h4>
        @if ($category->image_path)
            <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}">
        @else
            <img src="{{ asset('default-image.jpg') }}" alt="Default Image">
        @endif
        <p>{{ $category->description }}</p>

        @if ($weather) 
            <div class="weather-info">
                <h2>Weather in {{ $category->name }}</h2>
                <p>Temperature: {{ $weather['current']['temp_c'] }}°C</p>
                <p>Condition: {{ $weather['current']['condition']['text'] }}</p>
                <p>Humidity: {{ $weather['current']['humidity'] }}%</p>
                <p>Wind Speed: {{ $weather['current']['wind_kph'] }} kph</p>
            </div>
        @else
            <p>Weather information is not available at the moment.</p>
        @endif

        </h5>
    </div>

    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="#"><img src="{{ asset('images/logo.jpg') }}" alt="Logo"></a></div>
            <div class="footer_menu"></div>
            <div class="contact_menu">
                <ul>
                    <li><a href="#"><img src="{{ asset('images/call-icon.png') }}" alt="Call Icon"></a></li>
                    <li><a href="#">Call : +01 1234567890</a></li>
                    <li><a href="mailto:dreamydestinations@gmail.com"><img src="{{ asset('images/mail-icon.png') }}" alt="Mail Icon"></a></li>
                    <li><a href="mailto:dreamydestinations@gmail.com">dreamydestinations@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>  

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
 