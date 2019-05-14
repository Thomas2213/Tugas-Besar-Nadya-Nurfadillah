<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bioskop</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i>Enjoy!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php">Home</a></li>
                        <li ><a href="popular.php">Popular Movies</a></li>
                        <li><a href="now-playing.php">Now Playing Movies</a></li>
                        <li ><a href="upcoming.php">Upcoming Movies</a></li>
                        <li><a href="tv-series.php">TV Series</a></li>
                        <li class="active"><a href="yt.php">Search Film</a></li>
						<li><a href="cari.php">Detail Film</a></li>
						<li><a href="berita.php">List Komentar</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(nad.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><font color=black>Searching Your Favorite Movie</font></h1>
                                    <div class="animation animated-item-2">
                                       

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    

    


    
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>


		
		<?php
  include "conf/info.php";
  $title=" seacrh   youtube";

?>
    

<html lang="en">
<head>

<body>

		
			<hr />
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- iklan6 -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-7891974726842566"
				 data-ad-slot="7611758731"
				 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			<hr />
			<div class="content">
		   <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><font color=black>WAIT A MINUTE</font></h1>
                                    <div class="animation animated-item-2">
                                       <font color=black> There's Many Film Genre Start From Action,Romance,Horror and Comedy</font>

                        </div>
                    </div>
				
				<h2><i class="fa fa-youtube" aria-hidden="true"></i>YouTube Search Engine</h2>
				<div id="custom-search-input">
					<div class="input-group col-md-12">
						<form id="search-form" name="search-form" onsubmit="return cariYoutube();">
							<input type="text" class="form-control" placeholder="Pencarian...." id="search" />
							<span class="input-group-btn">
								<button class="btn btn-primary btn-lg" type="submit" id="findNow">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</form>
					</div>
				</div>
				<br><br>
				<div id="hasil"></div>
				<br><br>
				<div id="buttons"></div>
            
    
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="http://fancyapps.com/fancybox/source/jquery.fancybox.css?v=2.1.5">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

			</div>
<script src="script2.js"></script>
</body>
</html>
<script src="script.js"></script>