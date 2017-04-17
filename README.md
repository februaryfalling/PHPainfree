PHPainfree
==========

PHPainfree is an **ultra**-lightweight PHP framework. It is inspired by the
MVC concept and attempts to remove barriers to entry while providing the
flexibility to design, develop, and deploy applications of any size or
complexity.

Caveat Emptor
-------------

1. This software is under development, and all bugs should be reported through github's issues system.


About
-----

+ **Version:** 0.10.0
+ **Auther:** Eric Ryan Harrison ([email](me@ericharrison.info) || [blog](http://ericharrison.info)

Installation
------------

	1. Extract the PHPainfree release.
	2. Place the contents of the htdocs/ folder in your web directory's document root.
	3. Place the includes/ and templates/ folders somewhere accessible to your PHP's include root.
		(If you can't mess with your include root, you should be able to place these folders inside your document root)
	4. Copy includes/PainfreeConfig-GENERIC.php to PainfreeConfig.php.
	5.Edit includes/PainfreeConfig.php. Modify the $PainfreeConfig variable to match your application configurat.
	6. Run and enjoy!

Notes
-----

This really has only been tested in Apache. This is the first "release" of the framework.

***Nothing is well documented.***

There's really nothing too useful here at all. But, at the very least you should
theoretically be able to install PHPainfree and have any request to your server
load. If you don't change the parameters ApplicationController and BaseView,
you should see a working page.
