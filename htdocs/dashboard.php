
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
    body{
      margin:0;
      background-image: url("laptop-blur-computer-163130.jpg");
      background-size: cover;
    }
      #button1{
        margin-left: 50px;
        width:200px;
        height:150px;
        margin-top: 50px;
        background-color: #003366 ;
    border: none;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 15px;
      }
      #button1:hover{
        background-color:#0a1759;
      color: white;
      box-shadow: 0 12px 18px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      #button2{
        margin-left: 60px;
        width:200px;
        height:150px;
        background-color: #003366; /* Green */
    border: none;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 15px;

      }#button2:hover{
        background-color:#0a1759;
      color: white;
      box-shadow: 0 12px 18px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      #button3{
        margin-left: 50px;
        width:200px;
        height:150px;
        margin-top: 60px;
        margin-bottom: 50px;
        background-color: #003366 ; /* Green */
    border: none;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 15px;
      }#button3:hover{
        background-color: #0a1759;
      color: white;
      box-shadow: 0 12px 18px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      #button4  {
        margin-left: 60px;
        width:200px;
        height:150px;
        margin-bottom: 50px;
        background-color: #003366 ; /* Green */
    border: none;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 15px;
      }#button4:hover{
        background-color: #0a1759;
      color: white;
      box-shadow: 0 12px 18px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      #prologue{
        float:right;
        color:white;
        font-family:sans-serif;
      margin-right: 20px;
        font-size: 40px;
        font-weight: normal;
        margin-top: 100px;
      }

    </style>


  </head>
  <body>
<?php

   include 'header.php';?>




<button id="button1"  onclick="location.href='../STUDENTDATABASE/personaldetails.php'">Add Student</button>
<button id="button2"  onclick="location.href='../STUDENTDATABASE/viewallstudent.php'">View Student Details</button><br>
<button id="button3" onclick="location.href='deletestudent.php'">Delete Student</button>
<button id="button4"  onclick="location.href='updatestudent.php'">Update Student</button>
<p id="prologue">Welcome to DSATM <br>Students Portal</p>







  <?php include 'footer.php';?>

















</html>
