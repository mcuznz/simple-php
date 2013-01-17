<?php

function get_all_posts($db) {
	$result = mysql_query('SELECT id, title FROM post', $db);
	$posts = array();
	while ($row = mysql_fetch_assoc($result)) {
		$posts[] = $row;
	}

	return $posts;
}

function get_post_by_id($db, $id) {
	if (is_numeric($id)) {
		$result = mysql_query('SELECT title, content FROM post WHERE id=' . $id, $db);
		return mysql_fetch_assoc($result);

	} else {
		return false;
	}

}

function get_posts_like($db, $string) {
	# this could be added later
	return true;
}