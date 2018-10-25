<!DOCTYPE html>
<html>
<head>
	<title>Login|Signup</title>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
</head>
<body>
	<fieldset>
	<h1>Create Your Account</h1>
	<p>Already have an account? <a id="sign" href="#">Sign In</a></p>
<form method="post" action="signup.php">
	<input class="inp" type="text" name="name" placeholder="Name" autocomplete="off"><br><br>
   <input class="inp" autocomplete="off"  type="text" name="username" placeholder="Username"><br><br>
    <input class="inp" type="text" name="email" placeholder="E-mail"><br><br>
    <input class="inp" type="password" name="password" placeholder="Password"><br><br>
		<input class="inp" type="password" name="password-repeat" placeholder="Retype-Password"><br><br>
	 <button type="submit" name="submit" onclick="location.href='dsatm.php'">Create Account</button>
</form>
</fieldset>
</body>
</html>
