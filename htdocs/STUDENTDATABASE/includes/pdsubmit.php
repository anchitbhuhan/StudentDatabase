<?php

include_once 'dbh.inc.php';

$usn  = $_POST['usn'];
$name  = $_POST['name'];
$mobile  = $_POST['mobile'];
$dob  = $_POST['dob'];
$hostelite = $_POST['hostelite'];
$gender  = $_POST['gender'];
$address  = $_POST['address'];

$image = $_FILES['image']['name'];
$target = "uploads/".basename($_FILES['image']['name']);
$sql = "INSERT INTO student (usn,name,mobile,dob,hostelite,gender,address,st_image) VALUES ('$usn','$name','$mobile','$dob','$hostelite','$gender','$address','$image');";
mysqli_query($conn,$sql);
move_uploaded_file($_FILES['tmp_name']['name'],$target);

header("location: ../onclickaddstudent.php?entry=success");






 ?>
