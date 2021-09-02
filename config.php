<?php  
$servername="localhost";
$username="root";
$password="";
$database="aarnan";
$conn=new mysqli($servername,$username,$password,$database);
if(!$conn)
{
	die("connection failed".mysqli_error($conn));
}
else
{
	echo"connection success";
}
?>