<?php

  session_start();
  unset($_SESSION["admin_id"]);
  unset($_SESSION["logged_in"]);
  session_destroy();
  header("Location: /qr-attendance-main/asset/php/login.php");

?>