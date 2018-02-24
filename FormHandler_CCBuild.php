<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Submitted</title>
</head>

<body>
<?php

$servername = "localhost";
$username = "root";
$password = "N1ch0l4sS3rv3r";
$dbname = "form_results";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 
	
$sql = "INSERT INTO CCBuild (FirstName, LastName, EmailAddress, Processor, HardDrive1, RAM, HardDrive2)
VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["processorchoice"]."', '".$_POST["primarydrive"]."', '".$_POST["ram"]."', '".$_POST["seconddrive"]."')";

if ($conn->query($sql) === TRUE) {

    echo "new record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

?>
</body>
</html>