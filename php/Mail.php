<?php

	class Mail {
		
		private $subject;
		private $to;
		private $from;
		public $body;
		
		public function Mail($subject, $to, $body = "") {
			$this->subject = $subject;
			$this->to = $to;
			$this->from = 'From: You <ted@tedmatuszewski.com>';
			$this->body = $body;
		}
		
		public function send() {
			$this->body .= "\r\n\r\nFrom IP Address: " . $this->getIp();
			
			return mail($this->to, $this->subject, $this->body, $this->from);
		}
		
		private function getIp() {
			// Get user IP address
			if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
			}
			
			$ip = filter_var($ip, FILTER_VALIDATE_IP);
			$ip = ($ip === false) ? '0.0.0.0' : $ip;
			
			return $ip;
		}
		
	}
	
?>