<?php

$post = get_post_by_id($db, $_GET['id']);

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
