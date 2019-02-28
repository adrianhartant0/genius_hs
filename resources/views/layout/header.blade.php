<div id="navbar" class="navbar navbar-default ace-save-state navbar-fixed-top">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="/home" class="navbar-brand">
                <small>
                    GENIUS - HS
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav">
                <li class="dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle white">
                        <span class="">
                            <i class="ace-icon fa fa-user"></i>
                            @if (Auth::check())
                            {{ Auth::user()->name }}
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="/change_password/{{ Auth::user()->id_user }}/edit">
                                <i class="fa fa-cog"></i>
                                Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout')}}">
                                <i class="ace-icon fa fa-power-off"></i>
                                Log Out</a>
                        </li>
                        @else
                        <li><a href="{{ route('login')}}"> Log in</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav">
                @if (Auth::user()->priv_status == 1)
                <li class="purple dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle white" href="#">
                        NOTIFICATION
                        <i class="ace-icon fa fa-bell icon-animated-bell red"></i>
                        <span class="badge badge-important total_badge"></span>
                    </a>


                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <span class="total_badge"></span>
                            Notifications
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                    <a href="/concierge">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                Concierge
                                            </span>
                                            <span class="pull-right badge badge-info concierge_badge"></span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="/complain">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-success fa fa-comment"></i>
                                                Complain
                                            </span>
                                            <span class="pull-right badge badge-warning complain_badge"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
