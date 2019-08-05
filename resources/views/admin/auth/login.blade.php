@extends('layouts.app2')

@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>SMS</b>Dinamic Admin</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Inicia sesión</p>
            <form class="form-element" method="POST" action="{{ route('admin.auth.loginAdmin') }}">
                @csrf
                <div class="form-group has-feedback">

                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
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
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">Recuérdame</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block margin-top-10">
                            Ingresar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection