<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>President Forum</title>
</head>
<body>
<form name="president" >
<input type="text" id="PName">
President Name <br>
<br>
<input type="text" id="Birth_Year">
Birth Year <br>
<br>
<input type="text" id="Years">
Years Served <br>
<br>
<input type="text" id="Death_Age">
Age at Death <br>
<br>
<input type="text" id="Party">
Party <br>
<br>
<input type="text" id="Born_In">
State of Birth <br>
<br>
<input type="submit">
<?php
$Pname = $_POST["Pname"];
$Years = $_POST["Years"];
$Born_In = $_POST["Born_In"];
$Death_Age = $_POST["Death_Age"];
$Party = $_POST["Party"];
$Birth_Year = $_POST["Birth_Year"];
echo ($Pname.$Years);
?>
</form>
</body>
</html>
