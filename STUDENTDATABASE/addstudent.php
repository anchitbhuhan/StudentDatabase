<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
        <li class="name"><?php echo $_SESSION['name']; ?></li>
        <form class="" action="index.php?logout=success" method="post">
             <button id="logout" type="submit" name="logout" >LOGOUT</button>
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
                <li><label>&nbsp;&nbsp;USN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="usn"  placeholder="USN" /></li>
                <li><label>Name:&nbsp;</label><input type="text" name="name"  placeholder="Name" /></li>
                <li><label>Phone:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="mobile"  placeholder="Phone" /></li>
                <li><label>DOB:&nbsp; </label><input type="date" name="dob" class="" placeholder="Date Of Birth" /></li>
                <li><label>Address:</label>	<input type="address" name="address" class="" placeholder="Address" /></li>
                <li><label>Image:&nbsp;</label>	<input type="file" name="image"></li>
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
                <li><label>USN:&nbsp;&nbsp;&nbsp;</label><input type="text" name="usn" class="" placeholder="USN" /></li>
                <li><label>Library Id:&nbsp;</label>	<input type="text" name="libid" class="" placeholder="Library ID" /></li>
                <li><label>Book Id:&nbsp;</label>	<input type="text" name="bookid" class="" placeholder="Book Id" /></li>
                <li><label>Book Name:&nbsp;&nbsp;</label><input type="text" name="bookname" class="" placeholder="Book Name" /></li>
                <li><label>Date Out:</label><input type="date" name="dateout" class="" placeholder="Date Out" /></li>
                <li><label>Due date:&nbsp;</label>	<input type="date" name="duedate" class="" placeholder="Due Date" /></li>



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
      					<input style="margin-left:14em;" type="text" name="usn" class="" placeholder="USN" />
      			</li>
      			<table class="coursetable">


      				<tr>
      					<th>Sub Name</th>
      					<th>Sub Code</th>
      					<th>Faculty Name</th>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub1" type="text" name="sub_name1" value=""/></td>
      					<td><input  type="text" name="sub_code1" value=""/></td>
      					<td><input  type="text" name="faculty_name1" value=""/></td>
      				</tr>

      				<tr>
      					<td><input  placeholder="sub2" type="text" name="sub_name2" value=""></td>
      					<td><input  type="text" name="sub_code2" value=""></td>
      					<td><input  type="text" name="faculty_name2" value=""></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub3" type="text" name="sub_name3" value=""></td>
      					<td><input  type="text" name="sub_code3" value=""></td>
      					<td><input  type="text" name="faculty_name3" value=""></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub4" type="text" name="sub_name4" value=""></td>
      					<td><input  type="text" name="sub_code4" value=""></td>
      					<td><input  type="text" name="faculty_name4" value=""></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub5" type="text" name="sub_name5" value=""></td>
      					<td><input  type="text" name="sub_code5" value=""></td>
      					<td><input  type="text" name="faculty_name5" value=""></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub6" type="text" name="sub_name6" value=""></td>
      					<td><input  type="text" name="sub_code6" value=""></td>
      					<td><input  type="text" name="faculty_name6" value=""></td>
      				</tr>
      				<tr>
      					<td><input  placeholder="sub7" type="text" name="sub_name7" value=""></td>
      					<td><input type="text" name="sub_code7" value=""></td>
      					<td><input  type="text" name="faculty_name7" value=""></td>
      				</tr>

      				<tr>
      					<td><input  placeholder="sub8" type="text" name="sub_name8" value=""></td>
      					<td><input  type="text" name="sub_code8" value=""></td>
      					<td><input  type="text" name="faculty_name8" value=""></td>
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
                <li><label>USN:&nbsp;&nbsp;&nbsp;</label>	<input type="text" name="usn" class="" placeholder="USN" /></li>
                <li><label>Branch:&nbsp;</label>	<input type="text" name="branch" class="" placeholder="Branch" /></li>
                <li><label>Semester:&nbsp;</label><input type="text" name="sem" class="" placeholder="Semester" /></li>
                <li><label>IA1:&nbsp;&nbsp;</label><input type="text" name="ia1" class="" placeholder="IA1" /></li>
                <li><label>IA2:</label><input type="text" name="ia2" class="" placeholder="IA2" /></li>
                <li><label>IA3:&nbsp;</label><input type="text" name="ia3" class="" placeholder="IA3" /></li>
                <li><label>Ext. Agg:</label>	<input type="text" name="ext_agg" class="" placeholder="External Agg." /></li>



    </ul>
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
                <li><label>USN:&nbsp;&nbsp;&nbsp;</label>	<input type="text" name="usn" class="" placeholder="USN" /></li>
                <li><label>Projects:&nbsp;</label>	<input type="text" name="project" class="" placeholder="Projects" /></li>
                <li><label>Internships:&nbsp;</label>	<input type="text" name="internships" class="" placeholder="Internships" /></li>
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
