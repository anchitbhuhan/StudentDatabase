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

  $cnlab = $row['cnlab'];
  $dbmslab = $row['dbmslab'];

  $java_ia1 = $row['java_ia1'];
  $java_ia2 = $row['java_ia2'];
  $java_ia3 = $row['java_ia3'];

  $etm_ia1 = $row['etm_ia1'];
  $etm_ia2 = $row['etm_ia2'];
  $etm_ia3 = $row['etm_ia3'];

  $atc_ia1 = $row['atc_ia1'];
  $atc_ia2 = $row['atc_ia2'];
  $atc_ia3 = $row['atc_ia3'];

  $ac_ia1 = $row['ac_ia1'];
  $ac_ia2 = $row['ac_ia2'];
  $ac_ia3 = $row['ac_ia3'];

  $dbms_ia1 = $row['dbms_ia1'];
  $dbms_ia2 = $row['dbms_ia2'];
  $dbms_ia3 = $row['dbms_ia3'];

  $cn_ia1 = $row['cn_ia1'];
  $cn_ia2 = $row['cn_ia2'];
  $cn_ia3 = $row['cn_ia3'];
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
 <!-- <button  id="logoutbutton" type="submit" name="logout" >LOGOUT</button> -->




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
<p class="personal"><b>BRANCH:</b><?php echo $branch; ?></p>
<p class="personal"><b>SEMESTER:</b><?php echo $sem; ?></p>
<p class="personal"><b>EXTERNAL AGG.:</b><?php echo $ext_aggr; ?></p>
<table>
  <tr>
    <th></th>
    <th>IA1</th>
    <th>IA2</th>
    <th>IA3</th>
    <th>IA AVERAGE</th>
    

  </tr>
  <tr style="background-color:#003366;color:white"><td>ATC</td>
    <td><?php echo $atc_ia1; ?></td>
    <td><?php echo $atc_ia2; ?></td>
    <td><?php echo $atc_ia3; ?></td>
    <td><?php echo $row['atc_ia_avg']; ?></td>
    
  </tr>
  <tr style="background-color:#003366;color:white"><td>DBMS</td>
    <td><?php echo $dbms_ia1; ?></td>
    <td><?php echo $dbms_ia2; ?></td>
    <td><?php echo $dbms_ia3; ?></td>
    <td><?php echo $row['dbms_ia_avg']; ?></td>
  
  </tr>
  <tr style="background-color:#003366;color:white"><td>CN</td>
    <td><?php echo $cn_ia1; ?></td>
    <td><?php echo $cn_ia2; ?></td>
    <td><?php echo $cn_ia3; ?></td>
    <td><?php echo $row['cn_ia_avg']; ?></td>
    
  </tr>
  <tr style="background-color:#003366;color:white"><td>JAVA</td>
    <td><?php echo $java_ia1; ?></td>
    <td><?php echo $java_ia2; ?></td>
    <td><?php echo $java_ia3; ?></td>
    <td><?php echo $row['atc_ia_avg']; ?></td>

  </tr>
  <tr style="background-color:#003366;color:white"><td>ETM</td>
    <td><?php echo $etm_ia1; ?></td>
    <td><?php echo $etm_ia2; ?></td>
    <td><?php echo $etm_ia3; ?></td>
    <td><?php echo $row['etm_ia_avg']; ?></td>
  
  </tr>
  <tr style="background-color:#003366;color:white"><td>AI/CLOUD</td>
    <td><?php echo $ac_ia1; ?></td>
    <td><?php echo $ac_ia2; ?></td>
    <td><?php echo $ac_ia3; ?></td>
    <td><?php echo $row['ac_ia_avg']; ?></td>
     </tr>





</table>



</fieldset>








</body>
<!-- <script src ="jsfiles/main.js"></script> -->
</html>
