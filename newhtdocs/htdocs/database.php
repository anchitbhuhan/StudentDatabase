<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <form  action="includes/signup.inc.php" method="POST">
          <?php
            if(isset($_GET['first'])){
              $first=$_GET['first'];
              echo '<input type="text" name="first" placeholder="firstname" value="'.$first.'" >';
              echo "<br>";

            }
            else {
              echo '<input type="text" name="first" placeholder="firstname" >';
              echo "<br>";
            }


            if(isset($_GET['last'])){
              $last=$_GET['last'];
              echo '<input type="text" name="last" placeholder="lastname" value="'.$last.'" >';

            }
            else {
              echo '<input type="text" name="last" placeholder="lastname" >';
            }


           ?>



          <br>
          <input type="text" name="email" placeholder="E-mail" >
          <br>
          <input type="text" name="uid" placeholder="username" >
          <br>
          <input type="password" name="pwd" placeholder="password" >
          <br>
          <button type="submit" name="submit">Sign Up</button>
          <br>

        </form>
        <?php
         $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($fullurl,"fieldempty")==true){
            echo "Please fill all fields";
            exit();
          }
          if(strpos($fullurl,"invalid=firstname")==true){
            echo "Invalid first/last name";
            exit();
          }
          if(strpos($fullurl,"invalid=email")==true){
            echo "Invalid email";
            exit();
          }
          if(strpos($fullurl,"login=success")==true){
            echo "you are signed up";

          }









        ?>
</body>
</html>
