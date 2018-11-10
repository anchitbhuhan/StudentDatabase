<?php
include_once  'header.php';
?>

<section style="background-color:white;height:500px;">




<form style="width:400px;margin:0 auto;padding-top:30px;" action="includes/signup1.inc.php" method="post">
<fieldset style="width:400px;height:400px;border-left: 6px solid #003366;background-color:#e6e6e6;box-shadow: 5px 5px grey;border-radius: 10px">
<legend style="display: block;align:center;">Sign Up </legend>

Firstname:<input style="height:30px;padding:10px;margin:5px;" type="text" name="first" value="" placeholder="firstname"><br>
Lastname:<input style="height:30px;padding:10px;margin:5px;" type="text" name="last" value="" placeholder="lastname"><br>
E-mail:     <input style="height:30px;padding:10px;margin:5px;"  type="text" name="email" value="" placeholder="E-mail"><br>
User Id:<input style="height:30px;padding:10px;margin:5px;" type="text" name="uid" value="" placeholder="Username"><br>
Password:<input style="height:30px;padding:10px;margin:5px;" type="password" name="pwd" value="" placeholder="password"><br>
<button type="submit" name="submit" style="background-color:lightblue ;">Sign Up </button>

</fieldset>

</form>






</section>















<?php
include_once 'footer.php'
?>
