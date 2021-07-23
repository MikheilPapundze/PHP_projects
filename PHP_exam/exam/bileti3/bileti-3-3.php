<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-3-3.php" method="post">
<textarea id="text" name="txt" rows="4" cols="50">
  </textarea>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
	class tolower{
		function __construct($arr){	
			$this->arr = $arr;
		}
		
		function into_lovercase(){
			echo "<pre>".strtolower($this->arr)."</pre>";
		}
	}
	
	if (isset($_POST['submit'])){
		$arr = $_POST['txt'];
		$symbol = new tolower($arr);
		$symbol->into_lovercase();
	}
	
	
?>

<body>
</body>
</html>