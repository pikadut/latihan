<?php 

require_once 'app/init.php';

if(!empty($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$signin = $auth->signin([
		'username' => $username,
		'password' => $password
	]);

	if($signin){
		header('Location: index.php');
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Sign in</legend>
				<label>Username 
				<input type="text" name="username">
				</label>
				<label>Password 
				<input type="password" name="password">
				</label>
		</fieldset>
		<input type="submit" value="Sign in" name="signin">
	</form>

</body>
</html>