<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-4-3.php" method="post">
<textarea id="text" name="txt" rows="4" cols="50">
  </textarea>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
	class rev{
		function __construct($arr){	
			$this->arr = $arr;
		}
		
		function to_reverse(){

			echo $this->arr." --><br><pre>".strrev($this->arr)."</pre>";
		}
	}
	
	if (isset($_POST['submit'])){
		$arr = $_POST['txt'];
		$rev = new rev($arr);
		$rev->to_reverse();
	}
	
	
?>

<body>
</body>
</html>