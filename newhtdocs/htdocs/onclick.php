<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Add Student </h1>
      <form class="" action="includes/addstudent.php" method="post">

          Name:<input type="text" name="name" value=""><br>
          USN:<input type="text" name="usn" value=""><br>
          Branch:<input type="text" name="branch" value=""><br>
          Gender:<input type="radio" name="gender" value="male">Male<br>
          <input type="radio" name="gender" value="female">Female<br>
          DOB:<input type="date" name="dob" value=""><br>
          Mobile:<input type="text" name="mob" value=""><br />
          Age:<input type="text" name="age" value=""><br />
          City:<input type="text" name="city" value=""><br />


          <input type="submit" name="submit" value="Submit">




      </form>






  </body>
</html>
