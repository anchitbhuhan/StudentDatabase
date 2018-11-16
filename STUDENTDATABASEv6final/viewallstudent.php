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
 <link rel="stylesheet" href="cssfiles/tablestylesheet.css">

 <link rel="stylesheet" href="cssfiles/headerfooterstyle.css">
 <title>Student Database:View Student</title>
   <link rel="icon" href="images/google+.png">




<head>
  <style media="screen">
  .search input[type=text]{
   margin-left: 50px;
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
      <li><a class="active" href="viewallstudent.php">View Student</a></li>
      <li><a href="deletestudent.php">Delete Student</a></li>
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

  <br><br><br><br><br><br><br><br><br>

  <form class="search" style="margin-left:510px;" action="viewallstudent.php" method="post">
      <input type="text" name="search" value="" placeholder="Search Name or USN">
    <button style="" type="submit" name="viewbutton" >Search</button>
  </form>
<?php if(!isset($_POST['viewbutton'])){

  echo '<table style="margin: 0px;">
    <tr>

      <th>USN</th>
      <th>NAME</th>
      <th>MOBILE</th>
      <th>DOB</th>
      <th>HOSTELITE</th>
      <th>GENDER</th>
      <th>ADDRESS</th>

    </tr>';


      while($student = mysqli_fetch_assoc($result)){
        echo "<tr>";

        echo "<td> <a href='sidebar.php?usn=".$student['usn']."' style='text-decoration:none;'>".$student['usn']."</a></td>";
          echo "<td>".$student['name']."</td>";
          echo "<td>".$student['mobile']."</td>";
          echo "<td>".$student['dob']."</td>";
          echo "<td>".$student['hostelite']."</td>";
          echo "<td>".$student['gender']."</td>";
          echo "<td>".$student['address']."</td>";

        echo "</tr>";

      }





  echo '</table>';

 }else{
  $search = $_POST['search'];


$sql = "SELECT * FROM student WHERE usn LIKE '%$search%' OR name LIKE '%$search%';";
$result = mysqli_query($conn,$sql);

echo '<table style="margin: 0px;">
  <tr>

    <th>USN</th>
    <th>NAME</th>
    <th>MOBILE</th>
    <th>DOB</th>
    <th>HOSTELITE</th>
    <th>GENDER</th>
    <th>ADDRESS</th>

  </tr>';


    while($student = mysqli_fetch_assoc($result)){
      echo "<tr>";

      echo "<td> <a href='sidebar.php?usn=".$student['usn']."' style='text-decoration:none;'>".$student['usn']."</a></td>";
        echo "<td>".$student['name']."</td>";
        echo "<td>".$student['mobile']."</td>";
        echo "<td>".$student['dob']."</td>";
        echo "<td>".$student['hostelite']."</td>";
        echo "<td>".$student['gender']."</td>";
        echo "<td>".$student['address']."</td>";

      echo "</tr>";

    }





echo '</table>';

}  ?>






   </body>
