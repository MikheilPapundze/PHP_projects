<?php
    //მოცემული კლასი გამოიყენება მონაცემთა ბაზის შესაქმნელად
	class DbCreate{
  //მოცემული ცვლადები გამოიყენება ბაზის შესაქმნელად
   private $host;
   private $username;
   private $password;
   private $database;
   private $table;
	
	//ვიყენებ მომხმარებლის მიერ შემოტანილ ცვლადებს	
    public function __construct($host,$username,$password,$database,$table)
	{
	    $this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database	= $database;
		$this->table = $table;
	}
   
	//მონაცემთა ბაზის შექმნის ფუნქცია
	function create_base(){
		//დგება  ბაზასტან კავშირი
		$db = new mysqli($this->host, $this->username, $this->password);
		if ($db->connect_error) 
		{
			trigger_error('Database connection failed:'.$db->connect_error, E_USER_ERROR);
		}
		$db->set_charset("utf8");
		date_default_timezone_set("Etc/GMT-4");

		//იქმნება ბაზა
		$sql = "CREATE DATABASE IF NOT EXISTS $this->database";

		//mysqli_query(db, $sql)	
		if ($db->query($sql) === TRUE)
		{
		  echo " Database created successfully  ";
		} 
		else 
		{
		  echo "Error creating database: " . $db->error;
		}
	}

	//ცხრილის შექმნის ფუნქცია
	function create_table(){	
		//ხელახლა დგება კაშირი უკვე შექმნილ ბაზასთან
		$db = new mysqli($this->host, $this->username, $this->password, $this->database);
		if ($db->connect_error) 
		{
			trigger_error(' Database connection failed: '.$db->connect_error, E_USER_ERROR);
		}
		$db->set_charset("utf8");
		date_default_timezone_set("Etc/GMT-4");

		//იქმნება ცხრილი მომხმარებლის ღილაკის სახელის და ლინკის ველებით
		$sql = "CREATE TABLE IF NOT EXISTS $this->table (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(50) NOT NULL,
		surname VARCHAR(50) NOT NULL,
		username VARCHAR(80) NOT NULL,
		email VARCHAR(255) NOT NULL,
		password VARCHAR(80) NOT NULL
		)";	
		if ($db->query($sql) === TRUE) 
		{
		  echo " Table users created successfully ";
		} 
		else
		{
		  echo " Error creating table: " . $db->error;
		}
	}
		
	/*/მონაცემტა ბაზაში ლინკის და სახელის დამატების ფუნქცია
	function insert($name,$link){
		//კიდევ ერთხელ დგება კავშირი მონაცემების შესატანად
			$db = new mysqli($this->host, $this->username, $this->password, $this->database);
		if ($db->connect_error) 
		{
			trigger_error(' Database connection failed: '.$db->connect_error, E_USER_ERROR);
		}
		$db->set_charset("utf8");
		date_default_timezone_set("Etc/GMT-4");

        //მომხმარებლის მიერ შემოტანი მონაცემების მიხედვით მომხმარებლების შეტანა
		$sql="INSERT INTO $this->table (name, link) VALUES('$name','$link')";
				if ($db->query($sql) === TRUE) 
				{	

					$last_id=$db->insert_id;
					echo 'Yes '.$last_id;
				}
				else
				{
					echo 'No: '.$db->error;
				}
	     }*/
	}
	
//მოცემული კლასით, მონაცემტა ბაზის, ცხრილის შექმნის და ლინკების, და ღილაკების სახელების დამატება
$DB = new DbCreate ('localhost', 'root', '', 'database2', 'registration');
$DB->create_base();
$DB->create_table();

	?>
