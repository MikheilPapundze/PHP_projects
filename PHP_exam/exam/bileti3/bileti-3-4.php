<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<form action="bileti-3-4.php" method="post">
liters: <input type="number" name="liters"><br>
barrels: <input type="number" name="barrels"><br>
<br>
<input type="submit" name="submit">
</form>
	
<?php
	class conversion{
		function __construct($l, $b){
			$this->l =$l;
			$this->b =$b;
		}
		
		function convert(){
if (($this->b == "" or !is_numeric($this->b))and ($this->l == "" or !is_numeric($this->l)))
				echo "sheiyvanet monacemebi";
			elseif ($this->b == "" or !is_numeric($this->b))
			echo (float)$this->l." litri aris ".(float)$this->l*0.00628981." bareli" ;
			elseif ($this->l == "" or !is_numeric($this->l))
			echo (float)$this->b." bareli aris ".(float)$this->b*158.987." litri" ;
			else
			{
				echo (float)$this->l." litri aris ".(float)$this->l*0.00628981." bareli<br>" ;
				echo (float)$this->b." bareli aris ".(float)$this->b*158.987." litri" ;
			}
			
		}
	}
	
	if (isset($_POST['submit'])){
		$l = $_POST['liters'];
		$b = $_POST['barrels'];
		
		$res = new conversion($l,$b);
		$res->convert();
	}
	
?>
<body>
</body>
</html>