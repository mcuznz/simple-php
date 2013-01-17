<?php

include 'postdata.php';

$post = $posts[$_GET['id']];

$blogtitle = "A Simple Blog";
$pagetitle = $blogtitle . ' - ' . $post['title'];

$content = 	"	<h2>".$post['title']."</h2>\n".
			$post['content'];

include 'template.php';
