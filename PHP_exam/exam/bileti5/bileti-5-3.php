<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-5-3.php" method="post">
a: <input type="number" name="a"><br>
b: <input type="number" name="b"><br>
<br>
<input type="submit" name="submit">
</form>
	<?php
	
	class even{
		public $a = 0;
		function __construct($a, $b)
		{
			$this->a = $a;
			$this->b = $b;
		}
		
		function calc(){
			$arr = array();
			for ($i=$this->a; $i<=$this->b; $i++)
			{
				if ($i%2 == 0)
				{
					
					echo "<script type='text/javascript'>console.log(".$i.");</script>";
				}
			}
		}
	}
	
	if (isset($_POST['submit'])){
	  $a = $_POST['a'];
	  $b = $_POST['b'];
	  
	  if (($_POST['a'] != "" ) and ($_POST['b'] != ""))
	  {
	  $e = new even($a, $b);
      $e->calc();
	  echo "sheamowmet konsoli";
	  }
	  else 
		  echo "sheiyvanet monacemebi";
  }
	
	
	?>

<body>
</body>
</html>