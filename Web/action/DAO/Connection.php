<?php

	class Connection {
		private static $connection = null;
		//https://webmysql.notes-de-cours.com/phpmyadmin/
		public static function getConnection() {
			if (Connection::$connection == null) {
				Connection::$connection = new PDO("mysql:host=webmysql.notes-de-cours.com;dbname=chunkysoup", "chunkysoup", "AAAaaa111");
				Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}

			return Connection::$connection;
		}

	}