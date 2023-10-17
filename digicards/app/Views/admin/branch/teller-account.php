<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/datatable') ?>
</head>

<body>
    <?= $this->include('partials/menu') ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-title-box d-flex align-items-center justify-content-between">
                                            <h4 class="card-title">Branch Profit and Loss</h4>
                                            <div class="page-title-right">
                                                <ol class="breadcrumb m-0">
                                                    <li class="breadcrumb-item">
                                                      <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                        <a href="" class="btn btn-success waves-effect waves-light"><i class="uil-chart-pie me-2"></i>Statics Graph</a>
                                                        <a href="<?= site_url('customer/add')?>" class="btn btn-success waves-effect waves-light"><i class="uil-filter"></i></a>
                                                      </div>
                                                    </li>
                                                </ol>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Branch No</th>
                                            <th>Branch Name</th>
                                            <th>Total Balance</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>12345678911</td>
                                            <td>SSNL</td>
                                            <td>225500.00</td>
                                            <td>
                                                <button class="btn btn-success btn-sm waves-effect waves-light">Income</button>
                                                <button class="btn btn-success btn-sm waves-effect waves-light">Expenses</button>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('customer/add')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View All Transaction"><i class="uil-receipt"></i></a>
                                                <a href="<?= site_url('customer/add')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Passbook"><i class="uil-print"></i></a>
                                                <a href="<?= site_url('customer/add')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Email Statement"><i class="uil-at"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
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
<?= $this->include('partials/js/datatable') ?>
<?= $this->include('partials/js/main') ?>
<script type="text/javascript">
$(document).ready(function(){
    $('[rel="tooltip"]').tooltip({trigger: "hover"});
});
</script>
</body>

</html>