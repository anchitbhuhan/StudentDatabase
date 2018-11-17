<?php
include_once '../includes/dbh.inc.php';
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];

$sql = "SELECT * FROM achievements WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $projects 	= $row['projects'];
 $internships = $row['internships'];
 $certifications	= $row['certifications'];
 $paper_presntion = $row['paper_presntion'];
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
           <li><a class="active" href="UpdateStudent/updatestudent.php">Update Student  </a></li>



        </ul>
   <!-- <button  id="logoutbutton" onclick="location.href='../index.php'" type="submit" name="logout" style="float: right;">LOGOUT</button> -->




  </nav>





<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $_SESSION['name']; ?></span></li>
		<li><a  href="updatepd.php?usn=<?php echo $usn; ?>">Personal Details</a></li>

		<li><a  href="updateld.php?usn=<?php echo $usn; ?>">Library Details</a></li>
		<li><a href="updatecourse.php?usn=<?php echo $usn; ?>">Course Details</a></li>
		<li><a href="updateacademics.php?usn=<?php echo $usn; ?>">Academic Details</a></li>
		<li><a class="active" href="updateachievements.php?usn=<?php echo $usn; ?>">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
	<h1>PERSONAL DETAILS</h1><br>
	  <form class="fieldset_form" action="../includes/updateachievements.inc.php" method="post">
  <label class="label"><b>USN:   &nbsp;&nbsp;</b></label>
  <input  autocomplete="off" type="text" name="usn" value="<?php echo $_SESSION['usn']; ?>" readonly="true">
<br><br>
  <label class="label"><b>Name:&nbsp;</b></label>
  <input  autocomplete="off" type="text" name="name" value="<?php echo $_SESSION['name']; ?>">




  <br>
  <br>
  <br><br><br><br>

  <table style="margin-right: 7em;">
  <tr>
    <th>PROJECTS</th>
    <th>INTERNSHIPS	</th>
    <th>CERTIFICATIONS</th>
    <th>PAPER PRESENTATION</th>
  </tr>
  <tr>
    <td><input type="text" style="width:300px;"name="projects" value="<?php echo $projects; ?>"></td>
    <td><input type="text" name="internships" value="<?php echo $internships; ?>"></td>
    <td><input type="text" name="certifications" value="<?php echo $certifications; ?>"></td>
    <td><input type="text" name="paper_present" value="<?php echo $paper_presntion; ?>"></td>

  </tr>
  </table>

      <button type="submit" class="button button2">Save</button>



</fieldset>





</form>




</body>
<script src ="../main.js"></script>
</html>
