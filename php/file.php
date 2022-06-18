<?php
	require_once 'ifile.php';
	class File implements iFile{

		public function __construct($filePath){
			$this->path = $filePath; 
		}

		public function getPath(){
			echo realpath($this->path);
		}

		public function getDir(){
			echo __DIR__;		
		}

		public function getName(){
			echo basename($this->path);
		}

		public function getExt(){
			echo pathinfo($this->path, PATHINFO_EXTENSION);
		}

		public function getSize(){
			echo round(filesize($this->path)/1024, 2) . ' кб';
		} 

		public function getText(){
			echo file_get_contents($this->path);
		}

		public function setText($text){
			file_put_contents($this->path, $text);
		}

		public function appendText($text){
			file_put_contents($this->path, $text, FILE_APPEND);
		}

		public function copy($copyPath){
			copy($this->path, 'dir/copy.txt');
		}	

		public function rename($newName){
			/*rename($this->path, $newName);*/	
		}

		public function delete(){
			unlink($this->path);
		}

		public function replace($newPath){
			rename($this->path, 'dir/new.txt');	
		}

	}
?>