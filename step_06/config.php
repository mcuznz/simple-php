<?php

$config = array(
	'blogtitle' => "A Simple Blog",
	'db_name'	=> "blog_database",
	'db_host'	=> "localhost",
	'db_user'	=> "blog_user",
	'db_pass'	=> "blog_pass"
);

$db = mysql_connect($config['db_host'], $config['db_user'], $config['db_pass']);
mysql_select_db($config['db_name'], $db);
