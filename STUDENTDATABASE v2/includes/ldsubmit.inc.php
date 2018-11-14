<?php

include_once 'dbh.inc.php';

$usn  = $_POST['usn'];
$libid  = $_POST['libid'];
$bookid  = $_POST['bookid'];
$bookname  = $_POST['bookname'];
$dateout = $_POST['dateout'];
$duedate  = $_POST['duedate'];
$sql1="SELECT usn from student where usn='$usn';";
$result=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
	header("Location:../addstudent.php?usn=duplicate");
}
else{

  $sql2 = "INSERT INTO lib_details (lib_id,usn,book_id,book_name,date_out,due_date) VALUES ('$libid','$usn','$bookid','$bookname','$dateout','$duedate');";
mysqli_query($conn,$sql2);

header("location: ../addstudent.php?entry=success");

}




 ?>
