<?php
?>
<html>
<head><title>Riddle Me!</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
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
ul {
	list-style-type: none;
}
.nav {
	position: fixed;
	top:15%;
	left:0;
	height: 100%;
	margin:0;
	padding:0;
}
li {
	height:15%;
}
a {
	background-color: #A5A5EE;
	display:block;
	width:100%;
	height:100%;
}
li a:hover{
	background-color: #6565DD;
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
	text-align:center;
	background-color:#FFFFFF;
	width:100%;
}
#topBarSpace {
	width:20%;
}
#searchBar {
	width:30%;
}
#display {
	position:fixed;
	top:7%;
	left: 32.9%;
	width: 29.58%;
	background-color: #FFFFFF;
	z-index:1;
}

</style>
<script>
function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
</script>
</head>
<body>
<!-- <div id = "display"><ul><li><strong>ale</strong>x a person</strong></li><li> <strong>ale</strong> a drink</li></ul></div> -->
<div id = "display">test</div>

<div id = "topBar">
<table>


<tr>
<td>Riddle Me</td>
<td id = "topBarSpace"><br></td>
<td id = "searchBar" ><input name=<script></script> class = "description_active" id = "search" placeholder = "Search for Riddlers"/></td>
<td>Username</td>
<td>Riddler Rank : n+1th</td>
</tr>
</table>
</div>
<ul class = "nav">
<li><a href="feed.php">Riddles</a></li>
<li><a href="account.php">Your Section</a></li>
<li><a href="riddles.php">Your Recent Riddle</a></li>
<li><a href="news.php">Riddler News</a></li>
</ul>
<script>
var has_focus = false;
$("#display").hide();
$("document").ready(function(){
	$("input").click(function(){
		has_focus = true;
		//console.log("display box");
		if (document.getElementById("search").value.length >= 1){
			$("#display").show();
			console.log("display box");
			has_focus = false;
		}
	})
})
$("input").keypress(function(){
	if (has_focus == true){
		console.log("display box");
		$("#display").show();
		has_focus = false;
	}
	if (document.getElementById("search").value.length == 0){
			$("#display").hide();
			console.log("hide box");
			has_focus = false;
		}
	console.log("update dropdown");
})
$("input").focusout(function(){
	has_focus = false;
	console.log("hide display box");
	$("#display").hide();
})
</script>
</body>
</html>