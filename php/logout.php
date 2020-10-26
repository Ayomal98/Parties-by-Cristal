<?php
    session_start();
    if ($GET['logout']==1 && isset($_SESSION['loggedin']));
        unset($_SESSION['loggedin']);
        header("location:login.php");
        die();
   // }else{
      //  header("location:HB.php");
