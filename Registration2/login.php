<?php
$lg=$_REQUEST['lg'];
if($lg==1)
{
	echo "Password Changed Successfully";
}
?>
<html>
<head></head>
<body>
<h1>Login Form</h1>
<form action="rcode.php?flg=2" method="post">
Enter Email id:
<input type="email" name="eml"/>
<br/>
Enter Password:
<input type="password" name="pass"/>
<input type="submit" value="login"/>
</form>
</body>
</html>