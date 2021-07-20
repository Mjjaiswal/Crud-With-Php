<?php
session_start();
$flg=$_REQUEST['flg'];
//echo $flg;
include("connect.php");
switch($flg)
{
	case 1:
	$name=$_POST['name'];
	//echo $name;
	$fname=$_POST['fname'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	
	$query="insert into tblregister2(name,fname,gender,mobile,email,password,date) values('$name','$fname','$gender','$mobile','$email','$password',curdate())";
	mysql_query($query);
	echo "<script>alert('ERROR : Registration Successfull');window.location.href='login.php';</script>";
	break;
	
	case 2:
	$email=$_POST['eml'];
	$password=$_POST['pass'];
	$query="select * from tblregister2 where email='$email' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
	$_SESSION['user']=$email;
	header("Location:profile.php");
	}
	else
	{
		header("Location:login.php");
	}
	break;

	case 3:

	session_start();
	session_destroy();
	header("Location:login.php");
	break;

	case 4:
	$id=$_REQUEST['id'];
	$query="delete from tblregister2 where id='$id'";
	mysql_query($query);
	header("Location:Show.php");
	break;

	case 5:
	$id=$_POST['id'];
	//echo $id;
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mob'];
	//echo $name,"$fname",$id;
	$query="update tblregister2 set name='$name',fname='$fname',gender='$gender',mobile='$mobile' where id='$id'";
	mysql_query($query);

	header("Location:Show.php");
	break;

	case 7:

	$op=$_POST['op'];
	//echo "$op";
	$np=$_POST['np'];
	//echo "$np";
	$cnp=$_POST['cnp'];
	//echo $cnp;
	//echo <br/>;
	$email=$_SESSION['user'];
	$query="select password from tblregister2 where email='$email'";
	$res=mysql_query($query);
	if($pp=mysql_fetch_array($res,MYSQL_BOTH))
	{
		if($pp['0']==$op)
		{
			if($op==$np)
			{
				header("Location:change.php?msg=2");
			}
			else
			{
				if($np==$cnp)
				{
					$query2="update tblregister2 set password='$np' where email='$email'";
					mysql_query($query2);
					header("Location:login.php?lg=1");
					session_destroy();
				}
				else
				{
					header("Location:change.php?msg=3");
				}
			}
		}
		else
		{
			header("Location:change.php?msg=1");
		}
	}
	else
	{
		header("Location:change.php?msg=4
		");
	}
	break;
		
	}
	?>