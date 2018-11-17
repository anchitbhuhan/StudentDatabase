<?php
include_once '../includes/dbh.inc.php';
if(isset($_GET['usn'])){$usn = $_GET['usn'];}

$sql = "SELECT * FROM student WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
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
	<link rel="stylesheet" type="text/css" href="../cssfiles/resetstylesheet.css">
	<link rel="stylesheet" type="text/css" href="../sidebarstyle.css">
	<link rel="stylesheet" type="text/css" href="../cssfiles/sidebarheader.css">

  <link rel="stylesheet" href="../cssfiles/sidebarfieldset.css">

</head>
<body>



  <body>

    <header>
  <a id="dsatm"href=https://dsatm.edu.in/><img src="../images/dsatm_logo.png" alt="dsatm"/></a>
  <div id="etc">
  <a href="https://www.facebook.com/DSIorganization"><img class="social" src="../images/fb.png"alt="fb"/></a>
  <a href="https://twitter.com/DSIorganization"><img class="social"src="../images/twitter.png" alt=twitter/></a>
  <a href="https://plus.google.com/112592840884555805844"><img class="social" src="../images/google+0.png" alt=google/><a/>
  <a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="../images/youtube.png" alt=ytb/></a>
  </div>
  </header>

  <nav class="nav-main">






      <!-- <div class= "btn-toggle-nav" onclick="toggleNav()"></div> -->
         <ul>
          <li><a href="../dashboard2.php">Dashboard</a></li>
          <li><a href="../addstudent.php">Add Student</a></li>
          <li><a  href="../viewallstudent.php">View Student</a></li>
          <li><a href="../deletestudent.php">Delete Student</a></li>
          <li><a class="active" href="updatestudent.php">Update Student  </a></li>


        </ul>
   <!-- <button  id="logoutbutton" onclick="location.href='../index.php'" type="submit" name="logout" >LOGOUT</button> -->




  </nav>





<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $_SESSION['name']; ?></span></li>
		<li><a class="active" href="updatepd.php?usn=<?php echo $usn; ?>">Personal Details</a></li>

		<li><a  href="updateld.php?usn=<?php echo $usn; ?>name=<?php echo $_SESSION['name'];  ?>">Library Details</a></li>
		<li><a href="updatecourse.php?usn=<?php echo $usn; ?>name=<?php echo $_SESSION['name'];  ?>">Course Details</a></li>
		<li><a href="updateacademics.php?usn=<?php echo $usn; ?>name=<?php echo $_SESSION['name'];  ?>">Academic Details</a></li>
		<li><a href="updateachievements.php?usn=<?php echo $usn; ?>name=<?php echo $_SESSION['name'];  ?>">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
	<h1>PERSONAL DETAILS</h1><br>
	<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">';  ?>
  <form class="fieldset_form" action="../includes/updatepd.inc.php" method="post">
  <label class="label"><b>USN: &emsp;&emsp;&nbsp;</b></label>
  <input  autocomplete="off" type="text" name="usn" value="<?php echo $_SESSION['usn']; ?>" readonly="true">



  <br>
  <br>

    <label class="label"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></label>
    <input autocomplete="off"  type="text" name="name" value="<?php echo $_SESSION['name']; ?>"><br><br>

    <label class="label"><b>Mobile:&emsp;&nbsp;&nbsp;</b></label>
    <input autocomplete="off"  type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>"><br><br>

    <label class="label"><b>DOB:&nbsp; &nbsp; &nbsp;&nbsp; &ensp; </b></label>
    <input autocomplete="off"  type="date" name="dob" style="width:20%;" value="<?php echo $_SESSION['dob']; ?>"><br><br>


    <label class="label"><b>Hostelite:&nbsp;&nbsp;</b></label>
    <input   type="text" name="hostelite" value="<?php echo $row['hostelite']; ?>">
    <br><br><br>

    <label class="label"><b>Gender:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input   type="text" name="gender" value="<?php echo $_SESSION['gender'] ?>">
    <br><br><br>

    <label class="label"><b>Address:&nbsp;&nbsp;</b></label>
    <input autocomplete="off"  type="text" name="address" style="width:70%;" value="<?php echo $_SESSION['address']; ?>"><br><br>

      <button type="submit" class="button button2">Save</button>



</fieldset>





</form>




</body>
<script src ="../main.js"></script>
</html>
