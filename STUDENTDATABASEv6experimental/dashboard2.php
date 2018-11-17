<?php session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Student Database:Dashboard</title>
      <link rel="icon" href="images/google+.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="cssfiles/dashboardstyle2.css">
    <link rel="stylesheet" href="cssfiles/headerfooterstyle.css">
    <title></title>
  </head>
  <body>
    <div style="position:fixed;width:100%;" class="">
      <div id="logo-div">
        <header id="logo-header">
          <a id="dsatm"href=https://dsatm.edu.in/><img src="images/dsatm_logo.png" alt="dsatm"/></a>
          <div id="etc">
            <a href="https://www.facebook.com/DSIorganization"><img class="social" src="images/fb.png"alt="fb"/></a>
            <a href="https://twitter.com/DSIorganization"><img class="social"src="images/twitter.png" alt="twitter"/></a>
            <a href="https://plus.google.com/112592840884555805844"><img class="social" src="images/google+0.png" alt="google"/><a/>
            <a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="images/youtube.png" alt="ytb"/></a>
          </div>

        </header>
    </div>

    <div class="nav-div">
      <ul>
        <li><a class="active" href="dashboard2.php">Dashboard</a></li>
        <li><a href="addstudent.php">Add Student</a></li>
        <li><a href="viewallstudent.php">View Student</a></li>
        <li><a href="deletestudent.php">Delete Student</a></li>
        <li><a href="UpdateStudent/updatestudent.php">Update Student</a></li>
        <li class="name"><?php echo $_SESSION['username']; ?></li>
        <form class=""  method="post">
             <button id="logout" type="submit" name="logout" >LOGOUT</button>
            <?php
            if(isset($_POST['logout'])){
              $_SESSION['status']="disabled";
              session_destroy();
              $_SESSION = array();
              unset($_SESSION['logout']);
              header("Location:index.php?logout=sucess");
            }

             ?>
        </form>
    </ul>
  </div>

  </div>



    <div class="dashboardbody" style="height: 900px;margin-left:0px;">

      <button id="button1"  onclick="location.href='addstudent.php'">Add Student</button>
      <button id="button2"  onclick="location.href='viewallstudent.php'">View Student Details</button><br>
      <button id="button3" onclick="location.href='deletestudent.php'">Delete Student</button>
      <button id="button4"  onclick="location.href='UpdateStudent/updatestudent.php'">Update Student</button>

    </div>

    <?php include 'footer.php'; ?>

  </body>
</html>
