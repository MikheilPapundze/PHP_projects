<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 <html>
<body>

<form action="davaleba_2.php" method="get">
<input type="number" name="name"><br>
<input type="submit" name="submit">
</form>

</body>
</html>
   
<body>
	 <?php
	
	if (isset($_GET["submit"])){
		
			function dav_2($n){
	 
    // if and else if to generate first two numbers
    if ($n == 0){
		return 0; 
	}
           
    else if ($n == 1){
		 return 1; 
	}
           
    // Recursive Call to get the upcoming numbers
    else if ($n > 1){
       $a = (dav_2($n-1) + dav_2($n-2));
		return  $a; 
	}
	
	 }
		if (is_numeric($_GET["name"]) && $_GET["name"]>=0){
			$n=$_GET["name"];
	$b=dav_2($n);
		echo $b;
		}
		else{
	 echo "შეიყვანეთ ნული ან  რიცხვი";
	   }
	}
   ?>
</body>
</html>