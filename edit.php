<?php
include("sportsconnect.php");

if(isset($_GET['e']))
{
	$id=$_GET['e'];
	$sql=mysqli_query($con,"select * from contact where id='$id'");
	$rows=mysqli_fetch_array($sql);
}
?>

<html>
<body>
<form method="post" action="" name="f1" onsubmit="return validate()" >
<div class="form-group">
<label>Name:</label>
&nbsp;
&nbsp;
<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $rows['name'];?>">
<span id="namelocation"></span>
</div>
<br/>
<div class="form-group">
<label>Email:</label>
&nbsp;
&nbsp;
<input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo $rows['email'];?>">
<span id="emaillocation"></span>
</div>
<br/>
<div class="form-group">
<label>Mobile:</label>
&nbsp;
<input type="tel" class="form-control" placeholder="Mobile Number" name="mobile" value="<?php echo $rows['mobile'];?>">
<span id="mobilelocation"></span>
</div>
<br/>
<div class="form-group">
<label>Message:</label>
<textarea class="form-control" placeholder="Message" name="message"><?php echo $rows['message'];?>"</textarea> 
</div>
<br/>
<div class="form-group">
<input type="submit"  class="btn btn-info" value="Submit" name="ok">
</div>
</form>
</body>
</html>

<?php
include("sportsconnect.php");

if(isset($_POST['ok']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	$sql=mysqli_query($con,"update contact set name='$name',email='$email',mobile='$mobile',message='$message' where id='$id'");
	if($sql)
	{
		echo "<script>alert('Update Successful')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
	else
	{
		echo "<script>alert('Update Unsuccessful')</script>";
		echo "<script>window.location.href='edit.php'</script>";
	}
}
?>