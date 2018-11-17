<?php
include_once 'includes/dbh.inc.php';
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}

$usn = $_SESSION['usn'];
$name = $_SESSION['name'];
$sql = "SELECT * FROM lib_details WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
//
// $row=mysqli_fetch_assoc($result);
//
//  $lib_id 	= $row['lib_id'];
//  $book_id = $row['book_id'];
//  $book_name = $row['book_name'];
//  $date_out = $row['date_out'];
//  $due_date = $row['due_date'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Side Bar</title>
	<link rel="stylesheet" type="text/css" href="cssfiles/resetstylesheet.css">
	<link rel="stylesheet" type="text/css" href="sidebarstyle.css">
	<link rel="stylesheet" type="text/css" href="cssfiles/sidebarheader.css">
	<link rel="stylesheet" href="cssfiles/sidebarfieldset.css">
</head>
<body>

  <header>
<a id="dsatm"href=https://dsatm.edu.in/><img src="images/dsatm_logo.png" alt="dsatm"/></a>
<div id="etc">
<a href="https://www.facebook.com/DSIorganization"><img class="social" src="images/fb.png"alt="fb"/></a>
<a href="https://twitter.com/DSIorganization"><img class="social"src="images/twitter.png" alt=twitter/></a>
<a href="https://plus.google.com/112592840884555805844"><img class="social" src="images/google+0.png" alt=google/><a/>
<a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="images/youtube.png" alt=ytb/></a>
</div>
</header>

<nav class="nav-main">






    <!-- <div class= "btn-toggle-nav" onclick="toggleNav()"></div> -->
       <ul>
        <li><a href="dashboard2.php">Dashboard</a></li>
        <li><a href="addstudent.php">Add Student</a></li>
        <li><a class="active" href="viewallstudent.php">View Student</a></li>
        <li><a href="deletestudent.php">Delete Student</a></li>
        <li><a href="UpdateStudent/updatestudent.php">Update Student  </a></li>


      </ul>
 <!-- <button  id="logoutbutton" type="submit" name="logout" >LOGOUT</button> -->




</nav>




<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $name; ?></span></li>
		<li><a href="sidebar.php?usn=<?php echo $usn; ?>">Personal Details</a></li>

		<li><a class="active" href="#">Library Details</a></li>
		<li><a href="sidebarcourse.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Course Details</a></li>
		<li><a href="sidebaracademics.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Academic Details</a></li>
		<li><a href="achievementsidebar.php">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
	<h1>LIBRARY DETAILS</h1><br>

	<p class="personal"><b>USN:</b><?php echo $_SESSION['usn']; ?></p><br>
  <p class="personal"><b>Name:</b><?php echo $_SESSION['name']; ?></p><br>
	<!-- <p class="personal"><b>Lib_ID:</b><?php echo $lib_id; ?></p><br>
	<p class="personal"><b>Book Name:</b><?php echo $book_name; ?></p><br>
	<p class="personal"><b>Book ID:</b><?php echo $book_id; ?></p><br>
	<p class="personal"><b>Date In:</b><?php echo $date_out; ?></p><br>
	<p class="personal"><b>Date Out:</b><?php echo $due_date; ?></p><br> -->

<?php

  echo '<table style="margin: 160px;width:600px;height:100px;">
    <tr>


      <th>Book ID</th>
      <th>Book Name</th>
      <th>Date Out</th>
      <th>Due Date</th>


    </tr>';


      while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";


          echo "<td>".$row['book_id1']."</td>";
          echo "<td>".$row['book_name1']."</td>";
          echo "<td>".$row['date_out1']."</td>";
          echo "<td>".$row['due_date1']."</td>";


        echo "</tr>";

        echo "<tr>";


          echo "<td>".$row['book_id2']."</td>";
          echo "<td>".$row['book_name2']."</td>";
          echo "<td>".$row['date_out2']."</td>";
          echo "<td>".$row['due_date2']."</td>";


        echo "</tr>";

      }





  echo '</table>';
  ?>
</fieldset>








</body>
<script src ="jsfiles/main.js"></script>
</html>
