<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");

$query="select * from tblregister2";
$res=mysql_query($query);
?>
<html>
<head></head>
<body>
<h1 style="text-align:center;">All Records</h1>
<table align="center" border="1" cellspacing="0">
<tr>
<th>S.No</th>
<th>Name</th>
<th>F'name</th>
<th>gender</th>
<th>Mobile</th>
<th>Password</th>
<th>Email</th>
<th>Edit</th>
<th>delete</th>
</tr>
<?php 
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['email'];?></td>
<td><a href="edit.php?id=<?php echo $row['0'];?>">Edit</a></td>
<td><a href="rCode.php?flg=4&id=<?php echo $row['0'];?>">delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>