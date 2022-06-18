<?php
	require_once 'date.php';
	class Interval{

		public function __construct(Date $date1, Date $date2){	
			$this->interval = abs(strtotime($date2->date)-strtotime($date1->date));
		}

		public function toDays(){
			echo round($this->interval/60/60/24, 2).' дней', '<br>';
		}

		public function toMonths(){
			echo round($this->interval/60/60/24/30, 2). ' месяцев', '<br>';			
		}

		public function toYears(){
			echo round($this->interval/60/60/24/30/12, 2). ' лет', '<br>';	
		}

	}
?>