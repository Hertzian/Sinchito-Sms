<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="user-profile treeview">
            <a href="index.html">
                <img src="images/user5-128x128.jpg" alt="user">
                <span>Juliya Brus</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="/pages/my_profile.html"><i class="fa fa-user mr-5"></i> Profile </a></li>
                    <li><a href="/pages/my-balance.html"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                    <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                    <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                    <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
                </ul>
            </li>
            <li class="header nav-small-cap">PERSONAL</li>
            <li class="active">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="pages/sms.html">
                    <i class="fa fa-envelope"></i>
                    <span>SMS</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="/pages/contacts.html">
                    <i class="fa fa-address-book"></i> <span>My contacts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>
        </ul>
        <hr>
        <p class="ml-2">Cuentas</p>
        <ul>
            <li><a href="{{ url('/getaccounts') }}">Cuentas</a></li>
            <li><a href="{{ url('/newaccount') }}">Nueva cuenta</a></li>
            <hr>
        </ul>
    </section>
</aside>

<!-- .wrapper -->
<div class="content-wrapper">
    