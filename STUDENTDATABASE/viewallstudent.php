<?php
include_once 'includes/dbh.
        <?phpinc.php';
$sql = "SELECT * FROM student;";
$result = mysqli_query($conn,$sql);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="tablestylesheet.css">
   </head>
   <body>
<h1>STUDENT TABLE</h1>
      <table>
        <tr>
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
          while($student = mysqli_fetch_assoc($result)){
            echo "<tr>";
              echo "<td> <a href='studentprofile.php' style='text-decoration:none;'>".$student['usn']."</a></td>";
              echo "<td>".$student['name']."</td>";
              echo "<td>".$student['mobile']."</td>";
              echo "<td>".$student['dob']."</td>";
              echo "<td>".$student['hostelite']."</td>";
              echo "<td>".$student['gender']."</td>";
              echo "<td>".$student['address']."</td>";
              echo "<td>".$student['st_image']."</td>";
            echo "</tr>";

          }



          ?>
      </table>
   </body>
 </html>
