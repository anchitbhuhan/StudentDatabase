<?php

session_start();

if(isset($_POST['submit'])){
  include 'dbh.inc.php';

  $uid=mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);


  //error handlers
  if(empty($uid) || empty($pwd)){
    header("Location: ../signup.php?signup=empty");
    exit();
  }else{

    $sql="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid';";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck<1){
      header("Location: ../signup.php?signup=notexist");
      exit();
    }
    else{
      if($row = mysqli_fetch_assoc($result)){
        $hashedpwdcheck = password_verify($pwd,$row['user_pwd']);
        if($hashedpwdcheck==false){
          header("Location: ../signup.php?signup=passerror");
        }
        else{
          if($hashedpwdcheck==true){
                $_SESSION['u_id']= $row['user_id'];
                $_SESSION['u_first']= $row['user_id'];
                $_SESSION['u_last']= $row['user_last'];
                $_SESSION['u_email']= $row['user_email'];
                header("Location: ../dashboard.php?signup=success");


              }

        }
      }
    }



  }




}











else{
  header("Location: ../signup.php?ilogin=error");
  exit();
}
