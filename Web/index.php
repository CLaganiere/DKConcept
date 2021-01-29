<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$action->execute();

	require_once("partiel/header.php");
?>

	<?php
		if($action->sendingError){
			?>
				<div class="col-lg-12 pt-10 pl-lg-100 pl-md-100 pb-10 text-black text-center bg-danger"> <div class="h4 col-lg-8 text-justify"> Un problème est survenu dans l'envoie de la réservation. Assurez-vous d'avoir bien rempli tous les champs du message, puis réessayer</div></div>
			<?php
		}
		else if($action->messageSend){
			?>
				<div class="col-lg-12 pt-10 pl-lg-100 pl-md-100 pb-10 text-black text-center bg-success"><div class="h4 col-lg-8 text-justify"> Réservation envoyé avec succès!</div></div>
			<?php
		}
	?>

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-12 banner-content">
					<h6 class="text-white" tag='1'>Une expérience inégalable</h6>
					<h1 class="text-white" tag='2'>Bistro le 633</h1>
					<p class="text-white text-justify" tag='3'>
						Un endroit où vous mettez les pieds, et que vous voulez y rester. Ambiance chaleureuse et nourriture qui sait séduire
						les amateurs de fine gastronomie. Peu nombreux son ceux qui ne tombe pas sous le charme de ce petit restaurant.
					</p>
					<a href="gallery.php" class="primary-btn text-uppercase" tag='4'>Consulter le menu gastronomique</a>
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
					<h1 tag='5'>Un brin d'histoire</h1>
					<p class="text-justify" tag='6'>
						Situé sur la rue Shefford à Bromont dans une maison des années 1800, le Bistro 633 possède une salle de 80 places qui offre une vue imprenable sur le mont Bromont. Cet endroit est idéal pour vous recevoir des occasions de toutes sortes, tels que des rendez-vous galants, des réunions et des événements corporatifs, en passant par les fêtes de famille, les soirées animées ou autres!
						Possédant une inventaire de spiritueux composer principalement de Scotch et de Whisky, sans compter l'énorme cave à vin constituer principalement d'importation privée, Luc Viens (propriétaire du Bistro 633) a su mettre à profit sa passion, son histoire et ses connaissances afin de faire vivre une expérience inoubliable à chacun des vervants visiteurs de son restaurant.
					</p>
					<a href="restaurant.php" class="primary-btn" tag='7'>Voir notre équipe</a>
				</div>
				<div class="col-lg-6 home-about-right">
					<img class="img-fluid" src="img/nourriture/poutine.jpg" alt="Poutine au canard">
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
						<div class="col-lg-6 reservation-left">
							<h1 class="text-white" tag='8'>Réserver vos places <br>
							dès aujourd'hui <br>pour une expérience inoubliable.</h1>
							<p class="text-white pt-20 text-justify" tag='9'>
								En deux temps trois mouvements, votre réservation sera complété et acheminé dans l'agenda du restaurant. Un message vous sera transmis dans les 48 heures avant la réservation afin de valider votre disponibilité.
							</p>
						</div>
						<div class="col-lg-5 reservation-right">
							<form class="form-wrap text-center" action="index.php" method="post">
								<input type="text" class="form-control" name="firstName" placeholder="Votre Prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre Prénom'" >
								<input type="text" class="form-control" name="lastName" placeholder="Votre Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre Nom'" >
								<input type="email" class="form-control" name="emailReservation" placeholder="Votre adresse courriel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse courriel'" >
								<input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numéro de téléphone'" >
								<input type="text" class="form-control date-picker" name="dateReservation" placeholder="Choisissez une date & une heure" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Choisissez une date & une heure'" >
								<div class="form-select" id="service-select">
									<select name="optionReservation">
										<option data-display="">Choisissez le type d'évènement</option>
										<option value="1">Fête d'une personne proche</option>
										<option value="2">Souper de travail</option>
										<option value="3">Rendez-vous galant</option>
										<option value="4">Célébration d'un évenement spécial</option>
										<option value="5">Dégustation de vin</option>
										<option value="6">Dégustation de spiritueux</option>
									</select>
								</div>
								<button class="primary-btn text-uppercase mt-20">Faire une réservation</button>
							</form>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End reservation Area -->

	<!-- Start gallery-area Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-justify">
						<h1 class="mb-10" tag='10'>Galerie de nos réalisations</h1>
						<p tag='11'>À l'affût des saisons et des goûts de nos consommateurs, notre menu de tapas est modifier réguliairement.</p>
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
				<div class="row grid">
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
												<div class="h4 mt-2"><?= $item[1] ?></div>
												<div class="text-justify mb-2"><?= $item[3] ?></div>
											</div>
											<form action="gallery.php" method="post">
												<input type="hidden" value=<?=$item[0]?> name="id">
												<button type="submit" name="remove" class="btn-danger btn-lg h5 text-white col-lg-12 text-uppercase text-center">Supprimer</button>
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
												<div class="mb-2 text-justify"><?= $item[3] ?></div>
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

	<!-- Start review Area -->
	<section class="review-area section-gap">
		<div class="container">
			<div class="row">
				<div class="active-review-carusel">
					<div class="single-review">
						<img src="img/blog/user1.png" alt="user1">
						<h4>Roger</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
						<p>
							“Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, iste.”
						</p>
					</div>
					<div class="single-review">
						<img src="img/blog/user2.jpg" alt="user2">
						<h4>Alice</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
						<p>
							“Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores earum esse similique vero praesentium sit libero nemo iste, dolor debitis explicabo. Dolores enim hic facere tenetur dolore reiciendis ex commodi?”
						</p>
					</div>
					<div class="single-review">
						<img src="img/blog/user3.png" alt="user3">
						<h4>Nancy</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<p>
							“Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis minima corrupti labore! Facilis unde praesentium corrupti quis minus. Nam at corrupti pariatur? Omnis praesentium deleniti assumenda architecto hic aspernatur sed, voluptate velit optio recusandae, perspiciatis modi tenetur ducimus deserunt. Officia voluptates impedit incidunt excepturi facilis quia odio eaque quae unde?”
						</p>
					</div>
					<div class="single-review">
						<img src="img/blog/user4.jpg" alt="user4">
						<h4>Robert</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
						<p>
							“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, architecto, eius similique reiciendis culpa esse sunt modi laboriosam vel, ut deserunt. Consectetur quae, dolores pariatur cupiditate veniam ipsam reiciendis facilis perferendis, iusto praesentium cum assumenda!”
						</p>
					</div>
					<div class="single-review">
						<img src="img/blog/user5.png" alt="user5">
						<h4>Denise</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
						<p>
							“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore optio distinctio eaque. Animi quisquam, cum quasi sunt ipsa porro facere!”
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End review Area -->
<?php
	require_once("partiel/footer.php");