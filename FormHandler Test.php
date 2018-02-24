<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
	
$sql = "INSERT INTO Persons (FirstName, LastName)
VALUES ('".$_POST[firstname]."', '".$_POST[lastname]."')";

if ($conn->query($sql) === TRUE) {
    echo "new record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>