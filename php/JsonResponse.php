<?php

	class JsonResponse {
		public $success;
		public $data;
		public $html;
		public $message;
		public $phptime;
		
		private $timepre;
		
		public function __construct($success = null, $message = null, $data = null,  $html = null) {
			$this->success = $success;
			$this->data = $data;
			$this->html = $html;
			$this->message = $message;
			
			$this->timepre = microtime(true);
		}
		
		public function successful($message = "", $data = null, $html = null, $echo = true ) {
			
			$this->success = true;
			$this->message = $message;
			$this->data = $data;
			$this->html = $html;
			$this->phptime = microtime(true) - $this->timepre;
			
			$arr = array('success' => $this->success, "message" => $this->message, "data" => $this->data, "html" => $this->html);
			
			if($echo) {
				echo json_encode($arr);
			}
			else {
				return $arr;
			}
		}
		
		public function unsuccessful($message = "", $data = null, $html = null, $echo = true ) {
			
			$this->success = false;
			$this->message = $message;
			$this->data = $data;
			$this->html = $html;
			$this->phptime = microtime(true) - $this->timepre;
			
			$arr = array('success' => $this->success, "message" => $this->message, "data" => $this->data, "html" => $this->html);
			
			if($echo) {
				echo json_encode($arr);
			}
			else {
				return $arr;
			}
		}
	}
	
?>