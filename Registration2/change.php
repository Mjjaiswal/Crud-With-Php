<?php
session_start();
if($_SESSION['user']=="")
{    
	header("Location:login.php");
}

$msg=$_REQUEST['msg'];
if($msg==1)
{
	echo "Old password not exist";
}
if($msg==4)
{
	echo "Invalid password";
}
if($msg==2)
{
	echo "Old password same with new password";
}
if($msg==3)
{
	echo "Old password not matched with new password";
}
?>
<html>
<head></head>
<body>
<h1>Change password</h1>
<form action="rCode.php?flg=7" method="post">
Enter Old password:
<input type="password" name="op"/>
<br/>
Enter new password:
<input type="password" name="np"/>
<br/>
Enter confirm new password:
<input type="password" name="cnp"/>
<br/>
<input type="submit" value="change"/>
</form>
</body>
</html>