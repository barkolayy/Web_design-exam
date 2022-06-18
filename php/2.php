<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('Это страница 2')->show();
	include 'menu.php';
?>