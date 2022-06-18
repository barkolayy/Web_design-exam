<?php
	require_once 'tag.php';
	echo (new Tag('header'))->setText('Это страница 3')->show();
	include 'menu.php';
?>