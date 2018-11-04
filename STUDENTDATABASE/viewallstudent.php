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
     <link rel="stylesheet" type="text/css" href="onclickaddstudent.css">
   </head>
   <body>
     <header>
   <a id="dsatm"href=https://dsatm.edu.in/><img src="dsatm_logo.png" alt="dsatm"/></a>
   <div id="etc">
   <a href="https://www.facebook.com/DSIorganization"><img class="social" src="fb.png"alt="fb"/></a>
   <a href="https://twitter.com/DSIorganization"><img class="social"src="twitter.png" alt=twitter/></a>
   <a href="https://plus.google.com/112592840884555805844"><img class="social" src="google+0.png" alt=google/><a/>
   <a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="youtube.png" alt=ytb/></a>
   </div>
   </header>
   <div>
     <ul>
       <li id=forhover >Home</li>
       <li id=forhover >About Us</li>
       <li id=forhover>Approvals</li>
       <li id=forhover>Admission</li>
       <li id=forhover>Academics</li>
       <li id=forhover>Research</li>
       <li id=forhover>Campus Life</li>
       <li id=forhover>Library</li>

        <button id="logoutbutton" type="submit" name="logout" >LOGOUT</button>
     </ul>
   </div>





<h1>STUDENT TABLE</h1>
      <table style="margin: 50px;">
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
          while($student = mysqli_fetch_assoc($result)){
            echo "<tr>";
              echo '<td>
              <input name="checkbox[]" type="checkbox" id="checkbox[]" value="anchit">

              </td>';
              echo "<td> <a href='studentprofile.php?value=".$student['usn']."' style='text-decoration:none;'>".$student['usn']."</a></td>";
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
<!-- <button type="submit" form="form1">Click me!</button> -->
      </table>
      <button type="submit" name="delete" value="Delete"  form="form1">Click me!</button>
      <!-- <input type="submit" name="delete" value="Delete" id="delete"> -->
      <form class="" action="index.html" method="post">
        <input type="radio" name="" value="">
      </form>
   </body>
 </html>
