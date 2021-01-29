<?php
	require_once("action/DAO/FatherDAO.php");

	class MealDAO extends FatherDAO{

		public static function updateRepas($id, $newName, $newDesc) {
			$connection = Connection::getConnection();

			$result = $connection->prepare("SELECT `description` FROM `repas` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();
			$idDescription = $result->fetch()[0];

			$statementDesc = $connection->prepare("UPDATE `textes` SET `texte`=? WHERE id=?");
			$statementDesc->bindParam(1, $newDesc);
			$statementDesc->bindParam(2, $idDescription);
			$statementDesc->execute();

			$statementNom = $connection->prepare("UPDATE `repas` SET `nom`=? where `id`=?");
			$statementNom->bindParam(1, $newName);
			$statementNom->bindParam(2, $id);
			$statementNom->execute();
		}

		public static function addRepas($nom, $group, $description, $image){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO `textes` (`texte`) VALUES(?)");
			$statement->bindParam(1, $description);
			$statement->execute();
			$result = $connection->query("SELECT LAST_INSERT_ID()");
			$idDesc = $result->fetch()[0];

			$statement = $connection->prepare("INSERT INTO `repas` (`nom`,`group`,`description`,`image`) VALUES (?,?,?,?)");
			$statement->bindParam(1, $nom);
			$statement->bindParam(2, $group);
			$statement->bindParam(3, $idDesc);
			$statement->bindParam(4, $image);
			$statement->execute();
		}

		public static function getRepas(){
			$repas = [];
			$connection = Connection::getConnection();
			$result = $connection->query("SELECT `id`,`nom`,`group`,`description`,`image` FROM `repas`");

			while($row = $result->fetch()) {
				$texte = MealDAO::getTexte($row["description"]);
				array_push($repas, [$row["id"],$row["nom"],$row["group"], $texte, $row["image"]]);
			}

			return $repas;
		}

		public static function removeRepas($id){
			$connection = Connection::getConnection();

			$result = $connection->prepare("SELECT `description` FROM `repas` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();
			$idDescription = $result->fetch()[0];

			$statement = $connection->prepare("DELETE FROM textes WHERE id=?");
			$statement->bindParam(1, $idDescription);
			$statement->execute();

			$statement = $connection->prepare("DELETE FROM repas WHERE id=?");
			$statement->bindParam(1, $id);
			$statement->execute();
		}

		public static function getFileRepas($id){
			$connection = Connection::getConnection();
			$statement = $connection->prepare("SELECT `image` FROM `repas` WHERE `id`=?");
			$statement->bindParam(1, $id);
			$statement->execute();
			$image = $statement->fetch()[0];

			return $image;
		}
	}
