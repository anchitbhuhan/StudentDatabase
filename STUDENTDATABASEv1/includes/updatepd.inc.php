<?php
include_once '../includes/dbh.inc.php';

$usn  = $_POST['usn'];
$name  = $_POST['name'];
$mobile  = $_POST['mobile'];
$dob  = $_POST['dob'];
$hostelite = $_POST['hostelite'];
$gender  = $_POST['gender'];
$address  = $_POST['address'];

$sql = "UPDATE student SET usn = '$usn',name = '$name', mobile = '$mobile', dob = '$dob', hostelite = '$hostelite',gender = '$gender',address = '$address'  WHERE usn='$usn';";
mysqli_query($conn,$sql);
header("location: ../UpdateStudent/updatepd.php?update=success&usn=$usn");
 ?>
