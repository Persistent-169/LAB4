<?php
  require_once 'connect.php';
  $data_id = $_GET['id'];
  $data = mysqli_query($connect, "SELECT * FROM `lab4` WHERE `ID` = '$data_id' ");
  $data = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Социальная сеть</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
<div class="wrapper container">

    <header class="header container">
        <img class="logo" src="images\logo.jpg">
        <button class="settle">Настройки</button>
    </header>

    <main class="content">
        <div class="adds container">
            <button class="go_to first_add">Профиль</button>
            <button class="go_to">Друзья</button>
            <button class="go_to">Фотографии</button>
            <button class="go_to">Видеозаписи</button>
            <button class="go_to">Аудиозаписи</button>
            <button class="go_to">Сообщения</button>
            <button class="go_to">Сообщества</button>
            <button class="go_to">Новости</button>
        </div>
        <div class="main container">
            <div class="heading">
                <div class="name"><?= $data['NAME'] ?></div>
                <div class="net">в сети</div>
            </div>

            <div class="prof">
                <div class="prof_inf">
                    <img src="images\av.jpg" class="av">
                    <div class="actions">
                        <button class="action message">Написать сообщение</button>
                        <button class="action add_friend">Добавить в друзья</button>
                    </div>
                    <div class="followers">7 подписчиков</div>
                    <button class="news">Новости</button>
                    <div class="friends">Друзья</div>
                    <div class="friends_photo">
                        <img class="friend_photo" src="images\Кристина.jpg">
                        <img class="friend_photo" src="images\Юлия.jpg">
                        <img class="friend_photo" src="images\Семен.jpg">
                        <img class="friend_photo" src="images\Настя.jpg">
                    </div>
                    <div class="friends_photo">
                        <img class="friend_photo" src="images\Денисjpg.jpg">
                        <img class="friend_photo" src="images\Арина.jpg">
                        <img class="friend_photo" src="images\Ира.jpg">
                        <img class="friend_photo" src="images\Саша.jpg">
                    </div>
                    <div class="friends">Друзья онлайн</div>
                    <div class="friends_photo first">
                        <img class="friend_photo" src="images\Родион.jpg">
                        <img class="friend_photo" src="images\Кристина.jpg">
                        <img class="friend_photo" src="images\Арина.jpg">
                        <img class="friend_photo" src="images\Иван.jpg">
                    </div>
                    <div class="friends_photo second">
                        <img class="friend_photo" src="images\ТДИ.jpg">
                        <img class="friend_photo" src="images\Асия.jpg">
                        <img class="friend_photo" src="images\Илья.jpg">
                        <img class="friend_photo" src="images\Ира.jpg">
                    </div>
                </div>

                <div class="notes">
                    <div class="status">Я мое солнце, я же моя луна</div>
                    <div class="info">
                        <p class="inf_part">Город:<?= $data['CITY'] ?></p>
                        <p class="inf_part">День рождения: <?= $data['BIRTH_DATE'] ?></p>
                        <p class="inf_part">Семейное положение: не замужем</p>
                        <button class="additional_info">Показать подробную информацию</button>
                    </div>
                    <div class="photos">
                        <div class="photos_caption">Фотографии</div>
                        <div class="photos_items">
                            <img src="images\Фото1.jpg" class="my_photo">
                            <img src="images\Фото2.jpg" class="my_photo">
                            <img src="images\Фото3.jpg" class="my_photo">
                        </div>
                    </div>
                    <div class="posts">
                        <div class="posts_caption">
                            <p>2 записи</p>
                            <button class="search">Поиск</button>
                        </div>
                        <div class="post">
                            <div class="post_minit"><img src="images\av.jpg" class="min"></div>
                            <div class="post_info">
                                <p class="name_post"><?= $data['NAME'] ?></p>
                                <p class="post_text">для всеобщего блага и моего душевного спокойствия каждую осень
                                    в ноябре мне нужно перечитывать романтический манифест и письма к молодому поэту
                                    НО я не могу найти бумажную версию со своими заметками ни первой ни второй поэтому
                                    весь мир будет гореть (c)</p>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post_minit"><img src="images\av.jpg" class="min"></div>
                            <div class="post_info">
                                <p class="name_post"><?= $data['NAME'] ?></p>
                                <p class="post_text">нашла еще одну причину, по которой старость - так себе идея</p>
                            </div>
                        </div>
                    </div>
                    <a href="list.php" style="padding: 20px">Общий список </a>
                </div>
            </div>
        </div>
    </main>


</div>
</body>

</html>