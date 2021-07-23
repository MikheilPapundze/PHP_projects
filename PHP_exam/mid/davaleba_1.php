<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 <html>
<body>

<form action="davaleba_1.php" method="get">
<input type="number" name="name"><br>
<input type="submit" name="submit">
</form>

</body>
</html>
   
<body>
	 <?php
	$tmp = "_GET";
	echo $$tmp["submit"]."<br>";
	if (isset($_GET["submit"])){
	function dav_1(){	
		if(is_numeric($_GET["name"])){
	 $mark=$_GET["name"];
	 if ($mark%2!=0){
			echo "<br>ეს რიცხვი არის კენტი";
		}
				else if ($mark%2==0){
			echo "<br>ეს რიცხვი არის ლუწი";
		}	
      }
      else {
		echo "<br>შეიყვანეთ რიცხვი";
		
	}
		
	 }
	dav_1();	
	}
	
   ?>
</body>
</html>