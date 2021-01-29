<?php
	session_start();
	require_once("action/constants.php");

	abstract class CommonAction {
		protected static $VISIBILITY_PUBLIC = 0;
		protected static $VISIBILITY_MEMBER = 1;
		protected static $VISIBILITY_MODERATOR = 2;
		protected static $VISIBILITY_ADMIN = 3;

		private $pageVisibility;

		public $infolettreSend = false;
		public $errorInfolettre = false;

		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}

		public function execute() {

			if (!empty($_GET["logout"])) {
				session_unset();
				session_destroy();
				session_start();
			}

			if (empty($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}

			if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location:login.php");
				exit;
			}

			if(isset($_POST["infoLettreEmail"]) && 	$this->infolettreSend == false){

				$adminEmail = 'e.claganiere@etu.cvm.qc.ca';
				$personEmail = $_POST["infoLettreEmail"];

				$text= "Joyeux Noel et joyeuses fetes!";
				$subject= "Des beaux souhaits";
				$from = "Bistro le 633";
				$headers = "C'est le temps des fetes!";

				$messageUser ='From : '.$from.'
				Subject : '.$subject.'
				'.$text;

				$headersAdmin = 'Inscription infolettere';

				$textAdmin = "Requete d'inscription a l'infolettre";
				$messageAdmin = ''.$textAdmin.'
				Email : '.$personEmail;

				if (mail($personEmail, $headers, $messageUser) && mail($adminEmail, $headersAdmin, $messageAdmin)){
					$this->infolettreSend = true;

				}else{
					$this->errorInfolettre = true;
				}
			}

			// Template method
			$this->executeAction();
		}

		protected abstract function executeAction();

		public function isLoggedIn() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
		}

		public function getUsername() {
			return empty($_SESSION["username"]) ? "Invité" : $_SESSION["username"];
		}
	}