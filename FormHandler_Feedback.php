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
	
$sql = "INSERT INTO Feedback (FirstName, LastName, CurrentCustomer, Comments)
VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["currentcustomer"]."', '".$_POST["comments"]."')";

if ($conn->query($sql) === TRUE) {

    echo "new record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

?>
</body>
</html>