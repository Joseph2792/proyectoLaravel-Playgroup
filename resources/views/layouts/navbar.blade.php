
<header class="col-12 fixed-top">
<!--navbar mobile-->
    <nav id="nav-mobile" class="cont-navLogin navbar navbar-expand-lg navbar-light">
        <div class="cont-logo-mobile">
            <img src="{{ asset('img/logo.svg') }}" alt="logo">
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
            <!--poner if de logueo-->
            @guest    
                <a class="ico-nav" href="{{ route('login') }}" title="Login">
                    <i class="fa fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>
                <a class="ico-nav" href="FAQ.php" data-toggle="tooltip" data-placement="bottom" title="Preguntas Frecuentes">
                    <i class="fa fa-question-circle"></i>
                    <span>Ayuda</span>
                </a>
            @else
                <a class="ico-nav" href="perfil.php" title="Mi Perfil">
                    <img class="user-photo-nav" src="{{ asset('img/man.jpg') }}" alt="">
                    <span>{{ Auth::user()->name }}</span>
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
                <a class="ico-nav" href="FAQ.php" data-toggle="tooltip" data-placement="bottom" title="Preguntas Frecuentes">
                    <i class="fa fa-question-circle"></i>
                    <span>Ayuda</span>
                </a>
                <a class="ico-nav" href="{{ route('logout') }}" title="logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span>
                </a>
                <form id="logout-form" action="{{ route('login') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
            @endguest
            </div>
        </div>
    </nav>
<!--navbar desktop-->
    <nav id="nav-desk" class="cont-navLogin">
        <div class="cont-logo">
            <img src="{{ asset('img/logo.svg') }}" alt="logo">
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
                <!--poner if de logueo-->

                

                <!-- Authentication Links -->
                @guest
                    <a class="ico-nav" href="{{ route('login') }}" title="Login">
                        <i class="fa fa-sign-in-alt"></i>
                        <span>Iniciar Sesión</span>
                    </a>
                    <a class="ico-nav" href="FAQ.php" data-toggle="tooltip" data-placement="bottom" title="Preguntas Frecuentes">
                        <i class="fa fa-question-circle"></i>
                        <span>Ayuda</span>
                    </a>
                @else
                <a class="ico-nav" href="{{ route('home') }}" title="Home">
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
                <a class="ico-nav" href="{{ route('logout') }}" title="logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="ico-nav" href="FAQ.php" data-toggle="tooltip" data-placement="bottom" title="Preguntas Frecuentes">
                    <i class="fa fa-question-circle"></i>
                    <span>Ayuda</span>
                </a>
                <a class="ico-nav" href="perfil.php" title="Mi Perfil">
                    <img class="user-photo-navdesk" src="{{ asset('img/man.jpg') }}" alt="">
                    <span>{{ Auth::user()->name }}</span>
                </a>
                @endguest
			    <!--poner if de logueo-->
            </div>
        </div>
    </nav>
</header>
