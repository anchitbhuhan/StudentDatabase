<?php
include_once 'includes/dbh.inc.php';
$sql = "DELETE FROM student WHERE USN = '1DT16IS001';";
mysqli_query($conn,$sql);
 ?>
