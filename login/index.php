<?php session_start() ?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<?php
if (!isset($_SESSION['login'])) {
    if (isset($_POST['acao'])) {

        // select
        $usuario = 'Pedro';
        $senha = '123';

        $acessar = $_POST['login'];
        $pass = $_POST['senha'];

        if ($usuario === $acessar && $senha === $pass) {
            $_SESSION['login'] = $usuario;
            header("location: index.php");
        } else {
            echo 'erro';
        }
    }


    include('login.php');
} else {

    if (isset($_GET['logout'])){
        session_destroy();
        header("Location:index.php");
    }
    include('home.php');
}

?>

</body>
</html>