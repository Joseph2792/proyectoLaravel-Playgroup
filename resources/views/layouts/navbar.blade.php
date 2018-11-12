
<header class="col-12 fixed-top">
    <nav id="nav-mobile" class="cont-navLogin navbar navbar-expand-lg navbar-light">
        <div class="cont-logo-mobile">
            <img src="img/logo.svg" alt="logo">
        </div>
        <form action="get">
            <div class="cont-search-mobile">
                <input type="search" placeholder="Buscar..." name="q" id="buscadorNav">
                <button class="" type="submit">
                    <i class="fa fa-search icon"></i>
                </button>
            </div>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMobile" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse cont-nav-mobile" id="navMobile">
            <div class="cont-icon-nav">
            <?php if ( isLogged() ) : ?>
                <a class="ico-nav" href="perfil.php" title="Mi Perfil">
                    <img class="user-photo-nav" src="data/avatars/<?= isset($user['avatar'])? $user['avatar']: 'default.svg' ?>" alt="">
                    <span><?= isset($user['nickname'])? $user['nickname']: 'User Default'  ?></span>                                        
                    
                </a>
                <a class="ico-nav" href="index.php" title="Home">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
                <a class="ico-nav" href="time-line.php" title="Mis Publicaciones">
                    <i class="fa fa-user"></i>
                    <span>Mis Post</span>
                </a>
                <a class="ico-nav" href="listado-amigos.php" title="Mis Amigos">
                    <i class="fas fa-users"></i>
                    <span>Amigos</span>
                </a>
                <a class="ico-nav" href="logout.php" title="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span>
                </a>
            <?php else : ?>
                <a class="ico-nav" href="login-Registro.php" title="Login">
                    <i class="fa fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>
            <?php endif; ?>
                <a class="ico-nav" href="FAQ.php" data-toggle="tooltip" data-placement="bottom" title="Preguntas Frecuentes">
                    <i class="fa fa-question-circle"></i>
                    <span>Ayuda</span>
                </a>
            </div>
        </div>
    </nav>

    <nav id="nav-desk" class="cont-navLogin">
        <div class="cont-logo">
            <img src="img/logo.svg" alt="logo">
        </div>
        <div class="cont-nav">
            <div class="cont-iconos">
                <form action="get">
                    <div class="cont-search">
                        <input type="search" placeholder="Buscar grupos o personas..." name="q" id="buscadorNav">
                        <button class="" type="submit">
                            <i class="fa fa-search icon"></i>
                        </button>
                    </div>
                </form>
                <?php if ( isLogged() ) : ?>
                <a class="ico-nav" href="index.php" title="Home">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
                <a class="ico-nav" href="time-line.php" title="Mis Publicaciones">
                    <i class="fa fa-user"></i>
                    <span>Mis Post</span>
                </a>
                <a class="ico-nav" href="listado-amigos.php" title="Mis Amigos">
                    <i class="fas fa-users"></i>
                    <span>Amigos</span>
                </a>
                <?php endif; ?>

                <a class="ico-nav" href="FAQ.php" data-toggle="tooltip" data-placement="bottom" title="Preguntas Frecuentes">
                    <i class="fa fa-question-circle"></i>
                    <span>Ayuda</span>
                </a>
                <?php if ( isLogged() ) : ?>
                    <a class="ico-nav" href="logout.php" title="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Cerrar Sesión</span>
                    </a>
                    <a class="ico-nav" href="perfil.php" title="Mi Perfil">
                        <img class="user-photo-navdesk" src="data/avatars/<?= isset($user['avatar'])? $user['avatar']: 'default.svg' ?>" alt="">
                        <span><?= isset($user['nickname'])? $user['nickname']: 'User Default' ?></span>
                    </a>
                <?php else : ?>
                    <a class="ico-nav" href="login-Registro.php" title="Login">
                        <i class="fa fa-sign-in-alt"></i>
                        <span>Iniciar Sesión</span>
                    </a>
			    <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
