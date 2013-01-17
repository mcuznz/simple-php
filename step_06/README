# Grow Your Own PHP App #

## STEP 6: Security and Functions ##

Step 5 saw some huge improvements to our project - it's finally database-driven
and even has some minor error checking on the post page.  It's also introduced
some security concerns and new repeated code.

In other words, there's still a lot we can do to make this better.

I'd like you to go back to Step 5, look at the post.php file, and see if you can
find the security problem.  Go ahead, I'll wait.

You're back? Hopefully you realized that our application is vulnerable to SQL
injection.  We're assuming that visitors will start at our index page, and
click a link to one of the blog posts, ending up at a URL like:

    post.php?id=1

But what if a malicious user decided to visit this url?

    post.php?id=1;DROP%20TABLE%20posts;

This would result in the following SQL statement:

    SELECT title, content FROM post WHERE id=1;DROP TABLE posts;

Whoops! There goes your entire Blog Post table.  The solution is to check for a
reasonable 'id' value before running the SQL query.  As our blog grows, we're
probably going to start selecting posts from the database more often - on a
category page, in search results, etc.  It makes sense to create functions that
handle these repeated tasks, so that if we need to make changes to them for any
reason, we're only making changes once.


## Files Present ##
 *  index.php:     the root of our application, listing available blog posts.
 *  post.php:      the blog post handler.
 *  template.php:  the basic html used by all pages.
 *  config.php:    the global config data used by all pages.
 *  model.php:     a group of functions for handling posts

## Files Absent ##
 *  none!
