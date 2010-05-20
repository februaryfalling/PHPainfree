<?php

	class mysql {
		static function connect($host,$user,$pass,$schema,$port) {
			$db = @new mysqli($host,$user,$pass,$schema,$port);
			if ( ! mysqli_connect_errno() ) {
				return $db;
			} else {
				return false; //mysqli_connect_errno() . ']: ' . mysqli_connect_error();
			}
		}
		
		
	}
