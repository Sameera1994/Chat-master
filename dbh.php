<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "chatapp";

// db connection
$conn = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $conn->connect_error);
} else {
  // echo "Successfully connected";
	header("Location:index.php");
}

?>