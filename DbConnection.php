<?php
//მოცემული კლასი გამოიყენება მონაცემტა ბაზასთან დასაკავშირებლად, და აგებულია სპეციალურად მემკვიდრეობისთვის
class DbConnection{
   //ვინაიდან ეს კლასი შექმნილია კონკრეტული ბაზისთვის ბაზის მონაცემები private ცვლადების სახითაა წარმოდგენილი
   private $host = 'localhost';
   private $username = 'root';
   private $password = '';
   private $database = 'database1';
   //კავშირის ცვლადი, რომელიც გათვლილია მემკვიდრე კლასისთვის
    protected $connection;
	
    //მოცემული კლასის კონსტრუქტორიც მხოლოდ მემკვიდრისთვისაა გათვლილი
    protected function __construct(){
		
        //ამ პირობით ოპერატორში მყარდება კავშირი ბაზასთან
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            
			//თუ კავშირი არ დამყარდა გამოდის შეცდომა
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
    }
} 

?>