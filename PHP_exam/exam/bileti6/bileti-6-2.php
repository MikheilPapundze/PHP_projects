<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>

<body>
	<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF']; ?>">
		A=<input type="number" name="a"><br><br>
		B=<input type="number" name="b"><br><br>
		C=<input type="number" name="c"><br><br>	
		<input type="submit" name="submit" value="გამოთვლა"><br>	
	</form>
	
	<?php	
   
	class kvGant{	
		private $a;
		private $b;
		private $c;
		
		function __construct($a,$b,$c){
			$this->set($a,$b,$c);
			$this->display();	
		}
		
		function __destruct(){}
		
		function setA($a){
			$this->a = $a;
		}
		
		function setB($b){
			$this->b = $b;
		}
		
		function setC($c){
			$this->c = $c;
		}
		
		function set($a,$b,$c){
			$this->setA($a);
			$this->setB($b);
			$this->setC($c);
		}
		
		function getA(){
			return $this->a;
		}
		
		function getB(){
			return $this->b;
		}
		
		function getC(){
			return $this->c;
		}
		
		function diskriminanti(){
			$a=$this->a;
			$b=$this->b;
			$c=$this->c;
			return($b*$b-4*$a*$c);
		}
		
		function re(){
			$a=$this->a;
			$b=$this->b;
			$c=$this->c;
			return(-$b/(2/$a));
		}
		
		function im(){
			$a=$this->a;
			$b=$this->b;
			$c=$this->c;
			return(sqrt(abs($this->diskriminanti()))/(2*$a));
		}
		
		function x(){
			$a=$this->a;
			$b=$this->b;
			$c=$this->c;
			if($this->diskriminanti()>0){
				$rez = "x<sub>1</sub>=".($this->re()-$this->im())."<br>x<sub>2</sub>=".($this->re()+$this->im())."<br>";
			} else {
				$rez = "x<sub>1</sub>=".$this->re()."-i*".$this->im()."<br>x<sub>2</sub>=".$this->re()."+i*".$this->im()."<br>";
			}
			return $rez;			
		}
		
		function equation(){
			$a=$this->getA();
			$b=$this->getB();
			$c=$this->getC();
			
			if($a == 1) $rezA = "x<sup>2</sup>";
			else if($a == -1) $rezA = "-x<sup>2</sup>";
			else if($a < -1 || $a > 1) $rezA= $a."x<sup>2</sup>";  

			if($b == 1) $rezB = "+x";
    		else if ($b==0) $rezB = "";
			else if($b == -1) $rezB = "-x";
			else if($b < -1) $rezB= $b."x";
     		else if($b > 1) $rezB= "+".$b."x";
   

    		if($c == 0) $rezC = "";
			else if($c >0) $rezC = "+".$c;
			else $rezC= $c;

			return $rezA.$rezB.$rezC."=0";
		}
		
		 function display(){
			 
			 if($this->getA() == 0)
				 echo "ეს არ არის კვადრატული განტოლება!";
			 else
				echo "კვადრატული განტოლების:".$this->equation()."<br>D=".$this->diskriminanti()."<br>ამონახსნებია:<br>".$this->x();
			 
		}
	}
	
	if(isset($_POST['submit'])){
		if( $_POST["a"] || $_POST["b"] || $_POST["c"] ) {
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];
		  
			$kvg = new kvGant($a,$b,$c);
		}
	}

?>
	
</body>
</html>