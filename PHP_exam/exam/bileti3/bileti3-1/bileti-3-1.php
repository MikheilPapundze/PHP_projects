<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-3-1.php" method="post">
	   subject: <input type="text" name="subject"><br> 
       kursi: <input type="text" name="kursi"><br>
       name: <input type="text" name="name"><br>
       surname: <input type="text" name="surname"><br>
       age: <input type="number" name="age"><br>
<input type="submit" name="submit" />
<br>
</form>
<?php
	
	class university{
		
		protected function __construct($kursi, $subject){
			$this->kursi = $kursi;
			$this->subject = $subject;
		}
		
		function set_kursi($kursi){
			$this->kursi = $kursi;
		}
		
		function get_kursi(){
			return $this->kursi;
		}
		
		function set_subject($subject){
			$this->subject = $subject;
		}
		
		function get_subject(){
			return $this->subject;
		}
	}
	
	class teacher extends university {
		function __construct($kursi, $subject, $name, $surname, $age){
			$this->kursi = $kursi;
			$this->subject = $subject;
			$this->name = $name;
			$this->surname = $surname;
			$this->age = $age;
		}
		
		function to_file(){
			$myfile = fopen("text.txt", "a") or die("Unable to open file!");
			$txt = "\n".$this->kursi.", ".$this->subject.", ".$this->name.", ".$this->surname.", ".$this->age;
			fwrite($myfile, $txt);
			fclose($myfile);

		}
		
	}
	
	if (isset($_POST['submit']))
	{
		$s = $_POST['subject'];
		$k = $_POST['kursi'];
		$n = $_POST['name'];
		$sn = $_POST['surname'];
		$a = $_POST['age'];
		
		if ($_POST['subject'] != "" and $_POST['kursi'] != "" and $_POST['name'] != "" and $_POST['surname'] != "" and is_numeric($_POST['age']))
		{
	      $teach = new teacher($k, $s, $n,$sn,$a);
		  $teach->to_file();
		  echo "failshi chaiwera";
		}
		else 
		  echo "sheiyvanet monacemebi";
	}
		
	
	
	?>


<body>
</body>
</html>