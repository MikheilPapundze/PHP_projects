<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-2-2.php" method="post">
name: <input type="text" name="name"><br>
surname: <input type="text" name="surname"><br>
age: <input type="number" name="age"><br>
faculty: <input type="text" name="faculty"><br>
<input type="submit" name="submit" />
<br>
</form>
<?php
	
	class human  {
		protected function __construct($name, $surname, $age){
			$this->name = $name;
			$this->surname = $surname;
			$this->age = $age;
		}
		
		function set_name($name){
			$this->name = $name;
		}
		
		function get_name(){
			return $this->name;
		}
		
		function set_surname($name){
			$this->surname = $surname;
		}
		
		function get_surname(){
			return $this->surname;
		}
		
		function set_age($name){
			$this->age = $age;
		}
		
		function get_age(){
			return $this->age;
		}
		
		
	}
	
	class student extends human{
		
		function __construct($faculty, $name, $surname, $age){
			$this->faculty = $faculty;
			$this->name = $name;
			$this->surname = $surname;
			$this->age = $age;
		}
		
		function to_file(){
			$myfile = fopen("text.txt", "a") or die("Unable to open file!");
			$txt = "\n".$this->faculty.", ".$this->name.", ".$this->surname.", ".$this->age;
			fwrite($myfile, $txt);
			fclose($myfile);

		}	
		
	}
	
	
	
	if (isset($_POST['submit']))
	{
		$f = $_POST['faculty'];
		$n = $_POST['name'];
		$s = $_POST['surname'];
		$a = $_POST['age'];
		
		if ($_POST['faculty'] != "" and $_POST['name'] != "" and $_POST['surname'] != "" and is_numeric($_POST['age']))
		{
	      $stud = new student($f,$n,$s,$a);
		  $stud->to_file();
		  echo "failshi chaiwera";
		}
		else 
		  echo "sheiyvanet monacemebi";
	}
		
	
	
	?>

<body>
</body>
</html>