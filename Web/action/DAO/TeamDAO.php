<?php
	require_once("action/DAO/FatherDAO.php");

	class TeamDAO extends FatherDAO{

		public static function updatePersonTeam($id, $newName, $newPoste, $newDesc) {
			$connection = Connection::getConnection();

			$result = $connection->prepare("SELECT `description` FROM `equipes` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();
			$idDescription = $result->fetch()[0];

			$statementDesc = $connection->prepare("UPDATE `textes` SET `texte`=? WHERE id=?");
			$statementDesc->bindParam(1, $newDesc);
			$statementDesc->bindParam(2, $idDescription);
			$statementDesc->execute();

			$statementNom = $connection->prepare("UPDATE `equipes` SET `nom`=?, `poste`=? where `id`=?");
			$statementNom->bindParam(1, $newName);
			$statementNom->bindParam(2, $newPoste);
			$statementNom->bindParam(3, $id);
			$statementNom->execute();
		}

		public static function addPersonTeam($nom, $poste, $description, $image){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO `textes` (`texte`) VALUES(?)");
			$statement->bindParam(1, $description);
			$statement->execute();
			$result = $connection->query("SELECT LAST_INSERT_ID()");
			$idDesc = $result->fetch()[0];

			$statement = $connection->prepare("INSERT INTO `equipes` (`nom`,`poste`, `description`,`image`) VALUES (?,?,?,?)");
			$statement->bindParam(1, $nom);
			$statement->bindParam(2, $poste);
			$statement->bindParam(3, $idDesc);
			$statement->bindParam(4, $image);
			$statement->execute();
		}

		public static function getPersonTeam(){
			$equipes = [];
			$connection = Connection::getConnection();
			$result = $connection->query("SELECT `id`,`nom`,`poste`, `description`,`image` FROM `equipes`");

			while($row = $result->fetch()) {
				$texte = TeamDAO::getTexte($row["description"]);
				array_push($equipes, [$row["id"],$row["nom"],$row["poste"], $texte,$row["image"]]);
			}

			return $equipes;
		}

		public static function removePersonTeam($id){
			$connection = Connection::getConnection();

			$result = $connection->prepare("SELECT `description` FROM `equipes` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();
			$idDescription = $result->fetch()[0];

			$statement = $connection->prepare("DELETE FROM textes WHERE id=?");
			$statement->bindParam(1, $idDescription);
			$statement->execute();

			$statement = $connection->prepare("DELETE FROM equipes WHERE id=?");
			$statement->bindParam(1, $id);
			$statement->execute();
		}

		public static function getFileEquipe($id){
			$connection = Connection::getConnection();
			$statement = $connection->prepare("SELECT `image` FROM `equipes` WHERE `id`=?");
			$statement->bindParam(1, $id);
			$statement->execute();
			$image = $statement->fetch()[0];

			return $image;
		}
	}