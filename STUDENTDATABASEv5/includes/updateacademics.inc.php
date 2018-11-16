<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$cnlab = $row['cnlab'];
$dbmslab = $row['dbmslab'];

$java_ia1 = $row['java_ia1'];
$java_ia2 = $row['java_ia2'];
$java_ia3 = $row['java_ia3'];

$etm_ia1 = $row['etm_ia1'];
$etm_ia2 = $row['etm_ia2'];
$etm_ia3 = $row['etm_ia3'];

$atc_ia1 = $row['atc_ia1'];
$atc_ia2 = $row['atc_ia2'];
$atc_ia3 = $row['atc_ia3'];

$ac_ia1 = $row['ac_ia1'];
$ac_ia2 = $row['ac_ia2'];
$ac_ia3 = $row['ac_ia3'];

$dbms_ia1 = $row['dbms_ia1'];
$dbms_ia2 = $row['dbms_ia2'];
$dbms_ia3 = $row['dbms_ia3'];

$cn_ia1 = $row['cn_ia1'];
$cn_ia2 = $row['cn_ia2'];
$cn_ia3 = $row['cn_ia3'];
$ext_agg=$_POST['ext_agg'];

$sql = "UPDATE acad_details SET usn = '$usn',
branch='$branch',
sem='$sem',

etm_ia1  = '$etm_ia1',
etm_ia2 = '$etm_ia2',
etm_ia3 = '$etm_ia3',

java_ia1  = '$java_ia1',
java_ia2 = '$java_ia2',
java_ia3 = '$java_ia3',

dbms_ia1  = '$dbms_ia1',
dbms_ia2 = '$dbms_ia2',
dbms_ia3 = '$dbms_ia3',

cn_ia1  = '$cn_ia1',
cn_ia2 = '$cn_ia2',
cn_ia3 = '$cn_ia3',

ac_ia1  = '$ac_ia1',
ac_ia2 = '$ac_ia2',
ac_ia3 = '$ac_ia3',

atc_ia1  = '$atc_ia1',
atc_ia2 = '$atc_ia2',
atc_ia3 = '$atc_ia3',

ext_agg='$ext_agg'
WHERE usn = '$usn';";
mysqli_query($conn,$sql);
header("location: ../UpdateStudent/updatepd.php?update=success&usn=$usn");
