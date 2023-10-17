<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
</head>
    <?php $this->load->view('panel/partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('panel/partials/menu') ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <?php if ($this->session->flashdata('success')): ?>
                          <div class="alert alert-success bordered" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                            <button aria-label="" class="close" data-dismiss="alert"></button>
                            <?php $this->session->unset_userdata ( 'success' ); ?>
                          </div>
                          <?php elseif ($this->session->flashdata('error')): ?>
                          <div class="alert alert-danger bordered" role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                            <button aria-label="" class="close" data-dismiss="alert"></button>
                          </div>
                          <?php $this->session->unset_userdata ( 'error' ); ?>
                        <?php endif; ?>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">User Grid</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                            <li class="breadcrumb-item active">User Grid</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="product-wishlist">
                                            <a href="#">
                                                <i class="uil uil-video"></i>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="avatar-lg mx-auto mb-4">
                                            <div class="avatar-title bg-soft-primary rounded-circle text-primary">
                                                <i class="mdi mdi-account-circle display-4 m-0 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="text-center product-content p-4">
                                            <h5 class="mb-1"><a href="#" class="text-dark">Addon Name Here</a></h5>
                                            <p class="text-muted font-size-13">Subscription Name</p>

                                            <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$280</del></span> $260</h5>
                                            <ul class="list-inline mb-0 text-muted product-color">
                                                <li class="list-inline-item">
                                                    Colors :
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-dark"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-light"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-primary"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="uil uil-book-medical me-1"></i> Activated</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light"><i class="uil uil-book-medical me-1"></i> De-Activated</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light"><i class="uil uil-dollar-alt me-1"></i> Purchase</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- 
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                <div class="text-center my-3">
                                    <a href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div>
        <!-- END layout-wrapper -->
		<?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

