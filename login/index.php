
<?php 

require_once 'app/init.php';
$auth->build();
?>

<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
</head>
<body>
	<?php if($auth->check()):?>
	<p>
		You are sign in. <a href="signout.php">Sign out</a>
	</p>
	<?php else:?>
	<p>
		You are not sign in. <a href="signin.php">Sign in</a> or <a href="signup.php">Sign up</a>
	</p>
	<?php endif;?>
</body>
</html>