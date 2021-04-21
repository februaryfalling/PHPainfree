<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><?php echo $Generic->title(); ?></title>
		<link rel="stylesheet" href="/css/debug.css" type="text/css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="/js/debug.js"></script>
	</head>
	<body>
		<h1><?php echo $Generic->title(); ?> Installed!</h1>
		<p>
			You are a genius! Against all odds, you somehow managed to get PHPainfree installed and working. Kudos.
			You are now a part of a special, select group of engineers that have unlocked the key to the internet. Congrats.
			<div class="tenor-gif-embed" data-postid="4158682" data-share-method="host" data-width="50%" data-aspect-ratio="1.4018691588785046"><a href="https://tenor.com/view/awesome-youreawesome-gif-4158682">Who's Awesome? GIF</a> from <a href="https://tenor.com/search/awesome-gifs">Awesome GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
			Now you just need to build your app. I suggest you build a top-level PHP script and place it in <code>includes/</code>. I
			recommend that you name your script like your app's name.
		</p>
		<p>
			You'll also want to figure out the URL scheme you're going to use. These url's will be
			placed in <code>$Painfree->route</code> after being set
			in <code>$_REQUEST['<?php echo $PainfreeConfig['RouteParameter']; ?>'];</code>.
		</p>
		<p>
			A scheme I always like to use is <code>/VIEW_NAME/ID/ACTION</code>.
		</p>
		<p>
			If I was building a blog, I would have something like <code>/post/123</code> to view
			Blog Entry #123, and <code>/post/123/edit</code> to edit that post. You'll have to figure
			out what to do in your code from there. But if "post" is the view, I'd make a file called post.php
			and put it in templates and have your BaseView automatically load it from <code>templates/views/</code>.
		</p>
		<p>
			These are the only clues I will give you. Good luck.
			<div class="tenor-gif-embed" data-postid="5114734" data-share-method="host" data-width="50%" data-aspect-ratio="1.776978417266187"><a href="https://tenor.com/view/thehungergames-hungergames-thggifs-effie-gif-5114734">May The Odds Be Ever In Your Favor - Effie GIF</a> from <a href="https://tenor.com/search/maytheodds-gifs">Maytheodds GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
		</p>
		<h2>Debugger</h2>
		<?php include 'debug.php'; ?>
	</body>
</html>
