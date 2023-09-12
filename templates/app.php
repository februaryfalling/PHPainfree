<?php
if ( $App->htmx && file_exists("{$App->BASE_PATH}/templates/views/{$App->view}.php") ) {
	include_once "views/{$App->view}.php";
} else { 
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $Painfree->safe($App->title()); ?></title>

		<link rel="stylesheet" href="/css/app.css">	
<?php
	if ( file_exists("{$App->BASE_PATH}/htdocs/css/views/{$App->view}.css") ) {
?>
		<link rel="stylesheet" href="/css/views/<?= $App->view; ?>.css" />
<?php
	}
?>
	
		<!-- htmx -->
		<script src="https://unpkg.com/htmx.org@1.9.5"></script>
		<script type="text/javascript" src="/js/app.js"></script>
<?php
	if ( file_exists("{$App->BASE_PATH}/htdocs/js/views/{$App->view}.js") ) {
?>
		<script type="text/javascript" src="/js/views/<?= $App->view; ?>.js"></script>
<?php
	}
?>

	</head>
	<body id="app-body">

<?php
	if ( file_exists("{$App->BASE_PATH}/templates/views/{$App->view}.php") ) {
		include "views/{$App->view}.php";
	} else {
		include "views/404.php";
	}
?>

	</body>
</html>

<?php
} // end of normal render mode

