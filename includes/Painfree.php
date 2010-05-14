<?php

/************************** PHPainfree **************************
Name: Painfree.php

Author: Eric Ryan Harrison 
	me@ericharrison.info
	http://ericharrison.info
	
Usage:
	This script should be called by index.php in your document
	root.

	YOU MUST HAVE A FILE CALLED PainfreeConfig.php
	in your includes/ directory. Define application
	"configuration" in that file. You really don't
	ever need to do anything with this file.
	
	Close your text editor now. This isn't the code you're
	looking for.
****************************************************************/

require 'PainfreeConfig.php'; // you must have this file

$Painfree = new PHPainfree($PainfreeConfig);
include $Painfree->logic(); // load the application logic controller and process the request
include $Painfree->view();  // load the view

class PHPainfree {
	/* public members */	
	public $Version = '0.3.0';
	public $path = '';
	public $db = null;
	public $__debug = array(); // this is somewhat special.

	/* private members */	
	private $options = array();
	
	public function logic() {
		return $this->options['LogicFolder'] . $this->options['ApplicationController'];
	}
	public function view() {
		return $this->options['TemplateFolder'] . $this->options['BaseView'];
	}
	
	public function debug($heading,$obj,$abort=false) {
		if ( $abort ) {
			die('<pre>' . $heading . ' = ' . print_r($obj,true) . '</pre>');
		}
		$this->__debug[$heading] = print_r($obj,true);
	}

	public function __construct($options) {
		$this->options = $options;
		
		$this->path = isset($_REQUEST[$this->options['PathParameter']]) ? 
			$_REQUEST[$this->options['PathParameter']] :
			$this->options['DefaultView'];
			
		if ( count($options['Database']) ) {
			include_once 'core/DBI.php';
			$this->DBI = new DBI($options['Database']);
			$this->db = $this->DBI->handle();
		}
			
	}
}
