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
                                <div class="col-xl-10"> 
                                   
                                </div>
                                <div class="col-xl-2"> 
                                    <a href="<?= site_url('User/add')?>" class="btn btn-success waves-effect waves-light float-end"><i class="mdi mdi-plus"></i> Add Entry</a>
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
                                            <th scope="col">Account Name</th>
                                            <th scope="col">Opening</th>
                                            <th scope="col">Dr.Tran</th>
                                            <th scope="col">Cr.Tran</th>
                                            <th scope="col">Dr.Balance</th>
                                            <th scope="col">Cr.Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ram Singh</td>
                                            <td>10000</td>
                                            <td>100</td> 
                                            <td>500</td>
                                            <td>2505</td>
                                            <td>6320</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <p>Balance Sheet</p>
                                <table class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Lability</th>
                                            <th scope="col">Assets</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Particular</td>
                                            <td>Amount</td>
                                            <td>Particular</td>
                                            <td>Amount</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <p>Transaction Summary</p>
                                <table class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Particular</th>
                                            <th scope="col">Debit</th>
                                            <th scope="col">Credit</th>
                                            <th scope="col">Differance</th>
                                            <th scope="col">Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Opening Value</td>
                                            <td>0</td>
                                            <td>8000</td> 
                                            <td>- 8000</td>
                                            <td>please correct opening value</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <p>Group Summary</p>
                                <table class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Particular</th>
                                            <th scope="col">Op.Dr</th>
                                            <th scope="col">Op.Cr</th>
                                            <th scope="col">Dr</th>
                                            <th scope="col">Cr</th>
                                            <th scope="col">Dr.Bal</th>
                                            <th scope="col">Cr.Bal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Banking ALC</td>
                                            <td>0</td>
                                            <td>8000</td> 
                                            <td>8000</td>
                                            <td>8000</td>
                                            <td>8000</td>
                                            <td>8000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <p>Investment Account</p>
                                <table class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Debit</th>
                                            <th scope="col">Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1200</td>
                                            <td>15000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <p>Profilt and Loss Account</p>
                                <table class="table table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Debit</th>
                                            <th scope="col">Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1200</td>
                                            <td>15000</td>
                                        </tr>
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

<?= $this->include('partials/right-sidebar') ?>
<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/main') ?>
<?= $this->include('partials/js/datatable') ?>
</body>

</html>