<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require('connect.php');


if (isset($_POST['username'])  &&  isset($_POST['password']) &&  isset($_POST['email'])){
	$username=$_POST['username'];
	$password=md5(($_POST['password']));
	$email=$_POST['email'];
$query = "SELECT * FROM users WHERE email='$email' and username='$username'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result); 

	if ($count == 1) {
		$fmsg = "Введеный email или login уже зарегистрирован, пожалуйста введите другой";
	}else {
		$smsg = "Вы успешно зарегестрированы";
		$query = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
$result=mysqli_query($connection,$query); }

	







}

?>

	<div class="container">	
		<form action="" class="formsign-in" method="POST">
			<h2>Registration</h2>

			<?php if(isset($smsg)){?><div class="alert alert-succes" role="alert"> <?php echo $smsg; ?> </div><?php }?>
			<?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php }?>
				<input type="text" name="username" class="form-control" placeholder="Username" requiered>
				<input type="email" name="email" class="form-control" placeholder="email" required>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Registration</button>
				<a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
	</div>
</body>
</html>