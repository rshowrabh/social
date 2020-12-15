<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=5.0, initial-scale=1.0, user-scalable=no" />
    <title>FyreStream</title>
    <!--<link rel="icon" href="images/favicon-16x16.png" type="image/png">-->
    <!--<link href="/css/style.css" type="text/css" rel="stylesheet">-->

    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <link href="/css/style2.css" type="text/css" rel="stylesheet">
    <link href="/css/responsive.css" type="text/css" rel="stylesheet">

    <!--for resposive css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--for fonts -->

    <!--for resposive css-->
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!--other useful css-->

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0//css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!--other useful css-->

    <!--other useful js-->

    <!--other useful js-->

    <!--for resposive js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!--for resposive js-->

</head>

<body>
<div class="let's-make-code">
    <div class="preempdia">
        <div class="header">
            <div class="container-fluid">
                <div class="header-flex">
                    <div class="header-row">
                        <div class="logo">
                            <a href="index.html" class="logo1"><img src="images/logo1.png" class="img-responsive"></a>
                            <a href="index.html" class="logo2"><img src="images/logo2.png" class="img-responsive"></a>
                        </div>

                        <div class="header-right">
                            <ul>
                                <li><a href="#"><img src="images/menu1.png" class="mnu1 img-responsive"><span>Global</span></a></li>
                                <li><a href="#"><img src="images/menu2.png" class="mnu1 img-responsive"><span>Videos</span></a></li>
                                <li><a href="#"><img src="images/menu3.png" class="mnu1 img-responsive"><span>Classifieds</span></a></li>
                                <li><a href="#"><img src="images/menu4.png" class="mnu1 img-responsive"><span>News</span></a></li>
                                <li class="last"><a class="join" href="{{ route('register') }}">Join</a></li>
                            </ul>
                        </div>

                        <a class="join join-mob" href="{{ route('register') }}">Join</a>
                    </div>

                    <div class="mid-logo">
                        <a class="logo3" href="index.html"><img src="images/logo3.png" class="logo-pic img-responsive"></a>
                    </div>
                </div>
            </div>
        </div><!-- end of header -->

        <div class="admin">
            <div class="admin-left">
                <div id="blog-demo" class="owl-carousel">
                    <div class="item item1">
                        <figure class="img-block">
                            <div class="slide-text">
                                <p>Lorem Ipsum is simply dummy text of the print
                                    ing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                <h4><a href="#">BRITNEY SPEARS</a>  LOS ANGELES</h4>
                            </div>
                        </figure>
                    </div>

                    <div class="item item2">
                        <figure class="img-block">
                            <div class="slide-text">
                                <p>Lorem Ipsum is simply dummy text of the print
                                    ing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                <h4><a href="#">BRITNEY SPEARS</a>  LOS ANGELES</h4>
                            </div>
                        </figure>
                    </div>

                    <div class="item item3">
                        <figure class="img-block">
                            <div class="slide-text">
                                <p>Lorem Ipsum is simply dummy text of the print
                                    ing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                <h4><a href="#">BRITNEY SPEARS</a>  LOS ANGELES</h4>
                            </div>
                        </figure>
                    </div>

                    <div class="item item4">
                        <figure class="img-block">
                            <div class="slide-text">
                                <p>Lorem Ipsum is simply dummy text of the print
                                    ing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                <h4><a href="#">BRITNEY SPEARS</a>  LOS ANGELES</h4>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="admin-right">
                <div class="admin-row">
                    <h3>Free to Join Fyrestream</h3>
                    <div class="admins">
                        <a href="#" class="admn"><img src="images/admin1.png" class="admn-pic img-responsive"></a>
                        <a href="#" class="admn"><img src="images/admin2.png" class="admn-pic img-responsive"></a>
                        <a href="#" class="admn"><img src="images/admin3.png" class="admn-pic img-responsive"></a>
                        <a href="#" class="admn admn4"><img src="images/admin4.png" class="admn-pic img-responsive"></a>
                    </div>

                    <div class="form-part">
                        <form method="POST" action="{{ route('register') }}">

                            <div class="form1">
                                <input class="name" placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            @csrf
                            <div class="form1">
                                <input placeholder="Email" class="name" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form1">
                                <input placeholder="Password" class="name" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form1">
                                <input placeholder="Confirm Password" class="name" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                            </div>

                            <div class="form1">
                                <input class="btnn" type="submit" name="Sign In" value="Sign In">


                                <p>Fyrestream is an entertainment social network and we respect your privacy. We do not re-distribute or sell your personal information to third-party organizations. Fyrestream will not disclose, without your consent, personal information collected about you, except for certain explicit circumstances in which disclosure is required by law. Read our <a href="#">Privacy Policy</a> for more.
                                    By entering this site, you agree to our <a href="#">Terms of Use</a>.</p>

                                <a class="creat" href="{{ route('register') }}">Create New Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of admin -->

        <div class="footer">
            <div class="container">
                <div class="footer-row">
                    <div class="ft-menu">
                        <ul>
                            <li><a href="#">About Fyrestream</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li class="last"><a href="#">Advertising</a></li>
                        </ul>
                    </div>

                    <ul class="store">
                        <li><a href="#"><img src="images/app-store.png" class="store img-responsive"></a></li>
                        <li class="last"><a href="#"><img src="images/play-store.png" class="store img-responsive"></a></li>
                    </ul><div class="clear"></div>
                    <p>Copyright © 2020 fyrestream All Rights Reserved</p>
                </div>
            </div>
        </div><!-- end of footer -->
    </div>
</div>









<!--for responsive slid-->

<script src="/js/owl.carousel.js"></script>

<script type="text/javascript">
    var owl = $('.owl-carousel');
    $("#blog-demo").owlCarousel( {
        nav: true,
        dots: true,
        dotsEach: true,
        loop:true,
        autoplay:false,
        autoplayTimeout:3000,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            560:{
                items:1,
                nav:true
            },
            767:{
                items:1,
                nav:true,
                loop:true
            },
            768:{
                items:1,
                nav:true
            },
            991:{
                items:1,
                nav:true,
                loop:true
            },
            1199:{
                items:1,
                nav:true,
                loop:true
            }
        }
    });
</script>
<!--for responsive slid-->
</body>
</html>




