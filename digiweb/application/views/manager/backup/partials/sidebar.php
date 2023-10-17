<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="<?=site_url('Panel/dash')?>" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black-icon.png')?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black.png')?>" alt="" height="20">
            </span>
        </a>
        <a href="<?=site_url('Panel/dash')?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black-icon.png')?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo site_url('assets/admin/images/header-logo-black.png')?>" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-lg px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- User Panel Sidebar -->
                <li class="menu-title">Customer Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>Customer Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Customer/add')?>">New Customer</a></li>
                        <li><a href="<?=site_url('Customer/list')?>">Customer List</a></li>
                        <li><a href="<?=site_url('Customer/card')?>">Customer Card</a></li>
                        <li><a href="<?=site_url('Customer/team')?>">Team Manager</a></li>
                        <li><a href="<?=site_url('Customer/social')?>">Social Media</a></li>
                        <li><a href="<?=site_url('Customer/product')?>">Product</a></li>
                        <li><a href="<?=site_url('Customer/service')?>">Service</a></li>
                        <li><a href="<?=site_url('Customer/catalogue')?>">Catalogue</a></li>
                        <li><a href="<?=site_url('Customer/gallery')?>">Gallery</a></li>
                        <li><a href="<?=site_url('Customer/payments')?>">Payments</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('Customer/upgrade')?>">
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
                <li class="menu-title">Product Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>Template Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Template/template')?>">Template List</a></li>
                        <li><a href="<?=site_url('Template/social')?>">Social Media</a></li>
                        <li><a href="<?=site_url('Template/product')?>">Product</a></li>
                        <li><a href="<?=site_url('Template/service')?>">Service</a></li>
                        <li><a href="<?=site_url('Template/catalogue')?>">Catalogue</a></li>
                        <li><a href="<?=site_url('Template/gallery')?>">Gallery</a></li>
                        <li><a href="<?=site_url('Template/payments')?>">Payments</a></li>
                    </ul>
                </li>
                <li class="menu-title">Session Management</li>
                <li>
                    <a href="<?php echo site_url('Manager/logout')?>">
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