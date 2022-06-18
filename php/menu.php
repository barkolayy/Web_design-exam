<?php 
	require_once 'link.php';

	echo (new Link())->setAttr('href', '/php-exam/Web_design-exam/php/1.php')->setText('ссылка 1'), '<br>';
	echo (new Link())->setAttr('href', '/php-exam/Web_design-exam/php/2.php')->setText('ссылка 2'), '<br>';
	echo (new Link())->setAttr('href', '/php-exam/Web_design-exam/php/3.php')->setText('ссылка 3'), '<br>';
	echo (new Link())->setAttr('href', '/php-exam/Web_design-exam/php/4.php')->setText('ссылка 4'), '<br>';
	echo (new Link())->setAttr('href', '/php-exam/Web_design-exam/php/5.php')->setText('ссылка 5'), '<br>';
?>