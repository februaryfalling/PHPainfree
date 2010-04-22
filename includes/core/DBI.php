<?php

	class DBI {
		
		private $Connections = array();
		private $errors      = array();
		private $db          = null;
		
		public function handle() {
			if ( $this->db ) {
				return $db;
			}
		}
		
		public function __construct($db_config) {
			$this->Connections = $db_config;
			
			foreach ( $this->Connections as $server => $Conn ) {
				$this->db = @new mysqli($Conn['host'], $Conn['user'], $Conn['pass'], $Conn['schema'], $Conn['port']);
				if ( ! mysqli_connect_errno() ) {
					break;
				} else {
					$errors[$server] = 'Connection Failure [#' . 
						mysqli_connect_errno() . ']: ' . mysqli_connect_error();
				}
			}
			
			if ( $this->db === null ) {
				die('Sorry, a database connection could not be established.');
			}
		}
		
		
	}