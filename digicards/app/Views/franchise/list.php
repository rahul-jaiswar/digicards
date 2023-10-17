<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <a href="<?=site_url('Franchise/add')?>" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-inline float-md-end mb-3">
                            <div class="search-box ml-2">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded border-0" placeholder="Search...">
                                    <i class="mdi mdi-magnify search-icon"></i>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-sm me-4">
                                        <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                            M
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="border-bottom pb-1">
                                            <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Morrie Mages</a></h5>
                                            <p class="text-muted">
                                                <i class="mdi mdi-account me-1"></i> Clifton Taylor
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Total Card Order</p>
                                                    <h5 class="font-size-16 mb-0">94</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Wallet Balance</p>
                                                    <h5 class="font-size-16 mb-0">Rs.9,852</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-sm me-4">
                                        <span class="avatar-title bg-soft-warning text-warning font-size-16 rounded-circle">
                                            B
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="border-bottom pb-1">
                                            <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Brendle's</a></h5>
                                            <p class="text-muted">
                                                <i class="mdi mdi-account me-1"></i> Karl Early
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Total Card Orders</p>
                                                    <h5 class="font-size-16 mb-0">62</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Wallet Balance</p>
                                                    <h5 class="font-size-16 mb-0">$7,952</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-sm me-4">
                                        <span class="avatar-title bg-soft-success text-success font-size-16 rounded-circle">
                                            T
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center">
                                        <div class="border-bottom pb-1">
                                            <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">Tech Hifi</a></h5>
                                            <p class="text-muted">
                                                <i class="mdi mdi-account me-1"></i> Marion Glaze
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Total Card Orders</p>
                                                    <h5 class="font-size-16 mb-0">40</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Wallet Balance</p>
                                                    <h5 class="font-size-16 mb-0">$6,265</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center my-3">
                            <a href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<script src="<?=site_url('public/assets/js/app.js')?>"></script>

</body>

</html>