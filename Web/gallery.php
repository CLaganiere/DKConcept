<?php
	require_once("action/GalleryAction.php");

	$action = new GalleryAction();
	$action->execute();

	require_once("partiel/header.php");
?>

	<?php
		if($action->isLoggedIn()){
			?>
				<script src="js/backend/foodEditor.js"></script>
	<?php
		}
	?>

	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
				<h1 class="text-white">Gallerie</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start gallery-area Area1 -->
		<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-50 mx-auto img-fluid" height="auto" width="auto" src=".\img\nourriture\assiette.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 mx-auto img-fluid" height="lg-675 md-500 sm-20" width="auto" src=".\img\nourriture\repas10.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 mx-auto img-fluid" height="lg-675 md-500 sm-20" width="auto" src=".\img\nourriture\Poutine.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 mx-auto img-fluid" height="lg-675 md-500 sm-20" width="auto" src=".\img\nourriture\repas2.jpg" alt="Four slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 mx-auto img-fluid" height="675" width="auto" src=".\img\nourriture\pate.jpg" alt="Five slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 mx-auto img-fluid" height="675" width="auto" src=".\img\nourriture\fromage.jpg" alt="Six slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
	</section>
	<!-- End gallery-area Area1 -->

	<!-- Start gallery-area Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-justify">
						<h1 class="mb-10">Galerie de nos réalisations</h1>
						<p>À l'affût des saisons et des goûts de nos consommateurs, notre menu de tapas est modifier réguliairement.</p>
					</div>
				</div>
			</div>

			<ul class="filter-wrap filters col-lg-12 no-padding">
				<li class="active" data-filter="*">Tous les menus</li>
				<li data-filter=".entrees">Nos entrées</li>
				<li data-filter=".dinner">Les dînners</li>
				<li data-filter=".souper">Les tapas du soir</li>
				<li data-filter=".dessert">Les desserts</li>
			</ul>


			<div class="filters-content">
				<div class="row grid" id="imgGallery">
					<?php
						if($action->isLoggedIn()){
							foreach ($action->repas as $item){
								?>
									<div class="col-lg-4 col-md-6 col-sm-6 all <?= $item[2] ?>">
										<div class="single-menu">
											<div class="itemContent text-center">
												<?php
													echo '<img class="img-fluid imgPerson" src="'.$item[4].'" alt="'.$item[1].'"/>';
												?>
												<div class="h4 mt-2 mealName"><?= $item[1] ?></div>
												<div class="text-justify mt-2 mb-2 mealDesc"><?= $item[3] ?></div>
											</div>
											<button class="btn-info btn-lg h5 text-white col-lg-12 text-uppercase text-center mb-lg-2 mb-md-2 modify">Modifier</button>

											<form action="gallery.php" method="post" class="deleteItem">
												<input type="hidden" value=<?=$item[0]?> name="id">
												<button type="submit" name="remove" class="btn-danger btn-lg h5 text-white col-lg-12 mb-lg-2 mb-md-2 text-uppercase text-center">Supprimer</button>
											</form>

										</div>
									</div>
								<?php
							}
						}
						else{
							foreach ($action->repas as $item){
								?>
									<div class="col-lg-4 col-md-6 col-sm-6 all <?= $item[2] ?>">
										<div class="single-menu">
											<div class="itemContent text-center">
												<?php
													echo '<img class="img-fluid imgPerson" src="'.$item[4].'" alt="'.$item[1].'"/>';
												?>
												<div class="h4 mt-2"><?= $item[1] ?></div>
												<div class="text-justify mb-2"><?= $item[3] ?></div>
											</div>
										</div>
									</div>
								<?php
							}
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- End gallery-area Area -->

<?php
	require_once("partiel/footer.php");