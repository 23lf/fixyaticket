<!DOCTYPE html>
<html>
<head>
	<title> Contacts</title>
	<style type="text/css">
		h1{
			font-size:150%;
			color:yellow;
			text-align:center;
		}
	</style>
</head>
<body>
	<h1> Contact List</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lawsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, email, phone, message FROM lawsite.contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - email: " . $row["email"]. " " . $row["phone"]. " ". $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>