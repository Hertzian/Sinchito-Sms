@extends('layouts.app2')

@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Sinchito</b>Admin</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

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
                    <span class="ion ion-locked form-control-feedback"></span>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">Recuérdame</label>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-6">
                    <div class="fog-pwd">
                        <a href="/admin-dashboard/pages/forgot-pwd.html"><i class="ion ion-locked"></i> Olvidaste tu contraseña?</a><br>
                    </div>
                </div> --}}

                <div class="form-group row mb-0">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block margin-top-10">
                            Métase!
                        </button>

                        @if (Route::has('password.request'))
                            <i class="ion ion-locked"></i>
                            <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                        @endif
                    </div>
                </div>

            </div>
        </form>
    
    
        <div class="margin-top-30 text-center">
            <p>No tienes cuenta? <a href="{{ route('register')}}" class="text-info m-l-5">Registrate</a></p>
        </div>
    
      </div>
      <!-- /.login-box-body -->
    </div>
    
</body>

@endsection
