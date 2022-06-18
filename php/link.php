<?php
	require_once 'tag.php';
	class Link extends Tag{
		private const CUR_LINK = "active";
		public function __construct(){	
			parent::__construct('a');
			$this->setAttr('href', '');
		}

		public function __toString(){
			return parent::show();
		}

		public function open(){	
			$this->activateSelf();
			return parent::open(); 
		}

		
		private function activateSelf(){
			if ($this->getAttr('href') == $_SERVER['REQUEST_URI']){ 
				$this->addClass(Link::CUR_LINK);
			}
		}
	}
