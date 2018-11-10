<?php
session_start();



 ?>
 <fieldset>
      <span>Sign in</span><br><br><br>
      <form action="login.inc.php" method="post">

        <input type="text" autocomplete="off" name="email" placeholder="E-mail/Username"><br><br><br>

        <input type="password"  name="pass" placeholder="Password" ><br><br><br>
        Remember me<input type="checkbox" name="remember"><br>
        <button class="button" type="submit" name="submit">Sign In</button>
      </form><br>
      <span class="notuser">Not a User? <a style='text-decoration:none;'s href='createaccount.php'>Sign Up</a></span>
    </fieldset>