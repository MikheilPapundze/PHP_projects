<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $fathernameErr = $genderErr = $surnameErr = "";
$name = $surname = $gender = $comment = $fathername = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } else 
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
	{
      $nameErr = "Only letters and white space allowed";
    }
  }
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  if (empty($_POST["surname"])) 
	  {
		$surnameErr = "Name is required";
	  } else 
	  {
		$surname = test_input($_POST["surname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) 
		{
		  $surnameErr = "Only letters and white space allowed";
		}
	  }
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		  if (empty($_POST["fathername"])) 
		  {
			$fathernameErr = "Name is required";
		  } else 
		  {
			$fathername = test_input($_POST["fathername"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z-' ]*$/",$fathername)) 
			{
			  $fathernameErr = "Only letters and white space allowed";
			}
		  }


		  if (empty($_POST["comment"])) 
		  {
			$comment = "";
		  } else 
		  {
			$comment = test_input($_POST["comment"]);
		  }

		  if (empty($_POST["gender"])) 
		  {
			$genderErr = "Gender is required";
		  } else 
		  {
			$gender = test_input($_POST["gender"]);
		  }
		}
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  surName: <input type="text" name="surname" value="<?php echo $surname;?>">
  <span class="error">* <?php echo $surnameErr;?></span>
  <br><br>
  father Name: <input type="text" name="fathername" value="<?php echo $fathername;?>">
  <span class="error">* <?php echo $fathernameErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $fathername;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
