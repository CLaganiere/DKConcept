<?php
	require_once("action/ServiceAction.php");

	$action = new ServiceAction();
	$action->execute();

	require_once("partiel/header.php");
?>
	<link rel="stylesheet" href="css/services.css">

	<!-- start banner Area -->
	<section class="relative about-banner" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Service</h1>
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
					<h1>Service traiteur</h1>
					<p class="text-justify">
						Bistro le 633 vous offre la possibilité de commander sous forme de traiteur une multitude de variétés de repas, de tapas et d'entrées du menu.
						Le restaurant offre la possibilité de commander du service traiteur, afin de réaliser des évènements inégalable chez vous ou ailleurs. Ce service
						vous permettera donc de commander votre menu gastronomique préférer dans la chaleur et le copmfort de votre maison. Si vous rétissez à commander du
						service traiteur, vous remarquerez que celui du Bistro 633 n'est pas comparable celui à de null part ailleurs.
					</p>
				</div>
				<div class="col-lg-6 home-about-right">
					<img class="img-fluid" src="img/services/traiteur.jpg" alt="Traiteur">
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start reservation Area -->
	<section class="reservation-area section-gap relative ">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6 reservation-left">
					<h1 class="text-white">Évènements spéciaux</h1>
					<p class="text-white pt-20 text-justify">
						Présentement en train d'organiser un évènement spécial telqu'un mariage ou un évènement de grand envergure? Le Bistro le 633
						se fera un grand plaisir de vous aider à la réalisation de celui-ci. Tout dépendandament la saison, il sera possible d'acceuil
						un grand nomhbre de personne à l'intérieur, ou à l'extérieur du restaurant. Tous trouveront leur comble et leur bonheur. Sans pouvoir
						le garantir, nous vous garantissons un évèenement réussi avec du plaisir et de la joie.
					</p>
				</div>
				<div class="col-lg-5 reservation-right">

				</div>
			</div>
		</div>
	</section>
	<!-- End reservation Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-right">
					<img class="img-fluid" src="img/services/job_dinner.jpg" alt="Souper entre amis et corporatif">
				</div>
				<div class="col-lg-6 home-about-left">
					<h1>Souper entre amis et corporatif</h1>
					<p class="text-justify">
						Avec son ambiance festive, Bistro le 633 est la place parfaite pour pour avoir une soirée inoubliable
						avce vos collègues de travail, ou encore mêmes vos amis. Réserver d'avance à la venu de groupe de grandes tailles,
						et réserver un mois à l'avance pour les groupes de plus petites tailes. Dans les périodes estivales, le Bistro le 633
						est très prisé pour sa qualiter de service et de nourriture.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start reservation Area -->
	<section class="reservation-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
				<div class="col-lg-5 reservation-right">

				</div>
				<div class="col-lg-6 reservation-left">
					<h1 class="text-white">Dégustation de spiritueux</h1>
					<p class="text-white pt-20 text-justify">
						Ayant réaliser plusieurs voyages en Écosse, en Angletterre et en Irlande, Luc Viens s'est découvert une passion pour le Whiskey, plus précisément le Scotch.
						Il est possible de constater l'amour du Whiskey que M. Viens a en comptant le nombre de bouteilles dans son restaurant. Pour transmettre sa passion, ce dernier
						effectue de nombreuses évènements environ une fois par mois pour faire une dégustation de ses coups de coeurs. Faites attention! Les places de ces évènements s'envolle d'ailleurs
						comme des petits pains chaud. <br><br>

						Il est possible d'effectuer une dégustation de Whiskey à n'importe quel moment, mais les bouteilles secrètent de Luc ne sortiront pas du placard.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End reservation Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<h1>Dégustation de vin</h1>
					<p class="text-justify">
						La passion de Luc ne s'arrête pas seulement qu'à la nourriture et qu'au Whisky. Effectivement, M. Viens est également un grand amamteur de vin provenant du Portugal, de la France, de l'Italy ainsi que de l'Espagne.
						Écoutant les intérêts de ses clients ainsi que sa passion, Luc Viens modernise et raffine sa cave à vin quelques fois par année. Pour une soirée entre amoureux le Samedi soir ou pour une soirée du Dimanche soir, le
						Bsitro 633 aura la consommation parfaite pour s'armonier avec votre repas et pour style l'occasion. Possédant une cave à vin principalement constituer d'importation privée, Luc Viens organise des soirées de dégustation
						de vin pour ceux qui veulent découvrir les secrets cachés de la cave à vin du Bistro le 633.
					</p>
				</div>
				<div class="col-lg-6 home-about-right">
					<img class="img-fluid" src="img/services/wine.jpg" alt="Vin">
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->


<?php
	require_once("partiel/footer.php");