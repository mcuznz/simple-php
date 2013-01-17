<?php

include 'config.php';

$post = $posts[$_GET['id']];

$pagetitle = $config['blogtitle'] . ' - ' . $post['title'];

$content = 	"	<h2>".$post['title']."</h2>\n".
			$post['content'];

include 'template.php';
