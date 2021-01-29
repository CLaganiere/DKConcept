<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/TeamDAO.php");

	class RestaurantAction extends CommonAction {
		public $equipes = [];
		public $error = [];
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			if (isset($_POST["remove"])){
				$delete_file = TeamDAO::getFileEquipe($_POST["id"]);
				unlink($delete_file);
				TeamDAO::removePersonTeam($_POST["id"]);
				header("location:restaurant.php#teamBistro");
				exit;
			}
			else if(isset($_POST["submit"]) && isset($_POST["nom"]) && isset($_POST["poste"]) && isset($_POST["desc"]) && isset($_FILES['image'])){
				$extensions= array("jpeg","jpg","png");
				$file_name = $_FILES['image']['name'];
				$file_ext=strtolower(end(explode('.',$file_name)));
				if(in_array($file_ext,$extensions)=== false){
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				} else {
					$check = getimagesize($_FILES["image"]["tmp_name"]);
					if($check !== false){

						$file_size = $_FILES['image']['size'];
						$file_tmp = $_FILES['image']['tmp_name'];
						$file_type = $_FILES['image']['type'];

						if($file_size > 2097152){
							$errors[]='File size must be excately 2 MB';
						}

						if(empty($this->errors)==true){
							$compteur = 0;
							$test = fopen("img/insert/".$compteur.$file_name,'r');
							while ($test != FALSE){
								$compteur++;
								$test = fopen("img/insert/".$compteur.$file_name,'r');
							}
							$file = "img/insert/".$compteur.$file_name;
							move_uploaded_file($file_tmp,$file);
							TeamDAO::addPersonTeam($_POST["nom"], $_POST["poste"], $_POST["desc"], $file);
							header("location:restaurant.php#teamBistro");
							exit;
						}
					}
				}
			}
			else if(isset($_POST["savePerson"]) && isset($_POST["newName"]) && isset($_POST["newPoste"]) && isset($_POST["newDesc"])){
				if (isset($_FILES["newImage"])){
					$extensions= array("jpeg","jpg","png");
					$file_name = $_FILES['newImage']['name'];
					$file_ext=strtolower(end(explode('.',$file_name)));
					if(in_array($file_ext,$extensions)=== false){
						$errors[]="extension not allowed, please choose a JPEG or PNG file.";
					} else {
						$check = getimagesize($_FILES["newImage"]["tmp_name"]);
						if($check !== false){

							$file_size = $_FILES['newImage']['size'];
							$file_tmp = $_FILES['newImage']['tmp_name'];
							$file_type = $_FILES['newImage']['type'];

							if($file_size > 2097152){
								$errors[]='File size must be excately 2 MB';
							}

							if(empty($this->errors)==true){
								move_uploaded_file($file_tmp,TeamDAO::getFileEquipe($_POST["idItem"]));
							}
						}
					}
				}
				TeamDAO::updatePersonTeam($_POST["idItem"], $_POST["newName"], $_POST["newPoste"], $_POST["newDesc"]);
				header("location:restaurant.php#teamBistro");
				exit;
			}

			$this->equipes = TeamDAO::getPersonTeam();
		}
	}