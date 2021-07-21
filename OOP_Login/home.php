<?php
session_start();
//შესვლის გვერდზე დაბრუნება თუ არ ვართ დალოგინებული
if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
	header('location:index.php');
}
//ძირიტადი კლასის და სტილის შემოტანა
include_once("style.php"); 
include_once('User.php');
 
//ახალი ობიექტი
$user = new User();
 
//მოგვაქვს მომხმარებლის მონაცემები და კლასის ფუნქციით, სადაც ვიღებთ ერთგვარ მასივს
$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php /*შეგვაქვს სტილი ფაილის სახელი*/ echo $css->get_name(); ?>" rel="stylesheet">
	<title >PHP Login using OOP</title>
</head>
<body>
<div class="container1">
	<h1 class="home_title">PHP Login using OOP</h1>
	<div class="row">
		
			<h2>Welcome to Homepage </h2>
			<h4>User Info: </h4>
			<p><img src="<?php /*შეგვაქვს სურათის მისამართი ბაზიდან წამოღებული მასივიდან*/ echo $row['img'];?>" class = "image"></p>
			<p class = "info">First name: <?php /*შეგვაქვს სახელი ბაზიდან წამოღებული მასივიდან*/ echo $row['firstname'];?> </p>
			<p class = "info">Last name: <?php /*შეგვაქვს გვარი ბაზიდან წამოღებული მასივიდან*/ echo $row['lastname']; ?></p>
			
		
	</div>
	<!-- გამოსვლის ღილაკი რომელიც იეყენებს გამოსვლის ფაილს -->
	<a href="logout.php" class="btn" >Logout</a>
</div>
</body>
</html>