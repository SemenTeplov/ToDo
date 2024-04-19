<?php
    require_once '..\..\config.php';

    $sqlrequest = $pdo->prepare("UPDATE `users` SET `avatar_img` = :avatar_img WHERE `id` = :id");
    $sqlrequest->bindValue('avatar_img', $_POST['avatar_img']);
    $sqlrequest->bindValue('id', $_POST['id']);
    $sqlrequest->execute();

    header('Location: ../auth/login.php');
?>