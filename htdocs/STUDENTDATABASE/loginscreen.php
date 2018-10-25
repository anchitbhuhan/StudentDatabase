<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Student Database</title>
    <link rel="icon" href="images/google+.png">
    <link rel="stylesheet" href="loginstyle.css">

    <meta name="DSATM Student Database" content="This site contains information of students of 5th-A sem of ISE department of DSATM ">
  </head>
  <body>
    <header style="margin-left:20px;">
      <img src="dsatm.png" alt="dsatmlogo" style="background-color:#003366;margin-left:5px;">
    </header>
    <fieldset>
      <span>Sign in</span><br><br><br>
      <form action="includes/login.inc.php" method="post">

        <input type="text" autocomplete="off" name="email" placeholder="E-mail/Username"><br><br><br>

        <input type="password"  name="pass" placeholder="Password" ><br><br><br>
        <button class="button" type="submit" name="submit">Sign In</button>
      </form><br>
      <span class="notuser">Not a User? <a style='text-decoration:none;'s href='createaccount.php'>Sign Up</a></span>
    </fieldset>

  </body>
</html>
