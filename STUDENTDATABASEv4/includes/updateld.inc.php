<?php
include_once '../includes/dbh.inc.php';


$usn  = $_POST['usn'];
$libid  = $_POST['libid'];
$bookid  = $_POST['bookid'];
$bookname  = $_POST['bookname'];
$dateout = $_POST['dateout'];
$duedate  = $_POST['duedate'];


$sql = "UPDATE lib_details SET usn = '$usn',lib_id = '$libid', book_id = '$bookid', book_name = '$bookname', date_out = '$dateout',due_date = '$duedate'  WHERE usn='$usn';";
mysqli_query($conn,$sql);
header("location: ../UpdateStudent/updatepd.php?update=success&usn=$usn");
