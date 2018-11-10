<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="newtabcss.css">
	<link rel="stylesheet" type="text/css" href="onclickaddstudent.css">
	<link rel="stylesheet" href="tablestylesheet.css">
	<!-- <link rel="stylesheet" href="resetstylesheet.css"> -->
</head>
<body>
	<header>
<a id="dsatm"href=https://dsatm.edu.in/><img src="dsatm_logo.png" alt="dsatm"/></a>
<div id="etc">
<a href="https://www.facebook.com/DSIorganization"><img class="social" src="fb.png"alt="fb"/></a>
<a href="https://twitter.com/DSIorganization"><img class="social"src="twitter.png" alt=twitter/></a>
<a href="https://plus.google.com/112592840884555805844"><img class="social" src="google+0.png" alt=google/><a/>
<a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="youtube.png" alt=ytb/></a>
</div>
</header>

<div class="nav">
  <ul>
    <li id=forhover ><a  href="dashboard2.php">Dashboard</a></li>
    <li id=forhover class="active" >	<a  href="#">Add Student</a></a></li>
    <li id=forhover>	<a href="viewallstudent.php">View Student</a></li>
		<li id=forhover><a href="viewallstudent.php">Delete Student</a></li>
		<li class="name"><?php echo $_SESSION['name']; ?></li>
     <button id="logoutbutton" type="submit" name="logout" >LOGOUT</button>
  </ul>
</div>

	<br>
  <div class="tabContainer">

		<div class="buttonContainer">
			<button style="width:20%;"  onclick="showPanel(0,'#003366')">Personal Details</button>
    		<button style="width:20%;" onclick="showPanel(1,'#003366')">Libray Details</button>
				<button style="width:20%;" onclick="showPanel(2,'#003366')">Course Details</button>
			<button style="width:20%;" onclick="showPanel(3,'#003366')">Academics Details</button>
			<button style="width:20%;" onclick="showPanel(4,'#003366')">Achievements</button>
		</div>
		<div class="tabPanel">
			<form class="form-style-9" action="includes/pdsubmit.php" method="post" enctype="multipart/form-data">
			  <ul>
				<li>
    				<input type="text" name="usn" class="field-style field-split align-left" placeholder="USN" />
    				<input type="text" name="name" class="field-style field-split align-right" placeholder="Name" />

				</li>

				<li>
    				<input type="text" name="mobile" class="field-style field-split align-left" placeholder="Phone" />
    				<input type="date" name="dob" class="field-style field-split align-right" placeholder="Date Of Birth" />
				</li>

				<li>
					<input type="address" name="address" class="field-style field-full align-none" placeholder="Address" />

				</li>
				<li>
						<input type="file" name="image">
				</li>
				<li>
					Male:<input  type="radio" name="gender" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Female:<input type="radio" name="gender" value="female">
				</li>

				<li>
					Hostelite:&nbsp; Yes<input type="radio" name="hostelite" value="yes" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    No:<input type="radio" name="hostelite" value="no">
				</li>


				<li>
					<input type="submit" value="Submit" name="submit" />
				</li>

			  </ul>
</form>


		</div>
		<div class="tabPanel">
			<form class="form-style-9" action="includes/ldsubmit.php" method="post">
			  <ul>
				<li>
    				<input type="text" name="usn" class="field-style field-split align-left" placeholder="USN" />
    				<input type="text" name="libid" class="field-style field-split align-right" placeholder="Library ID" />

				</li>

				<li>
    				<input type="text" name="bookid" class="field-style field-split align-left" placeholder="Book Id" />
    				<input type="text" name="bookname" class="field-style field-split align-right" placeholder="Book Name" />
				</li>

				<li>
					Date Out:<input type="date" name="dateout" class="field-style field-full align-none" placeholder="Date Out" />
					Due date:<input type="date" name="duedate" class="field-style field-full align-none" placeholder="Due Date" />
				</li>



				<li>
					<input type="submit" value="Submit" name="submit" />
				</li>

			  </ul>
</form>
		</div>

	<div  class="tabPanel">
		<form style="width:500px;height:450px;"  class="form-style-9" action="includes/csubmit.php" method="post">
			<ul>
			<li>
					<input type="text" name="usn" class="field-style field-split align-left" placeholder="USN" />


			</li>
			<table class="coursetable">


				<tr>
					<th style="width:25%;">Sub Name</th>
					<th style="width:25%;">Sub Code</th>
					<th style="width:50%;">Faculty Name</th>
				</tr>
				<tr>
					<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub1" type="text" name="sub_name1" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;"  type="text" name="sub_code1" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name1" value=""></td>
				</tr>

				<tr>
					<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub2" type="text" name="sub_name2" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code2" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name2" value=""></td>
				</tr>
				<tr>
					<<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub3" type="text" name="sub_name3" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code3" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name3" value=""></td>
				</tr>
				<tr>
					<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub4" type="text" name="sub_name4" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code4" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name4" value=""></td>
				</tr>
				<tr>
					<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub5" type="text" name="sub_name5" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code5" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name5" value=""></td>
				</tr>
				<tr>
					<<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub6" type="text" name="sub_name6" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code6" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name6" value=""></td>
				</tr>
				<tr>
					<<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub7" type="text" name="sub_name7" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code7" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name7" value=""></td>
				</tr>

				<tr>
					<<td><input style="width:200px;height:20px;border: 1px solid #003366;border-radius: 4px;" placeholder="sub8" type="text" name="sub_name8" value=""></td>
					<td><input style="width:50px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="sub_code8" value=""></td>
					<td><input style="width:150px;height:20px;border: 1px solid #003366;border-radius: 4px;" type="text" name="faculty_name8" value=""></td>
				</tr>
			</table>
	<!--
				<li>
						<input type="text" name="sub_code" class="field-style field-split align-right" placeholder="Subject Code" />
						<input type="text" name="sub_name" class="field-style field-split align-left" placeholder="Subject Name" />

				</li>

				<li>
					<input type="text" name="faculty_name" class="field-style field-full align-none" placeholder="Faculty Name" />

				</li> -->



			<li>
				<input type="submit" value="Submit" name="submit" />
			</li>

			</ul>
</form>
	</div>
		<div class="tabPanel">
			<form class="form-style-9" action="includes/adsubmit.php" method="post">
			  <ul>
				<li>
    				<input type="text" name="usn" class="field-style field-split align-left" placeholder="USN" />
    				<input type="text" name="branch" class="field-style field-split align-right" placeholder="Branch" />

				</li>

				<li>
    				<input type="text" name="sem" class="field-style field-split align-left" placeholder="Semester" />
    				<input type="text" name="ia1" class="field-style field-split align-right" placeholder="IA1" />
				</li>

				<li>
					<input type="text" name="ia2" class="field-style field-full align-none" placeholder="IA2" />
				</li>
				<li>
					<input type="text" name="ia3" class="field-style field-full align-none" placeholder="IA3" />
				</li>
				<li>
					<input type="text" name="ext_agg" class="field-style field-full align-none" placeholder="External Agg." />
				</li>
				<li>
					<input type="submit" value="Submit" name="submit" />
				</li>

			  </ul>
</form>

		</div>
		<div class="tabPanel">
			<form class="form-style-9" action="includes/achsubmit.php" method="post">
			<ul>
				<li>
    				<input type="text" name="usn" class="field-style field-split align-left" placeholder="USN" />


				</li>

				<li>
    				<input type="text" name="project" class="field-style field-split align-left" placeholder="Projects" />

				</li>

				<li>
					<input type="text" name="internships" class="field-style field-full align-none" placeholder="Internships" />
				</li>

				<li>
					<input type="text" name="paper_present" class="field-style field-full align-none" placeholder="Paper Presentation" />
				</li>

				<li>
					<input type="text" name="certifications" class="field-style field-full align-none" placeholder="Certifications" />
				</li>

				<li>
					<input type="submit" value="Submit" name="submit" />
				</li>

			  </ul>
			 </form>

		</div>




  </div>












<br>


<div>
	<footer style="margin-top: 0px;">
  <pre>© 2018 Dayananda Sagar Institutions . All Rights Reserved.</pre>
  </footer>s
</div>

<script src="togglescript.js"></script>

</body>
</html>

<?php
if(!empty($_GET)){
  if($_GET['error']=='format'){

    echo '<script>

    alert("Unsupported image format");

</script>';

  }
}
 ?>
