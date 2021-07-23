<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-2-4.php" method="post">
liters: <input type="number" name="liters"><br>
galoons: <input type="number" name="galoons"><br>
<br>
<input type="submit" name="submit">
</form>
	
<?php
	class conversion{
		function __construct($l, $g){
			$this->l =$l;
			$this->g =$g;
		}
		
		function convert(){
if (($this->g == "" or !is_numeric($this->g))and ($this->l == "" or !is_numeric($this->l)))
				echo "sheiyvanet monacemebi";
			elseif ($this->g == "" or $this->g == 0 or !is_numeric($this->g))
			echo (float)$this->l." litri aris ".(float)$this->l*0.264172." galoni" ;
			elseif ($this->l == "" or $this->l == 0 or !is_numeric($this->l))
			echo (float)$this->g." galoni aris ".(float)$this->g*3.78541." litri" ;
			else
			{
				echo (float)$this->l." litri aris ".(float)$this->l*0.264172." galoni<br>" ;
				echo (float)$this->g." galoni aris ".(float)$this->g*3.78541." litri" ;
			}
			
		}
	}
	
	if (isset($_POST['submit'])){
		$m = $_POST['liters'];
		$y = $_POST['galoons'];
		
		$C = new conversion($m,$y);
		$C->convert();
	}
	
?>

<body>
</body>
</html>