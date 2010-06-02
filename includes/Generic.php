<?php
/* This is a generic template for PHPainfree. It doesn't really do much */
	$Generic = new Generic();
	
	class Generic {
		public function title() {
			global $Painfree;
			return 'PHPainfree Version ' . $Painfree->Version;
		}
	
		public function __construct() {
			global $Painfree;
			
			// $this->db = $Painfree->db;
			$this->route = $Painfree->route;
		}
	}
	
