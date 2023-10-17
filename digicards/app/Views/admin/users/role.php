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
                <?= \Config\Services::validation()->listErrors();
                $message = \Config\Services::session()->getFlashdata('msg');
                //echo"<pre>";print_r(isset($message));exit();?>
                <?php if (isset($message)) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                                    <a href="" class="btn btn-success waves-effect waves-light float-end"  data-bs-toggle="modal" data-bs-target="#addrole"><i class="mdi mdi-plus"></i> Add Role</a>
                                </div>
                            </div>
                            <div class="modal fade" id="addrole" tabindex="-1"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= site_url('User/role')?>" method="POST">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="col-form-label">Enter Role Name</label>
                                                <input type="text" class="form-control" name="role_name" id="role_name">
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
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="customer" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($role as $data):?>
                                        <tr>
                                            <td><?php echo $data->role_name ?></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Template"><i class="uil-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Template"><i class="uil-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/main') ?>
<?= $this->include('partials/js/datatable') ?>
</body>

</html>