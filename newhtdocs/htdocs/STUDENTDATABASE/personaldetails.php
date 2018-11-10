<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="includes/pdsubmit.php" method="post"  enctype="multipart/form-data">
      USN:<input type="text" name="usn" placeholder="USN"><br>

      Name:<input type="text" name="name" placeholder="Name"><br>

      Mobile:<input type="text" name="mobile" placeholder="Mobile"><br>

      DOB:<input type="date" name="dob" placeholder="DOB"><br>

      HOSTELITE:YES<input type="radio" name="hostelite" value="yes" ><br>
                    NO:<input type="radio" name="hostelite" value="no"/><br />
      GENDER:Male<input type="radio" name="gender" value="male"><br>
      Female<input type="radio" name="gender" value="female"><br>

      ADDRESS:<input type="text" name="address" placeholder="address"><br>
      Upload Image: <input type="file" name="image"><br>
      <input type="submit" name="submit">



    </form>

  </body>
</html>
