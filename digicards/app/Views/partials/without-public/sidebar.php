<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="<?=site_url('Panel/dash')?>" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?= site_url('assets/images/header-logo-black-icon.png')?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= site_url('assets/images/header-logo-black.png')?>" alt="" height="20">
            </span>
        </a>
        <a href="<?=site_url('Panel/dash')?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?= site_url('assets/images/header-logo-black-icon.png')?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= site_url('assets/images/header-logo-black.png')?>" alt="" height="20">
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
                <li class="menu-title">Statics Overview</li>
                <li>
                    <a href="<?=site_url('Panel/dash')?>">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Admin Manager</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-shop"></i>
                        <span>Franchise Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Franchise/add')?>">Open New Franchise</a></li>
                        <li><a href="<?=site_url('Franchise/list')?>">Franchise List</a></li>
                        <li><a href="<?=site_url('Franchise/revenue')?>">Profit and Loss</a></li>
                        <li><a href="<?=site_url('Franchise/balancesheet')?>">Balance Sheet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>User Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('User/list')?>">User List</a></li>
                        <li><a href="<?=site_url('Agent/list')?>">Agent List</a></li>
                        <li><a href="<?=site_url('User/log')?>">Log List</a></li>
                        <li><a href="<?=site_url('User/permission')?>">Permission</a></li>
                        <li><a href="<?=site_url('User/role ')?>">Role</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-book-alt"></i>
                        <span>Ledger Books</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Franchise/ledger')?>">Franchise Ledger</a></li>
                        <li><a href="<?=site_url('Customer/ledger')?>">Customer Ledger</a></li>
                    </ul>
                </li>
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
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-telegram-alt"></i>
                        <span><?= lang('Files.Referral Program') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login"><?= lang('Files.Referral Users') ?></a></li>
                        <li><a href="auth-register"><?= lang('Files.Referral Code') ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
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
                        <i class="uil-postcard"></i>
                        <span>Cards Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Template/add')?>">New Template</a></li>
                        <li><a href="<?=site_url('Template/list')?>">Template Gallery</a></li>
                        <li><a href="<?=site_url('Template/navigation')?>">Navigations</a></li>
                        <li><a href="<?=site_url('Template/socialpack')?>">Social Pack</a></li>
                        <li><a href="<?=site_url('Template/contactstyle')?>">Contact Style</a></li>
                    </ul>
                </li>
                <li class="menu-title">Accounts Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-money-bill-stack"></i>
                        <span>Expenses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login">Voucher</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-moneybag"></i>
                        <span>Profit/Loss</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login">Sales</a></li>
                    </ul>
                </li>

                <li class="menu-title">Revenue Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-print"></i>
                        <span>Operation Cost</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts">Sample Card Purchase</a></li>
                    </ul>
                </li>

                <li class="menu-title">Website Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-analytics"></i>
                        <span>Promotion</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts">Landing Popup</a></li>
                        <li><a href="ui-alerts">Newsletter</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-streering"></i>
                        <span><?= lang('Files.Company Info') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts"><?= lang('Files.Top Header') ?></a></li>
                        <li><a href="ui-buttons"><?= lang('Files.Footer') ?></a></li>
                    </ul>
                </li>   
                <li class="menu-title">Employee Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-square"></i>
                        <span>Employee Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Employee/list')?>">Employee List </a></li>
                        <li><a href="<?=site_url('Employee/salary')?>">Employee Salary</a></li>
                        <li><a href="<?=site_url('Employee/transfer')?>">Employee Transfer</a></li>
                        <li><a href="<?=site_url('Employee/letter')?>">Print Letters</a></li>
                        <li><a href="<?=site_url('Employee/verification')?>">KYC Verification</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-dollar-alt"></i>
                        <span>Salary Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Employee/attendance')?>">Attendance</a></li>
                        <li><a href="<?=site_url('Employee/leave')?>">Leave List</a></li>
                        <li><a href="<?=site_url('Employee/holiday_list')?>">Holiday List</a></li>
                        <li><a href="<?=site_url('Employee/payout')?>">Payouts</a></li>
                        <li><a href="<?=site_url('Employee/acknowledgement')?>">Acknowledgement</a></li>
                    </ul>
                </li>
                <li class="menu-title">Audit Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-exchange"></i>
                        <span>Franchise Auditing</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Audit/daybook')?>">Day Book</a></li>
                        <li><a href="<?=site_url('Audit/balancesheet')?>">Balance Sheet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-comment-alt-verify"></i>
                        <span>Customer Auditing</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Audit/transaction')?>">Audit Transaction</a></li>
                        <li><a href="<?=site_url('Audit/customer_request')?>">Audit Customer Request</a></li>
                        <li><a href="<?=site_url('Audit/sales')?>">Audit Sales</a></li>
                        <li><a href="<?=site_url('Audit/inward')?>">Inward Remittance</a></li>
                        <li><a href="<?=site_url('Audit/outward')?>">Out-Ward Remittance</a></li>
                    </ul>
                </li>
                <li class="menu-title">Master Management</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-cog"></i>
                        <span>Admin Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Master/group')?>">Group</a></li>
                        <li><a href="<?=site_url('Master/charge')?>">Fee & Charges</a></li>
                        <li><a href="<?=site_url('Master/fd')?>">Fixed Deposit List</a></li>
                        <li><a href="<?=site_url('Master/rd')?>">Recurring Deposit List</a></li>
                        <li><a href="<?=site_url('Master/loan')?>">Loan Account List</a></li>
                        <li><a href="<?=site_url('Master/savings')?>">Saving Account List</a></li>
                        <li><a href="<?=site_url('Master/current')?>">Current Account List</a></li>
                        <li><a href="<?=site_url('Master/product')?>">Product Account List</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Other</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="<?=site_url('Master/state')?>">State</a></li>
                                <li><a href="<?=site_url('Master/city')?>">City</a></li>
                                <li><a href="<?=site_url('Master/block')?>">Block</a></li>
                                <li><a href="<?=site_url('Master/panchayat')?>">Panchayat</a></li>
                                <li><a href="<?=site_url('Master/village')?>">Village</a></li>
                                <li><a href="<?=site_url('Master/documents')?>">Documents</a></li>
                                <li><a href="<?=site_url('Master/relation')?>">Relation</a></li>
                                <li><a href="<?=site_url('Master/category')?>">Category</a></li>
                                <li><a href="<?=site_url('Master/qualification')?>">Qualification</a></li>
                                <li><a href="<?=site_url('Master/profession')?>">Profession</a></li>
                                <li><a href="<?=site_url('Master/bank')?>">Bank</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file-check-alt"></i>
                        <span>Reports Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?=site_url('Report/agent')?>">Agents Reports</a></li>
                        <li><a href="<?=site_url('Report/interest')?>">Interest Report</a></li>
                        <li><a href="<?=site_url('Report/transaction')?>">Transaction Report</a></li>
                        <li><a href="<?=site_url('Report/duedate')?>">Due Date Report</a></li>
                        <li><a href="<?=site_url('Report/maturity')?>">Maturity Report</a></li>
                        <li><a href="<?=site_url('Report/cheque')?>">Cheque Report</a></li>
                        <li><a href="<?=site_url('Report/expenses')?>">Expenses Report</a></li>
                        <li><a href="<?=site_url('Report/fine')?>">Fine Report</a></li>
                        <li><a href="<?=site_url('Report/voucher')?>">Voucher Report</a></li>
                    </ul>
                </li>
                <li class="menu-title">Support Management</li>
                <li>
                    <a href="<?=site_url('Support/info')?>">
                        <i class="uil-headphones"></i>
                        <span>Contact Support </span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('Support/list')?>">
                        <i class="uil-ticket"></i>
                        <span>Raise Ticket</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->