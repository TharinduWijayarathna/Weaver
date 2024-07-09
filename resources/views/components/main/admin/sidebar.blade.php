<div id="layoutDrawer_nav">
    <!-- Drawer navigation-->
    <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
        <div class="drawer-menu">
            <div class="nav">
                <!-- Drawer section heading (Account)-->
                <div class="drawer-menu-heading d-sm-none">Account</div>
                <!-- Drawer link (Notifications)-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i class="material-icons">notifications</i></div>
                    Notifications
                </a>
                <!-- Drawer link (Messages)-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i class="material-icons">mail</i></div>
                    Messages
                </a>
                <!-- Divider-->
                <div class="drawer-menu-divider d-sm-none"></div>
                <!-- Drawer section heading (Interface)-->
                {{-- <div class="drawer-menu-heading">Interface</div> --}}
                <div class="mt-2 mb-2"></div>

                <!-- Drawer link (Overview)-->
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                    Overview
                </a>
                <!-- Drawer link (Dashboards)-->
                <a class="nav-link" href="{{ route('product.index') }}">
                    <div class="nav-link-icon"><i class="material-icons">inventory</i></div>
                    Products
                </a>

                <!-- Drawer link (Dashboards)-->
                <a class="nav-link" href="{{ route('customer.index') }}">
                    <div class="nav-link-icon"><i class="material-icons">group</i></div>
                    Customers
                </a>

            </div>
        </div>
        <!-- Drawer footer        -->
        <div class="drawer-footer border-top">
            <div class="d-flex align-items-center">
                <i class="material-icons text-muted">account_circle</i>
                <div class="ms-3">
                    <div class="caption">Logged in as:</div>
                    <div class="small fw-500">{{ Auth::user()->name }}</div>
                </div>
            </div>
        </div>
    </nav>
</div>
