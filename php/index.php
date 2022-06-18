<?php
	require_once 'tag.php';
	$img = new Tag('img', ['src' => 'https://javasea.ru/uploads/posts/2021-06/1623421358_mona-liza.jpg', 'width' => '200px']);
	echo $img->open();
?>

