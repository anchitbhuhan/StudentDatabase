<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$project=$_POST['project'];
$internships=$_POST['internships'];
$certifications=$_POST['certifications'];
$paper_present=$_POST['paper_present'];
$sql1="SELECT usn from achievements where usn='$usn';";
$result=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
	header("Location:../addstudent.php?usn=duplicate");
}
else{
$sql2="INSERT INTO achievements(usn,projects,internships,certifications,paper_presntion) VALUES ('$usn','$project','$internships','$certifications','$paper_present');";
mysqli_query($conn,$sql2);
header("Location: ../addstudent.php?entry=success");
}
 ?>
