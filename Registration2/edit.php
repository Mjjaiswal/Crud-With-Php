<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="select * from tblregister2 where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head></head>
<body>
<h1>Updation Form</h1>
<form action="rcode.php?flg=5" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
Enter Your Name :
<input type="text" name="name" value="<?php echo $row['name']?>"/>
<br/>
Enter Your F'name :
<input typr="text" name="fname" value="<?php echo $row['fname']?>"/>
<br/>
Enter Mobile No.:
<input type="number" name="mob" value="<?php echo $row['mobile']?>"/>
<br/>
Select Gender:
<input type="radio" name="gender" value="Male"
<?php if($row['gender']=='Male')
{
?>
checked
<?php
}
?>
/>Male
<input type="radio" name="gender" value="Female"
<?php if($row['gender']=='Female')
{
?>
checked
<?php
}
?>
/>Female
<br/>
<input type="submit" value="update"/>
</form>
<?php
}
?>
</body>
</html>