<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<form action="bileti-4-2.php" method="post">
center X: <input type="number" name="cx"><br>
center Y: <input type="number" name="cy"><br>
center Z: <input type="number" name="cz"><br>
radius: <input type="number" name="r"><br>
<br>
<input type="submit" name="submit">
</form>
	
<?php
	
	class sphere{
		
		function __construct($cx, $cy, $cz, $r)
		{
			$this->cx = $cx;
			$this->cy = $cy;
			$this->cz = $cz;
			$this->r = abs($r);
		}
		
		function set_cx($cx)
		{
			$this->cx = $cx;
		}
		
		function get_cx()
		{
			return $this->cx;
		}
		
		function set_cy($cy)
		{
			$this->cy = $cy;
		}
		
		function get_cy()
		{
			return $this->cy;
		}
		
		function set_cz($cz)
		{
			$this->cz = $cz;
		}
		
		function get_cz()
		{
			return $this->cz;
		}
		
		function set_r($r)
		{
			$this->r = $r;
		}
		
		function get_r()
		{
			return $this->r;
		}
		
		function volume()
		{
			return (4/3)*pi()*pow($this->r, 3);
		}
		
		function surface_area()
		{
			return 4*pi()*pow($this->r, 2);
		}
	}
	
	
	if (isset($_POST['submit'])){
		$cx = $_POST['cx'];
		$cy = $_POST['cy'];
		$cz = $_POST['cz'];
		$r = $_POST['r'];
		
		if (($_POST['cx'] != "" ) and ($_POST['cy'] != "" ) and ($_POST['cz'] != "") and ($_POST['r'] != "" and $_POST['r'] >=0))
	  {
	  $s = new sphere($cx, $cy, $cz, $r);
      echo "mocemuli birtvis moculobaa  ".$s->volume();
      echo "<br>mocemuli birtvis zedapiris fartobia  ".$s->surface_area(); 
	  }
	  else 
		  echo "sheiyvanet monacemebi";

	}
	
?>

<body>
</body>
</html>