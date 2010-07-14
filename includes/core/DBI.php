<?php

	class DBI {
		
		private $Connections = array();
		private $errors      = array();
		private $db          = null;
		
		public function handle() {
			if ( $this->db ) {
				return $this->db;
			}
			return false;
		}
		
		public function __construct($db_config) {
			$this->Connections = $db_config;
			
			foreach ( $this->Connections as $server => $Conn ) {
				$dbd = isset($Conn['type']) ? strtolower($Conn['type']) : 'mysql';
				include_once 'DBD/' . $dbd . '.php';
				$this->db = call_user_func($dbd . '::connect', 
					$Conn['host'], 
					$Conn['user'], 
					$Conn['pass'], 
					$Conn['schema'], 
					$Conn['port']
				);
				if ( $this->db ) {
					break;
				}
			}
			
			if ( ! $this->db ) {
				die('Sorry, a database connection could not be established.');
			}
		}
		
		
	}
