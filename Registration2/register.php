<?php?>
<html>
<body>
	<h2>Registration Form</h2>
	
	<form action="rcode.php?flg=1" method="post">
	Name : <input type="text" name="name" /><br/>
	Fname : <input type="text" name="fname" /><br/>
	Gender : <input type="radio" name="gender" value="male"/>Male
	<input type="radio" name="gender" value="female"/>Female<br/>
	Mobile : <input type="number" name="mobile"/><br/>
	Email : <input type="email" name="email"/><br/>
	Password : <input type="text" name="pass"/><br/>
	<input type="submit" value="Submit">
	</form>
</body>
</html>