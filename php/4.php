<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('Это страница 4')->show();
	include 'menu.php';
?>