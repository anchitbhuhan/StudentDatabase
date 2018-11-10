

<html>
  <head>

    <link rel="stylesheet" type="text/css" href="newproject.css">
    <title>DSTAM</title>
    <link rel="icon" href="dsatm_logo.png">

  </head>
  <body>

          <div>
          <header>
            <ul>
              <li><a  href="https://www.youtube.com/user/DSIorganization" target=_blank><img class="social" src="youtube.png" /></a><li>
              <li><a  href="https://plus.google.com/112592840884555805844" target=_blank><img class="social" src="google+.png"/></a></li>
              <li><a  href="https://twitter.com/DSIorganization" target=_blank><img class="social" src="twitter.png"/></a></li>
              <li><a  href="/www.facebook.com/DSIorganization" target=_blank><img class="social" src="fb.png"/></a></li>
              <a href="newp.html"><img id="logo"  src="dsatm_logo.png" width=350px length=300px/></a>
          </header>
        </div>





          <div id="navi">
            <nav class="home" >
              <a class="about" href="https://dsatm.edu.in/">Home</a>
              <a class="about" href="https://dsatm.edu.in/index.php/about-dsatm">About Us</a>
              <a class="about" href="https://dsatm.edu.in/index.php/approvals">Approvals</a>
              <a class="about" href="https://dsatm.edu.in/index.php/admission">Admission</a>
              <a class="about" href="https://dsatm.edu.in/index.php/academics">Academics</a>
              <a class="about" href="https://dsatm.edu.in/index.php/Campus-life">Campus Life</a>

              <?php
                if(isset($_SESSION['u_id'])){

                echo  '<form style="float:right"  action="includes/logout.inc.php" method="POST">
                  <button style="float:right" type="submit" name="submit">LOGOUT</button>
                  </form>';
                }
                else{  echo '<a href="signup.php"  style="float:right;text-decoration:none">Sign Up</a>
                  <form class="formclass" action="includes/login.inc.php" method="post" style="float:right;">
                                <input style="padding:8px;" type="text" name="uid" placeholder="Username/e-mail">
                                <input style="padding:8px;" type="password" name="pwd" placeholder="password">
                                <button type="submit" name="submit">Log In</button>
                            </form>'
                            ;

                }

              ?>
            </nav>
          </div>
