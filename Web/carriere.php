<?php
	require_once("action/CarriereAction.php");

	$action = new CarriereAction();
	$action->execute();

	require_once("partiel/header.php");
?>
	<?php
		if($action->isLoggedIn()){
			?>
				<script src="js/backend/carriereEditor.js"></script>
	<?php
		}
	?>

	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Carrière</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start menu-area Area -->
	<section class="menu-area section-gap" id="menu">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-justify">
						<h1 class="mb-10">Venez rejoindre l'équipe du Bistro le 633</h1>
						<p>Venir travaillez chez nous c'est accepter de ce lever chaque matin pour venir s'amuser afin
						de partager sa joie et sa passion pour la cuisine raffiner. Plusieurs de nos travailleurs sont
							venu joindre nos rangs afin d'y rester pour une courte durée, mais lorsqu'ils ont vu la chimie
							et l'esprit amicale et famillial de notre restaurant, ils ont tous décider d'y rester</p>
					</div>
				</div>
			</div>

			<ul class="filter-wrap filters col-lg-12 no-padding">
				<li class="active" data-filter="*">Tous les postes</li>
				<li data-filter=".cuisine">En cuisine</li>
				<li data-filter=".salle">Dans la salle à manger</li>
				<li data-filter=".administration">Administration</li>
				<li data-filter=".autre">Autres postes</li>
			</ul>

			<div class="filters-content">
				<div class="row grid">
					<?php
						if($action->isLoggedIn()){
							foreach ($action->carrieres as $carriere){
								?>
									<div class="col-md-6 all all <?= $carriere[2] ?>">
										<div class="single-menu text-justify">
											<div class="itemContent text-center">
												<div class="title-wrap d-flex justify-content-between">
													<h4 class="nameCarriere"><?= $carriere[1] ?></h4>
													<h4 class="price"><?= $carriere[3] ?></h4>
												</div>
												<div class="descCarriere text-justify"><?= $carriere[4] ?></div>
											</div>
											<button class="btn-info btn-lg h5 text-white col-lg-12 text-uppercase text-center mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 modify">Modifier</button>

											<form action="carriere.php" method="post" class="deleteItem">
												<input type="hidden" value=<?=$carriere[0]?> name="id">
												<button type="submit" name="remove" class="btn-danger btn-lg h5 text-white col-lg-12 mb-lg-2 mb-md-2 text-uppercase text-center">Supprimer</button>
											</form>

										</div>
									</div>
								<?php
							}
						}
						else{
							foreach ($action->carrieres as $carriere){
								?>
									<div class="col-md-6 all all <?= $carriere[2] ?>">
										<div class="single-menu text-justify">
											<div class="title-wrap d-flex justify-content-between">
												<h4><?= $carriere[1] ?></h4>
												<h4 class="price"><?= $carriere[3] ?></h4>
											</div>
											<div>
											<?= $carriere[4] ?>
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
	<!-- End menu-area Area -->

<?php
	require_once("partiel/footer.php");