<?php
	//სესიის დაწყება
	session_start();
 
	//მტავარზე გადასხვა თუ შესვლა განხორციელდა
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
//სტილის კლასის შემოტანა
include_once("style.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php /*შეგვაქვს სტილი ფაილის სახელი*/ echo $css->get_name(); ?>" rel="stylesheet">
	<title>PHP Login using OOP</title>
</head>
<body>
<div class="container">
	<h1 class="title">PHP Login using OOP</h1>
	<div class="row1">
		<div >
		    <div>
		        <div>
		            <h3 >Login</h3>
		        </div>
		    	<div>
		        	<form method="POST" action="login.php">
		            	<fieldset>
		                	<div>
								<label for="username"><b>Username</b></label>
		                    	<input placeholder="Username" type="text" name="username" autofocus required>
		                	</div>
		                	<div>
								<label for="password"><b>Password</b></label>
		                    	<input  placeholder="Password" type="password" name="password" required>
		                	</div>
		                	<input type="submit" name="login" value="login" class="btn1">
		            	</fieldset>
		        	</form>
		    	</div>
		    </div >
		    <?php
			//თუ შეტყობინება არსებობს მაში გამოგვაქვს ეკრანზე და ამავე დროს ხდება შეტყობინების გაუქმებაც
		    	if(isset($_SESSION['message'])){
		    		?>
		    			<div class="errors">
					        <?php echo $_SESSION['message']; ?>
					    </div>
		    		<?php
 
		    		unset($_SESSION['message']);
		    	}
		    ?>
		</div>
	</div>
</div>
</body>
</html>