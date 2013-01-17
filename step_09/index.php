<?php

include 'config.php';
include 'model.php';
include 'actions.php';

$pagetitle = $config['blogtitle'];

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/index.php') {
	$response = show_list($db, $pagetitle);
} elseif ($uri == '/index.php/post' && isset($_GET['id'])) {
	$response = show_post($db, $pagetitle);
} else {
	$response = array(
		'pagetitle' => $pagetitle . " - Error",
		'content'	=> "<p>Request not understood</p>"
	);
}

mysql_close($db);
include 'template.php';
