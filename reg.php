<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="regstyle.css">
	</head>
	<body>
		<h1 class = 'h1'>Registration page</h1>
		<form method="post" action="Handler/index1.php">
			<input name='mail' type="email" placeholder='E-mail'></br>
			<input name='login' type="text" placeholder="Login" pattern="[A-Za-z]{2,20}"><br/>
			<input name='pass'  type ='text' placeholder="Password" pattern="[0-9]{5,10}"><br/>
			<input name='pass2' type ="password" placeholder="Repeat password" pattern="[0-9]{5,10}"><br/>
			<input type="submit" class ='sub'value="Sign in">
		</form>
		<p class="p">Already have an account?-<a class="p a" href="Handler/avto/index2.php">Log in</a></p>
	</body>
</html>
