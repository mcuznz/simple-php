# Grow Your Own PHP App #

## STEP 8: The Application Controller ##

Our output code is *much* more readable now thanks to output buffering, but the
code is anything but DRY right now!  Both index.php and post.php start and end
with the code few lines:

    include 'config.php';
    include 'model.php';

    ...

    mysql_close($db);
    include 'template.php';

Certainly there's something we can do to prevent this painful repetition, right?
The solution is to pass every single page load through a common script, and let
it "route" the request.

This "router" is commonly called a Application Controller, especially in the world of
PHP frameworks.

Note that this *does* change our URL format.  After setting up a simple Apache
mod_rewrite url, specifying index.php is redundant.  Now, our index URL is
simply "/" and our post URLs are "/post?id=X".


## Files Present ##
 *  index.php:     repurposed - now the application controller.
 *  post.php:      the single blog post handler.
 *  list.php:      the blog post list handler (what index.php used to do).
 *  template.php:  the basic html used by all pages.
 *  config.php:    the global config data used by all pages.
 *  model.php:     a group of functions for handling posts
 *  .htaccess:     Apache config file which sets up our mod_rewrite rule.

## Files Absent ##
 *  none!
