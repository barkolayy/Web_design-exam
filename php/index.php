<?php
	require_once 'tag.php';
	require_once 'image.php';
	echo (new Image())->setAttrs(['src' => 'https://javasea.ru/uploads/posts/2021-06/1623421358_mona-liza.jpg', 'width' => '300px', 'height' => '200px'])->open(); 

?>

