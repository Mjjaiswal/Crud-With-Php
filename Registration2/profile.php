<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
?>
<html>
<head></head>
<body>
<h1 style="text-align:center;">Welcome to The Profile</h1>
<br/>
<?php echo $_SESSION['user'];?><br/>
<a href="Show.php">Show All Records</a>
<br/>
<a href="rcode.php?flg=3">Logout</a>
<br/>
<a href="change.php">Change Password</a>
</body>
</html>