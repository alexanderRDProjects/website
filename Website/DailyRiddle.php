<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from riddles order by rand() limit 1";
$result = $conn->query($sql);
$daily_riddle = "Riddle not found please try again";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Name= " . $row["user_name"]. " - Password= " . $row["user_password"]. "<br>";
		$daily_riddle = $row["Riddle"];
		$daily_answer = $row["Answer"];
		//if (($row["user_name"] == $Username) and ($row["user_password"] == $Password)){
		//	$found = true;
		//}
    }
} else {
    echo "No riddles are found";
}
$conn->close();
echo $daily_riddle;
echo "@";
echo $daily_answer;
?>