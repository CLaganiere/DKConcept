<?php
	require_once("action/DAO/FatherDAO.php");

	class UserDAO extends FatherDAO{

		public static function authenticate($username, $password) {
			$user = null;

			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * from users where username = ?");
			$statement->bindParam(1, $username);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			if ($row = $statement->fetch()) {
				if (password_verify($password, $row["password"])) {
					$user = [];
					$user["username"] = $row["username"];
					$user["visibility"] = $row["visibility"];
				}
			}

			return $user;
		}

		public static function newUser($username, $passwors,$visibility){
			$connection = Connection::getConnection();
			$hash = password_hash($password,PASSWORD_DEFAULT);
			$statement = $connection->prepare("INSERT INTO `users`(`username`, `password`, `visibility`) VALUES (?,?,?)");
			$statement->bindParam(1, $username);
			$statement->bindParam(2, $hash);
			$statement->bindParam(3, $visibility);
			$statement->execute();
		}

		public static function updatePassword($username, $newPassword) {
			$connection = Connection::getConnection();
			$hash = password_hash($newPassword,PASSWORD_DEFAULT);
			$statement = $connection->prepare("UPDATE `users` SET `password` = ? where `username`=?");
			$statement->bindParam(1, $hash);
			$statement->bindParam(2, $username);
			$statement->execute();
		}
	}