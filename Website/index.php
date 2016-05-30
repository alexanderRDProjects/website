<?php
$variable = "stuf";
?>
<html>
<head><title>Riddle Me!</title>
<link rel="stylesheet" type="text/css" href = "stylesheet.css"/>
<style>
* {
	background-color:#CCCCFF;
	text-align:center;
}
table {
	width:100%;
	background-color:#2222FF;
	height:100%;
}
td {
	background-color:#2222FF;
}
#topBar{
	position: fixed;
	top: 0;
	left: 0;
	display:block;
	background-color:#2222FF;
	width:100%;
	height:7%;
	padding:0px;
	margin:0px;
	/* border-style: solid;
	border-width:5px;
	border-color:#2222FF; */
}
.hidden {
	color :#CCCCFF;
}
input {
	text-align:left;
	background-color:#FFFFFF;
}
#signup {
	display:None;
	background-color:#AAAAFF;
	color:#CCCCFF;
	position:fixed;
	width:40%;
	height:70%;
	top: 15%;
	border:3px solid #2222FF;
	left:30%
	
}
#signupTable {
	background-color:#AAAAFF;
	height:50%
}
#signupCell {
	background-color:#AAAAFF;
	color:#CCCCFF;
	width:15%
}
#Signupbutton {
	text-align:center;
	position:fixed;
	top:70%;
	width:20%;
	left:40%;
}
#signupText {
	background-color:#AAAAFF;
	color:#FF2222
}
#signupExit {
	position:fixed;
	top:17%;
	left:67%;
	width:2%;
}
</style>
</head>
<body>
<div id = "topBar">
<table>
<tr>
<td width = 40%>Welcome To Riddle Me!</td>
<td>username</td>
<td><input type="text" id="username"/></td>
<td>password</td>
<td><input type="password" id="password"/></td>
<td><input onclick="Login()" type="submit" value = "Log in"/></td>
<td>No account?</td>
<td><input type="submit" value = "Signup" onclick = "LoadSignup()"/></td>
</tr>
</table>
</div>
<p width = "25%" class = "hidden">hidden</p>
<p width = "25%" class = "hidden">hidden</p>
<div>
<h1>Riddle of the Day</h1>
<p id = "riddle"><?php echo $daily_riddle?></?php></p>
</h1></div>

<div id = "signup" display = "none" >
<input type = "radio" checked="checked" id  ="signupExit" onclick = "HideSignup()"/>
<h1 id = "signupText">Signup</h1>
<p id = "signupText">all we need is a username and password and then you can start riddling</p>
<table border = 0px id = "signupTable">
<tr><td id = "signupCell">Username</td><td id = "signupCell"><input type = "text" id = "SignupUsername"/></td></tr>
<tr><td id = "signupCell">Password</td><td id = "signupCell"><input type = "password" id = "SignupPassword"/></td></tr>
<tr><td id = "signupCell">Confirm Password</td><td id = "signupCell"><input type = "password" id = "SignupSecondPassword"/></td></tr>
</table>
<input id = "Signupbutton" type = "submit" value = "signup" onclick="Signup_Request()"/>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="jquery.min.js"></script>
<script>
//alert("hey");
//$("#signup").hide();
var xhttp = new XMLHttpRequest();
url = "DailyRiddle.php";
xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) {
		var data = xhttp.responseText;
		data = data.split("@")
		document.getElementById("riddle").innerHTML = data[0];
	};
}
xhttp.open("GET", url, true);
xhttp.send();
		
$(document).ready(function(){
	//$("#signup").hide();
	//alert("doc ready");
});
function LoadSignup () {
	$("#signup").show();
	//alert("function callled");
};
function HideSignup () {
	//alert("function called");
	$("#signup").hide();
}
function Signup_Request () {

	SignupUsername = document.getElementById("SignupUsername").value;
	SignupPassword = document.getElementById("SignupPassword").value;
	SignupSecondPassword = document.getElementById("SignupSecondPassword").value;
	if (SignupPassword == SignupSecondPassword){
		//alert("/signup.php?username="+SignupUsername+"&password="+SignupPassword);
		var xhttp = new XMLHttpRequest();
		url = "signup.php?username="+SignupUsername+"&password="+SignupPassword;
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				alert(xhttp.responseText);
			};
		}
		xhttp.open("GET", url, true);
		xhttp.send();
		
	}
}
function Login() {
	//alert("function called");
	username = document.getElementById("username").value;
	password = document.getElementById("password").value;
	var xhttp = new XMLHttpRequest();
	url = "login.php?username="+username+"&password="+password;
	feed_url = "verify.php?username="+username+"&password="+password;
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			if (xhttp.responseText == "Your user was Found"){
				window.location = feed_url;
			}
			alert(xhttp.responseText);
		};
	}
	xhttp.open("GET", url, true);
	xhttp.send();
}
</script>
</body>
<html>