<?php

$posts = get_all_posts($db);

ob_start();
?>
	<h2>Recent Posts:</h2>
	<ul>
	<?php foreach ($posts as $post) { ?>
		<li><a href='/index.php/post?id=<?php echo $post['id']; ?>'><?php echo $post['title']; ?></a></li>
	<?php } ?>
	</ul>

<?php
$content = ob_get_clean();
