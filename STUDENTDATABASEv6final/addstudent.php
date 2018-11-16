<?php session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php?error=loginagain");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Student Database:Add Student</title>
      <link rel="icon" href="images/google+.png">
    <meta charset="utf-8">
    <title></title>

      <link rel="stylesheet" href="cssfiles/addstudent.css">
      <link rel="stylesheet" href="cssfiles/headerfooterstyle.css">
      <!-- <link rel="stylesheet" href="resetstylesheet.css"> -->

  </head>
  <body>
    <div style="position:fixed;width:100%;" class="">
      <div id="logo-div">
        <header id="logo-header">
          <a id="dsatm"href=https://dsatm.edu.in/><img src="images/dsatm_logo.png" alt="dsatm"/></a>
          <div id="etc">
            <a href="https://www.facebook.com/DSIorganization"><img class="social" src="images/fb.png"alt="fb"/></a>
            <a href="https://twitter.com/DSIorganization"><img class="social"src="images/twitter.png" alt="twitter"/></a>
            <a href="https://plus.google.com/112592840884555805844"><img class="social" src="images/google+0.png" alt="google"/></a>
            <a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="images/youtube.png" alt="ytb"/></a>
          </div>

        </header>
    </div>

    <div class="nav-div">
      <ul>
        <li><a  href="dashboard2.php">Dashboard</a></li>
        <li><a class="active" href="addstudent.php">Add Student</a></li>
        <li><a href="viewallstudent.php">View Student</a></li>
        <li><a href="deletestudent.php">Delete Student</a></li>
        <li><a href="UpdateStudent/updatestudent.php">Update Student</a></li>
        <li class="name"><?php echo $_SESSION['username']; ?></li>
        <form class=""  method="post">
            <button id="logout" type="submit" name="logout" >LOGOUT</button>
             <?php
           if(isset($_POST['logout'])){
             $_SESSION['status']="disabled";
             session_destroy();
             $_SESSION = array();
             unset($_SESSION['logout']);
             header("Location:index.php?logout=success");
           }

            ?>
       </form>
    </ul>
  </div>

  </div>
  <br><br><br><br><br><br><br><br><br><br>
    <div class="tabContainer">
      <div class="buttonContainer">
        <button type="button" class="button" onclick="showPanel(0,'#bdc1c9')">Personal Details</button>
        <button type="button" class="button" onclick="showPanel(1,'#bdc1c9')">Library Details</button>
        <button type="button" class="button" onclick="showPanel(2,'#bdc1c9')">Course Details</button>
        <button type="button" class="button" onclick="showPanel(3,'#bdc1c9')">Academic details</button>
        <button type="button" class="button" onclick="showPanel(4,'#bdc1c9')">Achievements</button>

      </div>
      <div class="tabPanel">
        <fieldset>
          <!-- <legend></legend> -->
        <form class="" action="includes/pdsubmit.inc.php" method="post" enctype="multipart/form-data">
            <ul>
                <li><label>&nbsp;&nbsp;USN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="usn"  placeholder="USN" required maxlength="10" pattern="^[1][Dd][Tt]\d\d[a-zA-Z][A-Za-z]\d\d\d$" /></li>
                <li><label>Name:&nbsp;</label><input type="text" name="name"  placeholder="Name" required pattern="^[A-Za-z\s]*$" /></li>
                <li><label>Phone:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="mobile"  placeholder="Phone" required maxlength="10" pattern="^\d*$" /></li>
                <li><label>DOB:&nbsp; </label><input type="date" name="dob" class="" placeholder="Date Of Birth" required /></li>
                <li><label>Address:</label>	<input type="address" name="address" class="" placeholder="Address" required /></li>
                <li><label>Image:&nbsp;</label>	<input type="file" name="image" required></li>
                <li>  <label>Male:</label><input  type="radio" name="gender" value="male"/>
                    <label>Female:</label><input type="radio" name="gender" value="female"/></li>

                <label>Hostelite: Yes:</label><input type="radio" name="hostelite" value="yes" /><br>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>No :</label><input type="radio" name="hostelite" value="no"/>



    </ul>
          <button type="submit" name="submit">Add</button>



          </form>
          </fieldset>


          <!-- </form> -->

        <!-- </fieldset> -->

      </div>
      <div class="tabPanel">
        <fieldset>
          <!-- <legend></legend> -->
        	<form  action="includes/ldsubmit.inc.php" method="post">
            <ul>
                <li><label>USN:&nbsp;&nbsp;&nbsp;</label><input type="text" name="usn" class="" placeholder="USN" required pattern="[1][Dd][Tt]\d\d[a-zA-Z][A-Za-z]\d\d\d$" /></li>
                <li><label>Library Id:&nbsp;</label>	<input type="text" name="libid" class="" placeholder="Library ID" required pattern="^\d*$" /></li>
                <li><label>Book Id:&nbsp;</label>	<input type="text" name="bookid" class="" placeholder="Book Id" required pattern="^\d*$" /></li>
                <li><label>Book Name:&nbsp;&nbsp;</label><input type="text" name="bookname" class="" placeholder="Book Name" required pattern="^[A-Za-z\s]*" /></li>
                <li><label>Date Out:</label><input type="date" name="dateout" class="" placeholder="Date Out" required /></li>
                <li><label>Due date:&nbsp;</label>	<input type="date" name="duedate" class="" placeholder="Due Date" required /></li>



    </ul>
          <button type="submit" name="submit">Add</button>



          </form>
          </fieldset>


          <!-- </form> -->

        <!-- </fieldset> -->
      </div>
      <div class="tabPanel">
        <fieldset>


          <form    action="includes/csubmit.inc.php" method="post">
      			<ul>
      			<li>
      					<input style="margin-left:14em;" type="text" name="usn" class="" placeholder="USN" required pattern="^[1][Dd][Tt]\d\d[a-zA-Z][A-Za-z]\d\d\d$" />
      			</li>
      			<table class="coursetable">


      				<tr>
      					<th>Sub Name</th>
      					<th>Sub Code</th>
      					<th>Faculty Name</th>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub1" type="text" name="sub_name1" value="" required pattern="^[A-Za-z\s]*" /></td>
      					<td><input  type="text" name="sub_code1" value="" required/></td>
      					<td><input  type="text" name="faculty_name1" value="" required pattern="^[A-Za-z\s]*" /></td>
      				</tr>

      				<tr>
      					<td><input  placeholder="sub2" type="text" name="sub_name2" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input  type="text" name="sub_code2" value="" required></td>
      					<td><input  type="text" name="faculty_name2" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub3" type="text" name="sub_name3" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input  type="text" name="sub_code3" value="" required></td>
      					<td><input  type="text" name="faculty_name3" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub4" type="text" name="sub_name4" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input  type="text" name="sub_code4" value="" required></td>
      					<td><input  type="text" name="faculty_name4" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub5" type="text" name="sub_name5" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input  type="text" name="sub_code5" value="" required></td>
      					<td><input  type="text" name="faculty_name5" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub6" type="text" name="sub_name6" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input  type="text" name="sub_code6" value="" required></td>
      					<td><input  type="text" name="faculty_name6" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub7" type="text" name="sub_name7" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input type="text" name="sub_code7" value="" required></td>
      					<td><input  type="text" name="faculty_name7" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>

      				<tr>
      					<td><input  placeholder="sub8" type="text" name="sub_name8" value="" required pattern="^[A-Za-z\s]*"></td>
      					<td><input  type="text" name="sub_code8" value="" required></td>
      					<td><input  type="text" name="faculty_name8" value="" required pattern="^[A-Za-z\s]*"></td>
      				</tr>
      			</table>

      			</ul>
              <button style="margin-left:27em;" type="submit" name="submit">Add</button>
      </form>

      </fieldset>
      </div>
      <div class="tabPanel">

        <fieldset>
          <legend></legend>
        	<form class="form-style-9" action="includes/adsubmit.inc.php" method="post">
            <ul>
                <li><label>USN:&nbsp;&nbsp;&nbsp;</label>	<input type="text" name="usn" class="" placeholder="USN" required pattern="^[1][Dd][Tt]\d\d[a-zA-Z][A-Za-z]\d\d\d$" /></li>
                <li><label>Branch:&nbsp;</label>	<input type="text" name="branch" class="" placeholder="Branch" required pattern="^[A-Za-z\s]*" /></li>
                <li><label>Semester:&nbsp;</label><input type="text" name="sem" class="" placeholder="Semester" required  /></li>
                <li><label>Ext. Agg:</label>	<input type="text" name="ext_agg" class="" placeholder="External Agg." required pattern="^(10\.[0][0]||\d\.\d\d||[0-9]||10)$" /></li>
                <li><label>CN lab:&nbsp;</label><input type="text" name="cnlab" class="" placeholder="CN IA" required  /></li>
                <li><label>DBMS lab:&nbsp;</label><input type="text" name="dbmslab" class="" placeholder="DBMS IA" required  /></li>



    </ul>
    <table style="margin-right:100px;background-color:#003366;">
      <tr style="color:white;">
      <th>JAVA</th>
      <th>DBMS</th>
      <th>AI/CLOUD</th>
      <th>ATC</th>
      <th>CN</th>
      <th>ETM</th>
    </tr>
    <tr>
      <td><input type="text" name="java_ia1" value="" placeholder="IA1"></td>
      <td><input type="text" name="dbms_ia1" value="" placeholder="IA1"></td>
      <td><input type="text" name="ac_ia1" value="" placeholder="IA1"></td>
      <td><input type="text" name="atc_ia1" value="" placeholder="IA1"></td>
      <td><input type="text" name="cn_ia1" value="" placeholder="IA1"></td>
      <td><input type="text" name="etm_ia1" value="" placeholder="IA1"></td>
    </tr>
    <tr>
      <td><input type="text" name="java_ia2" value="" placeholder="IA2"></td>
      <td><input type="text" name="dbms_ia2" value="" placeholder="IA2"></td>
      <td><input type="text" name="ac_ia2" value="" placeholder="IA2"></td>
      <td><input type="text" name="atc_ia2" value="" placeholder="IA2"></td>
      <td><input type="text" name="cn_ia2" value="" placeholder="IA2"></td>
      <td><input type="text" name="etm_ia2" value="" placeholder="IA2"></td>
    </tr>
    <tr>
      <td><input type="text" name="java_ia3" value="" placeholder="IA3"></td>
      <td><input type="text" name="dbms_ia3" value="" placeholder="IA3"></td>
      <td><input type="text" name="ac_ia3" value="" placeholder="IA3"></td>
      <td><input type="text" name="atc_ia3" value="" placeholder="IA3"></td>
      <td><input type="text" name="cn_ia3" value="" placeholder="IA3"></td>
      <td><input type="text" name="etm_ia3" value="" placeholder="IA3"></td>
    </tr>
    </table>
          <button type="submit" name="submit">Add</button>



          </form>
          </fieldset>


          </form>

        </fieldset>

      </div>
      <div class="tabPanel">
        <fieldset>
          <legend></legend>
          <form class="form-style-9" action="includes/achsubmit.inc.php" method="post">
            <ul>
                <li><label>USN:&nbsp;&nbsp;&nbsp;</label>	<input type="text" name="usn" class="" placeholder="USN" required pattern="[1][Dd][Tt]\d\d[a-zA-Z][A-Za-z]\d\d\d$" /></li>
                <li><label>Projects:&nbsp;</label>	<input type="text" name="project" class="" placeholder="Projects" /></li>
                <li><label>Internships:&nbsp;</label>	<input type="text" name="internships" class="" placeholder="Internships"/></li>
                <li><label>Paper Presentation:&nbsp;&nbsp;</label><input type="text" name="paper_present" class="" placeholder="Paper Presentation" /></li>
                <li><label>Certification:</label><input type="text" name="certifications" class="" placeholder="Certifications" /></li>



    </ul>
          <button type="submit" name="submit">Add</button>



          </form>
          </fieldset>


          </form>

        </fieldset>

      </div>

    </div>

  </body>
  <script src="jsfiles/togglescript.js"></script>
</html>


<?php
if(!empty($_GET)){
  if(isset($_GET['usn'])){
    if($_GET['usn']=='duplicate'){

      echo '<script>

      alert("Duplicate Entry");

  </script>';
    }

  }

}

 ?>
