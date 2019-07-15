<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="user-profile treeview">
                <a href="">
                    <img src="{{ asset('images/user-128x128.jpg') }}" alt="user">
                    <span>{{ $name }}</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/profile') }}"><i class="fa fa-user mr-5"></i> Profile </a></li>
                    <li><a href="{{ url('/getbalance') }}"><i class="fa fa-money mr-5"></i>Balance</a></li>
                    <!-- <li><a href="#"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                    <li><a href="#"><i class="fa fa-cog mr-5"></i>Configuración</a></li> -->
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a></li>
                </ul>
            </li>
            <li class="header nav-small-cap">PERSONAL</li>
            <li class="">
                <a href="{{ URL::route('home') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                    {{-- <span class="pull-right-container"></span> --}}
                </a>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>SMS</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/single') }}"><i class="fa fa-envelope"></i>SMS Sencillo</a></li>
                    <li><a href="{{ url('/getlist') }}"><i class="fa fa-money mr-5"></i>Batches</a></li>
                    <li><a href="{{ url('/getTemplate') }}"><i class="fa fa-window-maximize"></i>Plantilla</a></li>
                    <!-- <li><a href="{{ url('/message') }}"><i class="fas fa-history"></i>Historial de mensajes</a></li> -->
                    <li><a href="{{ url('/message') }}"><i class="fas fa-history"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Historial de mensajes</a></li>
                </ul>
            </li>
            <!-- <li class="">
                <a href="{{ url('/message') }}">
                    <i class="fa fa-address-book"></i> <span>Registro</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>  -->
        </ul>
        <hr>
        <!-- <p class="ml-2">Cuentas</p>
        <ul>
            <li><a href="{{ url('/single') }}">SMS sencillo</a></li>
            <li><a href="{{ url('/getaccounts') }}">Cuentas</a></li>
            <li><a href="{{ url('/newaccount') }}">Nueva cuenta</a></li>
            <hr>
        </ul> -->
    </section>
</aside>

<!-- .wrapper -->
<div class="content-wrapper">    