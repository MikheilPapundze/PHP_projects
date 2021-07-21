<?php
//ბაზასტან დაკავშირების კლასის შემოტანა
include_once('DbConnection.php');

//ძირითადი მემკვიდრე კლასი
class User extends DbConnection{
    //User კლასის კონსტრუქტორში გამოიყენება DbConnection კლასის კონსტრუქტორი
    public function __construct(){
 
        parent::__construct();
    }

 
	// მოცემულ ფუნქციაში შეტანილი მოთხოვნის საფუძევლზე მოგვაქვს მონაცემები
    public function details(){
		$sql="SELECT  * from  blog"; 
$result=$this->connection->query($sql);
$resultset=array(); 
// ასოციატიური მასივი 
while($row=mysqli_fetch_assoc($result)) 
{ 
  $resultset[]=$row; 
} 	

        return $resultset;       
    }
 

}