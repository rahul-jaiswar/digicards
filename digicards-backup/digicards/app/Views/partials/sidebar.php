<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <!-- <img src="assets/images/logo-sm.png" alt="" height="22"> -->
                <h2>TapSavvy</h2>
            </span>
            <span class="logo-lg">
                <!-- <img src="assets/images/logo-dark.png" alt="" height="20"> -->
                <h2 style="margin-top:12px">TapSavvy</h2>
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="20">
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
                <li class="menu-title"><?= lang('Files.Admin Management') ?></li>
                <li>
                    <a href="/">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span><?= lang('Files.Usermanager') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('UserManager/list')?>/patientuser/list"><?= lang('Files.User List') ?></a></li>
                        <li><a href="ecommerce-product-detail"><?= lang('Files.Permission') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Customer Management') ?></li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Web Commerce') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Customer List') ?></a></li>
                        <li><a href="auth-register"><?= lang('Files.Orders List') ?></a></li>
                        <li><a href="auth-recoverpw"><?= lang('Files.Payment Status') ?></a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Marketing Leads') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Add Customer') ?></a></li>
                        <li><a href="auth-register"><?= lang('Files.Order Progress') ?></a></li>
                        <li><a href="auth-recoverpw"><?= lang('Files.Delivery Status') ?></a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Referral Program') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Referral Users') ?></a></li>
                        <li><a href="auth-register"><?= lang('Files.Referral Code') ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Franchise Program') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Franchise List') ?></a></li>
                        <li><a href="auth-register"><?= lang('Files.Franchise Orders') ?></a></li>
                        <li><a href="auth-recoverpw"><?= lang('Files.Franchise Delivery') ?></a></li>
                        <li><a href="auth-recoverpw"><?= lang('Files.Franchise Revenue') ?></a></li>
                        
                    </ul>
                </li>
                
                <li class="menu-title"><?= lang('Files.Product Management') ?></li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Cards') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-register"><?= lang('Files.Cards Category') ?></a></li>
                        <li><a href="auth-lock-screen"><?= lang('Files.Template Management') ?></a></li>
                        <li><a href="auth-lock-screen"><?= lang('Files.Generate URL') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Accounts Management') ?></li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Expenses') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Voucher') ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Profit/Loss') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Sales') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Revenue Management') ?></li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-flask"></i>
                        <span><?= lang('Files.Operation Cost') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= lang('Files.Sample Card Purchase') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Website Management') ?></li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-flask"></i>
                        <span><?= lang('Files.Promotion') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= lang('Files.Landing Popup') ?></a></li>
                        <li><a href="ui-alerts"><?= lang('Files.Newsletter') ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-flask"></i>
                        <span><?= lang('Files.Company Info') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= lang('Files.Top Header') ?></a></li>
                        <li><a href="ui-buttons"><?= lang('Files.Footer') ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->