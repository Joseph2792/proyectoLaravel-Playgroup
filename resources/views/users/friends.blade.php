@extends('layouts.base')
@section('title', 'Login')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="container-main">
    <section class="row cont-header-friends">
        <h1>Amigos</h1>
        <div class="col-12 cont-search-friends">
            <form action="get">
                <div class="cont-search-input">
                    <input type="search" placeholder="Buscar grupos o personas..." name="q" id="buscadorNav">
                    <button class="" type="submit">
                        <i class="fa fa-search icon"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="row cont-friends">
        <ul>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cont-friend">
                <div class="card-friend">
                    <a class="cont-photo-friend" href="">
                        <img class="photo-friend" src="img/man.jpg" alt="">
                        <span>Andres Navarro</span>
                    </a>
                    <div class="cont-info-friend">
                        <div class="dato-friend">
                            <span><strong>Partidos jugados</strong></span>
                            <span>120</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Torneos jugados</strong></span>
                            <span>20</span>
                        </div>
                        <div class="dato-friend">
                            <span><strong>Habilidad</strong></span>
                            <div class="cont-star">
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star"></i>
                                </a>
                                <a class="ico-nav" href="" >
                                    <i class="fas fa-star-half-alt"></i>
                                </a>
                                <a class="ico-nav" href="">
                                    <i class="far fa-star"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="msj-friend">
                            <a class="ico-nav" href="" title="messenger">                                   
                                <i class="fab fa-facebook-messenger"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</div>
<!--fin del contenido-->
@endsection