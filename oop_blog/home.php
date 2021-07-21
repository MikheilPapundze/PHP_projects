<?php

//ძირიტადი კლასის და სტილის შემოტანა
//include_once("style.php"); 
include_once('User.php');
include_once('style.php');
//ახალი ობიექტი
$user = new User();
 
$row = $user->details();
 
/*
მოცემულ html-ში გამომაქვს ღილაკები მათი სახელები მასივზე რიგითი ნომრის და key-ს მითითებით
იგი მუშაობს ჩემი საინსტალაციო სკრიპტის მიერ შექმნილ ბაზაზე
*/
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php /*შეგვაქვს სტილი ფაილის სახელი*/ echo $css->get_name(); ?>" rel="stylesheet">
	<title >PHP blog using OOP</title>
</head>
<body>
<div class="dropdown">
	<a class="dropbtn" href="<?php echo $row[0]['link']; ?>"><?php echo $row[0]['name'] ?></a>
</div>
<div class="dropdown">
  <button class="dropbtn"><?php echo $row[1]['name'] ?></button>
  <div class="dropdown-content">
  <a href="<?php echo $row[2]['link']; ?>"><?php echo $row[2]['name']; ?></a>
  <a href="<?php echo $row[3]['link']; ?>"><?php echo $row[3]['name']; ?></a>
  <a href="<?php echo $row[4]['link']; ?>"><?php echo $row[4]['name']; ?></a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><?php echo $row[5]['name'] ?></button>
  <div class="dropdown-content">
  <a href="<?php echo $row[6]['link']; ?>"><?php echo $row[6]['name']; ?></a>
  <a href="<?php echo $row[7]['link']; ?>"><?php echo $row[7]['name']; ?></a>
  <a href="<?php echo $row[8]['link']; ?>"><?php echo $row[8]['name']; ?></a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><?php echo $row[9]['name'] ?></button>
  <div class="dropdown-content">
  <a href="<?php echo $row[10]['link']; ?>"><?php echo $row[10]['name']; ?></a>
  <a href="<?php echo $row[11]['link']; ?>"><?php echo $row[11]['name']; ?></a>
  <a href="<?php echo $row[12]['link']; ?>"><?php echo $row[12]['name']; ?></a>
  </div>
</div>
	<div class="header">
  <h2><?php echo $row[13]['name']; ?></h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="fakeimg" style="height:670px;"><img src="<?php echo $row[14]['link']; ?>"></div>
      <p><?php echo $row[14]['name']; ?></p>
    
  <div class="rightcolumn">
    <div class="card">
      <h2>ჩემს შესახებ</h2>
      <div class="fakeimg" style="height:355px;" align="center"><?php echo $row[15]['link']; ?></div>
      <p><?php echo $row[15]['name']; ?></p>
    </div>

  </div>
</div>

</body>
</html>