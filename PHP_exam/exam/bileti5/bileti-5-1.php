<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-5-1.php" method="post">
<textarea id="text" name="txt" rows="4" cols="50">
  </textarea>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
	class toupper{
		function __construct($arr){	
			$this->arr = $arr;
		}
		
		function into_uppercase(){
			echo "<pre>".strtoupper($this->arr)."</pre>";
		}
	}
	
	if (isset($_POST['submit'])){
		$arr = $_POST['txt'];
		$symbol = new toupper($arr);
		$symbol->into_uppercase();
	}
	
	
?>

<body>
</body>
</html>