<!DOCTYPE html>
<html>
<head>
	<title>Login|Signup</title>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">

</head>
<body>
	<div class="header" >
		<img  src="dsatm.png" alt="dsatmlogo">
	</div>
	<fieldset class="fieldset">
		<img src="126486.png" alt="icon">
		<h1>Create Your Account</h1>
		<p>Already have an account? <a id="sign" href="loginscreen.php">Sign In</a></p>


<form method="post" action="signup.php">
	<ul>
	<li>
			<input class="inp" type="text" name="name" placeholder="Name" autocomplete="off">
			<input class="inp" autocomplete="off"  type="text" name="username" placeholder="Username">

	</li>

	<li>
			<input class="inp" autocomplete="off" type="text" name="email" placeholder="E-mail">
			  <input class="inp" type="password" name="password" placeholder="Password">
	</li>

	<li>
		<input class="inp" type="password" name="password-repeat" placeholder="Retype-Password">
		<button type="submit" name="submit" onclick="location.href='dashboard2.php'">Create Account</button>
	</li>





	</ul>




</form>
</fieldset>
</body>
</html>
