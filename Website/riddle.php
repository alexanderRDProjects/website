<html>
<head><title>Riddle Me!</title></head>
<body>
<table>
<tr>
<td>Riddle Me!</td>
<form>
<td>search</td>
<td><input type="text" name="username"/></td>
<td> or search for user</td>
<td><input type="text" name="password"/></td>
<td><input type="submit" value = "search"/></td>
</form>
<td>create a riddle</td>
<td><input type="submit" value = "Create" onclick = "Create()"/></td>
</tr>
<tr><td>content</td></tr>
</table>
<div id = "signup" display = "none" >
<table border = 1px>

<tr><td>Title</td><td><input type = "text" id = "SignupUsername"/></td></tr>
<tr><td>Riddle</td><td><input type = "password" id = "SignupPassword"/></td></tr>
<tr><td>Answer</td><td><input type = "password" id = "SignupSecondPassword"/></td></tr>
<tr><td><input type = "submit" value = "signup" onclick="Signup()"/></td></tr>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
alert("hey");
$(document).ready(function(){
	$("#signup").hide();
	alert("doc ready");
});
function LoadSignup () {
	$("#Create").show();
	alert("function callled");
};
function Signup () {
	SignupUsername = document.getElementById("SignupUsername").value;
	SignupPassword = document.getElementById("SignupPassword").value;
	SignupSecondPassword = document.getElementById("SignupSecondPassword").value;
	if (SignupPassword == SignupSecondPassword){
		alert("/signup.php?username="+SignupUsername+"&password="+SignupPassword);
		window.location.assign("/signup.php?username="+SignupUsername+"&password="+SignupPassword);
	}
}
</script>
</body>
<html>