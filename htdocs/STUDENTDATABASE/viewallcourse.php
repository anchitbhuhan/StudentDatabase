<?php
include_once 'includes/dbh.inc.php';
$sql='SELECT * FROM course;';
$result=mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>course_details</title>
     <link rel="stylesheet" href="tablestylesheet.css">
   </head>
   <body>
     <table>
       <tr>
         <th>USN</th>
         <th>SUB-CODE</th>
         <th>SUB-NAME</th>
         <th>FACULTY-NAME</th>

       </tr>
       <?php
      while($course= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$course['usn']."</td>";
        echo "<td>".$course['sub_code']."</td>";
        echo "<td>".$course['sub_name']."</td>";
        echo "<td>".$course['faculty_name']."</td>";
        echo "</tr>";
      }

 ?>
     </table>
   </body>
 </html>
