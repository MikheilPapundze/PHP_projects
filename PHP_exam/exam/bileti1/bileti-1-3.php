<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-1-3.php" method="post">
x1: <input type="number" name="x1"><br>
y1: <input type="number" name="y1"><br>
<br>
<br>
<br>		
x2: <input type="number" name="x2"><br>
y2: <input type="number" name="y2"><br><br>
<input type="submit" name="submit">
</form>
<?php
	class length{
		function __construct($x1,$y1,$x2,$y2){
			$this->x1 = $x1;
			$this->y1 = $y1;
			$this->x2 = $x2;
			$this->y2 = $y2;
		}
		
		function calculate(){
			echo "<br>მოცემულ წერტილებს შორის მანძილია ".sqrt(pow($this->x2-$this->x1,2)+pow($this->y2-$this->y1,2))." ერთეული";
		}
	}
	if (isset($_POST['submit'])){
		$x1 = $_POST['x1'];
		$y1 = $_POST['y1'];
		$x2 = $_POST['x2'];
		$y2 = $_POST['y2'];
		
		$line = new length($x1,$y1,$x2,$y2);
		$line->calculate();
	}
	
	
?>
<body>
</body>
</html>