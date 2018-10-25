<?php
$cookie_name="user";
$cookie_value="Anchit";
date_default_timezone_set('Asia/Kolkata');
setcookie($cookie_name,$cookie_value,time()+(86400*1),"/");


 ?>
 <?php


 if(!isset($_COOKIE[$cookie_name])){
  echo "Cookie names " . $cookie_name . " do not exist";
}
else{
  echo "cookie names". $cookie_name."exists";
  echo "Cookie value= ".$_COOKIE['$cookie_value'];
}













 ?>
