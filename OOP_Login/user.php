<?php
//ბაზასტან დაკავშირების კლასის შემოტანა
include_once('DbConnection.php');

//ძირითადი მემკვიდრე კლასი
class User extends DbConnection{
    //User კლასის კონსტრუქტორში გამოიყენება DbConnection კლასის კონსტრუქტორი
    public function __construct(){
 
        parent::__construct();
    }
 
	//ამ ფუნქციაში მოწმდება მომხმარებლის აუტორიზაციისთვის საჭირო მონაცემები
    public function check_login($username, $password){
 
		//მოგვაქვს მონაცემები ბაზიდან თუ დაემთხვევა ჩვენ მიერ შემოტენილი მონაცემები
        $sql = "SELECT * FROM users WHERE username = '$username' AND passcode = '$password'";
        $query = $this->connection->query($sql);
 
		//თუ ბაზიდან წამოღებული სტრიქონების რაოდენობა მეტია 0-ზე 
        if($query->num_rows > 0){
			
			//მაშინ მოგვაქვს მონაცემები როგორც მასივი და ვიღებთ მათგან id-ს
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
    }
 
	// მოცემულ ფუნქციაში შეტანილი მოთხოვნის საფუძევლზე მოგვაქვს მონაცემები
    public function details($sql){
        //კავშირის ცვლადის საფუძველზე ვამუშავებთ მოთხოვნას
        $query = $this->connection->query($sql);
 
        $row = $query->fetch_array();
        //და გამოგვაქვს მთლიანად მასივი
        return $row;       
    }
 
	//ამ ფუნქციაში შეტანილი ცვლადი გამოიყენება როგორც სტინგი რომლის გამოყენებაც შესაძლებელი იქნება details ფუნქციაში
    public function escape_string($value){
 
        return $this->connection->real_escape_string($value);
    }
}