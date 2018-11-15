<?php 

            if(isset($_POST['logout'])){
              $_SESSION['status']="disabled";
              session_destroy();
              $_SESSION = array();
              unset($_SESSION['logut']);
              header("Location:../index.php?logout=success");
            }
 ?>