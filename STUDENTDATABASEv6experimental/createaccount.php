<!DOCTYPE html>
<html>
<head>
	<title>Student Database|Signup</title>
	  <link rel="icon" href="images/google+.png">	
<link rel="stylesheet" type="text/css" href="cssfiles/createaccount.css">

</head>
<body>
	<div class="header" >
		<img  src="images/dsatm.png" alt="dsatmlogo">
	</div>
	<fieldset class="fieldset">
		<img src="images/126486.png" alt="icon">
		<h1>Create Your Account</h1>
		<p>Already have an account? <a id="sign" href="index.php">Sign In</a></p>


<form method="post" action="includes/signup.inc.php">
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

<?php
if(!empty($_GET)){
  if(isset($_GET['error'])){
    if($_GET['error']=='emptyfields'){

      echo '<script>

      alert("Fill all fields");

  </script>';
    }
    if($_GET['error']=='invalidemail'){
      echo '<script>

      alert("Invalid email");

  </script>';
    }
		if($_GET['error']=='invalidname'){
			echo '<script>

			alert("Invalid Name");

	</script>';
		}

    if($_GET['error']=='invaliusername'){
      echo '<script>

      alert("Invalid Username");

  </script>';
    }

		if($_GET['error']=='errorpass'){
			echo '<script>

			alert("Passwords do not match");

	</script>';
		}
		if($_GET['error']=='usertaken'){
			echo '<script>

			alert("Username Taken");

	</script>';
		}

  }

}
 ?>
