<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/datatable') ?>
    <?= $this->include('partials/css/select2') ?>
</head>
<?= $this->include('partials/body') ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row mt-2 mb-2 me-2">
                                <div class="col-xl-8"> 
                                </div>
                                <div class="col-xl-4"> 
                                    <a href="" class="btn btn-success waves-effect waves-light float-end"  data-bs-toggle="modal" data-bs-target="#addcategory"><i class="mdi mdi-plus"></i> Add Category</a>
                                </div>
                            </div>
                            <div class="modal fade" id="addcategory" tabindex="-1"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= site_url('Template/navcategory')?>" method="POST">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="col-form-label">Enter Category Name</label>
                                                <input type="text" class="form-control" name="nav_cat" id="nav_cat">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <form class="custom-validation" action="<?=site_url('Template/navigation')?>" method="POST">
                                    <h4 class="card-title">Navigation Management<hr></h4>
                                    <div class="row">
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Template Category Name</label>
                                            <select class="form-select form-control" name="nav_cat" id="nav_cat" required>
                                                <?php if($category):?>
                                                <?php foreach($category as $data):?>
                                                <option value="<?php echo $data->nav_cat?>"><?php echo $data->nav_cat?></option>
                                                <?php endforeach; ?>
                                                <?php endif; ?>   
                                            </select>
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Choose Pages Name</label>
                                            <select class="form-select form-control select2 select2-multiple"multiple="multiple" id="pages_name" name="pages_name[]" >
                                                <option>Choose Page Name</option>
                                                <option value="home">home</option>
                                                <option value="about">about</option>
                                                <option value="gallery">gallery</option>
                                                <option value="payment">payment</option>
                                                <option value="product">product</option>
                                                <option value="catalogue">catalogue</option>
                                                <option value="brochure">brochure</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="template" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Navigation Category</th>
                                            <th scope="col">Navigation Pages</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //if($navlist):?>
                                        <?php// foreach($navlist as $data):?>
                                        <tr>
                                            <td></td>
                                            <td>temp_name</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Template"><i class="uil-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Template"><i class="uil-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php// endforeach; ?>
                                        <?php //endif; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="category" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Navigation Category Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($category):?>
                                        <?php foreach($category as $data):?>
                                        <tr>
                                            <td><?php echo $data->nav_cat?></td>
                                            <td>Active</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Template"><i class="uil-edit"></i></a>
                                                <a href="<?= site_url('Template/delNavCat/'.$data->navcat_id)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Template"><i class="uil-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
    </div>
    <?= $this->include('partials/footer') ?>
</div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/main') ?>
<?= $this->include('partials/js/datatable') ?>
<?= $this->include('partials/js/select2') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#template').DataTable();
        $('#category').DataTable();
        $('#pages_name').select2();
    });
</script>
</body>

</html>