# Grow Your Own PHP App #

## STEP 5: Adding a Database ##

Step 4 is definitely DRYer than Step 3 - we're not setting the same variable in
multiple locations, which is great.  It's time to beef up our little blog and
make it Database-driven.

Right now, every page on our site has access to every aspect of every post in
the blog.  With only 3 posts, this isn't really a big deal - but what happens
down the road when there's hundreds, even thousands of posts?  We also have to
manually edit the Post data in a PHP file, which introduces what I like to call
CLS:

### Christmas Light Syndrome ###
In other words: when one goes out, they all go out.  If you make a typo that
breaks the array, like forgetting to escape one quote somewhere, the entire
array becomes invalid and none of your pages will load correctly.  This is BAD.

Currently we're loading a lot of data we just don't need.  The index has access
to the content of every post even though it only uses the title and id
attributes.  Post 2 knows everything about Post 1, and doesn't need to know any
of it.

The solution is to load only the necessary data for each page from a database.


## Files Present ##
 *  index.php:    the root of our application, listing available blog posts.
 *  post.php:     the blog post handler.
 *  template.php: the basic html used by all pages.
 *  config.php:   the global config data by all pages.

## Files Absent ##
 *  none!
