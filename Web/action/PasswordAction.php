<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class PasswordAction extends CommonAction {
		public $myError = NULL;
		public $messageSend = false;
		public $sendingError = false;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {

			if (isset($_POST["oldPassword"]) && isset($_POST["newPassword1"]) && isset($_POST["newPassword2"])) {
				if($_POST["newPassword1"] === $_POST["newPassword2"]){
					$user = UserDAO::authenticate($_SESSION["username"], $_POST["oldPassword"]);
					if (!empty($user)) {
						UserDAO::updatePassword($_SESSION["username"], $_POST["newPassword1"]);
						$this->myError = "ALL_GOOD";
					} else {
						$this->myError = "WRONG_LOGIN";
					}
				} else {
					$this->myError = "WRONG_PASSWORD";
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
