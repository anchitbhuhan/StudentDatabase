<?php
include_once 'includes/dbh.inc.php';
session_start();
$sql = "SELECT * FROM student;";
$result = mysqli_query($conn,$sql);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="cssfiles/tablestylesheet.css">

     <link rel="stylesheet" href="cssfiles/headerfooterstyle.css">
     <!-- <link rel="stylesheet" type="text/css" href="onclickaddstudent.css"> -->
   </head>
   <body>
     <div style="position:fixed;width:100%;" class="">
       <div id="logo-div">
         <header id="logo-header">
           <a id="dsatm"href=https://dsatm.edu.in/><img src="images/dsatm_logo.png" alt="dsatm"/></a>
           <div id="etc">
             <a href="https://www.facebook.com/DSIorganization"><img class="social" src="images/fb.png"alt="fb"/></a>
             <a href="https://twitter.com/DSIorganization"><img class="social"src="images/twitter.png" alt="twitter"/></a>
             <a href="https://plus.google.com/112592840884555805844"><img class="social" src="images/google+0.png" alt="google"/><a/>
             <a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="images/youtube.png" alt="ytb"/></a>
           </div>

         </header>
     </div>


     <div class="nav-div">
       <ul>
         <li><a  href="dashboard2.php">Dashboard</a></li>
         <li><a href="addstudent.php">Add Student</a></li>
         <li><a href="viewallstudent.php">View Student</a></li>
         <li><a class="active" href="deletestudent.php">Delete Student</a></li>
         <li><a href="UpdateStudent/updatestudent.php">Update Student</a></li>
         <li class="name"><?php echo $_SESSION['name']; ?></li>
         <form class="" action="index.php?logout=success" method="post">
              <button id="logout" type="submit" name="logout" >LOGOUT</button>
         </form>
     </ul>
   </div>

   </div>




<br><br><br><br><br><br />
<div style="height: 900px;margin-top:60px;" class="">

  <form style="margin-left:510px;" action="deletestudent.php" method="post">
      <input type="text" name="search" value="" placeholder="Search USN or Name">
    <button style="" type="submit" name="viewbutton">Search</button>
  </form>
  <br>
<!-- <h1>STUDENT TABLE</h1 -->
<form  name="form1" method="POST" action="includes/deletestudent.inc.php">
<?php if(!isset($_POST['viewbutton'])){
  echo '
    <table style="margin:0px;" id="menu">
    <tr>
      <th></th>
      <th>USN</th>
      <th>NAME</th>
      <th>MOBILE</th>
      <th>DOB</th>
      <th>HOSTELITE</th>
      <th>GENDER</th>
      <th>ADDRESS</th>

 </tr>';


 while($student=mysqli_fetch_assoc($result))
 {


 echo '<tr>';

    echo '<td><input name="checkbox[]" type="checkbox" id="checkbox[]" value='.$student['usn'].'></td>';
    echo "<td>".$student['usn']."</td>";
    echo "<td>".$student['name']."</td>";
    echo "<td>".$student['mobile']."</td>";
    echo "<td>".$student['dob']."</td>";
    echo "<td>".$student['hostelite']."</td>";
    echo "<td>".$student['gender']."</td>";
    echo "<td>".$student['address']."</td>";
  echo "</tr>";

}
echo '<tr>
  <td><input type="submit" name="delete" value="Delete" id="delete"></td>
</tr>
</tr>';
echo '</table>
</form>';

}else{
  $search = $_POST['search'];


$sql = "SELECT * FROM student WHERE usn LIKE '%$search%' OR name LIKE '%$search%';";
$result = mysqli_query($conn,$sql);
echo '
  <table style="margin:0px;" id="menu">
  <tr>
    <th></th>
    <th>USN</th>
    <th>NAME</th>
    <th>MOBILE</th>
    <th>DOB</th>
    <th>HOSTELITE</th>
    <th>GENDER</th>
    <th>ADDRESS</th>

</tr>';


while($student=mysqli_fetch_assoc($result))
{


echo '<tr>';

  echo '<td><input name="checkbox[]" type="checkbox" id="checkbox[]" value='.$student['usn'].'></td>';
  echo "<td>".$student['usn']."</td>";
  echo "<td>".$student['name']."</td>";
  echo "<td>".$student['mobile']."</td>";
  echo "<td>".$student['dob']."</td>";
  echo "<td>".$student['hostelite']."</td>";
  echo "<td>".$student['gender']."</td>";
  echo "<td>".$student['address']."</td>";
echo "</tr>";

}
echo '<tr>
<td><input type="submit" name="delete" value="Delete" id="delete"></td>
</tr>
</tr>';
echo '</table>
</form>';

}
?>
</div>
</body>
</html>
