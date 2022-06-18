<?php
	require_once 'date.php';
	require_once 'interval.php';
	
	$date1 = new Date('2025-12-31');
	$date2 = new Date('2026-11-28');

	$date = new Date();
	$interval = new Interval($date1, $date2);
	$interval->toDays();
	$interval->toMonths();
	$interval->toYears();
?>