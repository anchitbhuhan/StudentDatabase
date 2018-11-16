<?php

if(isset($_POST['submit'])){
include_once 'dbh.inc.php';

$name = $_POST['name'];
$uname = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$pwdrep = $_POST['password-repeat'];


if(empty($name) || empty($uname) || empty($email) || empty($pwd) || empty($pwdrep) ){

  header("Location: ../createaccount.php?error=emptyfields&name=".$name."&uname=".$uname."&email=".$email);
  exit();

}
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$uname) && !preg_match("/^[a-zA-Z]*$/",$name)) {
  header("Location: ../createaccount.php?error=invalid_mail_uidname");
  exit();
}
else if(!preg_match("/^[a-zA-Z\s]*$/",$name)){


  header("Location: ../createaccount.php?error=invalidname&uname=".$uname."&email=".$email);
  exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

  header("Location: ../createaccount.php?error=invalidemail&name=".$name."&uname=".$uname);
  exit();
}
else if(!preg_match("/^[a-zA-Z-0-9]*$/",$uname)){

  header("Location: ../createaccount.php?error=invaliusername&name=".$name."&email=".$email);
  exit();
}

elseif ($pwd !== $pwdrep) {

  header("Location: ../createaccount.php?error=errorpass&name=".$name."&uname=".$uname."&email=".$email);
  exit();

}
else{
$sql = "SELECT username from users WHERE username='$uname'";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {

      header("Location: ../createaccount.php?error=usertaken");
      exit();
      }
      else{
        $hashPwd = password_hash($pwd,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name,username,email,password) VALUES('$name','$uname','$email','$hashPwd');";
        mysqli_query($conn,$sql);
        session_start();
        $_SESSION['user'] = $uname;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header("Location: ../dashboard2.php?signup=success");
        exit();


      }


}
mysqli_close($conn);




}
else{

  header("Location: ../createaccount.php");
  exit();
}













 ?>
