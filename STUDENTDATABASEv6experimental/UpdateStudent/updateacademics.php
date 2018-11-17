<?php
include_once '../includes/dbh.inc.php';
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
   <!-- <button  id="logoutbutton" onclick="location.href='../index.php'" type="submit" name="logout" >LOGOUT</button> -->




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
  <input  autocomplete="off" type="text" name="name" value="<?php echo $_SESSION['name']; ?>"><br><br>
  <label class="label"><b>Branch:</b></label>
  <input  autocomplete="off" type="text" name="branch" value="<?php echo $branch; ?>">
  <label class="label"><b>Sem:</b></label>
  <input  autocomplete="off" type="text" name="sem" value="<?php echo $sem; ?>">
<br><br><br><br><br><br><br>
  <table style="margin-right: 11em;">
    <tr>
      <th></th>
      <th>IA1</th>
      <th>IA2</th>
      <th>IA3</th>
      <th>IA AVERAGE</th>
      <th>EXTERNAL</th>

    </tr>
    <tr ><td style="background-color:#003366;color:white">ATC</td>
      <td><input type="text" name="atc_ia1" value="<?php echo $atc_ia1; ?>"></td>
      <td><input type="text" name="atc_ia2" value="<?php echo $atc_ia2; ?>"></td>
      <td><input type="text" name="atc_ia3" value="<?php echo $atc_ia3; ?>"></td>
      <td><?php echo $row['atc_ia_avg']; ?>
      <td><input type="text" name="ext_aggr" value="<?php echo $ext_aggr; ?>"></td>
    </tr>
    <tr ><td style="background-color:#003366;color:white">DBMS</td>
      <td ><input type="text" name="dbms_ia1" value="<?php echo $dbms_ia1; ?>"></td>
      <td><input type="text" name="dbms_ia2" value="<?php echo $dbms_ia2; ?>"></td>
      <td><input type="text" name="dbms_ia3" value="<?php echo $dbms_ia3; ?>"></td>
      <td><?php echo $row['dbms_ia_avg']; ?>
      <td><input type="text" name="ext_aggr" value="<?php echo $ext_aggr; ?>"></td>
    </tr>
    <tr><td  style="background-color:#003366;color:white">CN</td>
      <td><input type="text" name="cn_ia1" value="<?php echo $cn_ia1; ?>"></td>
      <td><input type="text" name="cn_ia2" value="<?php echo $cn_ia2; ?>"></td>
      <td><input type="text" name="cn_ia3" value="<?php echo $cn_ia3; ?>"></td>
      <td><?php echo $row['cn_ia_avg']; ?>
      <td><input type="text" name="ext_aggr" value="<?php echo $ext_aggr; ?>"></td>
    </tr>
    <tr><td  style="background-color:#003366;color:white">JAVA</td>
      <td><input type="text" name="java_ia1" value="<?php echo $java_ia1; ?>"></td>
      <td><input type="text" name="java_ia2" value="<?php echo $java_ia2; ?>"></td>
      <td><input type="text" name="java_ia3" value="<?php echo $java_ia3; ?>"></td>
      <td><?php echo $row['java_ia_avg']; ?>
      <td><input type="text" name="ext_aggr" value="<?php echo $ext_aggr; ?>"></td>
    </tr>
    <tr><td  style="background-color:#003366;color:white">ETM</td>
      <td><input type="text" name="etm_ia1" value="<?php echo $etm_ia1; ?>"></td>
      <td><input type="text" name="dbms_ia2" value="<?php echo $etm_ia2; ?>"></td>
      <td><input type="text" name="etm_ia3" value="<?php echo $etm_ia3; ?>"></td>
      <td><?php echo $row['etm_ia_avg']; ?>
      <td><input type="text" name="ext_aggr" value="<?php echo $ext_aggr; ?>"></td>
    </tr>
    <tr ><td style="background-color:#003366;color:white">AI/CLOUD</td>
      <td><input type="text" name="ac_ia1" value="<?php echo $ac_ia1; ?>"></td>
      <td><input type="text" name="ac_ia2" value="<?php echo $ac_ia2; ?>"></td>
      <td><input type="text" name="ac_ia3" value="<?php echo $ac_ia3; ?>"></td>
      <td><?php echo $row['ac_ia_avg']; ?>
      <td><input type="text" name="ext_aggr" value="<?php echo $ext_aggr; ?>"></td>
    </tr>






  </table>



      <button type="submit" class="button button2">Save</button>



</fieldset>





</form>




</body>
<script src ="../main.js"></script>
</html>
