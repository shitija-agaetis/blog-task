<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Travel Diary</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.navigation')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: #ffffff;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar-custom {
            background-color: #007bff;
        }
        .navbar-custom .navbar-brand, .navbar-custom .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-custom .navbar-brand:hover, .navbar-custom .navbar-nav .nav-link:hover {
            color: #e2e6ea;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            background-color: #f8f9fa;
            position: relative;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white text-center">Admin Panel</h4>
        <a href="#">Dashboard</a>
        <a href="{{ route('category.index') }}">Categories</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand" href="#">Travel Blog Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <x-app-layout></x-app-layout>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
            <a href="{{ url('admin/dashboard') }}" class="btn btn-primary">Go Back Home</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
