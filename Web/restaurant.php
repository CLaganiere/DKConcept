<?php
	require_once("action/RestaurantAction.php");

	$action = new RestaurantAction();
	$action->execute();

	require_once("partiel/header.php");
?>

	<?php
		if($action->isLoggedIn()){
			?>
				<script src="js/backend/teamEditor.js"></script>
	<?php
		}
	?>

	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Restaurant</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<h1>Un brin d'histoire</h1>
					<p class="text-justify">
						Situé sur la rue Shefford à Bromont dans une maison des années 1800, le Bistro 633 possède une salle de 80 places qui offre une vue imprenable sur le mont Bromont. Cet endroit est idéal pour vous recevoir des occasions de toutes sortes, tels que des rendez-vous galants, des réunions et des évènements corporatives, en passant par les fêtes de famille, les soirées animées ou autres!
						Possédant une inventaire de spiritueux composer principalement de Scotch et de Wisky, sans compter l'énorme cave à vin constituer principalement d'importation privée, Luc Viens (propriétaire du Bistro 633) a su mettre à profit sa passion, son histoire et ses connaissances afin de faire vivre une expérience inoubliable à chacun des vervants visiteurs de son resturant.
					</p>
				</div>
				<div class="col-lg-6 home-about-right">
					<img class="img-fluid" src="img/nourriture/assiette.jpg" alt="Repas">
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start services Area -->
	<section class="services-area pb-120">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pt-60 pb-20 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Quel sont les types de service que nous offrons?</h1>
						<p class="text-justify">Notre vaste variété de service un peu plus personnalisé les uns que les autres sauront vous charmer et combler vos attentes, et ce, peu importe le type d’activité ou d’évènement que vous tentez de réaliser. Bref, vous aurez droit à un évènement sans égale, que vous ne pourrez pas reproduire nulle part ailleurs.</p>
					</div>
				</div>
			</div>
			<div class="row">

				<!-- Service 1 -->
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/services/panini.jpg" alt="rgilled panini">
						</div>
						<h4>Service à table</h4>
						<p>
							Venez déguster l'un de nos repas ou tapas offert tous les dinners et les soupers, et ce toute la semaine.
						</p>
					</div>
				</div>

				<!-- Service 2 -->
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/services/wedding_resize.jpg" alt="Dancing people">
						</div>
						<h4>Service évènementiel</h4>
						<p>
							Vous désirez réaliser une évènement de grand envergure tels qu'un mariage, une célébration d'un anniversaire ou un souper corporatif, nous sommes là pour vous afin de vous épauler.
						</p>
					</div>
				</div>

				<!-- Service 3 -->
				<div class="col-lg-4">
					<div class="single-service">
						<div class="thumb">
							<img src="img/services/ramen.jpg" alt="ramen soup">
						</div>
						<h4>Service traiteur</h4>
						<p>
							Commandez ce que vous voulez, à l'heure que vous voulez et dans l'environnement que vous voulez. Le service traiteur vous permets de déguster vos mets favoris lorque vous le désirez.
						</p>
					</div>
				</div>

				<div class="spacer col-lg-3"></div>
				<a href="service.php" class="primary-btn col-lg-6 mt-30 pb-10 pt-10 text-center">Voir tous nos offres de services</a>
				<div class="spacer col-lg-3"></div>
			</div>
		</div>
	</section>
	<!-- End services Area -->

	<!-- Start gallery-area Area -->
	<section class="gallery-area section-gap" id="teamBistro">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-justify">
						<h1 class="mb-10">Notre équipe</h1>
						<p>Certains nous conscidèrent comme étant une famille ayant les liens tissé sérer, d'autres
						pensent que nous sommes une équipe à l'épreuve de tous défis. Cependant, lorsque nous définissons
						qui nous sommes, nous réalisons que nous sommes les deux.</p>
					</div>
				</div>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<?php
						if($action->isLoggedIn()){
							foreach ($action->equipes as $e){
								?>
									<div class="col-lg-4 col-md-6 col-sm-6 all">
										<div class="single-gallery">
											<div class="itemContent text-center">
												<?php
													echo '<img class="img-fluid imgPerson" src="'.$e[4].'" alt="'.$e[1].'"/>';
												?>
												<div class="h4 text-center mt-2 nomPerson"><?= $e[1] ?></div>
												<div class="h6 text-center mb-2 postePerson"><?= $e[2] ?></div>
												<div class="text-black mb-2 descPerson text-justify"><?= $e[3] ?></div>
											</div>
											<button class="btn-info btn-lg h5 text-white col-lg-12 text-uppercase text-center mb-lg-2 mb-md-2 modify">Modifier</button>

											<form action="restaurant.php" method="post"  class="deleteItem">
												<input type="hidden" value=<?=$e[0]?> name="id">
												<button type="submit" name="remove" class="btn-danger btn-lg h5 text-white col-lg-12 mb-lg-2 mb-md-2 text-uppercase text-center">Supprimer</button>
											</form>

										</div>
									</div>
								<?php
							}
						}
						else{
							foreach ($action->equipes as $e){
								?>
									<div class="col-lg-4 col-md-6 col-sm-6 all">
										<div class="single-gallery">
											<?php
												echo '<img class="img-fluid imgPerson" src="'.$e[4].'" alt="'.$e[1].'"/>';
											?>
											<div class="h4 text-center mt-2"><?= $e[1] ?></div>
											<div class="h6 text-center mb-2"><?= $e[2] ?></div>
											<div class="text-black mb-2"><?= $e[3] ?></div>
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