<?php
    require_once '..\..\config.php';

    $sqlrequest = $pdo->prepare("DELETE FROM `users` WHERE `id` = :id");
    $sqlrequest->bindValue('id', $_GET['id']);
    $sqlrequest->execute();

    header('Location: ../auth/login.php');
?>