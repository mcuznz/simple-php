# Grow Your Own PHP App #

## STEP 3: Reusable Code ##

You're still cringing right? Good.  While this is a definite improvement over
the Flat HTML we started with, there's still so much WRONG with it.  There's
still a lot of things that would need to be updated manually here - if you
wanted to change the title of the first post, there'd be one update in
index.php, and two more in post1.php.  All we've really done is isolate the
surrounding HTML.

If you take a peek at template.php in Step 2, you'll notice we had to add a
little evaluation code to the < title > tag to make sure both indexes and blog
post titles appeared correctly.

In both index.php and post1.php, we had to escape some quotation marks so our
$content value didn't break.  This is a little bit sloppy, makes our code less
readable, and is a very common source of error.

In this step, we'll add another file - postdata.php - which will contain the
data for our blog posts and allow us to access the same information universally
within our application.


## Files Present ##
 *  index.php:    the root of our application, listing available blog posts.
 *  post.php:     the blog post handler.
 *  template.php: the basic html used by all pages.
 *  postdata.php: the blog post data used by all pages.

## Files Absent ##
 *  none!
 *  The content for Blog Posts 2 and 3 was left blank - you get the idea.
 