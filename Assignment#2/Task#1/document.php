
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<h1>This Documented is Protected</h1>
<p>You can see it if you are logged in</p>
<?php
session_start();
if($_SESSION["Login"]!="Yes"){
	header("LOcation:form.php");
}


?>
</body>
</html>