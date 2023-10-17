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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i>Create New Referral</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inline float-md-end mb-3">
                                            <div class="search-box ms-2">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                                    <i class="mdi mdi-magnify search-icon"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="table-responsive mb-4">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck">
                                                        <label class="form-check-label" for="contacusercheck"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Valid From</th>
                                                <th scope="col">Valid Till</th>
                                                <th scope="col">Referral Code</th>
                                                <th scope="col">Slab Category</th>
                                                <th scope="col">Slab Value</th>
                                                <th scope="col" style="width: 200px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck7">
                                                        <label class="form-check-label" for="contacusercheck7"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="<?=site_url('public/assets/images/users/avatar-7.jpg')?>" alt="" class="avatar-xs rounded-circle me-2">
                                                    <a href="#" class="text-body">Patrick Petty</a>
                                                </td>
                                                <td>UI/UX Designer</td>
                                                <td>PatrickPetty@minible.com</td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck8">
                                                        <label class="form-check-label" for="contacusercheck8"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="<?=site_url('public/assets/images/users/avatar-8.jpg')?>" alt="" class="avatar-xs rounded-circle me-2">
                                                    <a href="#" class="text-body">Marilyn Horton</a>
                                                </td>
                                                <td>Backend Developer</td>
                                                <td>MarilynHorton@minible.com</td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                                        </li>
                                                        <li class="list-inline-item dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <div>
                                            <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="float-sm-end">
                                            <ul class="pagination mb-sm-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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