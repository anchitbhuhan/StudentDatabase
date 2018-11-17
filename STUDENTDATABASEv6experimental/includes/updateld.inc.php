<?php
include_once '../includes/dbh.inc.php';


$usn  = $_POST['usn'];
$lib_id  = $_POST['lib_id'];
$book_id1  = $_POST['book_id1'];
$book_id2  = $_POST['book_id2'];
$book_name1  = $_POST['book_name1'];
$book_name2  = $_POST['book_name2'];
$date_out1 = $_POST['date_out1'];
$date_out2 = $_POST['date_out2'];
$due_date1  = $_POST['due_date1'];
$due_date2  = $_POST['due_date2'];


$sql = "UPDATE lib_details SET usn = '$usn',lib_id = '$lib_id', book_id1 = '$book_id1', book_id2='$book_id2', book_name1 = '$book_name1',book_name2='$book_name2', date_out1 = '$date_out1', date_out2= '$date_out2', due_date1 = '$due_date1', due_date2 = '$due_date2' WHERE usn='$usn';";
mysqli_query($conn,$sql);
header("location: ../UpdateStudent/updatepd.php?update=success&usn=$usn");
