<?php
include_once 'includes/dbh.inc.php';
$usn = $_GET['usn'];
$sql = "SELECT * FROM student WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);



session_start();
$_SESSION['usn'] = $row['usn'];
$_SESSION['name'] = $row['name'];
$_SESSION['mobile'] = $row['mobile'];
$_SESSION['dob'] = $row['dob'];
$_SESSION['hostelite'] = $row['hostelite'];
$_SESSION['gender'] = $row['gender'];
$_SESSION['address'] = $row['address'];

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
		<li><span><?php echo $_SESSION['name']; ?></span></li>
		<li><a class="active" href="#">Personal Details</a></li>

		<li><a  href="librarysidebar.php">Library Details</a></li>
		<li><a href="sidebarcourse.php">Course Details</a></li>
		<li><a href="sidebaracademics.php">Academic Details</a></li>
		<li><a href="achievementsidebar.php">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
	<h1>PERSONAL DETAILS</h1><br>
	<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">';  ?>
	<p class="personal"><b>USN:</b><?php echo $_SESSION['usn']; ?></p><br>
	<p class="personal"><b>Name:</b><?php echo $_SESSION['name']; ?></p><br>
	<p class="personal"><b>Mobile:</b><?php echo $_SESSION['mobile']; ?></p><br>
	<p class="personal"><b>DoB:</b><?php echo $_SESSION['dob']; ?></p><br>
	<p class="personal"><b>Hostelite:</b><?php echo $_SESSION['hostelite']; ?></p><br>
	<p class="personal"><b>Gender:</b><?php echo $_SESSION['gender']; ?></p><br>
	<p class="personal"><b>Address:</b><?php echo $_SESSION['address']; ?></p><br>

  <a href="#" class="previous">&laquo; Previous</a>
  <a href="#" class="next">Next &raquo;</a>
</fieldset>








</body>
<script src ="main.js"></script>
</html>
