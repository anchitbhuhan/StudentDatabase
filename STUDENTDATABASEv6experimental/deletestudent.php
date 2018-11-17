<?php
include_once 'includes/dbh.inc.php';
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
$sql = "SELECT * FROM student;";
$result = mysqli_query($conn,$sql);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Student Database:Delete Student</title>
       <link rel="icon" href="images/google+.png">
     <link rel="stylesheet" href="cssfiles/tablestylesheet.css">

     <link rel="stylesheet" href="cssfiles/headerfooterstyle.css">
     <!-- <link rel="stylesheet" type="text/css" href="onclickaddstudent.css"> -->
   </head>
   <style media="screen">
   .search input[type=text]{
    margin-left: 550px;
    margin-bottom: -110px;
     border: 1px solid #003366;
   	border-radius: 4px;
    height:35px;
   }
   .search button{
     height:35px;
     border:none;
     background-color: #003366;
   	-webkit-transition-duration: 0.4s;
       transition-duration: 0.4s;
       color:white;
   }
   </style>

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
         <li class="name"><?php echo $_SESSION['username']; ?></li>
         <form class=""  method="post">
              <button id="logout" type="submit" name="logout" >LOGOUT</button>
               <?php
            if(isset($_POST['logout'])){
              $_SESSION['status']="disabled";
              session_destroy();
              $_SESSION = array();
              unset($_SESSION['logout']);
              header("Location:index.php?logout=success");
            }

             ?>
         </form>
     </ul>
   </div>

   </div>
<br><br><br><br><br><br /><br><br>

   <form class="search"  action="deletestudent.php" method="post">
       <input type="text" name="search" value="" placeholder="Search USN or Name">
     <button style="" type="submit" name="viewbutton">Search</button>
   </form>


<div style="height: 900px;margin-top:60px;" class="">


  <form style="padding-top:-30px;margin-top:-110px;"  name="form1" method="POST" action="includes/deletestudent.inc.php">
  <br>
<!-- <h1>STUDENT TABLE</h1 -->
<?php if(!isset($_POST['viewbutton'])){

  echo '<input style="margin-bottom:50px;height:35px;margin-left:20px;background-color:red;border:none;color:white;"  type="submit" name="delete" value="Delete" id="delete">';
  echo '
    <table style="margin-top:-40px;" id="menu">
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

echo '</table>
</form>';

}else{
  $search = $_POST['search'];
echo '<input style="margin-bottom:50px;height:35px;margin-left:20px;background-color:red;border:none;color:white;"  type="submit" name="delete" value="Delete" id="delete">';

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

echo '</table>
</form>';

}
?>
</div>
</body>
</html>
