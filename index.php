<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wunder</title>
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="application/css/style.css">

</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-4">
                <div class="logo">
                    <img class="logo__img" src="img/logo.png" alt=""">
                </div>
            </div>
            <div class="col-4">
                <div class="campanhaDiv mt-4">
                    <label><p class="campanha">Campanhas</p></label>
                </div>
            </div>
            <div class="col-4">
                <div class="user">
                    <div class="user__perfil" data-toggle="dropdown">
                        <img class="user__img perfil_home" src="img/perfil.jpg"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <ul class="menu">
                <li class="menu-item">
                    <a href=""><i class="fa-solid fa-bomb"></i></a>
                    <span class="menutext">Campanhas Pendentes</span>
                </li>
                <li class="menu-item">
                    <a href=""><i class="fa-solid fa-bomb"></i></a>
                    <span class="menutext">Campanhas Concluidas</span>
                </li>
                <li class="menu-item">
                    <a href=""><i class="fa-solid fa-bomb"></i></a>
                    <span class="menutext">Desenvolvimento</span>
                </li>
            </ul>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
</div>


<main class="container-fluid videos">
    <div class="row">
        <div class="col-4">
            <img class="card-img capa" src="img/jihokuraku2.jpg" alt="">
            <aside class="card">
                <div class="card-body">
                    <h5 class="card-title titulo">Jigokuraku</h5>
                    <div class="descrip"><p class="card-text"> Asista esse anime no bettler animes</p>
                    </div>
                    <a href="#" class="btn btn-primary btnAss">Entrar</a>
                </div>
            </aside>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
</main>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/709b7bfa2e.js" crossorigin="anonymous"></script>
</html>