<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<form action="bileti-1-1.php" method="post">
<textarea id="text" name="txt" rows="4" cols="50">
  </textarea>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
	class find_Symbol{
		function __construct($arr){	
			$this->arr = $arr;
		}
		
		function count_at(){
			echo "ამ ტექსტში იყო ".substr_count($this->arr, "@")." ცალი '@' სიმბოლო";
		}
	}
	
	if (isset($_POST['submit'])){
		$arr = $_POST['txt'];
		$symbol = new find_Symbol($arr);
		$symbol->count_at();
	}
	
	
?>

<body>
</body>
</html>