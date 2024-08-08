<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional: Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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

        <!-- Page Content -->
        <div class="container mt-4">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>This is where you can manage your travel blog content, including posts, categories, and more.</p>

            <!-- Example Card -->
            <div class="card mt-4">
                <div class="card-header">
                    Example Card
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
