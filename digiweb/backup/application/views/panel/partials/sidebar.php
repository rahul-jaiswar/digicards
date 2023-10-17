<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="<?php echo site_url('Panel')?>" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black-icon.png')?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black.png')?>" alt="" height="20">
            </span>
        </a>
        <a href="<?php echo site_url('Panel')?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black-icon.png')?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black.png')?>" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- User Panel Sidebar -->
                <li class="menu-title">Card Management</li>
                <li>
                    <a href="<?php echo site_url('Users/list')?>">
                        <i class="uil-credit-card"></i>
                        <span>Card Upgrade</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/list')?>">
                        <i class="uil-ticket"></i>
                        <span>Support</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Panel/logout')?>">
                        <i class="uil-power"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->