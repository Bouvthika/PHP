<?php
include("config.php");

$view = "select * from user";
 $res = mysqli_query($conn,$view);
 ?>
 
 <table border="2px solod black">
	 <tr>
	 <th>id</th>
	 <th>name</th>
	 <th>age</th>
	 <th>type</th>
	 <th>gender</th>
	 <th>address</th>
	 <th>contact</th>
	 <th>Update</th>
	 <th>Delete</th>
	 </tr>	 
 <?php
 while($row = mysqli_fetch_assoc($res))
 {
?>

<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td> 
<td><?php echo $row['age'];?></td>
<td><?php echo $row['type'];?></td>
<td><?php echo $row['gender'];?></td> 
<td><?php echo $row['address'];?></td>
<td><?php echo $row['contact'];?></td>
<td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php	 
 }
 ?>
 </table>
 <a href="hospital.php" style="padding-left:200px"><button style="font-family:italic">Home</button></a>
 