<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$project=$_POST['projects'];
$internships=$_POST['internships'];
$certifications=$_POST['certifications'];
$paper_present=$_POST['paper_present'];

$sql = "UPDATE achievements SET usn='$usn',projects='$project',internships='$internships',certifications='$certifications',
paper_presntion='$paper_present' WHERE usn = '$usn';";
mysqli_query($conn,$sql);
header("location: ../UpdateStudent/updatepd.php?update=success&usn=$usn");
