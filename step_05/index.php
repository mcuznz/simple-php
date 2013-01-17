<?php

include 'config.php';

$result = mysql_query('SELECT id, title FROM post', $db);

$pagetitle = $config['blogtitle'];

$content = "	<h2>Recent Posts:</h2>\n".
	"<ul>\n";
	
	while ($post = mysql_fetch_assoc($result)) {
		$content .= "<li><a href='post.php?id=".$post['id']."'>".$post['title']."</a></li>\n";
	}

$content .= "</ul>\n";

mysql_close($db);

include 'template.php';
