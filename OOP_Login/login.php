<?php
//სესიის დაწყება
session_start();
 
include_once('user.php');
 
//user კლასის ობიექტი შემდგომში მისი ფუნქციების გამოსაყენებლად
$user = new User();
 
//პირობითი ოპერატორი სრულდება როცა შესვლის ღილაკს დავაჭერთ
if(isset($_POST['login'])){
	//მომხმარებლის მიერ შემოტანილი მონაცემები ენიჭება ცვლადებს
	$username = $user->escape_string($_POST['username']);
	$password = $user->escape_string($_POST['password']);
 
	//შემდეგ ვამოწმებთ ჭეშმარიტებას
	$auth = $user->check_login($username, $password);
 
	//თუ არ იქნება ჭეშმარიტი გამოვა შეტყობინება
	if(!$auth){
		$_SESSION['message'] = 'Invalid username or password';
    	header('location:index.php');
	}
	//წინააღმდეგ შემთხვევაში შევდივართ სისტემაში
	else{
		$_SESSION['user'] = $auth;
		header('location:home.php');
	}
}
else{
	header('location:index.php');
}
?>