<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-4-4.php" method="post">
celsius: <input type="number" name="cels"><br>
fahrenheit: <input type="number" name="fahr"><br>
<br>
<input type="submit" name="submit">
</form>
	
<?php
	class conversion{
		function __construct($c, $f){
			$this->c =$c;
			$this->f =$f;
		}
		
		function convert(){
if (($this->f == "" or !is_numeric($this->f))and ($this->c == "" or !is_numeric($this->c)))
				echo "sheiyvanet monacemebi";
			elseif ($this->f == "" or !is_numeric($this->f))
			echo (float)$this->c." celsiusi aris ".((float)$this->c*(9/5)+32)." farengeiti" ;
			elseif ($this->c == ""  or !is_numeric($this->c))
			echo (float)$this->f." farengeiti aris ".(((float)$this->f-32)*(5/9))." celsiusi" ;
			else
			{
				echo (float)$this->c." celsiusi aris ".((float)$this->c*(9/5)+32)." farengeiti<br>" ;
				echo (float)$this->f." farengeiti aris ".(((float)$this->f-32)*(5/9))." celsiusi" ;
			}
			
		}
	}
	
	if (isset($_POST['submit'])){
		$c = $_POST['cels'];
		$f = $_POST['fahr'];
		
		$res = new conversion($c,$f);
		$res->convert();
	}
	
?>

<body>
</body>
</html>