<?php
session_start();
include("sportsconnect.php");
$getname=$_SESSION['admin'];
$sql=mysqli_query($con,"select * from admin where username='$getname'");
$rows=mysqli_fetch_array($sql);
?>
<html>
<head>
<style>
.vertical-menu {
  text-align:center;
}
</style>
<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<br/>
<center>Welcome <?php echo $rows['username']; ?> ! </center>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-2" style="background-color:lightgray;">
<div class="vertical-menu">
<br/>
<br/>
<br/>
<font size="4"><a href="admin.php">User Query</a></font>
  <br/>
  <br/>
  <font size="4"><a href="logout.php">Logout</a></font>
    <br/>
	<br/>
	</div>
	<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/>
	</div>
<div class="col-md-10">
<div class="table responsive">
<table class="table table-responsive">
<thead>
<tr style="border:1px solid #000;">
<th style="border:1px solid #000;">Name</th>
<th style="border:1px solid #000;">E-mail</th>
<th style="border:1px solid #000;">Mobile Number</th>
<th style="border:1px solid #000;">Message</th>
<th style="border:1px solid #000;">Action</th>
</tr>
</thead>
<?php
$con=mysqli_connect("localhost","root","","sports");

$sql=mysqli_query($con,"select * from contact");
while($rows=mysqli_fetch_array($sql))
{
	?>
	<tbody>
	<tr style="border:1px solid #000;">
	<td style="border:1px solid #000;"><?php echo $rows['name']; ?></td>
	<td style="border:1px solid #000;"><?php echo $rows['email']; ?></td>
	<td style="border:1px solid #000;"><?php echo $rows['mobile']; ?></td>
	<td style="border:1px solid #000;"><?php echo $rows['message']; ?></td>
	<td style="border:1px solid #000;">
	<a href="edit.php?e=<?php echo $rows['id']; ?>" class="btn btn-success">Update</a>
	<a href="delete.php?d=<?php echo $rows['id']; ?>" class="btn btn-danger">Delete</a>
	</td>
	</tr>
	</tbody>
	<?php
}
?>

</body>
</html>