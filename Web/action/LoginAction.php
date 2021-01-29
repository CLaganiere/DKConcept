<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class LoginAction extends CommonAction {
		public $wrongLogin = false;
		public $messageSend = false;
		public $sendingError = false;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if (isset($_POST["username"])) {
				$user = UserDAO::authenticate($_POST["username"], $_POST["password"]);

				if (!empty($user)) {
					$_SESSION["username"] = $user["username"];
					$_SESSION["visibility"] = $user["visibility"];

					header("location:index.php");
					exit;
				}
				else {
					$this->wrongLogin = true;
				}
			}
			else if(isset($_POST["emailPasswordForgot"]) && $this->messageSend == false){

				$emailUser = $_POST["emailPasswordForgot"];
				$emailAdmin = 'e.claganiere@etu.cvm.qc.ca';
				$firstName =
				$lastName =
				$text= "DUDE.. come on, sérieux la. What a noob. On va t'envoyer ton mot de passe dans pas long";
				$subject= "Cest la periode des fêtes... Attendez que les gars de la TI reviennes de voyage.";

				$headersUser = 'Mot de passe oublié Bistro le 633';
				$messageUser ='From : les gars de la TI du Bistro le 633'.'
				Subject : '.$subject.'
				'.$text;

				$headerAdmin = "Reset de mot de passe";
				$messageAdmin = 'Ya un dude qui a oublié son mot de passse'.'
				Email de la honte: '. $emailUser;

				if (mail($emailUser, $headersUser, $messageUser) && mail($emailAdmin, $headerAdmin, $messageAdmin)){
					$this->messageSend = true;

				}else{
					$this->sendingError = true;
				}
			}
		}
	}
