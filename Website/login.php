<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "users";
$Username = $_REQUEST["username"];
$Password = $_REQUEST["password"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_name, user_password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$found = false;
    while($row = $result->fetch_assoc()) {
        //echo "Name= " . $row["user_name"]. " - Password= " . $row["user_password"]. "<br>";
		if (($row["user_name"] == $Username) and ($row["user_password"] == $Password)){
			//session_start()
			//$_SESSION["username"] =  $row["user_name"];
			//$_SESSION["password"] = $row["user_password"];
			$found = true;
		}
    }
	if ($found){
		echo "Your user was Found";
	} else {
		echo "User not Found/Incorrect details";
	}
} else {
    echo "0 results";
}
$conn->close();
?>