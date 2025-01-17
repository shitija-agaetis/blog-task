<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Dreamy Destination</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="logo" href="index.html"><img src="images/logo.jpg" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>

                        <!-- Check if user is authenticated -->
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('favourite') }}">Favorites</a>
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
    <!-- header section end -->

    <!-- banner section start -->
    <div class="container-fluid">
        <div class="banner_section layout_padding">
            <h1 class="banner_taital">welcome to<br>our blog</h1>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="image_main">
                            <div class="container">
                                <img src="images/img-1.png" class="image_1" alt="Slider Image 1">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image_main">
                            <div class="container">
                                <img src="images/img-1.png" class="image_1" alt="Slider Image 2">
                                <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image_main">
                            <div class="container">
                                <img src="images/img-1.png" class="image_1" alt="Slider Image 3">
                                <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="images/about-img.png" alt="About Image"></div>
                    <div class="like_icon"><img src="images/like-icon.png" alt="Like Icon"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">Most Awesome Blue Lake With Snow <br>Mountain</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png" alt="Facebook Icon"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png" alt="Twitter Icon"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png" alt="Instagram Icon"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="image_5"><img src="images/img-5.png" alt="Image 5"></div>
                    <h1 class="about_taital">About Us</h1>
                    <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="read_bt_1"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- blog section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="images/img-8.png" alt="Image 8"></div>
                    <div class="like_icon"><img src="images/like-icon.png" alt="Like Icon"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">Most Awesome Blue Lake With Snow <br>River</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png" alt="Facebook Icon"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png" alt="Twitter Icon"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png" alt="Instagram Icon"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="about_main">
                        <h1 class="follow_text">CONNECT & FOLLOW</h1>
                        <div class="follow_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon-1.png" alt="Facebook Icon"></a></li>
                                <li><a href="#"><img src="images/twitter-icon-1.png" alt="Twitter Icon"></a></li>
                                <li><a href="#"><img src="images/linkedin-icon-1.png" alt="LinkedIn Icon"></a></li>
                                <li><a href="#"><img src="images/instagram-icon-1.png" alt="Instagram Icon"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->

    <!-- newsletter section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="images/img-9.png" alt="Image 9"></div>
                    <div class="like_icon"><img src="images/like-icon.png" alt="Like Icon"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">Most Awesome Blue Lake With Snow <br>sky</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png" alt="Facebook Icon"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png" alt="Twitter Icon"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png" alt="Instagram Icon"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="newsletter_main">
                        <h1 class="newsletter_taital">NEWSLETTER</h1>
                        <div class="input_box">
                            <input type="text" class="input_text" placeholder="Enter Your email" name="Enter Your email">
                            <input type="text" class="input_text" placeholder="Your name" name="Your name">
                            <div class="send_text"><a href="#">Subscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter section end -->

    <!-- recent section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="images/img-10.png" alt="Image 10"></div>
                    <div class="like_icon"><img src="images/like-icon.png" alt="Like Icon"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">Most Awesome Blue Lake With Snow <br>foreste</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png" alt="Facebook Icon"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png" alt="Twitter Icon"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png" alt="Instagram Icon"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="newsletter_main">
                        <h1 class="recent_taital">Recent post</h1>
                        <div class="recent_box">
                            <div class="recent_left">
                                <div class="image_6"><img src="images/img-6.png" alt="Recent Image 1"></div>
                            </div>
                            <div class="recent_right">
                                <h3 class="consectetur_text">Consectetur adipiscing</h3>
                                <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                            </div>
                        </div>
                        <div class="recent_box">
                            <div class="recent_left">
                                <div class="image_6"><img src="images/img-7.png" alt="Recent Image 2"></div>
                            </div>
                            <div class="recent_right">
                                <h3 class="consectetur_text">Consectetur adipiscing</h3>
                                <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent section end -->

    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">1</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">2</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">3</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">4</li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="contact_img"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="contact_img"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="contact_img"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="contact_img"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mail_section">
                        <h1 class="contact_taital">Contact us</h1>
                        <input type="text" class="email_text" placeholder="Name" name="Name">
                        <input type="text" class="email_text" placeholder="Phone" name="Phone">
                        <input type="text" class="email_text" placeholder="Email" name="Email">
                        <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                        <div class="send_bt"><a href="#">send</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="#"><img src="images/logo.jpg" alt="Footer Logo"></a></div>
            <div class="footer_menu">
            </div>
            <div class="contact_menu">
                <ul>
                    <li><a href="#"><img src="images/call-icon.png" alt="Call Icon"></a></li>
                    <li><a href="#">Call : +01 1234567890</a></li>
                    <li><a href="blog.html"><img src="images/mail-icon.png" alt="Mail Icon"></a></li>
                    <li><a href="features.html">dreamydestinations@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
