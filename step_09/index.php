<?php

include 'config.php';
include 'model.php';
include 'actions.php';

$pagetitle = $config['blogtitle'];

$uri = $_SERVER['REQUEST_URI'];

# This line removes the step number from the $uri, and wouldn't be needed in a real scenario
$uri = preg_replace('/\/step_\d\d/', '', $uri);

if ($uri == '/') {
	$response = show_list($db, $pagetitle);
} elseif (strpos($uri, '/post') !== false && isset($_GET['id'])) {
	$response = show_post($db, $pagetitle, $_GET['id']);
} else {
	$response = array(
		'pagetitle' => $pagetitle . " - Error",
		'content'	=> "<p>Request not understood</p>"
	);
}

mysql_close($db);
include 'template.php';
