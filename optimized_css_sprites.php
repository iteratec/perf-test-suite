<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="iteratec">

    <title>perf-test-suite</title>

    <!-- Bootstrap Core CSS -->
	<link href="assets-cache-and-compression-disabled/css/bootstrap.css" rel="stylesheet">
	<!-- Jquery Magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets-cache-and-compression-disabled/css/magnific-popup.css">
	<!-- icons -->
	<link rel="stylesheet" type="text/css" href="assets-cache-and-compression-disabled/css/font-awesome.css">
	<!-- Custom CSS -->
	<link href="assets-cache-and-compression-disabled/css/header.css" rel="stylesheet">
	<link href="assets-cache-and-compression-disabled/css/main.css" rel="stylesheet">
    <link href="assets-cache-and-compression-disabled/css/spritesheet.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery Version 1.11.0 -->
	<script src="assets-cache-and-compression-disabled/js/jquery-1.11.0.js"></script>
	<script src="assets-cache-and-compression-disabled/js/jquery-ui.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="assets-cache-and-compression-disabled/js/bootstrap.js"></script>
	<script src="assets-cache-and-compression-disabled/js/jquery.magnific-popup.js"></script>
	<script src="assets-cache-and-compression-disabled/js/shuffle.js"></script>
	<script src="assets-cache-and-compression-disabled/js/jquery.shapeshift.js"></script>
	<script src="assets-cache-and-compression-disabled/js/homepage.js"></script>

</head>

<body onload="PerfTestSuite.reportEvent();">

    <?php
        
        //simulate server side processing time
        $sleep = (isset($_GET["sleep"]) ? $_GET["sleep"] : 0);
		if($sleep && ctype_digit(strval($sleep))) sleep($sleep);
    ?>

    <!-- Navigation -->
    <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="sprite sprite-bars"></i>
                </button>

                <a href="index.php" class="navbar-brand">perf-test-suite</a>
            </div>

            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Optimizations <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                            <a  href="optimized_chunked_encoding.php">Chunked encodig</a>
                        </li>
                        <li>
                            <a class="selected" href="optimized_css_sprites.php">CSS Sprites</a>
                        </li>
                        <li>
                            <a  href="optimized_font_awesome.php">Font Awesome</a>
                        </li>
                        <li>
                            <a  href="optimized_minified.php">Minified Resources</a>
                        </li>
                        <li>
                            <a  href="optimized_pictureload.php">Postload images</a>
                        </li>
                        <li>
                            <a  href="optimized_javascripts_end_of_body.php">Javascripts end of body</a>
                        </li>
                        <li>
                            <a  href="optimized_images.php">Optimized images</a>
                        </li>
                        <li>
                            <a  href="optimized_caching_headers.php">Sensible caching headers</a>
                        </li>
                        <li>
                            <a  href="optimized_compression_enabled.php">Compression enabled</a>
                        </li>
                        <li>
                            <a  href="optimized_rwd_avoid_loading_hidden_images.php">[RWD] Avoid loading hidden images</a>
                        </li>
                        <!-- we should add an about page
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        -->
                      </ul>
                    </li>
              </ul>
              <p class="navbar-text">optimized_css_sprites.php</p>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </header>

    <!-- Page Content -->
    <div class="container page" id="home">

        <h2>Example shop page</h2>

        <!-- carrousel -->
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-holder">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="assets-cache-and-compression-disabled/images/country-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-and-compression-disabled/images/boat-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-and-compression-disabled/images/snow-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-and-compression-disabled/images/beach-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-and-compression-disabled/images/glass-building-1170x400.jpeg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="sprite sprite-chevron-left"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="sprite sprite-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- quotes -->
        <div class="row margin30">
            <div class="col-md-9 box-center">
                <blockquote>
                    <div class="col-sm-3 text-center">
                        <img class="img-circle" style="width: 100px;height:100px;" src="assets-cache-and-compression-disabled/images/person_3.png">
                    </div>
                    <div class="col-sm-9">
                        <p>
                            <i class="sprite sprite-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            <i class="sprite sprite-quote-right"></i>
                        </p>
                        <small>Someone famous</small>
                    </div>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3><small>Recent Bookings</small></h3>
                <ul class="thumbnails">
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/rila.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Rila mountain, Bulgaria" src="assets-cache-and-compression-disabled/images/rila_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-mountain"></i> Rila mountain, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
                                    <i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
                                <p>22 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/varna_panorama.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Varna" src="assets-cache-and-compression-disabled/images/varna.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-town"></i>
										Varna, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
                                <p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/tsarevets.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Tzarevets, Veliko Tarnvo, Bulgaria" src="assets-cache-and-compression-disabled/images/tsarevets_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-nature"></i> Tzarevets, Veliko Tarnovo, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
								<p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/london.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="London" src="assets-cache-and-compression-disabled/images/london.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-travel"></i> London
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
								<p>15 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/cibeles.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cibeles, Madrid, Spain" src="assets-cache-and-compression-disabled/images/cibeles_small_2.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-sun"></i> Cibeles, Madrid, Spain
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
								<p>12 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-cache-and-compression-disabled/images/recife_small_1.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-beach"></i> Recife, Brasil
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-cache-and-compression-disabled/images/tree.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-tree"></i> Asia
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-and-compression-disabled/images/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-cache-and-compression-disabled/images/san-fran.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="sprite sprite-holiday-car"></i> San Francisco
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <div class="only-visible-on-desktop">
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/cheetah.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-cache-and-compression-disabled/images/cheetah.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
    									<a href="javascript:;">
    										<i class="sprite sprite-holiday-nature"></i> Africa
    									</a>
    								</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/louvre.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Louvre" src="assets-cache-and-compression-disabled/images/louvre.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
    									<a href="javascript:;">
    										<i class="sprite sprite-holiday-animals"></i> Louvre, Paris, France
    									</a>
    								</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>28 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/cityview.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cityview" src="assets-cache-and-compression-disabled/images/cityview.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-travel"></i> Cityview
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>15 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/finland.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Finland" src="assets-cache-and-compression-disabled/images/finland_small.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-sun"></i> Finland
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>12 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/flying-duck.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Flying duck" src="assets-cache-and-compression-disabled/images/flying-duck.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-beach"></i> Flying duck
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/art-gallery.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Art gallery" src="assets-cache-and-compression-disabled/images/art-gallery.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-tree"></i> Art gallery
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/beginning-of-life.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Beginning of life" src="assets-cache-and-compression-disabled/images/beginning-of-life.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-car"></i> Beginning of life
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/cherry-blossom.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cherry blossom" src="assets-cache-and-compression-disabled/images/cherry-blossom.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-nature"></i> Cherry blossom
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/coffee-central.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Coffee central" src="assets-cache-and-compression-disabled/images/coffee-central.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-beach"></i> Coffee
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/frankfurt-waters.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Frankfurt waters" src="assets-cache-and-compression-disabled/images/frankfurt-waters.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-tree"></i> Frankfurt waters
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/man-made-skies.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Man made skies" src="assets-cache-and-compression-disabled/images/man-made-skies.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-car"></i> Man made skies
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/old-love.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Old love" src="assets-cache-and-compression-disabled/images/old-love.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-nature"></i> Old love
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/ungodly-skies.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Ungodly skies" src="assets-cache-and-compression-disabled/images/ungodly-skies.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-beach"></i> Ungodly skies
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/windy-day.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Windy day" src="assets-cache-and-compression-disabled/images/windy-day.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-tree"></i> Windy day
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/sky-and-building.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Sky and building" src="assets-cache-and-compression-disabled/images/sky-and-building.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-car"></i> Sky and building
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/trombone_player.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Trombone_player" src="assets-cache-and-compression-disabled/images/trombone_player.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-nature"></i> Trombone player
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
    					</li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/wasp.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Wasp" src="assets-cache-and-compression-disabled/images/wasp.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-beach"></i> Wasp
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/catcher-in-the-rye.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Catcher in the rye" src="assets-cache-and-compression-disabled/images/catcher-in-the-rye.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-tree"></i> Catcher in the rye
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/old-caddy.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Old caddy" src="assets-cache-and-compression-disabled/images/old-caddy.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-car"></i> Old Caddy
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-cache-and-compression-disabled/images/oneway.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="One way only" src="assets-cache-and-compression-disabled/images/oneway.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="sprite sprite-holiday-nature"></i> One way only
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star-filled"></i>
									<i class="sprite sprite-star"></i>
									<i class="sprite sprite-star"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12" id="timingResult">
                Loading timing events, please wait...
            </div>
        </div>

    </div>
    <!-- /.container -->

    <div class="container page">
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p>Performance test suite is created by iteratec and based on <a href="http://http2rulez.com/">HTTP 2.0 Rulez!</a> by <a href="https://twitter.com/ipeychev">Iliyan Peychev</a>.<br></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    

     <script type="text/javascript" src="assets/js/sendBeacon.js">
    <script src="assets-cache-and-compression-disabled/js/profiler.js"></script>
    <script>
        new __Profiler().init(document.getElementById('timingResult'));
    </script>

</body>

</html>
