<?php
/* This section of code is the logout section*/
  session_start();
  session_unset();
  session_destroy();
  header("Location:index.php");
 ?>
