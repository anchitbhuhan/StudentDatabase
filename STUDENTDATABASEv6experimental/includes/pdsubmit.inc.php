<?php

include_once 'dbh.inc.php';

$usn  = $_POST['usn'];
$name  = $_POST['name'];
$mobile  = $_POST['mobile'];
$dob  = $_POST['dob'];
$hostelite = $_POST['hostelite'];
$gender  = $_POST['gender'];
$address  = $_POST['address'];


$filename = addslashes($_FILES['image']['name']);
$tmpname = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$filetype = addslashes($_FILES['image']['type']);

$array = array('jpg','png','jpeg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$sql1="SELECT usn from student where usn='$usn';";
$result=mysqli_query($conn,$sql1);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
	header("Location:../addstudent.php?usn=duplicate");
}
else{
if(!empty($filename)){
  if(in_array($ext,$array)){

    $sql2 = "INSERT INTO student (usn,name,mobile,dob,hostelite,gender,address,image) VALUES ('$usn','$name','$mobile','$dob','$hostelite','$gender','$address','$tmpname');";
    mysqli_query($conn,$sql2);
// 		$sql3 = "SET @dob='$dob';";
// 		mysqli_query($conn,$sql3);
// 		$sql6 = "call determineAge(@dob,@aks);";
// 		mysqli_query($conn,$sql6);
// 		$sql4  = "SELECT @aks;";
// 		$resd = mysqli_query($conn,$sql4);
// 		while ($row = $resd->fetch_assoc()) {
//     $var = $row['@aks']."<br>";
// }
// session_start();
// $_SESSION['age'] = $var;
// echo $_SESSION['age'];


    header("location: ../addstudent.php?entry=success");


  }
  else{
    header("location: ../addstudent.php?error=format");


  }
}
}








 ?>
