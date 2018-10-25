<!DOCTYPE html>
<html>
<head>
	<title>Tabs</title>
	<link rel="stylesheet" type="text/css" href="toggle.css">
</head>
<body>
	<h1 class="title">Tabs</h1>
	<div class="tabContainer">
		<div class="buttonContainer">
			<button onclick="showPanel(0,'#f44336')">Personal Details</button>
			<button onclick="showPanel(1,'#fcaf50')">Libray Details</button>
			<button onclick="showPanel(2,'#2196f3')">Academic Details</button>
			<button onclick="showPanel(3,'#ff5722')">Achievements</button>  
		</div>
		<div class="tabPanel"><form class="" action="" method="post"  enctype="multipart/form-data">
      USN:<input type="text" name="usn" placeholder="USN"><br>

      Name:<input type="text" name="name" placeholder="Name"><br>

      Mobile:<input type="text" name="mobile" placeholder="Mobile"><br>

      DOB:<input type="date" name="dob" placeholder="DOB"><br>

      HOSTELITE:YES<input type="radio" name="hostelite" value="yes" ><br>
                    NO:<input type="radio" name="hostelite" value="no"/><br />
      GENDER:Male<input type="radio" name="gender" value="male"><br>
      Female<input type="radio" name="gender" value="female"><br>

      ADDRESS:<input type="text" name="address" placeholder="address"><br>
      Upload Image: <input type="file" name="image"><br>
      <input type="submit" name="submit">



    </form></div>
		<div class="tabPanel">    <form class="" action="includes/ldsubmit.php" method="post">
      USN:<input type="text" name="usn" placeholder="USN"><br>

      Library Id:<input type="text" name="libid" placeholder="Library Id"><br>

      Book Id:<input type="text" name="bookid" placeholder="Book Id"><br>

      Book Name:<input type="text" name="bookname" placeholder="Book Name"><br>

      Date-out:<input type="Date" name="dateout" placeholder="Date Out"><br>
      Due Date:<input type="Date" name="duedate" placeholder="Due date"><br>
      <input type="submit" name="submit">



    </form></div>
		<div class="tabPanel"><form action="includes/achsubmit.php" method="post">
      <input type="text" name="usn" placeholder="USN">
      <br>
      <input type="text" name="project" placeholder="Project">
      <br>
      <input type="text" name="internships" placeholder="Internships">
      <br>
      <input type="text" name="certifications" placeholder="Certifications">
      <br>
      <input type="text" name="paper_present" placeholder="Paper Presentations">
      <br>
      <input type="submit" name="submit">
    </form></div>
		<div class="tabPanel"><form action="includes/csubmit.php" method="post">
      <input type="text" name="usn" placeholder="USN">
      <br>
      <input type="text" name="sub_code" placeholder="Subject Code">
      <br>
      <input type="text" name="sub_name" placeholder="Subject Name">
      <br>
      <input type="text" name="faculty_name" placeholder="Faculty">
      <br>
      <input type="submit" name="submit">
    </form></div>
	</div>
<script src="togglescript.js"></script>
</body>
</html>