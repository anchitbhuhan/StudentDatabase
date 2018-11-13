<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$ia1=$_POST['ia1'];
$ia2=$_POST['ia2'];
$ia3=$_POST['ia3'];
$ext_agg=$_POST['ext_agg'];
$sql="INSERT INTO acad_details(usn,branch,sem,ia1,ia2,ia3,ext_agg) VALUES('$usn','$branch','$sem','$ia1','$ia2','$ia3','$ext_agg');";
mysqli_query($conn,$sql);
header("Location: ../addstudent.php?entry=success");
 ?>
