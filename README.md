PHPainfree 
==========

An ultra-lightweight PHP framework.

+ **Version:** 0.2.0
+ **Auther:** Eric Ryan Harrison (<me@ericharrison.info>)
             <http://ericharrison.info>
             <http://februaryfalling.com>

Installation
------------

	1. Extract the PHPainfree release.
	2. Place the contents of the htdocs/ folder in your web directory's document root.
	3. Place the includes/ and templates/ folders somewhere accessible to your PHP's include root.

		(If you can't mess with your include root, you should be able to place these folders inside your document root)

	4. Edit includes/Painfree.php. Modify the $PainfreeConfig variable to match your application configuration.
	5. Run and enjoy!
	
Notes
-----

This really has only been tested in Apache. This is the first "release" of the framework. 

*Nothing is well documented.*

There's really nothing too useful here at all. But, at the very least you should theoretically be able to install PHPainfree and have any request to your server load. If you don't change the parameters ApplicationController and BaseView, you should see a working page.


