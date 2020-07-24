        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <img class="mb-2" width="100px" src="{{ asset('public/img/logo/minomu.png') }}">
                <h5>Inventory v1.0</h5>
            </div>

            <ul class="list-unstyled components">
                <li id="mHome">
                    <a href="{{ url('home') }}">
                        <i class="fas fa-home fa-fw"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li id="mReporting">
                    <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase fa-fw"></i>
                        <span>Reporting</span>
                    </a>
                    <ul class="collapse list-unstyled" id="reportSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-file-alt fa-fw"></i> Purchase Order</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-file-alt fa-fw"></i> Stock</a>
                        </li>
                    </ul>
                </li>
                <li id="mOrder">
                    <a href="#orderSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-shopping-cart fa-fw"></i>
                        <span>Order</span>
                    </a>
                    <ul class="collapse list-unstyled" id="orderSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-shopping-cart fa-fw"></i> Purchase Order</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-shopping-cart fa-fw"></i> Stock</a>
                        </li>
                    </ul>
                </li>
                <li id="mMaster">
                    <a href="#mMasterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-server fa-fw"></i>
                        <span>Master</span>
                    </a>
                    <ul class="collapse list-unstyled" id="mMasterSubmenu">
                        <li>
                            <a href="{{ url('user/list') }}"><i class="fas fa-hdd fa-fw"></i> User</a>
                        </li>
                        <li>
                            <a href="{{ url('item/list') }}"><i class="fas fa-hdd fa-fw"></i> Item</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>