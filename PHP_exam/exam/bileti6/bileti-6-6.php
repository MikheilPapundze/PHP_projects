<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-6-6.php" method="post">
N: <input type="number" name="N"><br>
<br>
<input type="submit" name="submit">
</form>
	<?php
	
	class fact{
		
		function __construct($N){
			$this->N = $N;
		}
	

        function Factorial($N){
           if($N <= 1){  
            return 1;  
           }  
           else{  
           return $N * $this->Factorial($N - 1);  
           }  
        }
	}
  
  if (isset($_POST['submit'])){
	  $n = $_POST['N'];
	  
	  if ($_POST['N'] != "" or is_numeric($_POST['N']))
	  {
	  $facto = new fact($n);
      echo "Factorial = ".$facto->Factorial($n);
	  }
	  else 
		  echo "შეიყვანეთ მონაცემები";
  }


?>

<body>
</body>
</html>
