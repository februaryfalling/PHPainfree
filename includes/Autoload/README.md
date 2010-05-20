Autoload Subsystem
==================

During each request, PHPainfree will automatically load any .php file found
in this folder. This loading process occurs immediately after $Painfree is
initialized but right before $Painfree->logic() is loaded.

Intentions
----------
This Autoload mechanism is intended to provide you with an easy way
to include any necessary scripts at runtime that you need for 
your Logic or Templating mechanisms. 

A simple example would be if you had a library of functions that 
handled input validation. Rather than rewrite all your functions
or manually include them in your codebase, you can just dump the
file in this directory and PHPainfree will handle loading it.
