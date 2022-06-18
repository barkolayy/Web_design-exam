<?php
	class Tag{
		private $name;
		private $attrs = [];

		public function __construct($name){
			$this->name = $name;
		}
		
		public function setAttr($name, $value){
			$this->attrs[$name] = $value;
			return $this;
		}

		public function removeAttr($name){
			unset($this->attrs[$name]);
			return $this;
		}


		public function open(){
			$name = $this->name;
			$attrsStr = $this->getAttrsStr($this->attrs);
			return "<$name$attrsStr>";
		}

		public function close(){
			$name = $this->name;
			return "</$name>";
		}
		
		private function getAttrsStr($attrs){		
			if (!empty($attrs)) {
				$result = '';
				
				foreach ($attrs as $name => $value) {
					if ($value === true) {
						$result .= " $name";
					} else {
						$result .= " $name=\"$value\"";
					}
				}
				
				return $result;
			} else {
				return '';
			}
		}

		public function addClass($className){
			if (isset($this->attrs['class'])) {
				$classNames = explode(' ', $this->attrs['class']);
				
				if (!in_array($className, $classNames)) {
					$classNames[] = $className;
					$this->attrs['class'] = implode(' ', $classNames);
				}
			} else {
				$this->attrs['class'] = $className;
			}
			
			return $this;
		}

		public function removeClass($className){	
			if (isset($this->attrs['class'])) {
				$classNames = explode(' ', $this->attrs['class']);
					
				if (in_array($className, $classNames)) {
					$classNames = $this->removeElem($className, $classNames);
					$this->attrs['class'] = implode(' ', $classNames);
				}
			}
				
			return $this;
		}		
	}
?>