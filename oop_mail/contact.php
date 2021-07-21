<?php
//იმეილის გაგზავნის ფუნქცია
class email{

	function __construct($mail_to, $mail_from, $mail_message, $mail_subject){

	$this->mail_to = $mail_to;
	$this->mail_from= $mail_from;
	$this->mail_subject = $mail_subject;
	$this->mail_message = $mail_message;
	$this->headers = "From: სატესტო წერილი <noreply@batumi.ge>\r\n";
	$this->headers .= "Reply-To: ".$mail_from."\r\n";	
	}
	
	//ეს ფუნქცია გათვლილია რომ უნდა იმუშაოს მაილ სერვერის საშუალებით
	function send(){
		if ($_SERVER['HTTP_HOST']<>'127.0.0.1' and $_SERVER['HTTP_HOST']<>'localhost')	
	    {
		if(mail($this->mail_to.",".$this->mail_from, $this->mail_subject, $this->message, $this->headers))
		{
			echo 'Yes';
		}
			
	    }
	    else
	    {
		echo ' Lokaliodan ver gaigzavneba...';
	    }
   }
}

	
	
?>