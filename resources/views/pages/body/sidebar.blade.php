<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <div class="pcoded-navigation-label">Navigation</div>
                    <ul class="pcoded-item pcoded-left-item">
                        
                        <li class>
                            <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-home"></i>
                                </span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>

                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="fa fa-odnoklassniki-square"></i>
                                </span>
                                <span class="pcoded-mtext">Management</span>
                                {{-- <span class="pcoded-badge label label-danger">100+</span> --}}
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="{{ route('department.view') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Department</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="widget-data.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Role</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="widget-chart.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-layers"></i>
                                </span>
                                <span class="pcoded-mtext">Widget</span>
                                <span class="pcoded-badge label label-danger">100+</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class>
                                    <a href="widget-statistic.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Statistic</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="widget-data.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Data</span>
                                    </a>
                                </li>
                                <li class>
                                    <a href="widget-chart.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Chart Widget</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>