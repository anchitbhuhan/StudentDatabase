<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$project=$_POST['project'];
$internships=$_POST['internships'];
$certifications=$_POST['certifications'];
$paper_present=$_POST['paper_present'];
$sql="INSERT INTO achievements(usn,projects,internships,certifications,paper_presntion) VALUES ('$usn','$project','$internships','$certifications','$paper_present');";
mysqli_query($conn,$sql);
header("Location: ../addstudent.php?entry=success");
 ?>
