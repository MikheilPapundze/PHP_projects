<?php
	include_once('style.php');
include_once('User.php');
$user = new User();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php /*შეგვაქვს სტილი ფაილის სახელი*/ echo $css->get_name(); ?>" rel="stylesheet">
	<title >PHP Login using OOP</title>
</head>
<body>
<h3>Contact Form</h3>

<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
	
	<label for="lname">surame</label>
    <input type="text" id="lname" name="lastname" placeholder="Your surname..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">
	  
	<label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Your email subject..">

    <label for="email_text">Email Text</label>
    <textarea id="email_text" name="email_text" placeholder="Write something.." style="height:200px"></textarea>

    <div class="g-recaptcha" data-sitekey="6Ldl4XAbAAAAAIy-on5sgW52u63LrzuNPcw8Ss34"></div>
      <br/>
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
include_once('contact.php');
include_once('User.php');

$user = new User();
	//რეკაპჩას პარამეტრები
$private_key = "6Ldl4XAbAAAAAM6SPlx0EA5pL2-zLud89Wsag3qk";
$url = "https://www.google.com/recaptcha/api/siteverify";
if (isset($_POST['submit']))
{

$name = $_POST['firstname']; 
$surname = $_POST['lastname'];
$to = 'mishikopapunidze@yahoo.com';
$from=$_POST['email'];	
$subject=$_POST['subject'];
$body=$_POST['email_text'];

$email = new email($to, $_POST['email'], $_POST['email_text'], $_POST['subject']);
	
	if(array_key_exists("submit",$_POST)){
			$response_key = $_POST['g-recaptcha-response'];
			$response = file_get_contents($url.'?secret='.$private_key.'&response='.$response_key);
			$response = json_decode($response);
			
			if($response->success == 1){
				if ($_POST['firstname'] != "" && $_POST['lastname'] != ""&& $_POST['email']!= "" && $_POST['email_text']!= "")
	            {
	        $user->insert($_POST['firstname'], $_POST['lastname'], $_POST['email'],$_POST['subject'],$_POST['email_text']);
				   $email->send();
					
		        }
	            else
	            {
		          echo "შეავსეთ სავალდებულო ველები";
	             }
			}
			else{
				echo "<script>alert('you are robot, you cant send email')</script>";
			}
		}
	
}
	
?>
</body>
</html>