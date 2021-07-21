<?php
  //ახალი სესია იწყებაა როცა გამოვალთ სისტემიდან
	session_start();
	if(session_destroy()) {
		//და დავბრუნდებით login-ის გვერდზე
      header("Location: login.php");
   }
?>