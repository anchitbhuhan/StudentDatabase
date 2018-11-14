<?php
include_once 'dbh.inc.php';
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$ia1=$_POST['ia1'];
$ia2=$_POST['ia2'];
$ia3=$_POST['ia3'];
$ext_agg=$_POST['ext_agg'];
$sql1="SELECT usn from student where usn='$usn';";
$result=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
	header("Location:../addstudent.php?usn=duplicate");
}
else{
$sql2="INSERT INTO acad_details(usn,branch,sem,ia1,ia2,ia3,ext_agg) VALUES('$usn','$branch','$sem','$ia1','$ia2','$ia3','$ext_agg');";
mysqli_query($conn,$sql2);
header("Location: ../addstudent.php?entry=success");
}
 ?>
