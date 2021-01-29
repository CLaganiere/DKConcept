<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Charles_Nicolas">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>DKONCEPT</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<!-- Javascript -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="js/jquery-ui.js"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
            <script src="js/isotope.pkgd.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>

			<script src="js/TiledImage.js"></script>
			<script src="js/santaAnimation.js"></script>
			<script src="js/sprite/SantaClaus.js"></script>

			<?php
				if ($action->isLoggedIn()){
			?>
				<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
			<?php
				}
			?>
		</head>
		<body>
			<?php

				if($action->errorInfolettre){
			?>
				<div class="col-lg-12 pt-10 pl-lg-100 pl-md-100 pb-10 text-black text-center bg-danger"> <div class="h4 col-lg-8 text-justify">Un problème est survenu dans l'inscription à l'infolettre. Veuillez réessayer plus tard... </div></div>
			<?php
				}
				else if($action->infolettreSend){
			?>
				<div class="col-lg-12 pt-10 pl-lg-100 pl-md-100 pb-10 text-black text-center bg-success"><div class="h4 col-lg-8 text-justify">Vous êtes maintenant inscrit à l'infolettre du Bistro le 633.</div></div>
			<?php
				}
			?>
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="index.php"><img src="img/logo.png" width="175px" height="auto" alt="" title="" /></a>
						      </div>
				  		</div>
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="restaurant.php">Le restaurant</a>
							<ul>
								<li><a href="restaurant.php#teamBistro">L'équipe</a></li>
							</ul>
							</li>
							<li><a href="carriere.php">Carrière</a></li>
							<li><a href="gallery.php">Galerie photos</a></li>
							<li><a href="service.php">Service</a></li>
							<li><a href="contact.php">Contactez-nous</a></li>
							<?php
								if ($action->isLoggedIn()){
							?>
								<li><a href="password.php">Modifier mot de passe</a></li>
								<li><a href="logout.php">Se déconnecter</a></li>
							<?php
								}
							?>
				        </ul>
				      </nav><!-- #nav-menu-container -->
					</div>
				</div>

			</header><!-- #header -->