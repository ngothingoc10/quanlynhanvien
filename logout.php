<?php session_start();
  unset($_SESSION['username']);
  header('Location:/dulieu/index.php');
?>
