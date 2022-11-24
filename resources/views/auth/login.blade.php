@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <img src="logos/C21Lacunza-negro.png" alt="logo" style="width: 250px !important; margin-bottom:30px">
                            <p class="text-muted">Inicia sesión con tu cuenta</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" placeholder="Usuario" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" style="background-color:#e6e8e9; color:black !important; border-color:gray !important" type="submit">Iniciar sesión</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%; background-color:#beaf87 !important">
                        <div class="card-body text-center">
                            <div> 
                                <img src="logos/c21-blanco-logo.png" alt="logo" style="width:80px !important; margin-bottom:20px">
                                <h4>¿No tienes una cuenta?</h4>
                            
                                <button class="btn btn-primary active mt-3" style="background-color:#e6e8e9; border-color:gray !important" type="button"><a href="{{route('registro')}}" style="text-decoration:none !important; color:black">Registrarse</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection