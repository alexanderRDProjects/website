<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "users";
$Username = $_REQUEST["username"];
$Password = $_REQUEST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = implode("",["INSERT INTO users (user_name, user_password)
VALUES ('",$Username,"', '",$Password,"')"]);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>