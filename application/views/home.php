<body>
<header>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-4 user">
                <div class="user__perfil" data-toggle="dropdown">
                    <img class="user__img perfil_home" src="img/perfil.jpg">
                </div>
                <div class="nameLogin">
                    <?php
                    echo "<h2 class='nameacss'>{$_SESSION['login']}</h2>";
                    ?>
                </div>
                <div class="sair">
                    <?php
                    echo '<a href="?logout">Sair</a>';
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="campanhaDiv mt-4">
                    <label><p class="campanha">Módulos</p></label>
                </div>
            </div>
        </div>
    </div>
</header>