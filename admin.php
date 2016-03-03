<?php
session_start();
if(!$_SESSION['PASSWORD'] = 'PASSWORD'){
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
  <?php require "CORE/head.php"; ?>
  <body>
    <?php include "CORE/admin_navbar.php"; ?>
  </body>
</html>
