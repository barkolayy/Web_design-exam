<?php
	require_once 'file.php';
	$File = new File('text.txt');
	echo $File->getPath(), '<br>';
	echo $File->getDir(), '<br>';
	echo $File->getName(), '<br>';
	echo $File->getExt(), '<br>';
	echo $File->getSize(), '<br>';
	echo $File->getText(). '<br>';
	echo $File->setText('other text'). '<br>';
	echo $File->appendText(' + text'). '<br>';
	echo $File->copy('dir/new.txt'). '<br>';
	echo $File->delete(). '<br>';
	echo $File->rename('rename.txt'). '<br>';
	echo $File->replace('dir'). '<br>';
?>