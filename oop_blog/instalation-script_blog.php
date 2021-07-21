
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
		name TEXT NOT NULL,
		link VARCHAR(255) NOT NULL
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
		
	//მონაცემტა ბაზაში ლინკის და სახელის დამატების ფუნქცია
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
	     }
	}
	
//მოცემული კლასით, მონაცემტა ბაზის, ცხრილის შექმნის და ლინკების, და ღილაკების სახელების დამატება
$DB = new DbCreate ('localhost', 'root', '', 'database2', 'blog');
$DB->create_base();
$DB->create_table();
$DB->insert('home', 'https://portal.bsu.edu.ge/');
$DB->insert('courses', '');
$DB->insert('courses1', 'https://www.bing.com/?toWww=1&redig=F4FF3D7878214BC6BFEC3E0BE7611E07');
$DB->insert('courses2', 'https://www.yahoo.com/');
$DB->insert('courses3', 'https://alta.ge/');
$DB->insert('categories', '');
$DB->insert('categories1', 'https://www.w3schools.com/html/default.asp');
$DB->insert('categories2', 'https://www.w3schools.com/css/default.asp');
$DB->insert('categories3', 'https://www.w3schools.com/js/default.asp');
$DB->insert('services', '');
$DB->insert('services1', 'https://bsu.edu.ge/');
$DB->insert('services2', 'https://gamezone.ge/');
$DB->insert('services3', 'https://zoommer.ge/');
$DB->insert('მიშოს ბლოგი', '');
$DB->insert('ლორემ იპსუმ ამრავლებს სტიმული მსგავსება გვარიშვილობამ ოცნებები ბადებს საჩივარს ელდარს დაჰბერდება შეცნობაში, დააფრქვია მეწისქვილის რამეა ვიტგენშტეინი. ხიზილალის რამეა დაჰბერდება მშიერია გვარიშვილობამ, თაობების ვიტგენშტეინი სტიმული. ხიზილალის შასადამე გვერდებში სამდივნოს გრიფი იანი, მოაჯირს, სიჭაბუკის ფრინველს შეჰყურებდნენ სამიკიტნოზე დააფრქვია მხნედ. ბოროტმა ვიტგენშტეინი სამიკიტნოზე, აამბავს თაობების სამდივნოს ვწიო გასჭრიდა საუბარსა როიალზე მეტროში ურმებს.', 'Cover.png');
$DB->insert('ლორემ იპსუმ დაამღერა გავათენეთ იხრჩობოდა სურამელის სიწმინდემდე შესანიშნავია. გაერკვეოდა დასძახა ისროდნენ გარდაუვლობაში, სურამელის კინომცოდნე წამოგცდეთ დაამღერა მოაკლდება წვრილმან სთხოვე ბინოშის ნახავდე ომია. დედაკაცო ბატსავით წვრილმან მიანდვეს მასები აპრილი. აწერდა ნახავდე გაწყვეტა მასები ბატსავით დასიცხავს ბრძოლიდგან მსურდა იცინებდნენ დაისვენა მწვანედ, მუსიკაზე შინაგანი.', '<iframe width="600" height="315" src="https://www.youtube.com/embed/y8nn_s4UBws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
	?>
