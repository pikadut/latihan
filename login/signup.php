<?php 

require_once 'app/init.php';
if(!empty($_POST)){
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$validator = new validator($database, $errorHandler);
	$validation = $validator->check($_POST,[
		'email' => [
			'required' => true,
			'maxlength' => 200,
			'unique' => 'user',
			'email' => true
		],
		'username' => [
			'required' => true,
			'minlength' => 3,
			'maxlength' => 20,
			'unique' => 'user'
		],
		'password' => [
			'required' => true,
			'minlength' => 6
		]
	]);

	if($validation->fails()){
		echo '<pre>', print_r($validation->errors()->all(), true), '</pre>';
	}
	else{
		$created = $auth->create([
		'email' => $email,
		'username' => $username,
		'password' => $password
	]);

	if($created){
		header('Location: index.php');
	}
	}


}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Sign up</legend>
				<label>Email 
				<input type="text" name="email">
				</label>
				<label>Username 
				<input type="text" name="username">
				</label>
				<label>Password 
				<input type="password" name="password">
				</label>
		</fieldset>
		<input type="submit" value="Sign up" name="signup">
	</form>

</body>
</html>