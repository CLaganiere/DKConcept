<?php
	require_once("action/ContactAction.php");

	$action = new ContactAction();
	$action->execute();

	require_once("partiel/header.php");
?>

	<?php
		if($action->sendingError){
			?>
				<div class="col-lg-12 pt-10 pl-lg-100 pl-md-100 pb-10 text-black text-center bg-danger"> <div class="h4 col-lg-8 text-justify"> Un problème est survenu dans l'envoie du message. Assurez-vous d'avoir bien rempli tous les champs du message</div></div>
			<?php
		}
		else if($action->messageSend){
			?>
				<div class="col-lg-12 pt-10 pl-lg-100 pl-md-100 pb-10 text-black text-center bg-success"><div class="h4 col-lg-8 text-justify"> Message envoyé avec succès!</div></div>
			<?php
		}
	?>
	<!-- start banner Area -->
	<section class="relative about-banner">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Nous joindre</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<iframe class="map-wrap" style="width:100%; height: 445px;" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.4889519530834!2d-72.65542638418391!3d45.31874805115769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9da3d5e6a88ed%3A0x46d481f36800559f!2sBistro%20Le%20633!5e0!3m2!1sfr!2sca!4v1574708816264!5m2!1sfr!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Bromont, Québec</h5>
							<p>
								633 Rue Shefford, QC J2L 2K5
							</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details text-justify">
							<h5>(450) 534-0633</h5>
							<p>Appelez-nous sur nos heures d'ouverture et il nous fera un plaisir de vous répondre.</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details text-justify">
							<h5>e.claganiere@etu.cvm.qc.ca</h5>
							<p>Si vous avez une question ou de l'intérêt dans nos services et nos produits, communiquer nous à n'importe quel moment!</p>
						</div>
					</div>
				</div>

				<div class="col-lg-8">
					<form class="form-area contact-form text-right" id="myForm" action="contact.php" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="firstName" placeholder="Votre prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre prénom'" class="common-input mb-20 form-control" required="" type="text">
								<input name="lastName" placeholder="Votre nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre nom'" class="common-input mb-20 form-control" required="" type="text">
								<input name="email" placeholder="Votre adresse courriel" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse courriel'" class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder="Entrer le sujet" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer le sujet'" class="common-input mb-20 form-control" required="" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Composer un message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Composer un message'" required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button type="submit" class="genric-btn primary" style="float: right;">Envoyer un message</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-12 text-center mt-60 mt-sm-20">
					<img class="img-fluid" style="max-width:600px;width:100%; height:auto" height="auto" width="auto" src="img/autres/resto-exterieur.jpg" alt="Restaurant">
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->
<?php
	require_once("partiel/footer.php");