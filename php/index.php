<?php
	require_once 'form.php';
	require_once 'input.php';	
	$result = 0;
	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

	$inp_1 = new Input();
	$inp_2 = new Input();
	$inp_3 = new Input();
	$inp_4 = new Input();
	$inp_5 = new Input();
	$inp_sub = new Input();

	echo $form->open();
		echo $inp_1->setAttr('name', 'first');
		echo $inp_2->setAttr('name', 'second');
		echo $inp_3->setAttr('name', 'third');	
		echo $inp_4->setAttr('name', 'fourth');
		echo $inp_5->setAttr('name', 'fiveth');
		echo $inp_sub->setAttr('type', 'submit');
	echo $form->close();

	

	for ($i=1; $i<=5 ; $i++) { 
		$curClass = 'inp_'. $i;
		$result +=  (float) $$curClass->getAttr('value');			
	}
	echo $result;
?>
