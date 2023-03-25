<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
</head>
<body>
<?php
session_Start();
if($_POST["Username"]=="Muzamil" && $_POST["Password"]=="0108"){
	$_session["Login"]="YES";
	echo "<h1>You are now logged Correctly in </h1>";
	echo "<p><a href='document.php'>Link to protected file</a></p>";
}
else{
	$_session["Login"]="No";
	echo "<h1>You are not logged Correctly in </h1>";
	echo "<p><a href='document.php'>Link to protected file</a></p>";

}
?>
</body>
</html>		