<?php
include("config.php");
$id="";
if(isset($_POST['id'])){
$id=$_POST['id'];}
$name="";
if(isset($_POST['name']))
{
$name=$_POST['name'];}
$age="";
if(isset($_POST['age'])){
$age=$_POST['age'];}
$type="";
if(isset($_POST['type'])){
$type=$_POST['type'];}
$gender="";
if(isset($_POST['gender'])){
$gender=$_POST['gender'];}
$address="";
if(isset($_POST['address'])){
$address=$_POST['address'];}
$contact="";
if(isset($_POST['contact'])){
$contact=$_POST['contact'];}
$sqls="update user set name='$name',age='$age',address='$address'where id='$id'";
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
<input type="submit" name="submit" value="update">
</form>
</body>
</html>
	<?php
	echo "update is finished";
}
	?>


