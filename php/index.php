<?php
	require_once 'tag.php';
	/*$img = new Tag('img');
	echo $img->setAttrs(['src' => 'https://javasea.ru/uploads/posts/2021-06/1623421358_mona-liza.jpg', 'width' => '200px'])->setAttr('id', 'mona-lisa')->removeAttr('id')->open();*/
		
	echo (new Tag('input'))->addClass('eee')->open();	

	echo (new Tag('input'))->addClass('eee')->addClass('bbb')->
		open(); 

	echo (new Tag('input'))
		->setAttr('class', 'eee bbb')
		->addClass('kkk')->open();
		
	echo (new Tag('input'))
		->setAttr('class', 'eee bbb')
		->addClass('eee') 
		->open();

	echo (new Tag('input'))
		->addClass('eee')
		->addClass('bbb')
		->addClass('eee') 			
		->open();	

	echo (new Tag('input'))
		->setAttr('class', 'eee zzz kkk') 
		->removeClass('zzz') // 
		->open();

?>

