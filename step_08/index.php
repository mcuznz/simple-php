<?php

include 'config.php';
include 'model.php';

$pagetitle = $config['blogtitle'];

$uri = $_SERVER['REQUEST_URI'];

# This line removes the step number from the $uri, and wouldn't be needed in a real scenario
$uri = preg_replace('/\/step_\d\d/', '', $uri);

if ($uri == '/') {
	include 'list.php';
} elseif (strpos($uri, '/post') !== false && isset($_GET['id'])) {
	include 'post.php';
} else {
	$pagetitle = $pagetitle . " - Error";
	$content = "<p>Request not understood</p>";
}

mysql_close($db);
include 'template.php';
