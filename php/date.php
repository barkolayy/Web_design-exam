<?php
	class Date{

		public function __construct($date = null){	
			$this->date = $date;
	        if ($date == null) {
	            $this->date = date('Y-n-j');
	        }
		}
		
		public function getDay(){		
			echo date('j', strtotime($this->date));
		}
		
		public function getMonth($lang = null){	
			if ($lang=='en'){
				$monthsNames = [
					1=> 'Jan', 
						'Feb', 
						'Mar', 
						'Apr',
						'May',
						'Jun',
						'Jul',
						'Aug',
						'Sep',
						'Oct',
						'Nov',
						'Dec' 
				];
			}

			elseif ($lang=='ru'){
				$monthsNames = [
					1=> 'Янв', 
						'Фев', 
						'Мар', 
						'Апр',
						'Май',
						'Июн',
						'Июл',
						'Авг',
						'Сен',
						'Окт',
						'Ноя',
						'Дек' 
				];				
			}
			
			else {
				$lang='en';
				$this->getMonth($lang);
			}
			echo $monthsNames[date('n', strtotime($this->date))];
		}
		
		public function getYear(){
			echo date('Y', strtotime($this->date));
		}
		
		public function getWeekDay($lang = null){
			if($lang == 'en'){
				$daysNames = [
					1 =>'mn',
						'tu',
						'wd',
						'th',
						'fr',
						'st',
						'sn'
				];
			}
			
			elseif($lang == 'ru'){
				$daysNames = [
					1 =>'Пн',
						'Вт',
						'Ср',
						'Чт',
						'Пт',
						'Сб',
						'Вс'					
				];
			}

			else{
				$lang='en';
				$this->getWeekDay($lang);
			}

			echo $daysNames[date('N', strtotime($this->date))];
		}
		
		public function addDay($value){
			$newDate = $this->date;
			$newDate = date('j-n-Y', strtotime("+${value} days", strtotime($newDate)));
			echo $newDate;
		}
		
		public function subDay($value){
			$newDate = $this->date;
			$newDate = date('j-n-Y', strtotime("-${value} days", strtotime($newDate)));
			echo $newDate;		
		}
		
		public function addMonth($value){
			$newDate = $this->date;
			$newDate = date('j-n-Y', strtotime("+${value} months", strtotime($newDate)));
			echo $newDate;
		}
		
		public function subMonth($value){
			$newDate = $this->date;
			$newDate = date('j-n-Y', strtotime("-${value} months", strtotime($newDate)));
			echo $newDate;
		}
		
		public function addYear($value){
			$newDate = $this->date;
			$newDate = date('j-n-Y', strtotime("+${value} years", strtotime($newDate)));
			echo $newDate;
		}
		
		public function subYear($value){
			$newDate = $this->date;
			$newDate = date('j-n-Y', strtotime("-${value} years", strtotime($newDate)));
			echo $newDate;
		}
		
		public function format($format){
			echo date($format, strtotime($this->date));
		}
		
		/*public function __toString(){
			echo date('Y-n-j', strtotime($this->date));
		}*/
	}
?>