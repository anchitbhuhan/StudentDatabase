<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$project=$_POST['project'];
$internships=$_POST['internships'];
$certifications=$_POST['certifications'];
$paper_present=$_POST['paper_present'];
$sql="INSERT INTO achievements VALUES ('$usn','$project','$internships','$certifications','$paper_present');";
mysqli_query($conn,$sql);
header("Location: ../achdetails.php?entry=success");
 ?>
