<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-6-4.php" method="post">
კილოგრამი: <input type="number" name="k"><br>
ფუნტი: <input type="number" name="p"><br>
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
				echo "შეიყვანეთ მონაცემები";
			elseif ($this->p == "" )
			echo (float)$this->k." კილოგრამი არის ".(float)$this->k*2.20462." ფუნტი" ;
			elseif ($this->k == "" )
			echo (float)$this->p." ფუნტი არის ".(float)$this->p*0.453592." კილოგრამი" ;
			else
			{
				echo (float)$this->k." კილოგრამი არის ".(float)$this->k*2.20462." ფუნტი<br>" ;
				echo (float)$this->p." ფუნტი არის ".(float)$this->p*0.453592." კილოგრამი" ;
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