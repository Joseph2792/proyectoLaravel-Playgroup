@extends('layouts.base')
@section('title', 'Registro')
@section('main-content')
<!--
    <div class="container-main">
            <section id="registro" class="flexregistry">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input
                                    id="name"
                                    type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input
                                    id="email"
                                    type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input
                                    id="password"
                                    type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">
                                {{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </section>
    </div>
-->
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
    <div class="container-main container-fluid">
        <section id="registro" class="flexregistry">
            <form action="{{ route('register') }}" method="post" class="register-form" enctype="multipart/form-data">
            @csrf
                <h2>Registrate</h2>
                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label for="Fullname">Nombre y Apellido</label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Nombre completo"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            required autofocus
                        >
                        <span class="invalid-feedback" role="alert">
                        @if ($errors->has('name'))
                          <strong>{{ $errors->first('name') }}</strong>
                        @endif
                        </span>
                    </div>

                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Usuario</label>
                        <input
                            type="text"
                            name="nickname"
                            value="{{ old('nickname') }}"
                            placeholder="Nombre de usuario"
                            class="form-control"
                        >
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="ejemplo@email.com"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            required
                        >
                        <span class="invalid-feedback" role="alert">
                        @if ($errors->has('email'))
                                <strong>{{ $errors->first('email') }}</strong>
                        @endif
                        </span>
                    </div>
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Nacionalidad</label>
                        <select name="country"
                          class="form-control"
                          value="{{ old('country') }}"
                          id="countrySelect"
                            >
                            <option value="">Elegí un país</option>

                            </option>

                        </select>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Contraseña</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Contraseña"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            required
                        >

                        <span class="invalid-feedback" role="alert">
                        @if ($errors->has('password'))
                                <strong>{{ $errors->first('password') }}</strong>
                        @endif
                        </span>

                    </div>
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Provincia</label>
                        <select name="province"
                            class="form-control"
                            id="provSelect"
                            >
                            <option value="">Elegí una provincia</option>

                            </option>

                        </select>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Repetir Contraseña</label>
                        <input

                            id="password-confirm"
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            placeholder="Contraseña" required>

                            <span class="invalid-feedback" role="alert">
                            @if ($errors->has('password-confirmation'))
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                            @endif
                            </span>


                    </div>
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label><b>Imagen de perfil</b></label>
                        <div class="custom-file">
                            <input
                                type="file"
                                class="custom-file-input"
                                name="registerAvatar"
                            >
                            <label class="custom-file-label update-img">Elegí una foto...</label>
                            <div class="invalid-feedback">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="cont-btn-register">
                    <input class="submit" type="submit" value="Registrate"/><br>
                </div>

            </form>
        <script src="js/register.js"></script>
        <script src="js/countries.js"></script>
        </section>
    </div>

<!--fin del contenido-->
@endsection
