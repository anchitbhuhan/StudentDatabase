<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];

$cnlab = $_POST['cnlab'];
$dbmslab = $_POST['dbmslab'];

$java_ia1 = $_POST['java_ia1'];
$java_ia2 = $_POST['java_ia2'];
$java_ia3 = $_POST['java_ia3'];

$etm_ia1 = $_POST['etm_ia1'];
$etm_ia2 = $_POST['etm_ia2'];
$etm_ia3 = $_POST['etm_ia3'];

$atc_ia1 = $_POST['atc_ia1'];
$atc_ia2 = $_POST['atc_ia2'];
$atc_ia3 = $_POST['atc_ia3'];

$ac_ia1 = $_POST['ac_ia1'];
$ac_ia2 = $_POST['ac_ia2'];
$ac_ia3 = $_POST['ac_ia3'];

$dbms_ia1 = $_POST['dbms_ia1'];
$dbms_ia2 = $_POST['dbms_ia2'];
$dbms_ia3 = $_POST['dbms_ia3'];

$cn_ia1 = $_POST['cn_ia1'];
$cn_ia2 = $_POST['cn_ia2'];
$cn_ia3 = $_POST['cn_ia3'];

$ext_agg=$_POST['ext_agg'];

$sql1="SELECT usn from acad_details where usn='$usn';";
$result=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
  header("Location:../addstudent.php?usn=duplicate");
}else{

$sql2="INSERT INTO acad_details(usn,branch,sem,
	etm_ia1,etm_ia2,etm_ia3,
	cn_ia1,cn_ia2,cn_ia3,
	dbms_ia1,dbms_ia2,dbms_ia3,
	atc_ia1,atc_ia2,atc_ia3,
	java_ia1,java_ia2,java_ia3,
	ac_ia1,ac_ia2,ac_ia3
	,cnlab,dbmslab,ext_agg) VALUES('$usn','$branch','$sem',
		'$etm_ia1','$etm_ia2','$etm_ia3',
		'$cn_ia1','$cn_ia2','$cn_ia3',
		'$dbms_ia1','$dbms_ia2','$dbms_ia3',
	'$atc_ia1','$atc_ia2','$atc_ia3',
	'$java_ia1','$java_ia2','$java_ia3',
	'$ac_ia1','$ac_ia2','$ac_ia3','$cnlab','$dbmslab','$ext_agg'
	);";
mysqli_query($conn,$sql2);
header("Location: ../addstudent.php?entry=success");
}
 ?>
