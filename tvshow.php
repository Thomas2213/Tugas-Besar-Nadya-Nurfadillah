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
                        <li ><a href="index.php.html">Home</a></li>
                        <li ><a href="popular.php">Popular Movies</a></li>
                        <li><a href="now-playing.php">Now Playing Movies</a></li>
                        <li  ><a href="upcoming.php">Upcoming Movies</a></li>
                        <li><a href="tv-series.php">TV Series</a></li>
                        <li><a href="yt.php">Search Film</a></li>
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

                <div class="item active" style="background-image: url(po.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">TV SHOW</h1>
                                    <div class="animation animated-item-2">
                                      There's Many Film Genre Start From Action,Romance,Horror and Comedy
                                    </div>
                                    
                                </div>
                            </div>

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
	<?php
  $id_tv = $_GET['id'];
  include "conf/info.php";
  include_once "api/api_tv_id.php";
  include_once "api/api_tv_video_id.php";
  $title = "Watch TV (".$tv_id->original_name.")";

?>
<br>
<br>
<br>
<center>
	<form action="search.php" method="get">
      <input type="text" name="search" placeholder="Type Title Here" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Movie
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">CARI
      </button>
    </form>

    <?php
    if(isset($_GET['id'])){
      $id_tv = $_GET['id'];
      $rel = date('d F Y', strtotime($tv_id->last_air_date)); 
    ?>
    <h1><?php echo $tv_id->original_name ?></h1>
    <?php
      echo "<h5>~ <sub>Last Air Date</sub> : <span>".$rel."</span> ~</h5>";
    ?>

    <?php 

      foreach($tv_video_id->results as $video){
                    echo '<iframe width="560" height="315" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
      }
     ?>"

    <hr>
    <img src="http://image.tmdb.org/t/p/w300<?php echo $tv_id->poster_path ?>" />
    <p>Title : <?php echo $tv_id->original_name ?></p>
    <p>Status : <?php echo $tv_id->status ?></p>
    <p>Genres : 
              <?php
                foreach($tv_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
    </p>
    <p>Overview : <?php echo $tv_id->overview ?></p>
    <p>First Air Date : <?php $rel = date('d F Y', strtotime($tv_id->first_air_date)); echo $rel ?></p>
    <p>Production Companies : 
              <?php
                foreach($tv_id->production_companies as $pc){
                  echo $pc->name;
                }
              ?>
    </p>
    <p>Original Country : 
              <?php
                foreach($tv_id->origin_country as $pco){
                  echo $pco. "&nbsp;&nbsp;" ;
                }
              ?>
    </p>
    <p>Created by : 
              <?php
                foreach($tv_id->created_by as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
    </p>
    <p>Vote Average : <?php echo $tv_id->vote_average ?></p>
    <p>Vote Count : <?php echo $tv_id->vote_count ?></p>
    <hr>
    <h3>Similar TV Show</h3>
    <ul>
      <?php
        $count = 4;
        $output=""; 
        foreach($tv_id_similar->results as $sim){
          $output.='<li><a href="tvshow.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w300'.$sim->backdrop_path.'"><h5>'.$sim->original_name.'</h5></a></li>';
          if($count <=0){
            break;
            $count--;
          }
        }
        echo $output;
      ?>
    </ul>

    
    <?php 
    } else{
      echo "<h5>Movie tidak ditemukan.</h5>";
    }
    ?>
</center>
<?php
  include_once "footer.php";
?>