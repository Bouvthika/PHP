<?php
include("config.php");
$id=$_GET['id'];
echo $id;
$sqls="select * from user where id='".$id."'";
$res =mysqli_query($conn,$sqls);

if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_assoc($res))
	{
?>
 
 <html>
<head>
</head>
<body>
<form name="form" method="post" action="edit.php">
<p><input type="text" name="id" value="<?php echo $row['id'];?>"></p>
<p><input type="text" name="name" value="<?php echo $row['name'];?>"></p>
<p><input type="text" name="age" value="<?php echo $row['age'];?>"></p>
<p><input type="text" name="type" value="<?php echo $row['type'];?>"></p>
<p><input type="text" name="gender" value="<?php echo $row['gender'];?>"></p>
<p><input type="text" name="address" value="<?php echo $row['address'];?>"></p>
<p><input type="text" name="contact" value="<?php echo $row['contact'];?>"></p>
<p><input type="submit" name="update" id="update" value="update"></p>
</form>
</body>
</html>
	 
<?php	 
 }
}
 ?>