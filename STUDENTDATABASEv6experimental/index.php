<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Student Database|Login</title>
    <link rel="icon" href="images/google+.png">
    <link rel="stylesheet" href="cssfiles/loginstyle.css">

    <meta name="DSATM Student Database" content="This site contains information of students of 5th-A sem of ISE department of DSATM ">
  </head>
  <body>




    <div class="header" >
      <img  src="images/dsatm.png" alt="dsatmlogo">
    </div>
    <fieldset class="fieldset">
      <div class="sign-in">
        Login
      </div>

      <form class="form" action="includes/login.inc.php" method="post">

         <input type="text" autocomplete="off" name="email" placeholder="E-mail/Username"><br><br><br>

        <input type="password"  name="pass" placeholder="Password" ><br><br><br>
        <button  type="submit" name="submit">Login</button>
      </form><br>
      <span >Not a User? <a style='text-decoration:none;'s href='createaccount.php'>Sign Up</a></span>
    </fieldset>

  </body>
</html>
<?php
if(!empty($_GET)){
  if(isset($_GET['error'])){
    if($_GET['error']=='wrongpassword'){

      echo '<script>

      alert("Wrong Password");

  </script>';
    }
    if($_GET['error']=='emptyfields'){
      echo '<script>

      alert("Enter all the fields");

  </script>';
    }

    if($_GET['error']=='nouser'){
      echo '<script>

      alert("User do not exist");

  </script>';
    }
    if($_GET['error']=='loginagain'){
      echo '<script>

      alert("Session Expired! Login Again");

  </script>';
    }

  }

}
 ?>
