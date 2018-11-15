<?php
include_once 'includes/dbh.inc.php';
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];
$sql = "SELECT * FROM acad_details WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $branch 	= $row['branch'];
 $sem = $row['sem'];
 $ia1 = $row['ia1'];
 $ia2 = $row['ia2'];
 $ia3 = $row['ia3'];

 $ext_aggr = $row['ext_agg'];
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
<!--  <button  id="logoutbutton" type="submit" name="logout" >LOGOUT</button> -->




</nav>





<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $name; ?></span></li>
		<li><a  href="sidebar.php?usn=<?php echo $usn; ?>">Personal Details</a></li>

		<li><a  href="librarysidebar.php?usn=<?php echo $usn; ?>">Library Details</a></li>
		<li><a href="sidebarcourse.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Course Details</a></li>
		<li><a class="active" href="#">Academic Details</a></li>
		<li><a  href="achievementsidebar.php">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
  <h1>ACADEMIC DETAILS</h1><br>

<p class="personal"><b>USN:</b><?php echo $usn; ?></p>
<p class="personal"><b>NAME:</b><?php echo $name; ?></p>
<table>
  <tr>

    <th>BRANCH</th>
    <th>SEMESTER</th>
    <th>I.A-1</th>
    <th>I.A-2</th>
    <th>I.A-3</th>
    <th>Ext Aggregate</th>
  </tr>
  <tr>

    <td><?php echo $branch; ?></td>
    <td><?php echo $sem; ?></td>
    <td><?php echo $ia1; ?></td>
    <td><?php echo $ia2; ?></td>
    <td><?php echo $ia3; ?></td>
    <td><?php echo $ext_aggr; ?></td>

  </tr>
</table>



</fieldset>








</body>
<!-- <script src ="jsfiles/main.js"></script> -->
</html>
