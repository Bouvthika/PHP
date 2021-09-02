<?php
include("config.php");
$id=$_GET['id'];
echo $id;

$sqls="delete from user where id='$id'";
$res=mysqli_query($conn,$sqls);

 IF($res)
{
?>
<html>
<head>
</head>
<body>
<form name="form" method="post" action="view.php">
<p><input type="text" name="id" value="<?php echo $id;?>"></p>
<p><input type="text" name="name" value="<?php echo $name;?>"></p>
<p><input type="text" name="age" value="<?php echo $age;?>"></p>
<p><input type="text" name="type" value="<?php echo $type;?>"></p>
<p><input type="text" name="gender" value="<?php echo $gender;?>"></p>
<p><input type="text" name="address" value="<?php echo $address;?>"></p>
<p><input type="text" name="contact" value="<?php echo $contact;?>"></p>
<input type="submit" name="submit" value="delete">
</form>
</body>
</html>
	<?php
	echo "delete is finished";
}
	?>
