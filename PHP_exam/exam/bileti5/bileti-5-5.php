<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-5-5.php" method="post">
kilograms: <input type="number" name="k"><br>
pounds: <input type="number" name="p"><br>
<br>
<input type="submit" name="submit">
</form>
	
<?php
	class conversion{
		function __construct($k, $p){
			$this->k =$k;
			$this->p =$p;
		}
		
		function convert(){
if (($this->p == "" )and ($this->k == "" ))
				echo "sheiyvanet monacemebi";
			elseif ($this->p == "" )
			echo (float)$this->k." kilogrami aris ".(float)$this->k*2.20462." funti" ;
			elseif ($this->k == "" )
			echo (float)$this->p." funti aris ".(float)$this->p*0.453592." kilogrami" ;
			else
			{
				echo (float)$this->k." kilogrami aris ".(float)$this->k*2.20462." funti<br>" ;
				echo (float)$this->p." funti aris ".(float)$this->p*0.453592." kilogrami" ;
			}
			
		}
	}
	
	if (isset($_POST['submit'])){
		$k = $_POST['k'];
		$p = $_POST['p'];
		
		$res = new conversion($k,$p);
		$res->convert();
	}
	
?>

<body>
</body>
</html>