<?php

include_once 'dbh.inc.php';

$usn  = $_POST['usn'];
$libid  = $_POST['libid'];
// $bookid  = $_POST['bookid'];
// $bookname  = $_POST['bookname'];
// $dateout = $_POST['dateout'];
// $duedate  = $_POST['duedate'];
$book_id1= $_POST['book_id1'];
$book_id2= $_POST['book_id2'];

$book_name1= $_POST['book_name1'];
$book_name2= $_POST['book_name2'];
 
$date_out1= $_POST['date_out1'];
$date_out2= $_POST['date_out2'];

$due_date1= $_POST['due_date1'];
$due_date2= $_POST['due_date2'];

$sql1="SELECT usn from lib_details where usn='$usn';";

$result=mysqli_query($conn,$sql1);

$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	header("Location:../addstudent.php?usn=duplicate");
}
else{

  $sql2= "INSERT INTO lib_details(lib_id,usn,book_id1,book_id2,book_name1,book_name2,date_out1,date_out2,due_date1,due_date2) VALUES 
  ('$libid','$usn','$book_id1','$book_id2','$book_name1','$book_name2','$date_out1','$date_out2','$due_date1','$due_date2');";
mysqli_query($conn,$sql2);

header("location: ../addstudent.php?entry=success");

}




 ?>
