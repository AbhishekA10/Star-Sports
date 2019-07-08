<?php
session_start();
include("sportsconnect.php");

if(isset($_POST['ok']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql=mysqli_query($con,"select * from admin where username='$username' and password='$password'");
	$result=mysqli_num_rows($sql);
	if($result)
	{
		$_SESSION['admin']=$username;
		echo "<script>alert('Login Successful')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
	else
	{
		echo "<script>alert('Login Unsuccessful')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}
}
?>
<html>
<head>
<style>
.d{
height:350px;
width:350px;
background-color:orange;
}
</style>
</head>
<center><body style="background-color:powderblue;">
<br/>
<br/>
<br/>
<br/>
<h1><b>ADMIN LOGIN</b></h1>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid d ">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<form method="post" name="f" action="">
<div class="form-group">
<label><b>Username:</b></label>
<input type="text" class="form-control" name="username" required>
</div>
<br/>
<div class="form-group">
<label><b>Password:</b></label>
&nbsp;
<input type="password" class="form-control" name="password" required>
</div>
<br/>
<div class="form-group">
<input type="submit" class="btn btn-info" value="Submit" name="ok">
</div>
</form>
</div>
</body>
</center>
</html>