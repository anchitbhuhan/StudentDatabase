<?php
include_once '../includes/dbh.inc.php';
session_start();
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];

$sql = "SELECT * FROM course WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $sub_code1 	= $row['sub_code1'];
 $sub_name1 = $row['sub_name1'];
 $faculty_name1 = $row['faculty_name1'];

 $sub_code2 	= $row['sub_code2'];
 $sub_name2 = $row['sub_name2'];
 $faculty_name2 = $row['faculty_name2'];

 $sub_code3 	= $row['sub_code3'];
 $sub_name3 = $row['sub_name3'];
 $faculty_name3 = $row['faculty_name3'];

 $sub_code4 	= $row['sub_code4'];
 $sub_name4 = $row['sub_name4'];
 $faculty_name4 = $row['faculty_name4'];

 $sub_code5 	= $row['sub_code5'];
 $sub_name5 = $row['sub_name5'];
 $faculty_name5 = $row['faculty_name5'];

 $sub_code6 	= $row['sub_code6'];
 $sub_name6 = $row['sub_name6'];
 $faculty_name6 = $row['faculty_name6'];

 $sub_code7 	= $row['sub_code7'];
 $sub_name7 = $row['sub_name7'];
 $faculty_name7 = $row['faculty_name7'];

 $sub_code8 	= $row['sub_code8'];
 $sub_name8 = $row['sub_name8'];
 $faculty_name8 = $row['faculty_name8']

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
		<li><span><?php echo $name; ?></span></li>
		<li><a href="updatepd.php?usn=<?php echo $usn; ?>">Personal Details</a></li>
		<li><a  href="updateld.php?usn=<?php echo $usn; ?>">Library Details</a></li>
		<li><a class="active"  href="updatecourse.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Course Details</a></li>
		<li><a  href="updateacademics.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Academic Details</a></li>
		<li><a href="updateachievements.php??usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Achievements</a></li>


	</ul>

</aside>
<!--
<fieldset class="fieldset">
	<h1>LIBRARY DETAILS</h1><br>

	<p class="personal"><b>USN:</b><?php echo $_SESSION['usn']; ?></p><br>
	<p class="personal"><b>Lib_ID:</b><?php echo $lib_id; ?></p><br>
	<p class="personal"><b>Book Name:</b><?php echo $book_name; ?></p><br>
	<p class="personal"><b>Book ID:</b><?php echo $book_id; ?></p><br>
	<p class="personal"><b>Date In:</b><?php echo $date_out; ?></p><br>
	<p class="personal"><b>Date Out:</b><?php echo $due_date; ?></p><br>
</fieldset> -->
<fieldset class="fieldset">
  <h1>COURSE DETAILS</h1><br>
<form class="fieldset_form" action="../includes/updatecourse.inc.php" method="post">
<p class="personal"><b>USN:&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="usn" value="<?php echo $usn; ?>" readonly="true"></p>
<p class="personal"><b>NAME:&nbsp;</b><input type="text" name="name" value="<?php echo $name; ?>"></p>
<table>
	<tr>

		<th>SUBJECT CODE</th>
		<th>SUBJECT NAME</th>
		<th>FACULTY NAME</th>
	</tr>
	<tr>
		<td><input class="courseinput" type="text" name="sub_code1" value="<?php echo $sub_code1; ?>"></td>
		<td><input class="courseinput"type="text" name="sub_name1" value="<?php echo $sub_name1; ?>"></td>
		<td><input class="courseinput"type="text" name="faculty_name1" value="<?php echo $faculty_name1; ?>"></td>

	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code2" value="<?php echo $sub_code2; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name2" value="<?php echo $sub_name2; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name2" value="<?php echo $faculty_name2; ?>"></td>
	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code3" value="<?php echo $sub_code3; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name3" value="<?php echo $sub_name3; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name3" value="<?php echo $faculty_name3; ?>"></td>
	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code4" value="<?php echo $sub_code4; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name4" value="<?php echo $sub_name4; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name4" value="<?php echo $faculty_name4; ?>"></td>
	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code5" value="<?php echo $sub_code5; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name5" value="<?php echo $sub_name5; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name5" value="<?php echo $faculty_name5; ?>"></td>
	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code6" value="<?php echo $sub_code6; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name6" value="<?php echo $sub_name6; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name6" value="<?php echo $faculty_name6; ?>"></td>
	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code7" value="<?php echo $sub_code7; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name7" value="<?php echo $sub_name7; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name7" value="<?php echo $faculty_name7; ?>"></td>
	</tr>

	<tr>
		<td><input class="courseinput" type="text" name="sub_code8" value="<?php echo $sub_code8; ?>"></td>
		<td><input class="courseinput" type="text" name="sub_name8" value="<?php echo $sub_name8; ?>"></td>
		<td><input class="courseinput" type="text" name="faculty_name8" value="<?php echo $faculty_name8; ?>"></td>
	</tr>
</table>

<button  type="submit" class="button button2">Save</button>

</fieldset>






</body>
<script src ="jsfiles/main.js"></script>
</html>
