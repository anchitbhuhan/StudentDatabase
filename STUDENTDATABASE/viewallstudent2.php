<?php
include_once 'includes/dbh.inc.php';

$sql = "SELECT * FROM student;";
$result = mysqli_query($conn,$sql);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="tablestylesheet.css">
     <link rel="stylesheet" type="text/css" href="newtabcss.css">
     <!-- <link rel="stylesheet" type="text/css" href="onclickaddstudent.css"> -->
   </head>
   <body>
    <?php include 'header.php'; ?>



<br><br>
<div style="height: 900px;" class="">


<h1>STUDENT TABLE</h1>
<form name="form1" method="POST" action="deletestudent.php">
    <table style="margin: 50px;" id="menu">
    <tr>
      <th></th>
      <th>USN</th>
      <th>NAME</th>
      <th>MOBILE</th>
      <th>DOB</th>
      <th>HOSTELITE</th>
      <th>GENDER</th>
      <th>ADDRESS</th>
      <th>IMAGE</th>
 </tr>

<?php
 while($student=mysqli_fetch_assoc($result))
 {
?>

 <tr>

    <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $student['usn']; ?>"></td>
    <td><?php echo $student['usn'];?></td>

    <td><?php echo $student['name'];?></td>
    <td><?php echo $student['mobile'];?></td>

    <td><?php echo $student['dob'];?></td>
    <td><?php echo $student['hostelite'];?></td>
    <td><?php echo $student['gender'];?></td>
    <td><?php echo $student['address'];?></td>
    <td><?php echo $student['st_image'];?></td>


 <?php
  }
 ?>
 <tr><td><input type="submit" name="delete" value="Delete" id="delete"></td></tr></tr></table>
</form>
</div>
   </body>
 </html>
