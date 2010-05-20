Database Driver Subsystem
=========================

The Database Driver Subsystem (DBD) allows for multiple types of 
database services to be used. To create a new DBD, simply create
a php file named "**service_type**.php" where **service_type** is
a lower-case name of the service. By default, PHPainfree assumes
that the driver will be **mysql** if there is no argument called
**type** in the server declaration in $PainfreeConfig['DataBase'].

Usage
-----
$PainfreeConfig['DataBase'] would be defined like this:

	$PainfreeConfig = array(
		'Database' => array(
			'MySQL' => array(
				'type'   => 'mysql',
				'host'   => 'localhost',
				'user'   => 'username',
				'pass'   => 'password',
				'schema' => 'schema',
				'port'   => 3306,
			),
		),
	);

Driver Specification
--------------------
Creating new drivers is relatively simple and straightforward.

Create your driver file. Inside the driver, create a class
with the same lower-case name as the driver. Inside that class,
create a single static function named **connect** that accepts
the following arguments:

	1. Host
	2. Username
	3. Password
	4. Schema
	5. Port

This class method should return either a database handle if
the connection was successful, or should return false if it
fails.
