<?php
//სპეციალური კლასი CSS ფაილის მისამართის გადასაცემად
class style
{
   function __construct($name) {
	   $this->name = $name;
   }
   
   function get_name(){
	   return $this->name;
   }
	
}

$css = new style("style.css");
?>