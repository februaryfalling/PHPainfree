PHPainfree Functional Changelog
===============================

Version 0.10.0
-------------
**April 17,2017**

1. Changes .tpl files in templates/ folder to .php.
2. Corrects typo in generic.php template.
3. Corrects readability of default debug template CSS.

Version 0.8.0
-------------
**July 14,2010**

1. Build PDO DB driver for MySQL. Now you can say $Conn['type'] = 'pdo_mysql' and have $Painfree->db be a PDO handle.

Version 0.7.0
-------------
**June 15,2010**

1. Heavily modified debugging template to be a little bit nicer by default.
2. Generic base template now imports jQuery from Google and also adds a stylesheet and javascript for debug template handling.
3. Added $Painfree->URI parameter that gives the full request URL as passed to PHPainfree.

Version 0.6.0,6.1,6.2,6.3
-------------------------
**June 1,2010**

1. Changed "path" parameters and configuration options to be "route" instead. When I was originally building this framework, I couldn't freaking remember what the "route" concept was called. Oh well, better late than never.

Version 0.5.1
-------------
**May 20,2010**

1. Tweaked markdown formatting for new readme files.

Version 0.5.0 *Major Release*
-----------------------------
**May 20,2010**

1. Extracted database driver subsystem into DBD. Now the DBI component is no longer tied to MySQL.
2. Added Autoload folder under includes/. Any .php file placed in Autoload/ will be loaded automatically by $Painfree immediately before the Logic component is loaded. This would be a great place to put any generic libraries that you want your scripts to have access to. Please be aware that **every** PHP script inside this folder will be loaded with each request. Use with care.
3. Fixed a bug with DBI that was not returning a proper DB handle when the method handle() was called.

Version 0.4.1
-------------
**May 17, 2010**

1. Added Root parameter to $Painfree. Root contains root path to PHPainfree installation.
2. Removed trailing slash from PainfreeConfig path parameters.

Version 0.3.3
-------------
**May 14, 2010**

1. Documentation error corrected.

Version 0.3.2
-------------
**May 14, 2010**

1. Fixed release tagging and tweaked documentation format.

Version 0.3.1
-------------
**May 14, 2010**

1. Sanitized development source and corrected branch tags.

Version 0.3.0
-------------
**May 13, 2010** *(a mere 30 minutes after v0.2)*

I realized a fatal design flaw mere moments after upgrading my own site from v0.1 to v0.2. Upgrading Painfree.php overwrote $PainfreeConfig, and I lost all of my custom settings for my site. So, to aleviate this problem, I proudly bring you v0.3! **Now With 100% Less Data Loss!**

1. Pulled $PainfreeConfig out of Painfree.php and placed it in PainfreeConfig-GENERIC.php.
2. Painfree.php now REQUIRES a file to exist called PainfreeConfig.php in the includes/ directory.
3. Painfree.php also really hopes (with all of it's might) that PainfreeConfig.php has a variable called $PainfreeConfig defined.
4. Installation instructions tweaked to reflect the new structure.

*Running an actual Open Source project is hard. Before, I would just write whatever I want and hope for the best. Now I have to actually think about things like upgradability, installation, documentation, and other such silly things. To all 9 people (1 of whom I'm pretty sure is my mother) who "watch" the github repository: sorry for nothing thinking about this earlier...*

Version 0.2.0
-------------
**May 13, 2010**

1. Added CHANGELOG.md to central github master.
2. Added markdown formatting to README file (README.md)
3. Added $Painfree->debug() method to store debugging information.
4. Added generic debug template for ease of development.

Version 0.1.0
-------------
**April 21, 2010**

1. Initial release. Limited functionality provided.
