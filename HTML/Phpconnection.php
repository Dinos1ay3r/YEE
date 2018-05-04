<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Php insert</title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "web";
	$password = "temp";
	$dbname = "usadb";
	
	// Create Connection
	$conn = new mysqli ($servername, $username, $password, $dbname);
		//Check Connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		
		
	else {
		echo ("You have Connected!");
		 }
	$sql == "Insert into city (zipcode, name, state, country) Values (26101, 'Parkersburg','WV','Wood')";
	
	if ($conn->query($sql) === True) {
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn_>error;
	}
	
	$conn->close();
	?>
</body>
</html>