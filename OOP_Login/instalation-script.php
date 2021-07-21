
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

		//იქმნება ცხრილი მომხმარებლის სახელის, პაროლის, სახელის, გვარის და ფოტოს სურათის ველებით
		$sql = "CREATE TABLE IF NOT EXISTS $this->table (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		passcode VARCHAR(30) NOT NULL,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		img VARCHAR(30) NOT NULL
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
		
	//მონაცემტა ბაზაში მომხარებლის დამატების ფუნქცია
	function insert_user($myusername,$mypassword,$name,$surname, $image ){
		//კიდევ ერთხელ დგება კავშირი მონაცემების შესატანად
			$db = new mysqli($this->host, $this->username, $this->password, $this->database);
		if ($db->connect_error) 
		{
			trigger_error(' Database connection failed: '.$db->connect_error, E_USER_ERROR);
		}
		$db->set_charset("utf8");
		date_default_timezone_set("Etc/GMT-4");

        //მომხმარებლის მიერ შემოტანი მონაცემების მიხედვით მომხმარებლების შეტანა
		$sql="INSERT INTO users (username, passcode, firstname, lastname, img) VALUES('$myusername','$mypassword','$name','$surname', '$image' )";
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
	
//მოცემული კლასით, მონაცემტა ბაზის, ცხრილის შექმნის და მომხმარებლის დამატება
$DB = new DbCreate ('localhost', 'root', '', 'database1', 'users');
$DB->create_base();
$DB->create_table();
$DB->insert_user('myusername', 'mypassword', 'name', 'surname', 'image.jpg');
	?>
