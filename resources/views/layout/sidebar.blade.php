<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}

    </script>
</div>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}

    </script>

    <ul class="nav nav-list">
        @if (Auth::user()->priv_status == 1)
        <li class="active">
            <a href="/home">
                <i class="menu-icon fa fa-home"></i>
                <span class="menu-text"> Home </span>
            </a>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Master Database </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <!-- <li class="">
                    <a href="/tower">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tower
                    </a>
                </li>

                <li class="">
                    <a href="/floor">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Floor
                    </a>
                </li> -->

                <li class="">
                    <a href="/unit_apart">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Apartment Unit
                    </a>
                </li>

                <!-- <li class="">
                    <a href="/complain_category">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Complain Category
                    </a>
                </li> -->
                
                <li class="">
                    <a href="/user">
                        <i class="menu-icon fa fa-caret-right"></i>
                        User
                    </a>
                </li>

                <!-- <li class="">
                    <a href="/priv">
                        <i class="menu-icon fa fa-caret-right"></i>
                        User Privilege
                    </a>
                </li> -->
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text"> Master Tenant </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="/tenant_category">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tenant Category
                    </a>
                </li>

                <li class="">
                    <a href="/unit_tenant">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tenant List
                    </a>
                </li>

                <li class="">
                    <a href="/menu_category">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tenant Menu Category
                    </a>
                </li>

                <li class="">
                    <a href="/menu_tenant">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tenant Menu
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text"> E-Service </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="/e_laundry_menu">
                        <i class="menu-icon fa fa-caret-right"></i>
                        E-Laundry Menu
                    </a>
                </li>

                <li class="">
                    <a href="/e_cleaning_menu">
                        <i class="menu-icon fa fa-caret-right"></i>
                        E-Cleaning Menu
                    </a>
                </li>

                <li class="">
                    <a href="/e_ac_menu">
                        <i class="menu-icon fa fa-caret-right"></i>
                        E-AC Menu
                    </a>
                </li>

                <li class="">
                    <a href="/groceries_menu">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Groceries
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Unit Owner/Renter </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li class="">
                    <a href="/unit_owner">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Unit Owner
                    </a>
                </li>

                <li class="">
                    <a href="/unit_renter">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Unit Renter
                    </a>
                </li>
            </ul>
        </li>

        @endif
        @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status == 3)
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-briefcase"></i>
                <span class="menu-text"> Concierge </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status
                == 3)
                <li class="">
                    <a href="/concierge_employee">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Concierge Employee
                    </a>
                </li>

                <li class="">
                    <a href="/concierge_category">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Concierge Category
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        
        @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 4 || Auth::user()->priv_status == 5)
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-money"></i>
                <span class="menu-text"> Billing </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="/bill_type">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Billing Type
                    </a>
                </li>

                <li class="">
                    <a href="/bill_owner">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Billing Owner
                    </a>
                </li>
                <li class="">
                    <a href="/bill_aging">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Billing Aging
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="/payment_owner">
                <i class="menu-icon fa fa-money"></i>
                <span class="menu-text"> Payment </span>
            </a>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-download"></i>
                <span class="menu-text"> Collection </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="/receiveable_card">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Receiveable Card
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="/forfeit_calculate">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Forfeit Calculate
                    </a>
                </li>
            </ul>
        </li>
        @endif

        @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status == 3 ||
        Auth::user()->priv_status == 10 || Auth::user()->priv_status == 11 || Auth::user()->priv_status == 13)
        <li class="">
            <a href="/concierge">
                <i class="menu-icon fa fa-briefcase"></i>
                <span class="menu-text"> Concierge </span>
            </a>
        </li>

        @endif
        @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 2 || Auth::user()->priv_status == 3 ||
        Auth::user()->priv_status == 9 || Auth::user()->priv_status == 10)
        <li class="">
            <a href="/complain">
                <i class="menu-icon fa fa-bullhorn"></i>
                <span class="menu-text">
                    Complain
                </span>
            </a>
        </li>
        @endif

        <!-- @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 12)
        <li class="">
            <a href="/menu_tenant">
                <i class="menu-icon fa fa-server"></i>
                <span class="menu-text"> Menu List </span>
            </a>
        </li>

        @endif -->
        @if (Auth::user()->priv_status == 1 || Auth::user()->priv_status == 8 || Auth::user()->priv_status == 9)
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tint"></i>
                <span class="menu-text"> Water Meter </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="/water_meter">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Input Water Meter
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="/water_meter_history">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Water Meter History
                    </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-bolt"></i>
                <span class="menu-text"> Electricity Meter </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="/electricity_meter">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Input Electricity Meter
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li class="">
                    <a href="/electricity_meter_history">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Electricity Meter History
                    </a>
                </li>
            </ul>
        </li>
        @endif
        
    </ul>
    <!-- /.nav-list -->
    <!-- <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left"
                data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div> -->
</div>
