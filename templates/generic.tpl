<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><?php echo $Generic->title(); ?></title>
	</head>
	<body>
		<h1><?php echo $Generic->title(); ?> Installed!</h1>
		<p>
			You did it! PHPainfree is installed and working. Now you just need to build your app.
			I suggest you build a top-level PHP script and place it in <code>includes/</code>. I 
			recommend that you name your script like your name.
		</p>
		<p>
			You'll also want to figure out your URL scheme you're going to use. These url's will be
			placed in <code>$Painfree->path</code> after being set 
			in <code>$_REQUEST['<?php echo $PainfreeConfig['PathParameter']; ?></code>.
		</p>
		<p>
			A scheme I always like to use is <code>/VIEW_NAME/ID/ACTION</code>.
		</p>
		<p>
			If I was building a blog, I would have something like <code>/post/123</code> to view
			Blog Entry #123, and <code>/post/123/edit</code> to edit that post. You'll have to figure
			out what to do in your code from there. But if "post" is the view, I'd make a file called post.tpl
			and put it in templates and have your BaseView automatically load it from <code>templates/views/</code>.
		</p>
		<p>
			But that's just me... do what you want.
		</p>
		<h2>Dump of $Painfree</h2>
		<pre><?php print_r($Painfree); ?></pre>
	</body>
</html>	