<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <!-- DataTables -->
    <link href="<?=base_url('public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?=base_url('public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <a href="<?= site_url('Customer/add')?>" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New Customer</a>
                            </div>
                            <div class="col-md-6">
                                <div class="float-end">
                                    <a href="<?= site_url('Users/add')?>" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus me-2"></i> Add New Customer</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                <thead> 
                                    <tr class="bg-transparent">
                                        <th>Customer ID</th>
                                        <th>Order Date</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Contact No</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
                                        
                                        <td>
                                            12-02-2005
                                        </td>
                                        <td>
                                            Customer Name
                                        </td>
                                        <td>admin@gmail.com</td>

                                        <td>
                                            0123456789
                                        </td>
                                        <td>
                                            rahul
                                        </td>
                                        <td>
                                            <select class="form-control-sm">
                                                <option>New</option>
                                                <option value="In-Progress">In-Progress</option>
                                                <option value="Operation">Operation</option>
                                                <option value="Payment">Payment</option>
                                                <option value="Delivered">Delivered</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
<?= $this->include('partials/vendor-scripts') ?>

<!-- Required datatable js -->
<script src="<?=site_url('public/assets/libs/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=site_url('public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>

<!-- Responsive examples -->
<script src="<?=site_url('public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=site_url('public/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')?>"></script>

<!-- init js -->
<script src="<?=site_url('public/assets/js/pages/ecommerce-datatables.init.js')?>"></script>

<script src="<?=site_url('public/assets/js/app.js')?>"></script>

</body>

</html>