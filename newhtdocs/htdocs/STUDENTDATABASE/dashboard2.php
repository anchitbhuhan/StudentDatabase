<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dashboardstyle2.css">
    <title></title>
  </head>
  <body>
    <?php include 'header.php'; ?>



    <div class="dashboardbody" style="height: 900px;margin-left:0px;">

      <button id="button1"  onclick="location.href='onclickaddstudent.php'">Add Student</button>
      <button id="button2"  onclick="location.href='viewallstudent.php'">View Student Details</button><br>
      <button id="button3" onclick="location.href='viewallstudent2.php'">Delete Student</button>
      <button id="button4"  onclick="location.href='UpdateStudent/updatestudent.php'">Update Student</button>

    </div>

    <?php include 'footer.php'; ?>

  </body>
</html>
