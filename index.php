<?php session_start() ?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <title>login</title>
</head>
    <?php
    if (!isset($_SESSION['login'])) {

        if (isset($_POST['sub'])) {
            $logion = 'pedro';
            $pass = '123456';

            $loginForm = $_POST['login'];
            $passForm = $_POST['pass'];

            if ($logion == $loginForm && $pass == $passForm) {
                $_SESSION['login'] = true;
                header('location: index.php');
            } else {
                echo 'Erro ao envio';
            }
        }

        include('./Login/login.php');
    } else {
        if (isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        }
        include('application/views/home.php');
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/709b7bfa2e.js" crossorigin="anonymous"></script>
</body>
</html>