<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$sub_code=$_POST['sub_code'];
$sub_name=$_POST['sub_name'];
$faculty_name=$_POST['faculty_name'];
$sql="INSERT INTO course VALUES ('$usn','$sub_code','$sub_name','$faculty_name');";
mysqli_query($conn,$sql);
header("Location: ../coursedetails.php?entry=success");
 ?>
