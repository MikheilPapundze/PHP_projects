<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-1-5.php" method="post">
amount: <input type="number" name="amount"><br>
minimum: <input type="number" name="min"><br>
maximum: <input type="number" name="max"><br>
<br>
<input type="submit" name="submit">
</form>
<?php
	
	class random_arr{
		
		function __construct($a, $mini, $maxi){
			$this->a = $a;
			$this->mini = $mini;
			$this->maxi = $maxi;
		}
		
		function rand_arr(){
			$arr = array();
	if (($this->a != "" or $is_numeric($this->a)) and ($this->mini != "" or $is_numeric($this->mini)) and ($this->maxi != "" or $is_numeric($this->maxi)))
	{
		for ($i=0; $i<$this->a; $i++)
		{
			array_push($arr, rand($this->mini, $this->maxi));
		}
		print_r($arr);
		echo "<br>am masivis kenti elementebia:<br>";
		foreach ($arr as $value)
		{
			if ($value%2==1)
				echo "  ".$value;
		}
	}
		
				
		}
	}
	
	if (isset($_POST['submit']))
	{
		$a = $_POST['amount'];
		$mini = $_POST['min'];
		$maxi = $_POST['max'];
		
		
		if ($_POST['amount'] != "" and $_POST['min'] != "" and $_POST['max'] != "")
		{
		$res = new random_arr($a, $mini, $maxi);
		$res->rand_arr();
		}
		else 
			echo "sheiyvanet monacemebi";

	}
	
	
	
	?>

<body>
</body>
</html>