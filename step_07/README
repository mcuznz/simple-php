# Grow Your Own PHP App #

## STEP 7: Tidying Up ##

Things just keep getting better around here!  We're now making use of some nice
reusable functions, and we're making sure that the 'id' value we look up is
reasonably valid before we hit the database.

We introduced a new problem though: every function we just created relies on a
database connection being created with the variable $db.  While it's unlikely
this small app would ever need to access more than once database, it's still
not a great idea; among other things, it makes writing unit tests for our code
a tricky proposition.

The solution is to pass $db as a parameter into functions which need it, instead
of assuming its global existence.

Adding all of our content manually to the $content variable is also a little bit
ugly, so lets improve that behaviour with output buffering.


## Files Present ##
 *  index.php:     the root of our application, listing available blog posts.
 *  post.php:      the blog post handler.
 *  template.php:  the basic html used by all pages.
 *  config.php:    the global config data used by all pages.
 *  model.php:     a group of functions for handling posts

## Files Absent ##
 *  none!
