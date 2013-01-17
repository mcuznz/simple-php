<?php

function show_post($db, $pagetitle, $id) {

	$post = get_post_by_id($db, $id);

	ob_start();
	if ($post == false) {
		$pagetitle = $pagetitle . ' - Post Not Found';
		?>

		<h2>Post not found</h2>
		<p>A post with id '<?php echo $_GET['id']; ?>' could not be found.</p>

		<?php
	} else {
		$pagetitle = $config['blogtitle'] . ' - ' . $post['title'];
		?>

		<h2><?php echo $post['title']; ?></h2>
		<?php echo $post['content']; ?>

		<?php
	}
	$content = ob_get_clean();

	return array('pagetitle' => $pagetitle,
		'content' => $content);
}

function show_list($db, $pagetitle) {

	$posts = get_all_posts($db);

	ob_start();
	?>
		<h2>Recent Posts:</h2>
		<ul>
		<?php foreach ($posts as $post) { ?>
			<li><a href='post?id=<?php echo $post['id']; ?>'><?php echo $post['title']; ?></a></li>
		<?php } ?>
		</ul>

	<?php
	$content = ob_get_clean();

	return array('pagetitle' => $pagetitle,
		'content' => $content);

}