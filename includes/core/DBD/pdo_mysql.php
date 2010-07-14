<?php

	class pdo_mysql {
		static function connect($host,$user,$pass,$schema,$port) {
			$dsn = "mysql:host=$host;port=$port;dbname=$schema";
			try {
				$db = @new PDO($dsn,$user,$pass);
				return $db;
			} catch(PDOException $e) {
				// die('Error: ' . $e->getMessage());
				return false;
			}
		}
		
		
	}
