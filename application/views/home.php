<body>
<?php

echo '<h2>Bem vindo! ' . $_SESSION['login'] . '</h2>';
echo '<a href="?logout">Fazer logout!</a>'

?>
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
                        <img class="user__img perfil_home" src="img/perfil.jpg">
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