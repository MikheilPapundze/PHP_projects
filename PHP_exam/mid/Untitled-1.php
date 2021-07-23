<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form name="myForm" action="Untitled-1.php" onsubmit="validateForm('a','b','c','myForm')" method="post">
  A= <input type="text" name="a">
  B= <input type="text" name="b">
  C= <input type="text" name="c">
  <input type="submit" value="Submit" name="Submit">
</form>
	
	<script>
function validateField(field,form) {
  var x = document.forms[form][field].value;
  console.log(parseFloat(x));
  
  if (x == "" || isNaN(parseFloat(x))) {
    alert("Name must be filled out in "+field+" value");
    return false;
  } else return true;
}

function validateForm(fielda,fieldb,fieldc,form){
 return validateField(fielda,form)*validateField(fieldb,form)*validateField(fieldc,form);
}
	
	</script>
	<?php
	if (isset($_POST["Submit"]))
	{
		function sum($a,$b,$c)
		{
			return $a+$b+$c;
		}
		
	if (is_numeric($_POST["a"]) && is_numeric($_POST["b"]) && is_numeric($_POST["c"]))
	{
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		$S = sum($a,$b,$c);
		echo $S;
	}
		
		
		
	}
	
	
	
	?>
</body>
</html>