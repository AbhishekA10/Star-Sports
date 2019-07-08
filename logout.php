<?php
session_start();
unset($_SESSION['admin']);
echo "<script>alert('Logout Successful')</script>";
echo "<script>window.location.href='login.php'</script>";
?>