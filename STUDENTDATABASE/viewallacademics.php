<?php
include_once 'includes/dbh.inc.php';
$sql='SELECT * FROM acad_details;';
$result=mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>academic_details</title>
     <link rel="stylesheet" href="tablestylesheet.css">
   </head>
   <body>
     <table>
       <tr>
         <th>USN</th>
         <th>BRANCH</th>
         <th>SEM</th>
         <th>IA1</th>
         <th>IA2</th>
         <th>IA3</th>
         <th>EXT</th>

       </tr>
       <?php
      while($academic= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$academic['usn']."</td>";
        echo "<td>".$academic['branch']."</td>";
        echo "<td>".$academic['sem']."</td>";
        echo "<td>".$academic['ia1']."</td>";
        echo "<td>".$academic['ia2']."</td>";
        echo "<td>".$academic['ia3']."</td>";
        echo "<td>".$academic['ext_agg']."</td>";
        echo "</tr>";
      }

 ?>
     </table>
   </body>
 </html>
