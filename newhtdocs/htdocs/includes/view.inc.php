<?php

if($_POST['submit']){
include 'dbh.inc.php';

$usn=$_POST['usn'];




}

$sql="SELECT * FROM student WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0)
{
while($row=mysqli_fetch_assoc($result)){

  echo $row['name']."<br>";
  echo $row['branch'];
}
}
$sql1="SELECT * FROM library;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0)
{
while($row=mysqli_fetch_assoc($result)){

  echo $row['lib_id']."<br>";
  echo $row['book_name'];
  echo $row['issue_date'];
  echo $row['due_date'];
}

















 ?>
