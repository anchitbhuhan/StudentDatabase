<?php
include_once '../includes/dbh.inc.php';

session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];
$sql = "SELECT * FROM lib_details WHERE usn='$usn';";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

 $lib_id 	= $row['lib_id'];
 $book_id1 = $row['book_id1'];
 $book_id2 = $row['book_id2'];
 $book_name1 = $row['book_name1'];
 $book_name2 = $row['book_name2'];
 $date_out1 = $row['date_out1'];
 $date_out2 = $row['date_out2'];
 $due_date1 = $row['due_date1'];
 $due_date2 = $row['due_date2'];

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
         <li><a class="active" href="UpdateStudent/updatestudent.php">Update Student  </a></li>

      </ul>
 <!-- <button  id="logoutbutton" onclick="location.href='../index.php'" type="submit" name="logout" >LOGOUT</button> -->




</nav>




<aside class="nav-sidebar" >


	<ul>
		<li><span><?php echo $name; ?></span></li>
		<li><a href="updatepd.php?usn=<?php echo $usn; ?>">Personal Details</a></li>

		<li><a class="active" href="updateld.php?usn=<?php echo $usn; ?>">Library Details</a></li>
		<li><a href="updatecourse.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Course Details</a></li>
		<li><a href="updateacademics.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Academic Details</a></li>
		<li><a href="updateachievements.php?usn=<?php echo $usn; ?>name=<?php echo $name;  ?>">Achievements</a></li>


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
	<h1>LIBRARY DETAILS</h1><br>

  <form class="fieldset_form" action="../includes/updateld.inc.php" method="post">
  <label class="label"><b>USN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
  <input  autocomplete="off" type="text" name="usn" value="<?php echo $_SESSION['usn']; ?>" readonly="true">
<br><br>
  <label class="label"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
  <input  autocomplete="off" type="text" name="name" value="<?php echo $_SESSION['name']; ?>">



  <br>
  <br>

    <label class="label"><b>Library ID:&nbsp; &nbsp;&nbsp; </b></label>
    <input autocomplete="off"   type="text" name="lib_id" value="<?php echo $lib_id; ?>"><br><br>

  <!--   <label class="label"><b>Book ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input autocomplete="off"  type="text" name="bookid" value="<?php echo $book_id; ?>"><br><br> -->

    <!-- <label class="label"><b>Book Name:&nbsp;</b></label>
    <input autocomplete="off"  type="text" name="bookname" style="width:20%;" value="<?php echo $book_name; ?>"><br><br>


    <label class="label"><b>Due Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input   type="date" name="duedate" value="<?php echo $due_date; ?>"><br>
    <br><br>
    <label class="label"><b>Date Out:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input   type="date" name="dateout" value="<?php echo $date_out; ?>"> -->
      <table>
        <tr>
          <th>BOOK ID</th>
          <th>BOOK NAME</th>
          <th>DATE OUT</th>
          <th>DUE DATE</th>
        </tr>
        <tr>
          <td><input  autocomplete="off" type="text" name="book_id1" value="<?php echo $book_id1; ?>"></td>
          <td><input  autocomplete="off" type="text" name="book_name1" value="<?php echo $book_name1; ?>"></td>
          <td><input  autocomplete="off" type="text" name="date_out1" value="<?php echo $date_out1; ?>"></td>
          <td><input  autocomplete="off" type="text" name="due_date1" value="<?php echo $due_date1; ?>"></td>
        </tr>
        <tr>
          <td><input  autocomplete="off" type="text" name="book_id2" value="<?php echo $book_id2; ?>"></td>
          <td><input  autocomplete="off" type="text" name="book_name2" value="<?php echo $book_name2; ?>"></td>
          <td><input  autocomplete="off" type="text" name="date_out2" value="<?php echo $date_out2; ?>"></td>
          <td><input  autocomplete="off" type="text" name="due_date2" value="<?php echo $due_date2; ?>"></td>
        </tr>
      </table>








<br><br>

      <button type="submit" class="button button2">Save</button>



</fieldset>







</body>
<script src ="jsfiles/main.js"></script>
</html>
