<?php
	require_once("action/LoginAction.php");

	$action = new LoginAction();
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
					<h1 class="text-white">Gestion du site</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<section class="home-about-area section-gap">
	<div class="container pb-5">
				<div class="row d-flex justify-content-center align-items-center">
				<div class="col-lg-4 position-center text-center">
					<form action="login.php" method="post">
						<?php
							if ($action->wrongLogin) {
								?>
								<div class="error-div"><strong>Erreur : </strong>Connexion erronée</div>
								<?php
							}
						?>

						<div class="form-label">
							<label for="username"><h3>Nom d'usager : </h3></label>
						</div>
						<div class="form-input h4">
							<input type="text" name="username" id="username" />
						</div>
						<div class="form-separator pb-30"></div>

						<div class="form-label">
							<label for="password"><h3>Mot de passe :  </h3></label>
						</div>
						<div class="form-input h4">
							<input type="password" name="password" id="password"/>
						</div>
						<div class="form-separator"></div>

						<div class="form-label">
							&nbsp;
						</div>
						<div class="form-input">
							<button type="submit" class="primary-btn text-uppercase">Connexion</button>
						</div>
						<div class="form-separator"></div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Beggining footer Area -->
	<footer class="footer-area">
	<div class="footer-widget-wrap">
					<div class="container">
						<div class="row pt-5 d-flex justify-content-between align-items-center">
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>J'ai de besoin d'aide immédiat!</h4>
									<p>
										Contactez l'un de vos programmeurs étoiles
									</p>
									<p class="font-weight-bold">
										Charles Laganière<br>
										Nicolas Labine-Bouchard
									</p>
									<p class="number">
										(450) 534-0633
									</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Mot de passe oublier?</h4>
									<p>Enter votre adresse courriel afin de recevoir un message de réinitialisation de mot de passe.</p>
									<div class="d-flex flex-row" id="signup_infolettre">
										  <form class="navbar-form" action="" method="post">
										    <div class="input-group add-on align-items-center d-flex">
										      	<input class="form-control text-black" name="emailPasswordForgot" id="emailPasswordForgot" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Votre adresse courriel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse courriel'" required="" type="email">
										      <div class="input-group-btn">
										        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
										      </div>
										    </div>
										      <div class="info mt-20"></div>
										  </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservé | Ce site a été réaliser par <i class="fa fa-heart-o" aria-hidden="true"></i> Charles et <i class="fa fa-heart-o" aria-hidden="true"></i> Nicolas pour <a href="https://colorlib.com" target="_blank">Bistro le 633</a></p>
							<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
	                            <li><a href="https://fr-ca.facebook.com/pages/category/Gastropub/Bistro-LE-633-497792660269634/"><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
	                        </ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
	</body>
</html>
