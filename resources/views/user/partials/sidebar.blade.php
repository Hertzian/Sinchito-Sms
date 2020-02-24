<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="user-profile treeview">
                <a href="{{ url('/user/profile') }}">
                    @if ($avatar == '0')
                        <img src="{{ asset('images/user-128x128.jpg') }}" alt="user">
                        
                    @else
                        <img src="{{ url('storage/avatar/' . $avatar) }}" alt="user">
                    @endif
                    <span>{{ $name }}</span>
                    {{-- <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span> --}}
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/user/profile') }}"><i class="fa fa-user mr-5"></i> Profile </a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">PERSONAL</li>

            <li class="">
                <a href="{{ url('/user') }}">
                    <i class="fas fa-tachometer-alt"></i> <span>Panel de Control</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    <span>SMS</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/user/single') }}"><i class="fa fa-envelope"></i>SMS Simple</a></li>
                    <li><a href="{{ url('/user/gettemplates') }}"><i class="fa fa-copy"></i>Plantilla</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/user/getlist') }}"><i class="fas fa-user-friends"></i> Contactos</a>
            </li>

            <li>
                <a href="{{ url('/user/sendmessagelist') }}"><i class="fas fa-list-alt"></i> Lista de Envíos</a>
            </li>

        </ul>
        
    </section>
</aside>

<div class="content-wrapper">    