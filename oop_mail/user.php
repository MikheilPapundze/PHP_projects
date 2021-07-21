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
		$sql="SELECT  * from  mail"; 
$result=$this->connection->query($sql);
$resultset=array(); 
// ასოციატიური მასივი 
while($row=mysqli_fetch_assoc($result)) 
{ 
  $resultset[]=$row; 
} 	

        return $resultset;       
    }
 
	//ბაზაში მონაცემების შეტანა
	function insert($name,$surname,$from,$subject,$text){
		//კიდევ ერთხელ დგება კავშირი მონაცემების შესატანად
			$db =$this->connection;
		if ($db->connect_error) 
		{
			trigger_error(' Database connection failed: '.$db->connect_error, E_USER_ERROR);
		}
		$db->set_charset("utf8");
		date_default_timezone_set("Etc/GMT-4");

        //მომხმარებლის მიერ შემოტანი მონაცემების მიხედვით მომხმარებლების შეტანა
		$sql="INSERT INTO mail (name, surname, from_who, subject, text) VALUES('$name', '$surname', '$from','$subject','$text')";
				if ($db->query($sql) === TRUE) 
				{	
					$last_id=$db->insert_id;
					echo 'Yes '.$last_id;
				}
				else
				{
					echo 'No: '.$db->error;
				}
	     }

}