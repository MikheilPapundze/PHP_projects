<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>

<body>
	<form method="post" action="triangle_class.php">
		A=<input type="number" name="a"><br><br>
		B=<input type="number" name="b"><br><br>
		C=<input type="number" name="c"><br><br>	
		<input type="submit" name="submit" value="გამოთვლა"><br><br><br>	
	</form>
	
	<div id="demo>"></div>
	<?php	
   
	class my_triangle{	
		
		private $a;
		private $b;
		private $c;
		
		
		function __construct($a,$b,$c){
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
		}
		
		function P(){
			return($this->a+$this->b+$this->c);
		}
		
		function S(){
			$a=$this->a;
			$b=$this->b;
			$c=$this->c;
			$p = $this->P()/2;
			if ($p*($p-$a)*($p-$b)*($p-$c)< 0)
				return "ეს სამკუთხედი არ არის";
			else
			    return(sqrt($p*($p-$a)*($p-$b)*($p-$c)));
		}
		
		function shida_wrewiris_radiusi (){
			
			return (2*$this->S())/$this->P();
			
		}
		
		function gare_wrewiris_radiusi (){
			
			return ($this->a* $this->b * $this->c)/(4 * $this->S());
			
		}
		
		function shida_wrewiris_fartobi (){
			
			return pi() * pow($this->shida_wrewiris_radiusi (),2);
			
		}
		
		function gare_wrewiris_fartobi (){
			
			return pi() * pow($this->gare_wrewiris_radiusi(),2);
			
		}
		
		
		function display(){	
			if ($this->S() <= 0){
				echo "ეს არ არის სამკუთხედი";
			}
			else {	
			$Rez="<br>პერიმეტრი =".$this->P()."<br><br>ფართობი =".$this->S()."<br><br>ჩახაზული წრეწირის რადიუსი =".$this->shida_wrewiris_radiusi()."<br><br>შემოხაზული წრეწირის რადიუსი =".$this->gare_wrewiris_radiusi()."<br><br>ჩახაზული წრეწირის ფართობი =".$this->shida_wrewiris_fartobi()."<br><br>შემოზული წრეწირის ფართობი =".$this->gare_wrewiris_fartobi();
			return($Rez);}
		}
	}
	
	if(isset($_POST['submit'])){
		if( $_POST["a"] || $_POST["b"] || $_POST["c"] ) {
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];
		 
		 
			$rez = new my_triangle($a,$b,$c);
			echo  $rez->display()."<br>";
		}
	}

?>
	
</body>
</html>