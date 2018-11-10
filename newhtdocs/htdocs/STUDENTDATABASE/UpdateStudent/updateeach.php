<?php
include_once '../includes/dbh.inc.php';
if(isset($_GET['usn'])){$usn = $_GET['usn'];}

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
	<link rel="stylesheet" type="text/css" href="../resetstylesheet.css">
	<link rel="stylesheet" type="text/css" href="../sidebarstyle.css">
	<link rel="stylesheet" type="text/css" href="../onclickaddstudentforsidebar.css">

  <link rel="stylesheet" href="../sidepersonalfield.css">

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

		<li><a  href="updatelib.php">Library Details</a></li>
		<li><a href="sidebarcourse.php">Course Details</a></li>
		<li><a href="sidebaracademics.php">Academic Details</a></li>
		<li><a href="achievementsidebar.php">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
	<h1>PERSONAL DETAILS</h1><br>
	<img src="favicon.ico" alt="st_img">
	<!-- <p class="personal">
    <b>USN:</b>


  </p> -->
  <form class="fieldset_form" action="../includes/updatepd.php" method="post">
  <label class="label"><b>USN:&nbsp;&nbsp; &nbsp; &nbsp;  </b></label>
  <input  autocomplete="off" type="text" name="usn" value="<?php echo $_SESSION['usn']; ?>">



  <br>
  <br>

    <label class="label"><b>Name:&nbsp; &nbsp; </b></label>
    <input autocomplete="off"   type="text" name="name" value="<?php echo $_SESSION['name']; ?>"><br><br>

    <label class="label"><b>Mobile:&nbsp; </b></label>
    <input autocomplete="off"  type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>"><br><br>

    <label class="label"><b>DOB:&nbsp; &nbsp; &nbsp; </b></label>
    <input autocomplete="off"  type="date" name="dob" style="width:20%;" value="<?php echo $_SESSION['dob']; ?>"><br><br>


    <label class="label"><b>hostelite:</b></label>
    <b>YES:</b><input   type="radio" name="hostelite" value="Yes">
    <b>No:</b><input   type="radio" name="hostelite" value="No"><br><br><br>

    <label class="label"><b>Gender:</b></label>
    <b>Male:</b><input   type="radio" name="gender" value="Male">
    <b>Female:</b><input   type="radio" name="gender" value="Female"><br><br><br>

    <label class="label"><b>Address:</b></label>
    <input autocomplete="off"  type="text" name="address" style="width:70%;" value="<?php echo $_SESSION['address']; ?>"><br><br>

      <button type="submit" class="button button2">Save</button>



</fieldset>





</form>




</body>
<script src ="../main.js"></script>
</html>
