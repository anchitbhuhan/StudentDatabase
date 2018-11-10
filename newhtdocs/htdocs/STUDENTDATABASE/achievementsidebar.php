<?php
include_once 'includes/dbh.inc.php';
session_start();
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];
$sql = "SELECT * FROM achievements WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $projects 	= $row['projects'];
 $internships = $row['internships'];
 $certifications	= $row['certifications'];
 $paper_presntion = $row['paper_presntion'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Side Bar</title>
	<link rel="stylesheet" type="text/css" href="resetstylesheet.css">
	<link rel="stylesheet" type="text/css" href="sidebarstyle.css">
	<link rel="stylesheet" type="text/css" href="onclickaddstudentforsidebar.css">
	<link rel="stylesheet" href="sidepersonalfield.css">

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

<nav class="nav-main">






		<div class= "btn-toggle-nav" onclick="toggleNav()"></div>
			 <ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Admissions</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Campus Life</a></li>
				<li><a href="#">Contact</a></li>


			</ul>
 <button  id="logoutbutton" type="submit" name="logout" >LOGOUT</button>




</nav>




<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $name; ?></span></li>
		<li><a  href="sidebar.php?usn=<?php echo $usn; ?>">Personal Details</a></li>

		<li><a  href="librarysidebar.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Library Details</a></li>
		<li><a href="sidebarcourse.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Course Details</a></li>
		<li><a href="sidebaracademics.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Academic Details</a></li>
		<li><a class="active" href="#">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
  <h1>Achievements</h1><br>

  <p class="personal"><b>USN:</b><?php echo $usn; ?></p>
  <p class="personal"><b>NAME:</b><?php echo $name; ?></p>
  <table>
  <tr>
    <th>PROJECTS</th>
    <th>INTERNSHIPS	</th>
    <th>CERTIFICATIONS</th>
    <th>PAPER PRESENTATION</th>
  </tr>
  <tr>
    <td><?php echo $projects; ?></td>
    <td><?php $internships; ?></td>
    <td><?php $certifications; ?></td>
    <td><?php $paper_presntion; ?></td>

  </tr>
  </table>



</fieldset>








</body>
<script src ="main.js"></script>
</html>
