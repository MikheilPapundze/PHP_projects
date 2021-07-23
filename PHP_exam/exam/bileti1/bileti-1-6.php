<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<?php
	
	class arr{
		
		function __construct($a, $mini, $maxi){
			$this->a = $a;
			$this->mini = $mini;
			$this->maxi = $maxi;
		}
	
	function arr_print(){
	$arr = array();
	for ($i=0; $i<$this->a; $i++)
		{
			array_push($arr, rand($this->mini, $this->maxi));
		}
		print_r($arr);
		echo "<br>masivis minimaluri elementia:<br>".min($arr);
	    echo "<br>masivis maximaluri elementia:<br>".max($arr);
	    echo "<br>zrdadobit dalagebuli masivi:<br>";
	    sort($arr);
	    print_r($arr);
	    echo "<br>klebadobit dalagebuli masivi:<br>";
	    rsort($arr);
	    print_r($arr); 
	    }
	}
	
	$a = new arr(10,1,10);
	$a->arr_print();
	
	
	?>

<body>
</body>
</html>