@extends('layouts.app2')

@section('content')
<link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">
<script src="https://kit.fontawesome.com/bc09df0ab2.js" crossorigin="anonymous"></script>

<body class="hold-transition login-page">
    <link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">
    <div class="login-box">
        <div class="login-logo logo">
            <a href="{{ url('/') }}" >
                <i class="fas fa-sms"></i> Sinchito</a>
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Inicia sesión</p>
            <form method="POST" action="{{ route('login') }}" class="form-element">
                @csrf

                <div class="form-group has-feedback">

                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                        <span class="ion ion-email form-control-feedback"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group has-feedback">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">Recuérdame</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block margin-top-10">Ingresar</button>

                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="margin-top-20 text-center">
        <p>Si no tienes cuenta <a href="{{ route('register') }}" class="text-info m-l-5">Registrate aquí</a></p>
    </div>
</div>
@endsection
