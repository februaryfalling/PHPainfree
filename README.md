PHPainfree 
==========
+ *A [February Falling](http://februaryfalling.com) project.*
+ **Version:** 0.8.0
+ **Auther:** Eric Ryan Harrison ([email](me@ericharrison.info) || [blog](http://ericharrison.info) || [company](http://februaryfalling.com))
+ **Tutorial:** [PHPainfree Test Drive](http://www.velvetcache.org/2010/06/07/phpainfree-test-drive)

About
-----

I am an **ultra**-lightweight PHP framework. I am inspired by the MVC concept, 
but I'm too artsy to let myself be defined by labels like that. I basically 
do what I want. 

To be honest, as a framework, I'm really too different to be defined at all. 
To make things easier on the both of us, how about I just write down some 
things I promise I will do, and you decide if my promises are good enough for 
you to feel good about us being friends.

My Eternal Promise
------------------

I, PHPainfree, do hereby solemnly swear and affirm the following related statements about the relationship  
between **DEVELOPER** (hereafter referred to as "**you**") and **FRAMEWORK** (hereafter referred to as "**I**"). 

1. **I eternally promise to do everything in my power to stay out of your way.** 
2. I promise that I will never force you to do things my way just because I think my way is the best way (which it probably is).
3. I promise that I will never force you to talk to me in some kind of nasty street slang that is only good for talking to Hobos and such. 
4. Actually, now that I think about it, I promise that I won't make you talk to me at all if you don't feel like it. 
5. I promise to just get out of your way and just let you do your work. I'll go sit in a corner and read a book or something.
6. I promise to always be here for you if you ever need a helping hand.
7. I promise to be the kind of friend that will gladly help you store all your files at 
my place, and I promise I'll always give them to you when you ask for them.
8. I promise I'll be the kind of friend who will run errands for you if you're too busy.
9. I promise that I will try to never drink the last can of soda without at least writing 
down that we need to buy more Dr. Pepper from the store the next time we go to buy groceries. 

Caveat Emptor
-------------

With that said, while I promise to always live faithfully by the promises I've made 
to you, there are a few things that I simply cannot control. I'm not saying that 
these will always happen (or ever happen for that matter), but I just feel like 
since we're friends now, I have to warn you that these things could happen.

1. I'm not perfect. You're not perfect. Nobody is perfect. I can't promise that 
I'll never make a mistake. I make mistakes all the time. If you promise to not 
hold my mistakes against me, I promise I won't hold your mistakes against you. 
If you see me doing something wrong, just [let me know](http://github.com/februaryfalling/PHPainfree/issues). 
I'm pretty good at handling constructive criticism, and I think we'll both be 
happier in the long run if you just let me know when I do something you don't like.
2. I ran out of things to Caveat about, so this number 2 is merely to make it look 
like we're still busy doing some work...
	
Installation
------------

	1. Extract the PHPainfree release.
	2. Place the contents of the htdocs/ folder in your web directory's document root.
	3. Place the includes/ and templates/ folders somewhere accessible to your PHP's include root.
		(If you can't mess with your include root, you should be able to place these folders inside your document root)
	4. **new in v0.3** Copy includes/PainfreeConfig-GENERIC.php to PainfreeConfig.php.
	5. **new in v0.3** Edit includes/PainfreeConfig.php. Modify the $PainfreeConfig variable to match your application configurat.
	6. Run and enjoy!
	
Notes
-----

This really has only been tested in Apache. This is the first "release" of the framework. 

***Nothing is well documented.***

There's really nothing too useful here at all. But, at the very least you should 
theoretically be able to install PHPainfree and have any request to your server 
load. If you don't change the parameters ApplicationController and BaseView, 
you should see a working page.

