<header class="main-header">
    <!-- Logo -->
    <a href="
    #
    {{-- {{ URL::route('home') }} --}}
    " class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <b class="logo-mini">
            {{-- SMS --}}
            <i class="fas fa-sms"></i>
        </b>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            Sinchito
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                    <li class="my-5">Mensajes @if($balance <= .64) 0 @else{{ $smsLimit }}@endif - Balance ${{ $balance }}</li>
                <!-- User Account -->
                <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @if ($avatar == '0')
                        <img src="{{ asset('images/user-128x128.jpg') }}" class="user-image rounded-circle" alt="User Image">
                    @else
                        <img src="{{ url('storage/avatar/' . $avatar) }}" class="user-image rounded-circle" alt="User Image">
                    @endif
                </a>
                <ul class="dropdown-menu scale-up">
                    <!-- User image -->
                    <li class="user-header">

                    @if ($avatar == '0')
                        <img src="{{ asset('images/user-128x128.jpg') }}" class="float-left rounded-circle" alt="User Image">
                    @else
                        <img src="{{ url('storage/avatar/' . $avatar) }}" class="float-left rounded-circle" alt="User Image">
                    @endif

                    <p>
                        {{ $name }}
                        {{-- <small class="mb-5">{{ $last_mame }}</small> --}}
                        <small class="mb-5">{{ $email }}</small>
                        <a href="{{ url('/user/profile') }}" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                    </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                    <div class="row ">
                        <div class="col-12 text-left">
                            <a href="{{ url('/user/profile') }}"><i class="ion ion-person"></i> My Profile</a>
                        </div>
                        {{-- <div role="separator" class="divider col-12"></div> --}}
                        <div class="col-12 text-left">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    </li>
                </ul>
                </li>
                <li>
                </li>
            </ul>
        </div>
    </nav>
</header>