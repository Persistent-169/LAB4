<?php
  require_once 'connect.php';
  $name = $_POST['name'];
  $city = $_POST['city'];
  $date = $_POST['date'];
  $id = $_POST['id'];
  mysqli_query($connect, "UPDATE `lab4` SET `NAME` = '$name', `CITY` = '$city', `BIRTH_DATE` = '$date' WHERE `lab4`.`id` = '$id'");
  header('Location: list.php');


?>