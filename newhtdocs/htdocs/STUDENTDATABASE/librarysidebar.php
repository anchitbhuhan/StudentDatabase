<?php
include_once 'includes/dbh.inc.php';
session_start();
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];
$sql = "SELECT * FROM lib_details WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $lib_id 	= $row['lib_id'];
 $book_id = $row['book_id'];
 $book_name = $row['book_name'];
 $date_out = $row['date_out'];
 $due_date = $row['due_date'];

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
	<p class="personal"><b>Lib_ID:</b><?php echo $lib_id; ?></p><br>
	<p class="personal"><b>Book Name:</b><?php echo $book_name; ?></p><br>
	<p class="personal"><b>Book ID:</b><?php echo $book_id; ?></p><br>
	<p class="personal"><b>Date In:</b><?php echo $date_out; ?></p><br>
	<p class="personal"><b>Date Out:</b><?php echo $due_date; ?></p><br>
</fieldset>








</body>
<script src ="main.js"></script>
</html>
