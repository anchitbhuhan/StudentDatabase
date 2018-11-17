<?php
include_once 'includes/dbh.inc.php';
if(isset($_GET['usn'])){$usn = $_GET['usn'];}

if(isset($_POST['usn'])){$usn = $_POST['usn'];}
$sql = "SELECT * FROM student WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
//
$birth = $row['dob'];
$sql3 = "SET @dob='$birth';";
mysqli_query($conn,$sql3);
$sql6 = "call determineAge(@dob,@aks);";
mysqli_query($conn,$sql6);
$sql4  = "SELECT @aks;";
$resd = mysqli_query($conn,$sql4);
while ($row1 = $resd->fetch_assoc()) {
$var = $row1['@aks']."<br>";
}
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
$_SESSION['age'] = $var;


//
//session_start();
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
   <!-- <button  id="logoutbutton" onclick="location.href='index.php'" type="submit" name="logout" >LOGOUT</button> -->




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
  <p class="personal"><b>Age:</b><?php echo $_SESSION['age']; ?></p><br>
	<p class="personal"><b>Address:</b><?php echo $_SESSION['address']; ?></p><br>

  <a href="#" class="previous">&laquo; Previous</a>
  <a href="#" class="next">Next &raquo;</a>
</fieldset>








</body>
<!-- <script src ="jsfiles/main.js"></script> -->
</html>
