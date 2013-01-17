# Grow Your Own PHP App #

## STEP 2: Introducing PHP ##

Hopefully, the last example made you cringe - a lot.  Even if you don't know
PHP, alarms should be going off - there's just so many things WRONG with the
Flat HTML blog.

What if you wanted to decorate the pages with a header and footer, include a
copyright notice, link to some other pages, or even just change the site title?
You have to manually edit every page.  Sure, right now that's only 4 files -
the index and 3 blog posts - but that's going to get so much harder to manage as
the blog grows.  And you can pretty much forget about adding nice features like
Searching or RSS Feeds.

Let's start improving this by introducing a reusable template.



## Files Present ##
 *  index.php:    the root of our application, listing available blog posts.
 *  post1.php:    the first blog post.
 *  template.php: the basic html used by all pages.

## Files Absent ##
 *  postX.php:    additional blog posts beyond the first not shown.
