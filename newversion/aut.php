<?php
session_start();
require('connect.php');

if (isset($_POST['username'])  and  isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result); }

	if ($count == 1) {
		$_SESSION['username']=$username;
	}else {
		$fmsg = "Ошибка";
	}


if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	echo "Hello " . $username . " ";
	echo "Вы вошли ";
	echo "<a href='logout.php' class='btn btn-lg btn-primary' > Logout </a>";
}

?>
<meta charset="UTF-8">


if (isset($_POST['username'])  and  isset($_POST['password'])){
	$username=$_POST['username'];
	$password=($_POST['password']);

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result); }

	if ($count == 1) {
		$_SESSION['username']=$username;
	}else {
		$fmsg = "Ошибка";
	}


if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	echo "Hello " . $username . " ";
	echo "Вы вошли ";
	echo "<a href='logout.php' class='btn btn-lg btn-primary' > Logout </a>";
}
