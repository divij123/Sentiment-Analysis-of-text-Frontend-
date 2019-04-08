<?php

require_once("db.php");
session_start();

if (isset($_POST['sub']))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	$query = "select * from admin where email = '$email' AND password = '$pass' ";
	$result = mysqli_query($conn, $query);
	$check = mysqli_num_rows($result);
	$row  = mysqli_fetch_row($result);
	if($check==0)
	{
		echo "<script>alert ('Incorrect Email id or Password')</script>";
	}
	else
	{
		$_SESSION['logged_in'] = true;
        $_SESSION['Email'] = $email;
        echo "<script>window.open('admindashboard.php', '_self')</script>";
	}
}

?>