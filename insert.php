<?php
include("config.php");

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$type=$_POST['type'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$sql= "insert into user values('".$id."','".$name."','".$age."','".$type."','".$gender."','".$address."','".$contact."')";
 $res=mysqli_query($conn,$sql);
 if(!$res)
 {
	 echo"failed to insert";
 }
 else
 {
	 echo"insert success";
	 header("location:view.php");
 }
?>