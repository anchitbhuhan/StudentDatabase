<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="headerfooterstyle.css">
    <title></title>
  </head>
  <body>


    <div style="position:fixed;width:100%;" class="">
      <div id="logo-div">
        <header id="logo-header">
          <a id="dsatm"href=https://dsatm.edu.in/><img src="dsatm_logo.png" alt="dsatm"/></a>
          <div id="etc">
            <a href="https://www.facebook.com/DSIorganization"><img class="social" src="fb.png"alt="fb"/></a>
            <a href="https://twitter.com/DSIorganization"><img class="social"src="twitter.png" alt="twitter"/></a>
            <a href="https://plus.google.com/112592840884555805844"><img class="social" src="google+0.png" alt="google"/><a/>
            <a href="https://www.youtube.com/user/DSIorganization"><img class="social"src="youtube.png" alt="ytb"/></a>
          </div>

        </header>
    </div>

    <div class="nav-div">
      <ul>
        <li><a class="active" href="#home">Dashboard</a></li>
        <li><a href="onclickaddstudent.php">Add Student</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <li class="name"><?php echo $_SESSION['name']; ?></li>
        <form class="" action="index.php?logout=success" method="post">
             <button id="logout" type="submit" name="logout" >LOGOUT</button>
        </form>
    </ul>
  </div>

  </div>
</body>
</html>
