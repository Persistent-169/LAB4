<?php
  require_once 'connect.php';
  $data_id = $_GET['id'];
  $data = mysqli_query($connect, "SELECT * FROM `lab4` WHERE `ID` = '$data_id' ");
  $data = mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Изменение</title>
</head>
<body>
    <div>
    <form action="do_update.php" method="post">
        <input type="hidden" name="id" value="<?= $data['ID'] ?>">
        <p>Имя</p>
        <input type="text" name="name" value="<?= $data['NAME'] ?>">
        <p>Город</p>
        <input type="text" name="city" value="<?= $data['CITY']?>">
        <p>Дата рождения</p>
        <input type="date" name="date" value="<?= $data['BIRTH_DATE'] ?>">
        <button type="submit">Обновить</button>
    </form>
</div>
</body>
</html>