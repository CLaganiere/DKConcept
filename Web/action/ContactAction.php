<?php
	require_once("action/CommonAction.php");

	class ContactAction extends CommonAction {
		public $sendingError = false;
		public $messageSend = false;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"])
				&& isset($_POST["message"])&& isset($_POST["subject"]) && $this->messageSend == false){

				$to = 'e.claganiere@etu.cvm.qc.ca';
				$firstName = $_POST["firstName"];
				$lastName = $_POST["lastName"];
				$email= $_POST["email"];
				$text= $_POST["message"];
				$subject= $_POST["subject"];

				$headers = 'Commentaire DKoncept';

				$message ='From : '.$firstName.' '.$lastName.'
				Email : '.$email.'
				Subject : '.$subject.'
				'.$text;

				if (mail($to, $headers, $message)){
					$this->messageSend = true;

				}else{
					$this->sendingError = true;

				}
			}

		}
	}