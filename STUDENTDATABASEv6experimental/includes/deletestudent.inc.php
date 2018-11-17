<?php
include_once 'dbh.inc.php';


$delete_id = $_POST['checkbox'];
         $id = count($delete_id );
         if (count($id) > 0)
          {
             foreach ($delete_id as $id_d)
             {


               $sql = "DELETE FROM student WHERE usn='$id_d';";
              $delete = mysqli_query($conn,$sql);
            }
        }
        header("Location: ../deletestudent.php?usn=$id_d");


 ?>
