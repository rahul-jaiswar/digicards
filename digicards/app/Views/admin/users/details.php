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
                
                <div class="row mb-4">
                    <div class="col-xl-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="clearfix"></div>
                                    <div>
                                        <img src="<?=site_url('public/assets/images/users/avatar-4.jpg')?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="mt-3 mb-1">Employee Name</h5>
                                    <p class="text-muted">Designation</p>

                                    <div class="mt-4">
                                        <button type="button" class="btn btn-light btn-sm"><i class="uil uil-picture me-2"></i> Update Profile Image</button>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div class="text-muted">
                                    <div class="table-responsive mt-4">
                                        <div class="mt-4">
                                            <p class="mb-1">Mobile :</p>
                                            <h5 class="font-size-16">012-234-5678</h5>
                                        </div>
                                        <div class="mt-4">
                                            <p class="mb-1">E-mail :</p>
                                            <h5 class="font-size-16">marcus@minible.com</h5>
                                        </div>
                                        <div class="mt-4">
                                            <p class="mb-1">Location :</p>
                                            <h5 class="font-size-16">California, United States</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card mb-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#role-manager" role="tab">
                                        <i class="uil uil-user-circle font-size-20"></i>
                                        <span class="d-none d-sm-block">Roles Manager</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#permission" role="tab">
                                        <i class="uil uil-clipboard-notes font-size-20"></i>
                                        <span class="d-none d-sm-block">Permission</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tickets" role="tab">
                                        <i class="uil uil-envelope-alt font-size-20"></i>
                                        <span class="d-none d-sm-block">Tickets</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content p-4">
                                <div class="tab-pane active" id="role-manager" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Projects</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" style="width: 120px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">01</th>
                                                    <td><a href="#" class="text-dark">Brand Logo Design</a></td>
                                                    <td>
                                                        18 Jun, 2020
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-soft-primary font-size-12">Open</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">02</th>
                                                    <td><a href="#" class="text-dark">Minible Admin</a></td>
                                                    <td>
                                                        06 Jun, 2020
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-soft-primary font-size-12">Open</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">03</th>
                                                    <td><a href="#" class="text-dark">Chat app Design</a></td>
                                                    <td>
                                                        28 May, 2020
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-soft-success font-size-12">Complete</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">04</th>
                                                    <td><a href="#" class="text-dark">Minible Landing</a></td>
                                                    <td>
                                                        13 May, 2020
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-soft-success font-size-12">Complete</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">05</th>
                                                    <td><a href="#" class="text-dark">Authentication Pages</a></td>
                                                    <td>
                                                        06 May, 2020
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-soft-success font-size-12">Complete</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="uil uil-ellipsis-v"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="permission" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-3">Active</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-activeCheck2">
                                                                <label class="form-check-label" for="tasks-activeCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Ecommerce Product Detail</a>
                                                        </td>

                                                        <td>27 May, 2020</td>
                                                        <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">Active</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                                                <label class="form-check-label" for="tasks-activeCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Ecommerce Product</a>
                                                        </td>

                                                        <td>26 May, 2020</td>
                                                        <td><span class="badge bg-soft-primary font-size-12">Active</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h5 class="font-size-16 my-3">Upcoming</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck3">
                                                                <label class="form-check-label" for="tasks-upcomingCheck3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Chat app Page</a>
                                                        </td>

                                                        <td>-</td>
                                                        <td style="width: 160px;"><span class="badge bg-soft-secondary font-size-12">Waiting</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck2">
                                                                <label class="form-check-label" for="tasks-upcomingCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Email Pages</a>
                                                        </td>

                                                        <td>04 June, 2020</td>
                                                        <td><span class="badge bg-soft-primary font-size-12">Approved</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck1">
                                                                <label class="form-check-label" for="tasks-upcomingCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Contacts Profile Page</a>
                                                        </td>

                                                        <td>-</td>
                                                        <td><span class="badge bg-soft-secondary font-size-12">Waiting</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h5 class="font-size-16 my-3">Complete</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck3">
                                                                <label class="form-check-label" for="tasks-completeCheck3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">UI Elements</a>
                                                        </td>

                                                        <td>27 May, 2020</td>
                                                        <td style="width: 160px;"><span class="badge bg-soft-success font-size-12">Complete</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck2">
                                                                <label class="form-check-label" for="tasks-completeCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Authentication Pages</a>
                                                        </td>

                                                        <td>27 May, 2020</td>
                                                        <td><span class="badge bg-soft-success font-size-12">Complete</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck1">
                                                                <label class="form-check-label" for="tasks-completeCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Admin Layout</a>
                                                        </td>

                                                        <td>26 May, 2020</td>
                                                        <td><span class="badge bg-soft-success font-size-12">Complete</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tickets" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-3">Active</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Projects</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">01</th>
                                                        <td><a href="#" class="text-dark">Brand Logo Design</a></td>
                                                        <td>
                                                            18 Jun, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-primary font-size-12">Open</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">02</th>
                                                        <td><a href="#" class="text-dark">Minible Admin</a></td>
                                                        <td>
                                                            06 Jun, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-primary font-size-12">Open</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">03</th>
                                                        <td><a href="#" class="text-dark">Chat app Design</a></td>
                                                        <td>
                                                            28 May, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">04</th>
                                                        <td><a href="#" class="text-dark">Minible Landing</a></td>
                                                        <td>
                                                            13 May, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">05</th>
                                                        <td><a href="#" class="text-dark">Authentication Pages</a></td>
                                                        <td>
                                                            06 May, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h5 class="font-size-16 my-3">Upcoming</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Projects</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">01</th>
                                                        <td><a href="#" class="text-dark">Brand Logo Design</a></td>
                                                        <td>
                                                            18 Jun, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-primary font-size-12">Open</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">02</th>
                                                        <td><a href="#" class="text-dark">Minible Admin</a></td>
                                                        <td>
                                                            06 Jun, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-primary font-size-12">Open</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">03</th>
                                                        <td><a href="#" class="text-dark">Chat app Design</a></td>
                                                        <td>
                                                            28 May, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">04</th>
                                                        <td><a href="#" class="text-dark">Minible Landing</a></td>
                                                        <td>
                                                            13 May, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">05</th>
                                                        <td><a href="#" class="text-dark">Authentication Pages</a></td>
                                                        <td>
                                                            06 May, 2020
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-success font-size-12">Complete</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="uil uil-ellipsis-v"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h5 class="font-size-16 my-3">Complete</h5>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck3">
                                                                <label class="form-check-label" for="tasks-completeCheck3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">UI Elements</a>
                                                        </td>

                                                        <td>27 May, 2020</td>
                                                        <td style="width: 160px;"><span class="badge bg-soft-success font-size-12">Complete</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck2">
                                                                <label class="form-check-label" for="tasks-completeCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Authentication Pages</a>
                                                        </td>

                                                        <td>27 May, 2020</td>
                                                        <td><span class="badge bg-soft-success font-size-12">Complete</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck1">
                                                                <label class="form-check-label" for="tasks-completeCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-bold text-dark">Admin Layout</a>
                                                        </td>

                                                        <td>26 May, 2020</td>
                                                        <td><span class="badge bg-soft-success font-size-12">Complete</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
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
<?= $this->include('partials/js/main') ?>
</body>

</html>