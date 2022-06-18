<?php
	require_once 'tag.php';
	require_once 'image.php';
	require_once 'link.php';
	echo (new Link())->setAttr('href', 
		'/php-exam/Web_design-exam/php/index.php')->setText('index')->show(); 
	echo '<br>';
	echo $_SERVER['REQUEST_URI'];
?>

