<?php
	require_once 'date.php';
	$date = new Date('2025-12-31');
	echo $date->getDay(), '<br>';
	echo $date->getMonth('ru'), '<br>';
	echo $date->getYear(), '<br>';
	echo $date->getWeekDay('ru'), '<br>';
	echo $date->addDay(1), '<br>';
	echo $date->subDay(1), '<br>';
	echo $date->addMonth(1), '<br>';
	echo $date->subMonth(1), '<br>';
	echo $date->addYear(1), '<br>';
	echo $date->subYear(1), '<br>';
	echo $date->format('j-n-Y'), '<br>';
	echo $date->__toString();
?>