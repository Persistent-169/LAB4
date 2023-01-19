<?php
  require_once 'connect.php';
  $id = $_GET['id'];
  mysqli_query($connect, "DELETE FROM `lab4` WHERE `lab4`.`ID` = '$id'");
  header('Location: list.php');
  ?>