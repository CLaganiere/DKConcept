<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="Charles_Nicolas">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>
			Oups, désolé!
		</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<section class="banner-area">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-between">
					<div class="editor col-lg-12 banner-content mb-100">
						<?php
							if ($_GET["code"] == 403) {
								?>
								<h1 class="text-white pb-80">Accès refusé.</h1>
								<div class="text-center">
									<img src="img/error/bigEyes.gif" width="800" height="auto" alt="error image not able to load">
								</div>
								<?php
							}
							else if ($_GET["code"] == 404) {
								?>
								<h1 class="text-white">La page que vous tentez d'accèder n'existe pas. Retourner au site</h1>
								<div class="text-center">
									<img src="img/error/sadness.gif" width="800" height="auto" alt="error image not able to load">
								</div>
								<?php
							}
							else if ($_GET["code"] == 500) {
								?>
								<h1 class="text-white">Problème avec le serveur... Veuillez réessayer votre opération ultérieurement</h1>
								<div class="text-center">
									<img src="img/error/chilliSauce.gif" width="800" height="auto" alt="error image not able to load">
								</div>
								<?php
							}
						?>
						<div class="text-center mt-40">
							<a href="index.php" class="primary-btn text-uppercase mb-100">Retourner en lieux sûr</a>
						</div>
						<div class="spacer mt-100 pt-50 pb-50"></div>
					</div>
				</div>
		</section>
	</body>
</html>
