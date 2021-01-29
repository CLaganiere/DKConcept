<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/MealDAO.php");

	class IndexAction extends CommonAction {
		public $repas = [];
		public $messageSend = false;
		public $sendingError = false;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["emailReservation"])
				&& isset($_POST["phone"])&& isset($_POST["dateReservation"]) && isset($_POST["optionReservation"])
				&& $this->messageSend == false){

				$to = 'e.claganiere@etu.cvm.qc.ca';
				$firstName = $_POST["firstName"];
				$lastName = $_POST["lastName"];
				$email= $_POST["emailReservation"];
				$phone= $_POST["phone"];
				$date= $_POST["dateReservation"];
				$option= $_POST["optionReservation"];


				$headers = 'Reservation au Bistro le 633 pour le '.$date;

				$message ='From : '.$firstName.' '.$lastName.'
				Email : '.$email.'
				Phone : '.$phone.'
				Date : '.$date.'
				Option : '.$option;

				if (mail($to, $headers, $message)){
					$this->messageSend = true;

				}else{
					$this->sendingError = true;

				}
			}


			$this->repas = MealDAO::getRepas();
		}
	}