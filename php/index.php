<?php
	require_once 'form.php';
	require_once 'input.php';
	require_once 'submit.php';	
	require_once 'password.php';
	$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'GET']);
	echo $form->open();
		echo (new Input)->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo new Submit;
	echo $form->close();
?>
