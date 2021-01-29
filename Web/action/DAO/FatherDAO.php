<?php
	require_once("action/DAO/Connection.php");

	class FatherDAO {

		protected static function getTexte($id){
			$connection = Connection::getConnection();
			$result = $connection->prepare("SELECT `texte` FROM `textes` WHERE `id`=?");
			$result->bindParam(1, $id);
			$result->execute();

			return $result->fetch()[0];
		}

	}