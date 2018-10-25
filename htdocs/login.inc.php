<?php 

$myemail = 'bhushananchit@gmail.com';
$password = 'qwerty';
if(isset($_POST['submit'])){

$email = $_POST['email'];
$pass = $_POST['pass'];

if($email == $myemail && $pass == $password){

if(isset($_POST['remember'])){
	setcookie('email',$email,time()+60*60);
	session_start();
	$_SESSION['email'] = $email;
	
	header('location: welcome.php');

}


}
else{
	echo 'email or pass invalid';
}



}
else{
	header('location: cookieandsessio.php');
}



 ?>