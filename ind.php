<?php
include("config.php");
?>
<html>
<head>
<style>
body{
	font-size:25px;
}
</style>
</head>
<body bgcolor="#ffe6e6">
<form name="form" method="post" action="insert.php">
<center>
<legend>ADMISSION FORM</legend>
<p>Id:<input type="text" name="id"value=""required></p>
<p>Name:<input type="text" name="name"value=""required></p>
<p>Age:<input type="text" name="age"value=""required></p>
<p>Type:<input type="text" name="type"value=""required></p>
<p>Gender:<input type="text" name="gender"value=""required></p>
<p>Address:<input type="text" name="address"value=""required></p>
<p>Contact:<input type="text" name="contact"value=""required></p>
<p><input type="submit" name="submit" value="submit"></p>
</center>
</form>
</body>
</html>