<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$ia1=$_POST['ia1'];
$ia2=$_POST['ia2'];
$ia3=$_POST['ia3'];
$ext_agg=$_POST['ext_agg'];

$sql = "UPDATE acad_details SET usn = '$usn',branch='$branch',sem='$sem',ia1='$ia1',ia2='$ia2',ia3='$ia3',ext_agg='$ext-agg' WHERE usn = '$usn';";
mysqli_query($conn,$sql);
header("location: ../UpdateStudent/updatepd.php?update=success&usn=$usn");
