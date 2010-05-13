<?php

/************************** PHPainfree **************************
Name: Painfree.php

Author: Eric Ryan Harrison 
	me@ericharrison.info
	http://ericharrison.info
	
Usage:
	This script should be called by index.php in your document
	root. You should define all of your configuration options
	in this file.
****************************************************************/

/*************************** Edit Me ***************************/
$PainfreeConfig = array(
	// ApplicationController is the primary controller for your
	// application. Generic.php is provided, but doesn't do anything
	// except look for the view in the templates/ folder
	'ApplicationController' => 'Generic.php', 
	
	// BaseView is the name of your base template inside of the templates
	// folder. This base view generally provides the overall framework
	// of output for your application
	'BaseView' => 'generic.tpl',
	
	// DefaultView is the default view
	'DefaultView' => 'main',
	
	// DB Configuration
	// each element in the array is a DB server to try. If one
	// fails to connect, it will roll-over to the next
	// leave the array empty for no DB connection
	'Database' => array(),
	/*
	'Database' => array(
		'PrimaryDB' => array(
			'host'   => 'hostname.or.ip.of.server.1.com',
			'user'   => 'username',
			'pass'   => 'password',
			'schema' => 'default_schema',
			'port'   => 3306,
		),
		'BackupDB' => array(
			'host'   => 'hostname.or.ip.of.server.2.com',
			'user'   => 'username',
			'pass'   => 'password',
			'schema' => 'default_schema',
			'port'   => 3306,
		),
	),
	*/
	
	// hardcore configuration. only change this if you know what you're doing
	'PathParameter'  => 'path',
	'TemplateFolder' => 'templates/',
	'LogicFolder'    => 'includes/',
	
);

/************************* Don't touch *************************/
$Painfree = new PHPainfree($PainfreeConfig);
include $Painfree->logic(); // load the application logic controller and process the request
include $Painfree->view();  // load the view

class PHPainfree {
	/* public members */	
	public $Version = '0.2.0';
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
