<?php
  require_once 'connect.php';
  $name = $_POST['name'];
  $birth_date = $_POST['birth_date'];
  $city = $_POST['city'];
  $id = $_POST['id'];

  mysqli_query($connect, "INSERT INTO `lab4` (`ID`, `NAME`, `BIRTH_DATE`, `CITY`) VALUES ('$id', '$name', '$birth_date', '$city')");

  header('Location: list.php');

?>