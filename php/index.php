<?php
	require_once 'form.php';
	require_once 'input.php';
	require_once 'submit.php';	
	require_once 'textarea.php';
	$form = (new Form)->setAttrs([
		'action' => '',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Input)->setAttr('name', 'user');
		echo (new Textarea)->setAttr('name', 'message')->show();
		echo new Submit;
	echo $form->close();
?>
