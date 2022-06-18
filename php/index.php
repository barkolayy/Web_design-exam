<?php
	require_once 'htmllist.php';
	require_once 'tag.php';
	require_once 'ullist.php';
	require_once 'ollist.php';
	$list1 = new UL;
	$list2 = new Ol;
	
	echo $list1
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		;

	echo $list2
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		;
?>
