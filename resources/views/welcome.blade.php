<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pisangin Aja</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    <meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
	<link href="public/template/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    {{-- "{{ asset('css/app.css') }}" --}}
    {{-- {{ url('images/logo.png') }} --}}
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{ asset('template/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{ asset('template/css/style.css')}}"/>
    {{-- our team --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        <style>
            /* @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); */
            #team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #ffa806;
    border-color: #ffa806;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color:#ffa806 ;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #ffa806 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #ffa806  !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
        </style>

    </head>
    <body>
        <!-- Header section -->
	{{-- <header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
                    <a href="https://instagram.com/pisangin_ajaa?igshid=dc5j4580olwz"><i class="fa fa-instagram"> Pisangin_Aja</i></a>
				</div>  
			</div>
        </div>
	</header> --}}
	<!-- Header section end -->
    {{-- <div class="container"> --}}
        {{-- class="flex-center position-ref full-height" --}}
        {{-- class="navbar navbar-expand-md navbar-light bg-white" --}}
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="https://instagram.com/pisangin_ajaa?igshid=dc5j4580olwz" ><i class="fa fa-instagram "> Pisangin Aja</i></a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            {{-- <div class="content">
                <div class="title m-b-md">
                    
                </div>
            </div> --}}
    {{-- </div> --}}
            {{-- awal template --}}
            <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
            {{-- <div class="col-md-12"> --}}
                <!-- Hero section -->
                <section class="hero-section">
                <div class="hero-slider owl-carousel">
                    <div class="hero-slide-item set-bg" data-setbg="{{ url('template/img/bg1.jpg') }}">
                        <div class="hs-text">
                            <h2 class="hs-title-1"><span>Pisangin_Ajaa</span></h2>
                            <h2 class="hs-title-2"><span>Olahan makanan sehat</span></h2>
                            <h2 class="hs-title-3"><span>kaya akan vitamin</span></h2>
                        </div>
                    </div>
                    <div class="hero-slide-item set-bg" data-setbg="{{ url('template/img/bg2.jpg') }}">
                        <div class="hs-text">
                            <h2 class="hs-title-1"><span>Pisangin_Ajaa</span></h2>
                            <h2 class="hs-title-2"><span>Olahan makanan sehat</span></h2>
                            <h2 class="hs-title-3"><span>kaya akan vitamin</span></h2>
                        </div>
                    </div>
                    <div class="hero-slide-item set-bg" data-setbg="{{ url('template/img/recipes/pk.jpg') }}">
                        <div class="hs-text">
                            <h2 class="hs-title-1"><span>Pisangin_Ajaa</span></h2>
                            <h2 class="hs-title-2"><span>Olahan makanan sehat</span></h2>
                            <h2 class="hs-title-3"><span>kaya akan vitamin</span></h2>
                        </div>
                    </div>
                    <div class="hero-slide-item set-bg" data-setbg="{{ url('template/img/recipes/pcerah.jpg') }}">
                        <div class="hs-text">
                            <h2 class="hs-title-1"><span>Pisangin_Ajaa</span></h2>
                            <h2 class="hs-title-2"><span>Olahan makanan sehat</span></h2>
                            <h2 class="hs-title-3"><span>kaya akan vitamin</span></h2>
                        </div>
                    </div>
                    <div class="hero-slide-item set-bg" data-setbg="{{ url('template/img/recipes/minion.jpg') }}">
                        <div class="hs-text">
                            <h2 class="hs-title-1"><span>Pisangin_Ajaa</span></h2>
                            <h2 class="hs-title-2"><span>Olahan makanan sehat</span></h2>
                            <h2 class="hs-title-3"><span>kaya akan vitamin</span></h2>
                        </div>
                    </div>
                </div>
                </section>
                <!-- Hero section end -->

                <div class="col-md-12">
                    <img src="{{ url('images/LOGO.png') }}" class="rounded mx-auto d-block" class="" width="200" alt="">
                </div>


                <!-- Add section end -->
                <section class="add-section spad">
                <div class="container">
                    <div class="add-warp">
                        <div class="add-slider owl-carousel">
                            <div class="as-item set-bg" data-setbg="{{ url('template/img/bg2.jpg') }}"></div>
                            <div class="as-item set-bg" data-setbg="{{ url('template/img/bg4.jpg') }}"></div>
                            <!-- <div class="as-item set-bg" data-setbg="img/add/3.jpg"></div> -->
                        </div>
                        <div class="row add-text-warp">
                            <div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
                                <div class="add-text text-white">
                                    <div class="at-style"></div>
                                    <h2>Produk Pisangin_Ajaa</h2>
                                    <ul>
                                        <li>Pisang Geprek</li>
                                        <li>Sate Pisang</li>
                                        <li>Pisang Oreo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- Add section end -->

                <!-- Recipes section -->
                <section class="recipes-section spad pt-0">
                <div class="container">
                    <div class="section-title">
                        <h2>Gambar Produk</h2>
                    </div>
                    <div class="row">
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="{{ url('template/img/recipes/17.jpeg') }}" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Pisang Geprek</h3>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star is-fade"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="{{ url('template/img/recipes/18.png') }}" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Sate Pisang</h3>
                                        <div class="rating">
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="{{ url('template/img/recipes/13.jpeg') }}" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Pisang Oreo</h3>
                                        <div class="rating">
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="recipe">
                                <img src="{{ url('template/img/recipes/14.jpeg') }}" alt="">
                                <div class="recipe-info-warp">
                                    <div class="recipe-info">
                                        <h3>Pisang Geprek mix 3 Topping</h3>
                                        <div class="rating">
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                            <i class="fa fa-star is-fade"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </section>
                <!-- Recipes section end -->
                {{-- akhir tempalate --}}
                {{-- our team --}}
                <!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member vyka -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ url('images/vyka.jpeg') }}" alt="card image"></p>
                                    <h4 class="card-title">Arinda Vika Nur Hanifah</h4>
                                    <p class="card-text">(182410102005)</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Arinda Vika Nur Hanifah</h4>
                                    <p class="card-text">
                                        182410102005 | Prodi Teknologi Informasi Fakultas Ilmu Komputer Universitas Jember.
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member  -->
            <!-- Team member ojan-->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ url('images/ojan.jpeg') }}"></p>
                                    <h4 class="card-title">Moh.Sholihul Fauzan</h4>
                                    <p class="card-text">(182410102014)</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Moh.Sholihul Fauzan</h4>
                                    <p class="card-text">
                                        182410102014 | Prodi Teknologi Informasi Fakultas Ilmu Komputer Universitas Jember.
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member devi-->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ url('images/devi.jpeg') }}"></p>
                                    <h4 class="card-title">Devy Saraswati</h4>
                                    <p class="card-text">(182410102068)</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Devy Saraswati</h4>
                                    <p class="card-text">
                                        182410102068 | Prodi Teknologi Informasi Fakultas Ilmu Komputer Universitas Jember.
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!-- Team -->
                {{-- our team --}}
                <!-- Footer section  -->
                <footer class="footer-section set-bg" data-setbg="{{ url('template/img/footer-bg.jpg') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-logo">
                                {{-- <img src="{{ url('template/img/logo.png') }}" alt=""> --}}
                                <h2>Pisangin Aja</h2>
                            </div>
                            <div class="footer-social">
                                <a href="https://instagram.com/pisangin_ajaa?igshid=dc5j4580olwz"><i class="fa fa-instagram"> Pisangin_Aja</i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <p>Moh.Sholihul Fauzan (182410102014) | 
                                Arinda Vika Nur Hanifah (182410102005) | 
                                Devy Saraswati (182410102068)
                                      </p>
                            
                            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pemrograman berbasis Framework <i class="fa fa-star" aria-hidden="true"></i></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                </footer>
                <!-- Footer section end -->



                <!--====== Javascripts & Jquery ======-->
                <script src="{{ asset('template/js/jquery-3.2.1.min.js')}}"></script>
                <script src="{{ asset('template/js/owl.carousel.min.js')}}"></script>
                <script src="{{ asset('template/js/main.js')}}"></script>

                {{-- akhir juga --}}
            </div>

    </body>
</html>
