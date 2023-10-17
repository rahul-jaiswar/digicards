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
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row mt-2 mb-2 me-2">
                                <div class="col-xl-10"> 
                                   
                                </div>
                                <div class="col-xl-2"> 
                                    <a href="" class="btn btn-success waves-effect waves-light float-end me-2"  data-bs-toggle="modal" data-bs-target="#addtemplate"><i class="mdi mdi-plus"></i> Add New Template</a>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
                <div class="modal fade" id="addtemplate" tabindex="-1"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Template</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= site_url('Template/add')?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="col-form-label">Select Template Category</label>
                                    <select class="form-select form-control" name="temp_cat" id="temp_cat" required>
                                        <option value="">Select Template Category</option>
                                        <?php if($category):?>
                                        <?php foreach($category as $data):?>
                                        <option value="<?php echo $data->temp_cat?>"><?php echo $data->temp_cat?></option>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Enter Template Name</label>
                                    <input type="text" class="form-control" name="temp_name" id="temp_name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Upload Preview</label>
                                    <input type="file" class="form-control" name="temp_preview" id="temp_preview" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?= \Config\Services::validation()->listErrors();
                $message = \Config\Services::session()->getFlashdata('msg');
                //echo"<pre>";print_r(isset($message));exit();?>
                <?php if (isset($message)) : ?>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <?= \Config\Services::session()->getFlashdata('msg'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                <?php endif; ?>
				<!-- end page title -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <h5>Template Gallery</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inline float-md-end">
                                                <div class="search-box ml-2">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                                        <i class="mdi mdi-magnify search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                                        <li class="nav-item">
                                            <a class="nav-link disabled fw-medium" href="#" tabindex="-1" aria-disabled="true">Choose by:</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link active" href="">All</a>
                                        </li>
                                        <?php if($category):?>
                                        <?php foreach($category as $data):?>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="<?= site_url('Template/list/'.$data->temp_cat)?>"><?php echo $data->temp_cat; ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>

                                    <div class="row">
                                        <?php if($template):?>
                                        <?php foreach($template as $data):?>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img " style="height: 500px;overflow-x: hidden;overflow-y: auto;">
                                                    <div class="product-ribbon badge bg-warning">
                                                        <?php echo $data->temp_cat?>
                                                    </div>
                                                    <div class="img-fluid mx-auto d-block">
                                                        <iframe src="<?php echo $data->temp_preview;?>" style="height: 500px;width: 100%;"></iframe>
                                                    </div>
                                                </div>
                                                <div class="text-center product-content p-4">
                                                    <hr>
                                                    <h5 class="mb-1"><a href="#" class="text-dark"><?php echo $data->temp_name?></a></h5>
                                                    <span class="mb-0 text-muted product-color">
                                                        <a href="<?= site_url('Template/update/'.$data->template_id)?>" class="col-md-12 btn btn-success waves-effect waves-light">Modify Template</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Page 2 of 84</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="float-sm-end">
                                                <ul class="pagination pagination-rounded mb-sm-0">
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
                                                        <a href="#" class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">5</a>
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
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Minible.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>    
</div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/main') ?>
<?= $this->include('partials/js/datatable') ?>
</body>

</html>