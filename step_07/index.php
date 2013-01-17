<?php

include 'config.php';
include 'model.php';

$posts = get_all_posts($db);

$pagetitle = $config['blogtitle'];

ob_start();
?>
	<h2>Recent Posts:</h2>
	<ul>
	<?php foreach ($posts as $post) { ?>
		<li><a href='post.php?id=<?php echo $post['id']; ?>'><?php echo $post['title']; ?></a></li>
	<?php } ?>
	</ul>

<?php
$content = ob_get_clean();

mysql_close($db);

include 'template.php';
