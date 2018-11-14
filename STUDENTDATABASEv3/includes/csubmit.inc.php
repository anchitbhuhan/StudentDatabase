<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];

$sub_code1 = $_POST['sub_code1'];
$sub_name1 = $_POST['sub_name1'];
$faculty_name1 = $_POST['faculty_name1'];

$sub_code2 = $_POST['sub_code2'];
$sub_name2 = $_POST['sub_name2'];
$faculty_name2 = $_POST['faculty_name2'];

$sub_code3 = $_POST['sub_code3'];
$sub_name3 = $_POST['sub_name3'];
$faculty_name3 = $_POST['faculty_name3'];

$sub_code4 = $_POST['sub_code4'];
$sub_name4 = $_POST['sub_name4'];
$faculty_name4 = $_POST['faculty_name4'];

$sub_code5 = $_POST['sub_code5'];
$sub_name5 = $_POST['sub_name5'];
$faculty_name5 = $_POST['faculty_name6'];

$sub_code6 = $_POST['sub_code6'];
$sub_name6 = $_POST['sub_name6'];
$faculty_name6 = $_POST['faculty_name6'];

$sub_code7 = $_POST['sub_code7'];
$sub_name7 = $_POST['sub_name7'];
$faculty_name7 = $_POST['faculty_name7'];

$sub_code8 = $_POST['sub_code8'];
$sub_name8 = $_POST['sub_name8'];
$faculty_name8 = $_POST['faculty_name8'];

$sql1="SELECT usn from student where usn='$usn';";
$result=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
  header("Location:../addstudent.php?usn=duplicate");
}
else
{
$sql2="INSERT INTO course(usn,
  sub_code1,sub_name1,faculty_name1,
  sub_code2,sub_name2,faculty_name2,
  sub_code3,sub_name3,faculty_name3,
  sub_code4,sub_name4,faculty_name4,
  sub_code5,sub_name5,faculty_name5,
  sub_code6,sub_name6,faculty_name6,
  sub_code7,sub_name7,faculty_name7,
  sub_code8,sub_name8,faculty_name8)

  VALUES ('$usn',
  '$sub_code1','$sub_name1','$faculty_name1',
  '$sub_code2','$sub_name2','$faculty_name2',
  '$sub_code3','$sub_name3','$faculty_name3',
  '$sub_code4','$sub_name4','$faculty_name4',
  '$sub_code5','$sub_name5','$faculty_name5',
  '$sub_code6','$sub_name6','$faculty_name6',
  '$sub_code7','$sub_name7','$faculty_name7',
  '$sub_code8','$sub_name8','$faculty_name8'
  );";

mysqli_query($conn,$sql2);
header("Location: ../addstudent.php?entry=success");
}
 ?>
