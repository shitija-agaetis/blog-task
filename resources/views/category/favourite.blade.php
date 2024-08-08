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
      .card {
         transition: transform 0.2s, box-shadow 0.2s;
      }
      .card:hover {
         transform: translateY(-10px);
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
      .card-img-top {
         height: 200px;
         object-fit: cover;
      }
      .favorite-btn {
         background-color: #ff4081;
         border: none;
         color: white;
      }
      .favorite-btn:hover {
         background-color: #ff80ab;
      }
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
                     <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                  </li>
                 @if (Route::has('login'))
                        @auth
                        <li><x-app-layout></x-app-layout></li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                        @endif
                  <li class="nav-item">
                     <a class="nav-link" href="#"><img src="{{ asset('images/serach-icon.png') }}" alt="Search Icon"></a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div> 
 
   <div class="container mt-5">
      <div class="row">
         @forelse ($favoriteCategories as $category)
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
                  <a href="{{ route('category.readmore', $category->id) }}" class="btn btn-primary">Read More</a>
                  <form action="{{ route('category.unfavorite', $category->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button
                      <button type="submit" class="btn favorite-btn">Remove from Favorites</button>
                  </form>
               </div>
            </div>
         </div>
         @empty
         <p>No favorite categories found.</p>
         @endforelse
      </div>
   </div>
 
  <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="#"><img src="{{ asset('images/logo.jpg') }}"></a></div>
            <div class="footer_menu">
               
            </div>
            <div class="contact_menu">
                <ul>
                    <li><a href="#"><img src="{{ asset('images/call-icon.png') }}"></a></li>
                    <li><a href="#">Call : +01 1234567890</a></li>
                    <li><a href="blog.html"><img src="{{ asset('images/mail-icon.png') }}"></a></li>
                    <li><a href="features.html">dreamydestinations@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
 

</body>
</html>