<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-6-3.php" method="post">
სიგრძე: <input type="number" name="sigrdze"><br>
სიგანე: <input type="number" name="sigane"><br>
კუთხე: <input type="number" name="kutxe"><br>
<br>
<input type="submit" name="submit">
</form>
<?
	
	class parallel{
		
		function __construct($sigrdze, $sigane, $kutxe)
		{
			$this->sigrdze = $sigrdze;
			$this->sigane = $sigane;
			$this->kutxe = $kutxe*pi()/180;
		}
		
		function set_sigrdze($sigrdze)
		{
			$this->sigrdze = $sigrdze;
		}
		
		function get_sigrdze()
		{
			return $this->sigrdze;
		}
		
		function set_sigane($sigane)
		{
			$this->sigane = $sigane;
		}
		
		function get_sigane()
		{
			return $this->sigane;
		}
		
		function set_kutxe($kutxe)
		{
			$this->kutxe = $kutxe;
		}
		
		function get_kutxe()
		{
			return $this->kutxe;
		}
		
		function p()
		{
			return $this->sigrdze*2+$this->sigane*2;
		}
		
		function height()
		{
			return $this->sigane*sin($this->kutxe);
		}
		
		function area()
		{
			return $this->sigrdze*$this->height();
		}
	}
	
	if (isset($_POST['submit'])){
		
		if ($_POST['sigrdze'] != "" and $_POST['sigane'] != "" and $_POST['kutxe'] != "")
		{
		$sigrdze = $_POST['sigrdze'];
		$sigane = $_POST['sigane'];
		$kutxe = $_POST['kutxe'];
	
		$res = new parallel($sigrdze, $sigane, $kutxe);
		echo "პარალელოგრამის სიმაღლეა  ".$res->height();
		echo "<br>პარალელოგრამის პერიმეტრია  ".$res->p();
		echo "<br>პარალელოგრამის ფართობია  ".$res->area();
		}
		else
			echo "შეიყვანეთ მონაცემები";
	}
	?>

<body>
</body>
</html>