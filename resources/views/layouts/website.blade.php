<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dev Shefat</title>
    <link rel="shortcut icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Neuton|Teko" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/defaultcss.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/skill.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/responsive.css">
</head>

<body>

    @yield('website')


    <!--    footer part start-->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <h3>Visit pages</h3>
                    <ul class="list-unstyled three-column">
                        <li>Home</li>
                        <li>Services</li>
                        <li>About</li>
                        <li>Code</li>
                        <li>Design</li>
                        <li>Host</li>
                        <li>Contact</li>
                        <li>Company</li>
                    </ul>
                    <ul class="list-unstyled social-list">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h3>latest Articles</h3>
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="{{asset('contents/website')}}images/gallery/p8.png" style="width: 64px; height: 64px;" alt="" class="media-object" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Programming</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="{{asset('contents/website')}}images/gallery/p12.png" style="width: 64px; height: 64px;" alt="" class="media-object" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Coding</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="{{asset('contents/website')}}images/gallery/p11.png" style="width: 64px; height: 64px;" alt="" class="media-object" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Web Sesign</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <h3>Our Work</h3>
                    <img class="img-thumbnail img-fluid" src="{{asset('contents/website')}}images/gallery/p1.jpg" alt="" />
                    <img class="img-thumbnail img-fluid" src="{{asset('contents/website')}}images/gallery/p10.png" alt="" />
                    <img class="img-thumbnail img-fluid" src="{{asset('contents/website')}}images/gallery/p2.png" alt="" />
                    <img class="img-thumbnail img-fluid" src="{{asset('contents/website')}}images/gallery/P4.png" alt="" />
                </div>

            </div>
        </div>
        <div class="copyright text-center">
            Copyright &copy; 2018 <span>DEV SHEFAT</span>
        </div>
    </footer>
    <!--    footer part end-->

    <!--    java script part -->
    <script src="{{asset('contents/website')}}/js/jquery-1.12.4.min.js"></script>
    <script src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/website')}}/js/lightbox.min.js"></script>
    <script src="{{asset('contents/website')}}/js/type.js"></script>
    <script src="{{asset('contents/website')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('contents/website')}}/js/wow.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.filterizr.min.js"></script>
    <script src="{{asset('contents/website')}}/js/scrolling-parallax.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.easeScroll.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.parallax.js"></script>
    <script src="{{asset('contents/website')}}/js/custom.js"></script>
    <script>
        $("html").easeScroll();
        var $scene = $('#scene');
        $scene.parallax();
    </script>

</body>

</html>
