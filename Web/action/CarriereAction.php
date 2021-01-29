<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/CarriereDAO.php");

	class CarriereAction extends CommonAction {
		public $carrieres = [];
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if (isset($_POST["remove"])){
				CarriereDAO::removeCarriere($_POST["id"]);
				header("location:carriere.php#menu");
				exit;
			}
			else if(isset($_POST["submit"]) && isset($_POST["nom"]) && isset($_POST["group"]) && isset($_POST["salary"]) && isset($_POST["desc"])){
				CarriereDAO::addCarriere($_POST["nom"], $_POST["group"], $_POST["salary"], $_POST["desc"]);
				header("location:carriere.php#menu");
				exit;
			}
			else if(isset($_POST["saveCarriere"]) && isset($_POST["idItem"]) && isset($_POST["newName"]) && isset($_POST["newSalary"]) && isset($_POST["newDesc"])){

				CarriereDAO::updateCarriere($_POST["idItem"], $_POST["newName"], $_POST["newSalary"], $_POST["newDesc"]);
				header("location:carriere.php#menu");
				exit;
			}

			$this->carrieres = CarriereDAO::getCarrieres();
		}
	}