<?php
include_once 'includes/dbh.inc.php';
$sql='SELECT * FROM lib_details;';
$result=mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>lib_details</title>
     <link rel="stylesheet" href="tablestylesheet.css">
   </head>
   <body>
     <table>
       <tr>
         <th>LIBRARY ID</th>
         <th>USN</th>
         <th>BOOK ID</th>
         <th>BOOK NAME</th>
         <th>DATE OUT</th>
         <th>DUE DATE</th>
       </tr>
       <?php
      while($library= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$library['usn']."</td>";
        echo "<td>".$library['lib_id']."</td>";
        echo "<td>".$library['book_id']."</td>";
        echo "<td>".$library['book_name']."</td>";
        echo "<td>".$library['date_out']."</td>";
        echo "<td>".$library['due_date']."</td>";
        echo "</tr>";
      }

 ?>
     </table>
   </body>
 </html>
