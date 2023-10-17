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
                <li class="menu-title">Card Statics</li>
                <li>
                    <a href="<?=site_url('Panel/index')?>">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Card Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>Card Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Card/preview/'.$this->session->userdata('UID'))?>">Preview</a></li>
                        <li><a href="<?=site_url('Card/info/'.$this->session->userdata('UID'))?>">Card Info</a></li>
                        <li><a href="<?=site_url('Card/team/'.$this->session->userdata('UID'))?>">Team Manager</a></li>
                        <li><a href="<?=site_url('Card/social/'.$this->session->userdata('UID'))?>">Social Media</a></li>
                        <li><a href="<?=site_url('Card/product/'.$this->session->userdata('UID'))?>">Product</a></li>
                        <li><a href="<?=site_url('Card/service/'.$this->session->userdata('UID'))?>">Service</a></li>
                        <li><a href="<?=site_url('Card/catalogue/'.$this->session->userdata('UID'))?>">Catalogue</a></li>
                        <li><a href="<?=site_url('Card/gallery/'.$this->session->userdata('UID'))?>">Gallery</a></li>
                        <li><a href="<?=site_url('Card/payments/'.$this->session->userdata('UID'))?>">Payments</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('Card/upgrade')?>">
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