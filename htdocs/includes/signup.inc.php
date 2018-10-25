<?php
if(isset($_POST['submit'])){

include_once 'backdata.php';



$first=mysqli_real_escape_string($conn,$_POST['first']);
$last=mysqli_real_escape_string($conn,$_POST['last']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);


if (empty($first) || empty($last) || empty($email) || empty($uid) ||empty($pwd) ){
  header("Location: ../database.php?fieldempty");

}
else{
                  if (!preg_match("/^[a-zA-Z ]*$/",$first) || !preg_match("/^[a-zA-Z ]*$/",$last)) {
                    header("Location: ../database.php?invalid=firstname");

                    exit();


          }




          elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              header("Location: ../database.php?invalid=email&first=$first&last=$last");
              exit();
          }


          else{

          $sql="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$pwd');";

          mysqli_query($conn,$sql);//mysql_query() function returns a mysqli_result object


          header("Location: ../database.php?login=success");

              }
}
}
else{

header("Location: ../database.php?loginerror");


}
