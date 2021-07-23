<?php
include_once('style.php');
include_once('User.php');
$user = new User();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php /*შეგვაქვს სტილი ფაილის სახელი*/ echo $css->get_name(); ?>" rel="stylesheet">
	<title >PHP Registration using OOP</title>
</head>
<body>
<h3>Registration Form</h3>

<div class="container">
  <form action="home.php" method="post">
    <label for="firstname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
	
	<label for="lname">surame</label>
    <input type="text" id="lname" name="lastname" placeholder="Your surname..">
	  
	<label for="username">username</label>
    <input type="text" id="username" name="username" placeholder="Your username..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">
	  
	<label for="password">password</label>
    <input type="password" id="password" name="password" placeholder="Your password..">

      <br/>
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<?php

	if (isset($_POST['submit']))
	{

if ($_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['username']!= "" && $_POST['email']!= "" && $_POST['password']!= "" )
{

$name = $_POST['firstname']; 
$surname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


   $user->insert($name,$surname,$username, $email, $password);
}			
else
{
    echo "შეავსეთ სავალდებულო ველები";
}					
		        
}	            
				
			

	

	
?>
</body>
</html>