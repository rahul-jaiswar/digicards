<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/datatable') ?>

</head>
<?= $this->include('partials/body') ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row mt-2 mb-2 me-2">
                                <div class="col-xl-8"> 
                                </div>
                                <div class="col-xl-4"> 
                                    <a href="" class="btn btn-success waves-effect waves-light float-end"  data-bs-toggle="modal" data-bs-target="#addcategory"><i class="mdi mdi-plus"></i> Add Category</a>
                                    <a href="" class="btn btn-success waves-effect waves-light float-end me-2"  data-bs-toggle="modal" data-bs-target="#addtemplate"><i class="mdi mdi-plus"></i> Add New Template</a>
                                </div>
                            </div>
                            <div class="modal fade" id="addcategory" tabindex="-1"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= site_url('Template/category')?>" method="POST">
                                                <div class="mb-3">
                                                    <label class="col-form-label">Enter Category Name</label>
                                                    <input type="text" class="form-control" name="temp_cat" id="temp_cat">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="addtemplate" tabindex="-1"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Template</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= site_url('Template/add')?>" method="POST">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="col-form-label">Select Template Category</label>
                                                <select class="form-select form-control" name="temp_cat" id="temp_cat" required>
                                                    <?php if($category):?>
                                                    <?php foreach($category as $data):?>
                                                    <option value="<?php echo $data->temp_cat?>"><?php echo $data->temp_cat?></option>
                                                    <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">Enter Template Name</label>
                                                <input type="text" class="form-control" name="temp_name" id="temp_name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">Upload Preview</label>
                                                <input type="file" class="form-control" name="temp_preview" id="temp_preview">
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
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="template" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Template Category</th>
                                            <th scope="col">Template Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($template):?>
                                        <?php foreach($template as $data):?>
                                        <tr>
                                            <td><?php echo $data->temp_cat?></td>
                                            <td><?php echo $data->temp_name?></td>
                                            <td>Active</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Template"><i class="uil-edit"></i></a>
                                                <a href="<?= site_url('Template/deleteCat/'.$data->template_id)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Template"><i class="uil-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
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
                                            <th scope="col">Card Category Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($category):?>
                                        <?php foreach($category as $data):?>
                                        <tr>
                                            <td><?php echo $data->temp_cat?></td>
                                            <td>Active</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Template"><i class="uil-edit"></i></a>
                                                <a href="<?= site_url('Template/deleteCat/'.$data->tempcat_id)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Template"><i class="uil-trash"></i></a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#template').DataTable();
        $('#category').DataTable();
    });
</script>
</body>

</html>