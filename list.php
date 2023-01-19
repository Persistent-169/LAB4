<?php
  require_once 'connect.php';
  $data = mysqli_query($connect, "SELECT * FROM `lab4`");
  $data = mysqli_fetch_all($data);
  $last = 0;
?>

<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Социальная сеть</title>
</head>

<body>
<div class="wrapper container">
    <table class="table" style="border: 1px solid; margin: 10px">
        <tr class="tr-head">
            <th class="t-id">id</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Город</th>
            <th>Ссылка </th>
            <th> Ссылка на редактирование </th>
            <th> Ссылка на удаление </th>
        </tr>
            <?php foreach ($data as $data) {
                                            echo '
                <tr>
                 <td>' .$data[0]. '</td>
                 <td>' .$data[1]. '</td>
                 <td>' .$data[2].'</td>
                 <td>' .$data[3]. '</td>
                 <td> <a href="index.php?id=' .$data[0].'">Клик</a> </td>
                 <td> <a href="update-form.php?id=' .$data[0].'">Редактировать</a> </td>
                 <td> <a href="delete.php?id='. $data[0].'">Удалить </a> </td>';
                 $last = $data[0];}
                 ?>
    </table>

    <form action="create.php" method="post">
           <h3>Добавить новые данные</h3>
            <p>Имя</p>
            <input type="text" name="name">
            <p>Дата рождения</p>
            <input type="date" name="birth_date">
            <p>Город</p>
            <input type="text" name="city">
            <input type="hidden" name="id" value=<?=$last + 1?>>
            <button type="submit">Отправить</button>
        </form>
    </div>
    </body>

    </html>