<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?=site_url('Panel/dash')?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= site_url('public/assets/images/header-logo-black-icon.png')?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= site_url('public/assets/images/header-logo-black.png')?>" alt="" height="20">
                    </span>
                </a>
                <a href="<?=site_url('Panel/dash')?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= site_url('public/assets/images/header-logo-black-icon.png')?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= site_url('public/assets/images/header-logo-black.png')?>" alt="" height="20">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-26 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="row">
                    <div class="col-xl-6">
                        <select class="form-select form-control" name="gender">
                            <option selected>Search by</option>
                            <option value="Account No">Account No</option>
                            <option value="Agent">Agent</option>
                            <option value="Customer">Customer</option>
                            <option value="Branch">Branch</option>
                            <option value="Bank">Bank</option>
                            <option value="Users">Users</option>
                        </select>
                    </div>
                    <div class="position-relative col-xl-6">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="uil-search"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-bell"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> <?= lang('Files.Notifications') ?> </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> <?= lang('Files.Mark all as read') ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="uil-shopping-basket"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.Your order is placed') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.If several languages coalesce the grammar') ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.3 min ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <img src="<?= base_url('public/assets/images/users/avatar-3.jpg')?>"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.It will seem like simplified English') ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.1 hours ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="uil-truck"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.Your item is shipped') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.If several languages coalesce the grammar') ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.3 min ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <img src="<?= base_url('public/assets/images/users/avatar-4.jpg')?>" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.As a skeptical Cambridge friend of mine occidental') ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?= lang('Files.1 hours ago') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> <?= lang('Files.View More') ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url('public/assets/images/users/avatar-4.jpg')?>"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Marcus</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="/contacts-profile"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle"><?= lang('Files.View Profile') ?></span></a>
                    <a class="dropdown-item" href="/auth-lock-screen"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle"><?= lang('Files.Lock screen') ?></span></a>
                    <a class="dropdown-item" href="<?= site_url('Panel/logout')?>"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle"><?= lang('Files.Sign out') ?></span></a>
                </div>
            </div>
        </div>
    </div>
</header>