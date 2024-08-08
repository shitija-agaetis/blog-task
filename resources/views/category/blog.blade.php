<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style>
    </style>
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
                    <form class="form-inline my-2 my-lg-0" action="{{ route('blog') }}" method="GET">
                        <input class="form-control mr-sm-2" autocomplete="off" type="search" name="search" placeholder="Search" value="{{ request('search') }}" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>

<div class="container mt-5">
    <div class="row d-flex flex-col mb-4">
        <div class="col-md-6">
            <form method="GET" action="{{ route('blog') }}">
                <div class="form-group">
                    <label for="sort">Sort By:</label>
                    <select id="sort" name="sort" class="form-control" onchange="this.form.submit()">
                        <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name (A-Z)</option>
                        <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z-A)</option>
                        <option value="date_asc" {{ request('sort') == 'date_asc' ? 'selected' : '' }}>Date (Oldest)</option>
                        <option value="date_desc" {{ request('sort') == 'date_desc' ? 'selected' : '' }}>Date (Newest)</option>
                    </select>
                </div>
                <input type="hidden" name="filter" value="{{ request('filter') }}">
                <input type="hidden" name="search" value="{{ request('search') }}">
            </form>
        </div>

        <div class="col-md-6">
            <form method="GET" action="{{ route('blog') }}">
                <div class="form-group">
                    <label for="filter">Filter By Category:</label>
                    <select id="filter" name="filter" class="form-control" onchange="this.form.submit()">
                        <option value="">All Categories</option>
                        @foreach ($allCategories as $category)
                            <option value="{{ $category->name }}" {{ request('filter') == $category->name ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="sort" value="{{ request('sort') }}">
                <input type="hidden" name="search" value="{{ request('search') }}">
            </form>
        </div>
    </div>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-4 col-sm-12 mb-4">
                <div class="card">
                    @if ($category->image_path)
                        <img class="card-img-top" src="{{ asset($category->image_path) }}" alt="{{ $category->name }}">
                    @else
                        <img class="card-img-top" src="{{ asset('default-image.jpg') }}" alt="Default Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">{{ $category->description }}</p>
                        <!-- Inside the loop in your existing view (resources/views/blog.blade.php) -->
                        <a href="{{ route('category.readmore', $category->id) }}" class="btn btn-primary">Read More</a>

                        @auth
                            <button type="button" class="btn favorite-btn" data-id="{{ $category->id }}" data-favorited="{{ Auth::user()->favoriteCategories->contains($category->id) }}">
                                {{ Auth::user()->favoriteCategories->contains($category->id) ? 'Remove from Favorite' : 'Add to Favorite' }}
                            </button>
                        @else
                            <button class="btn favorite-btn" data-toggle="modal" data-target="#loginModal">Add to Favorite</button>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $categories->appends(['filter' => request('filter'), 'sort' => request('sort'), 'search' => request('search')])->links() }}
    </div>
</div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login or Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Please login or register to add to your favorites.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                </div>
            </div>
        </div>
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

<script>
    $(document).ready(function () {
        $('.favorite-btn').click(function () {
            var button = $(this);
            var categoryId = button.data('id');
            var favorited = button.data('favorited');
            var url = favorited ? `/category/${categoryId}/unfavorite` : `/category/${categoryId}/favorite`;
            var method = favorited ? 'DELETE' : 'POST';
            var csrfToken = '{{ csrf_token() }}';

            toggleFavorite(button, url, method, csrfToken);
        });

        function toggleFavorite(button, url, method, csrfToken) {
            $.ajax({
                url: url,
                type: method,
                data: {
                    _token: csrfToken
                },
                success: function (response) {
                    updateButtonState(button, !button.data('favorited'));
                }
            });
        }

        function updateButtonState(button, isFavorited) {
            if (isFavorited) {
                button.text('Remove from Favorite');
                button.data('favorited', true);
            } else {
                button.text('Add to Favorite');
                button.data('favorited', false);
            }
        }
    });
</script>


</body>

</html>


</body>

</html>
