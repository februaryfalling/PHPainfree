<?php

	class mysql {
		static function connect($host,$user,$pass,$schema,$port) {
			$db = @new mysqli($host,$user,$pass,$schema,$port);
			if ( ! mysqli_connect_errno() ) {
				return $db;
			} else {
				error_log('Uh oh! You don\'t have a DB connection? Strange, I thought this was supposed to be painfree!')
				return false; //mysqli_connect_errno() . ']: ' . mysqli_connect_error();
			}
		}
		
		
	}
