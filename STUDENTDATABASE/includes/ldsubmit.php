<?php

include_once 'dbh.inc.php';

$usn  = $_POST['usn'];
$libid  = $_POST['libid'];
$bookid  = $_POST['bookid'];
$bookname  = $_POST['bookname'];
$dateout = $_POST['dateout'];
$duedate  = $_POST['duedate'];


$sql = "INSERT INTO lib_details (lib_id,usn,book_id,book_name,date_out,due_date) VALUES ('$usn','$libid','$bookid','$bookname','$dateout','$duedate');";
mysqli_query($conn,$sql);

header("location: ../librarydetails.php?entry=success");






 ?>
