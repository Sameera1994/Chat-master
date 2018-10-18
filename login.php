<?php

include 'dbh.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM signup WHERE username='$uname' AND password= '$pass'";
$result = $conn->query($sql);


?>
