<?php

function get_all_posts() {
	global $db;

	$result = mysql_query('SELECT id, title FROM post', $db);
	$posts = array();
	while ($row = mysql_fetch_assoc($result)) {
		$posts[] = $row;
	}

	return $posts;
}

function get_post_by_id($id) {
	global $db;

	if (is_int($id)) {
		$result = mysql_query('SELECT title, content FROM post WHERE id=' . $id, $db);
		return mysql_fetch_assoc($result);

	} else {
		return false;
	}

}

function get_posts_like($string) {
	# this could be added later
	global $db;

	return true;
}