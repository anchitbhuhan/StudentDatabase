<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="newtabcss.css">
	<link rel="stylesheet" type="text/css" href="onclickaddstudent.css">
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
<div>
  <ul>
    <li id=forhover >Home</li>
    <li id=forhover >About Us</li>
    <li id=forhover>Approvals</li>
    <li id=forhover>Admission</li>
    <li id=forhover>Academics</li>
    <li id=forhover>Research</li>
    <li id=forhover>Campus Life</li>
    <li id=forhover>Library</li>
		<span><?php echo $_SESSION['name']; ?></span>
     <button id="logoutbutton" type="submit" name="logout" >LOGOUT</button>
  </ul>
</div>

  <div class="tabContainer">

		<div class="buttonContainer">
			<button   onclick="showPanel(0,'#003366')">Personal Details</button>
    		<button  onclick="showPanel(1,'#003366')">Libray Details</button>
			<button  onclick="showPanel(2,'#003366')">Academic Details</button>
			<button  onclick="showPanel(3,'#003366')">Achievements</button>
		</div>
		<div class="tabPanel">
			<form class="form-style-9" action="includes/pdsubmit.php" method="post">
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
					Male:<input type="radio" name="gender" value="male">
					Female:<input type="radio" name="gender" value="female">
				</li>

				<li>
					HOSTELITE: YES<input type="radio" name="hostelite" value="yes" >
                    NO:<input type="radio" name="hostelite" value="no">
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
