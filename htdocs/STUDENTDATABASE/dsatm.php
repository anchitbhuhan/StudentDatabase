<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>DAYANAND SAGAR ACADEMY OF TECHNOLOGY AND MANAGEMENT</title>
<link rel="stylesheet" type="text/css" href="dashboardstyle.css">
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

  <ul>
    <li id=forhover >Home</li>
    <li id=forhover >About Us</li>
    <li id=forhover>Approvals</li>
    <li id=forhover>Admission</li>
    <li id=forhover>Academics</li>
    <li id=forhover>Research</li>
    <li id=forhover>Campus Life</li>
    <li id=forhover>Library</li>
    <span><?php echo $_SESSION['name']; ?></span>
    <form class="" action="loginscreen.php" method="post">
         <button id="logout" type="submit" name="logout" >LOGOUT</button>
    </form>

  </ul>
<section style="height: 500px;">

  <button id="button1"  onclick="location.href='onclickaddstudent.php'">Add Student</button>
  <button id="button2"  onclick="location.href='../STUDENTDATABASE/viewallstudent.php'">View Student Details</button><br>
  <button id="button3" onclick="location.href='deletestudent.php'">Delete Student</button>
  <button id="button4"  onclick="location.href='updatestudent.php'">Update Student</button>
</section>


<footer>
  <pre>© 2018 Dayananda Sagar Institutions . All Rights Reserved.</pre>
</footer>
