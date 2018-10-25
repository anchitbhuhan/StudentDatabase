<?php


if(isset($_POST['submit'])){
include_once 'dbh.inc.php';

$name=$_POST['name'];
$usn= $_POST['usn'];
$branch= $_POST['branch'];
$gender=$_POST['gender'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];
$age = $_POST['age'];
$city = $_POST['city'];



}
if(empty($name) || empty($usn) || empty($branch) || empty($gender) || empty($dob) || empty($mob) || empty($age) || empty($city)){

  header ("Location: ../onclick.php?signup=empty");
  exit();
}else{
  if (!preg_match("/^[a-zA-Z ]*$/",$name) || !preg_match("/^[a-zA-Z ]*$/",$name))
  {
    header("Location: ../onclick.php?signup=invalid");
    exit();

  }
  else{
    $sql2="INSERT INTO student (name,usn,branch,gender,dob,age,mobile,city) VALUES ('$name','$usn','$branch','$gender','$dob','$age','$mobile','$city');";
    mysqli_query($conn,$sql2);
    header("Location: ../onclick.php?signup=success");

  }

}



?>
