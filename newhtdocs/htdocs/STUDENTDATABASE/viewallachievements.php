<?php
include_once 'includes/dbh.inc.php';
$sql='SELECT * FROM achievements;';
$result=mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>achievements_details</title>
     <link rel="stylesheet" href="tablestylesheet.css">
   </head>
   <body>
     <table>
       <tr>
         <th>USN</th>
         <th>PROJECTS</th>
         <th>INTERNSHIPS</th>
         <th>CERTIFICATIONS</th>
         <th>PAPER PRESENTED</th>


       </tr>
       <?php
      while($achievements= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$achievements['usn']."</td>";
        echo "<td>".$achievements['projects']."</td>";
        echo "<td>".$achievements['internships']."</td>";
        echo "<td>".$achievements['certifications']."</td>";
        echo "<td>".$achievements['paper_presntion']."</td>";
        echo "</tr>";
      }

 ?>
     </table>
   </body>
 </html>
