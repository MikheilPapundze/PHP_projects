<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<form action="bileti-1-4.php" method="post">
meters: <input type="number" name="meter"><br>
yards: <input type="number" name="yard"><br>
<br>
<input type="submit" name="submit">
</form>
	
<?php
	class conversion{
		function __construct($m, $y){
			$this->m =$m;
			$this->y =$y;
		}
		
		function convert(){
if (($this->y == "" or !is_numeric($this->y))and ($this->m == "" or !is_numeric($this->m)))
				echo "sheiyvanet monacemebi";
			elseif ($this->y == "" or $this->y == 0 or !is_numeric($this->y))
			echo (float)$this->m." metri aris ".(float)$this->m*1.09361." iardi" ;
			elseif ($this->m == "" or $this->m == 0 or !is_numeric($this->m))
			echo (float)$this->y." iardi aris ".(float)$this->y*0.9144." metri" ;
			else
			{
				echo (float)$this->m." metri aris ".(float)$this->m*1.09361." iardi<br>" ;
				echo (float)$this->y." iardi aris ".(float)$this->y*0.9144." metri" ;
			}
			
		}
	}
	
	if (isset($_POST['submit'])){
		$m = $_POST['meter'];
		$y = $_POST['yard'];
		
		$C = new conversion($m,$y);
		$C->convert();
	}
	
?>

<body>
</body>
</html>