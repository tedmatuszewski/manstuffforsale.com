<?php
	require_once("Mail.php");
	
	class Contact {
		
		public function Contact() {
			
		}
		
		public function sendContactEmail($name, $message, $email="", $phone="") {
			$to = 'tmaski45@gmail.com, zach.fowler91@gmail.com, sfbf6667@yahoo.com';
			$subject = 'Waterfowlers Contact Form';
			$body =  
				"From Name: " . $name . "\n\n" . 
				"From Email: " . $email . "\n\n" . 
				"Phone Number: " . $phone . "\n\n" . 
				"Message: " . $message;
			 
			$mail = new Mail($subject, $to, $body);
			
			return $mail->send();
		}
			
	}

?>