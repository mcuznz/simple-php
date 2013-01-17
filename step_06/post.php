<?php

include 'config.php';
include 'model.php';

$post = get_post_by_id($_GET['id']);

if ($post == false) {
	$pagetitle = $config['blogtitle'] . ' - Post Not Found';

	$content = "<h2>Post not found</h2>\n".
		"<p>A post with id '".$_GET['id']."' could not be found.</p>";

} else {
	$pagetitle = $config['blogtitle'] . ' - ' . $post['title'];

	$content = 	"	<h2>".$post['title']."</h2>\n".
				$post['content'];
}

mysql_close($db);

include 'template.php';
