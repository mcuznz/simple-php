<?php

include 'config.php';
include 'model.php';

$posts = get_all_posts();

$pagetitle = $config['blogtitle'];

$content = "	<h2>Recent Posts:</h2>\n".
	"<ul>\n";
	
	foreach ($posts as $post) {
		$content .= "<li><a href='post.php?id=".$post['id']."'>".$post['title']."</a></li>\n";
	}

$content .= "</ul>\n";

mysql_close($db);

include 'template.php';
