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
	<link href="assets-cache-disabled/css/bootstrap.css" rel="stylesheet">
	<!-- Jquery Magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets-cache-disabled/css/magnific-popup.css">
	<!-- icons -->
	<link rel="stylesheet" type="text/css" href="assets-cache-disabled/css/font-awesome.css">
	<!-- Custom CSS -->
	<link href="assets-cache-disabled/css/header.css" rel="stylesheet">
	<link href="assets-cache-disabled/css/main.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery Version 1.11.0 -->
	<script src="js-cache-disabled/jquery-1.11.0.js"></script>
	<script src="js-cache-disabled/jquery-ui.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js-cache-disabled/bootstrap.js"></script>
	<script src="js-cache-disabled/jquery.magnific-popup.js"></script>
	<script src="js-cache-disabled/shuffle.js"></script>
	<script src="js-cache-disabled/jquery.shapeshift.js"></script>
	<script src="js-cache-disabled/homepage.js"></script>

</head>

<body>

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
                    <img src="assets-cache-disabled/images/icons/bars.png" />
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
                            <a  href="optimized_css_sprites.php">CSS Sprites</a>
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
                            <a class="selected" href="optimized_images.php">Optimized images</a>
                        </li>
                        <!-- we should add an about page
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        -->
                      </ul>
                    </li>
              </ul>
              <p class="navbar-text">optimized_images.php</p>
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
                                <img class="slide-image" src="assets-cache-disabled/images_optimized/country-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-disabled/images_optimized/boat-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-disabled/images_optimized/snow-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-disabled/images_optimized/beach-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-cache-disabled/images_optimized/glass-building-1170x400.jpeg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <img src="assets-cache-disabled/images/icons/chevron-left.png" />
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <img src="assets-cache-disabled/images/icons/chevron-right.png" />
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
                        <img class="img-circle" style="width: 100px;height:100px;" src="assets-cache-disabled/images_optimized/person_3.png">
                    </div>
                    <div class="col-sm-9">
                        <p>
                            <img src="assets-cache-disabled/images/icons/quote-left.png" />
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            <img src="assets-cache-disabled/images/icons/quote-right.png" />
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
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/rila.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Rila mountain, Bulgaria" src="assets-cache-disabled/images_optimized/rila_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-mountain.png" /> Rila mountain, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
                                    <img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
                                <p>22 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/varna_panorama.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Varna" src="assets-cache-disabled/images_optimized/varna.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-town.png" />
										Varna, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
                                <p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tsarevets.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Tzarevets, Veliko Tarnvo, Bulgaria" src="assets-cache-disabled/images_optimized/tsarevets_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-nature.png" /> Tzarevets, Veliko Tarnovo, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/london.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="London" src="assets-cache-disabled/images_optimized/london.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-travel.png" /> London
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>15 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cibeles.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cibeles, Madrid, Spain" src="assets-cache-disabled/images_optimized/cibeles_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-sun.png" /> Cibeles, Madrid, Spain
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>12 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-cache-disabled/images_optimized/recife_small_1.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-beach.png" /> Recife, Brasil
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-cache-disabled/images_optimized/tree.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-tree.png" /> Asia
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-cache-disabled/images_optimized/san-fran.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-car.png" /> San Francisco
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cheetah.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-cache-disabled/images_optimized/cheetah.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-nature.png" /> Africa
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tsarevets.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Tzarevets, Veliko Tarnvo, Bulgaria" src="assets-cache-disabled/images_optimized/tsarevets_small_2.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-cache-disabled/images/icons/holiday-animals.png" /> Tzarevets, Veliko Tarnovo, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/london.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="London" src="assets-cache-disabled/images_optimized/london_2.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">London</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>15 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cibeles.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cibeles, Madrid, Spain" src="assets-cache-disabled/images_optimized/cibeles_small_2.jpg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Cibeles, Madrid, Spain</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>12 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-cache-disabled/images_optimized/recife_small_2.jpg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Recife, Brasil</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-cache-disabled/images_optimized/tree_2.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Asia</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-cache-disabled/images_optimized/san-fran_2.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">San Francisco</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cheetah.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-cache-disabled/images_optimized/cheetah_2.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Africa</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-cache-disabled/images_optimized/recife_small_3.jpg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Recife, Brasil</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-cache-disabled/images_optimized/tree_3.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Asia</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-cache-disabled/images_optimized/san-fran_3.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">San Francisco</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cheetah.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-cache-disabled/images_optimized/cheetah_3.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Africa</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-cache-disabled/images_optimized/recife_small_4.jpg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Recife, Brasil</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-cache-disabled/images_optimized/tree_4.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Asia</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-cache-disabled/images_optimized/san-fran_4.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">San Francisco</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cheetah.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-cache-disabled/images_optimized/cheetah_4.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Africa</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
					</li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-cache-disabled/images_optimized/recife_small_5.jpg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Recife, Brasil</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-cache-disabled/images_optimized/tree_5.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Asia</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-cache-disabled/images_optimized/san-fran_5.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">San Francisco</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-cache-disabled/images_optimized/cheetah.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-cache-disabled/images_optimized/cheetah_5.jpeg">
                            </a>
                            <div class="caption">
                                <h4><a href="javascript:;">Africa</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-cache-disabled/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
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

    

    <script src="js-cache-disabled/profiler.js"></script>
    <script>
        new __Profiler().init(document.getElementById('timingResult'));
    </script>

</body>

</html>
