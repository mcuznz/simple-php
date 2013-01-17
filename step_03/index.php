<?php

include 'global.php';

$blogtitle = "A Simple Blog";
$pagetitle = $blogtitle;

$content = "	<h2>Recent Posts:</h2>\n".
	"<ul>\n";
	
	for ($i=0; $i<count($posts); $i++) {
		$content .= "<li><a href='post.php?id=$i'>".$posts[$i]['title']."</a></li>\n";
	}

$content .= "</ul>\n";

include 'template.php';
