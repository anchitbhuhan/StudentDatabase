<?php

include_once 'dbh.inc.php';

$usn  = $_POST['usn'];
$name  = $_POST['name'];
$mobile  = $_POST['mobile'];
$dob  = $_POST['dob'];
$hostelite = $_POST['hostelite'];
$gender  = $_POST['gender'];
$address  = $_POST['address'];


$filename = addslashes($_FILES['image']['name']);
$tmpname = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$filetype = addslashes($_FILES['image']['type']);

$array = array('jpg','png','jpeg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!empty($filename)){
  if(in_array($ext,$array)){

    $sql = "INSERT INTO student (usn,name,mobile,dob,hostelite,gender,address,image) VALUES ('$usn','$name','$mobile','$dob','$hostelite','$gender','$address','$tmpname');";
    mysqli_query($conn,$sql);


    header("location: ../onclickaddstudent.php?entry=success");


  }
  else{
    header("location: ../onclickaddstudent.php?error=format");


  }
}









 ?>
