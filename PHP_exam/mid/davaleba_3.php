<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$cars = array("Lamborghini"=>array("Gallardo", "Aventador", "Miura", "Countach"), "BMW"=>array("M3", "M4", "M5", "M6"), "Ferrari"=>array("Enzo", "La Ferrari", "F40", "California"), "Toyota"=>array("Highlander", "Land Cruiser", "Rav-4", "Vitz"));
foreach ($cars as $x => $val) {
     echo "<br><br> $x => ";
   foreach ($val as $value) {
        echo " ".$value.", ";
    }
}
?>
<body>
</body>
</html>