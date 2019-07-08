<?php
include("sportsconnect.php");

if(isset($_REQUEST['d']))
{
	$id=$_REQUEST['d'];
	$sql=mysqli_query($con,"delete from contact where id='$id'");
	if($sql)
	{
		echo "<script>alert('Deletion Successful')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
	else
	{
		echo "<script>alert('Deletion Unsuccessful')</script>";
		echo "<script>window.location.href='admin.php'</script>";
	}
}
?>