<?php
	require_once("action/DAO/FatherDAO.php");

	class CarriereDAO extends FatherDAO{

		public static function updateCarriere($id, $newName, $newSalary, $newDesc) {
			$connection = Connection::getConnection();

			$result = $connection->query("SELECT `description` FROM `carrieres` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();
			$idDescription = $result->fetch()[0];

			$statementDesc = $connection->prepare("UPDATE `textes` SET `texte`=? WHERE id=?");
			$statementDesc->bindParam(1, $newDesc);
			$statementDesc->bindParam(2, $idDescription);
			$statementDesc->execute();

			$statementNom = $connection->prepare("UPDATE `carrieres` SET `nom`=?, `salary`=? where `id`=?");
			$statementNom->bindParam(1, $newName);
			$statementNom->bindParam(2, $newSalary);
			$statementNom->bindParam(3, $id);
			$statementNom->execute();
		}

		public static function addCarriere($nom, $group, $salary, $description){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO `textes` (`texte`) VALUES(?)");
			$statement->bindParam(1, $description);
			$statement->execute();
			$result = $connection->query("SELECT LAST_INSERT_ID()");
			$idDesc = $result->fetch()[0];


			$statement = $connection->prepare("INSERT INTO `carrieres` (`nom`,`group`,`salary`,`description`) VALUES (?,?,?,?)");
			$statement->bindParam(1, $nom);
			$statement->bindParam(2, $group);
			$statement->bindParam(3, $salary);
			$statement->bindParam(4, $idDesc);
			$statement->execute();
		}

		public static function getCarrieres(){
			$carrieres = [];
			$connection = Connection::getConnection();
			$result = $connection->query("SELECT `id`,`nom`,`group`,`salary`,`description` FROM `carrieres`");

			while($row = $result->fetch()) {
				$texte = CarriereDAO::getTexte($row["description"]);
				array_push($carrieres, [$row["id"],$row["nom"],$row["group"],$row["salary"], $texte]);
			}

			return $carrieres;
		}

		public static function removeCarriere($id){
			$connection = Connection::getConnection();

			$result = $connection->prepare("SELECT `description` FROM `carrieres` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();
			$idDescription = $result->fetch()[0];

			$statement = $connection->prepare("DELETE FROM textes WHERE id=?");
			$statement->bindParam(1, $idDescription);
			$statement->execute();

			$statement = $connection->prepare("DELETE FROM carrieres WHERE id=?");
			$statement->bindParam(1, $id);
			$statement->execute();
		}
	}
