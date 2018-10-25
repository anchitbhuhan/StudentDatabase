<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <style media="screen">
      .error{color:red;}
    </style>
  </head>
  <body>
    <?php
    $fname=$usn=$gender="";
    $fnameErr=$usnErr=$genderErr="";
    if($_SERVER["REQUEST_METHOD"]="POST"){
      if(empty($_POST['fname'])){
        $fnameErr=" * name cant be empty";
      }
      else{
        $fname=input_text($_POST['fname']);
      }
      if(empty($_POST['usn'])){
        $usnErr=" * usn cant be empty";
      }
      else {
        $usn=input_text($_POST['usn']);
      }
      if (empty($_POST['gender'])) {
        $genderErr=" * please specify your sex";
      }
      else{
        $gender=input_text($_POST['gender']);
      }
    }
    function input_text($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }

    ?>

    <form  action="login.php" method="post">
      <h1>Sample login page working</h1>
      <p><snap class="error">* Required Field</snap></p>
      <br>
      Name: <input type="text" name="fname"><snap class="error"><?php echo $fnameErr; ?></snap>
      <br><br>
      USN: <input type="text" name="usn" ><snap class="error"><?php echo $usnErr; ?></snap>
      <br><br>
      Gender: <input type="radio" name="gender" value="Male">Male
              <input type="radio" name="gender" value="female">Female
              <input type="radio" name="gender" value="others">Chakka
              <snap class="error"><?php echo $genderErr; ?></snap>
              <br><br>
              <input type="submit" name="SUBMIT" value="SUBMIT">
    </form>
    <?php
       echo "<h2>Your Input</h2>";
    echo $fname."<br>";
    echo $usn."<br>";
    echo $gender."<br>"
    ?>
  </body>
</html>
