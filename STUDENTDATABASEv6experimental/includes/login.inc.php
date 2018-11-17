<?php
if(isset($_POST['submit'])){
  include_once 'dbh.inc.php';
  $email=$_POST['email'];
  $password=$_POST['pass'];
  ;

  if(empty($email) || empty($password)){

    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else{
    $sql="SELECT * FROM users WHERE email='$email' OR username='$email';";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck > 0){
      $row=mysqli_fetch_assoc($result);
        $passwordcheck = password_verify($password,$row['password']);
        if($passwordcheck==false){
            header("Location: ../index.php?error=wrongpassword");

            exit();
        }
        else{
          session_start();
          $_SESSION['user'] = $row['username'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['username'] = $row['name'];
          $_SESSION['status']="Active";
          header("Location: ../dashboard2.php?login=success");
           exit();

        }

    }
    else{
      header("Location: ../index.php?error=nouser&email=$email");
      exit();
    }
  }
}













else{
  header("Location: ../index.php");
  exit();
}
