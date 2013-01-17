<?php

include 'config.php';
include 'model.php';

$pagetitle = $config['blogtitle'];

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/index.php') {
	include 'list.php';
} elseif ($uri == '/index.php/post' && isset($_GET['id'])) {
	include 'post.php';
} else {
	$pagetitle = $pagetitle . " - Error";
	$content = "<p>Request not understood</p>";
}

mysql_close($db);
include 'template.php';
