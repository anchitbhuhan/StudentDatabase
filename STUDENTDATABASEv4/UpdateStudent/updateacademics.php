 <?php
include_once '../includes/dbh.inc.php';
session_start();
if($_SESSION['status']!="Active")
{
    header("location:../index.php?error=loginagain");
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
  <!--  <button  id="logoutbutton" onclick="location.href='../index.php'" type="submit" name="logout" >LOGOUT</button> -->




  </nav>





<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $_SESSION['name']; ?></span></li>
		<li><a  href="updatepd.php?usn=<?php echo $usn; ?>">Personal Details</a></li>
		<li><a  href="updateld.php?usn=<?php echo $usn; ?>">Library Details</a></li>
		<li><a href="updatecourse.php?usn=<?php echo $usn; ?>">Course Details</a></li>
		<li><a class="active" href="updateacademics.php?usn=<?php echo $usn; ?>">Academic Details</a></li>
		<li><a href="updateachievements.php?usn=<?php echo $usn; ?>">Achievements</a></li>


	</ul>

</aside>

<fieldset class="fieldset">
	<h1>ACADEMICS DETAILS</h1><br>
	  <form class="fieldset_form" action="../includes/updateacademics.inc.php" method="post">
  <label class="label"><b>USN:</b></label>
  <input  autocomplete="off" type="text" name="usn" value="<?php echo $_SESSION['usn']; ?>" readonly="true">
  <label class="label"><b>Name:</b></label>
  <input  autocomplete="off" type="text" name="name" value="<?php echo $_SESSION['name']; ?>">
<br><br><br><br><br><br><br>
  <table style="margin-right: 11em;">
    <tr>

      <th>BRANCH</th>
      <th>SEMESTER</th>
      <th>I.A-1</th>
      <th>I.A-2</th>
      <th>I.A-3</th>
      <th>Ext Aggregate</th>
    </tr>
    <tr>

      <td><input style="width:50px;" type="text" name="branch" value="<?php echo $branch; ?>"></td>
      <td><input type="text" name="sem" value="<?php echo $sem; ?>"></td>
      <td><input type="text" name="ia1" value="<?php echo $ia1; ?>"></td>
      <td><input type="text" name="ia2" value="<?php echo $ia2; ?>"></td>
      <td><input type="text" name="ia3" value="<?php echo $ia3; ?>"></td>
      <td><input style="width:50px;" type="text" name="ext_agg" value="<?php echo $ext_aggr; ?>"></td>

    </tr>
  </table>



      <button type="submit" class="button button2">Save</button>



</fieldset>





</form>




</body>
<script src ="../main.js"></script>
</html>
