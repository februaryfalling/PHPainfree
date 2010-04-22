<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><?php echo $AppName->title(); ?></title>
		<link rel="stylesheet" type="text/css" href="/css/reset-fonts-grids.css" />
		<link rel="stylesheet" type="text/css" href="/css/appname.css" />
		<?php
			if ( $AppName->view_css() ) {
		?> 
		<link rel="stylesheet" type="text/css" href="<?php echo $AppName->view_css(); ?>" />
		<?php
			}
		?> 
		<script type="text/javascript" src="/js/core/jquery.js"></script>
		<script type="text/javascript" src="/js/appname.js"></script>
		<?php
			if ( $AppName->view_js() ) {
		?> 
		<script type="text/javascript" src="<?php echo $AppName->view_js(); ?>"></script>
		<?php
			}
		?> 
		<link rel="shortcut icon" href="/favicon.ico" />
	</head>
	<body id="<?php echo $AppName->view(); ?>">
		<div id="doc3" class="yui-t2">
			<div id="hd" class="header">
				<?php include 'templates/header.tpl'; ?>
			</div>
			<div id="bd" class="content">
				<div id="yui-main" class="main">
					<div class="yui-b">
						<div class="yui-gc">
							<div id="primary" class="yui-u first primary">
								<?php include 'templates/primary/base.tpl'; ?>
							</div>
							<div id="secondary" class="yui-u secondary">
								<?php include 'templates/secondary/base.tpl'; ?>
							</div>
						</div>
					</div>	
				</div>
				<div id="sidebar" class="yui-b sidebar">
					<?php include 'templates/sidebar/base.tpl'; ?>
				</div>
			</div>
			<div id="ft" class="footer">
				<?php include 'templates/footer.tpl'; ?>
			</div>
		</div>
	</body>
</html>	
