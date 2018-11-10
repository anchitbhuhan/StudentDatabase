<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
$name1 = 'anchit';
$name2 = 'bhushan';
$name3 = 'terminator';
     ?>

<form class="" action="radiosubmit.php" method="post">
<input type="radio" name="$name1" value="<?php echo $name1 ?>">
<input type="radio" name="$name2" value="<?php echo $name2 ?>">
<input type="radio" name="$name3" value="<?php echo $name3 ?>">
<button type="submit" name="button">Submit</button>
</form>


  </body>
</html>
