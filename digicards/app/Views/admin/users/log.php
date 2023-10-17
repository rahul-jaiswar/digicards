
<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/responsive-table') ?>
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
                                <div class="col-xl-2"> 
                                    
                                </div>
                                <div class="col-xl-10"> 
                                    <h4 class="card-title mt-2 mb-2">
                                        <div class="page-title-right float-end">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);"><a href="<?= site_url('User/list')?>">User List</a></li>
                                                <li class="breadcrumb-item active">User Log</li>
                                            </ol>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Example</h4>
                                <p class="card-title-desc">This is an experimental awesome solution for responsive tables with complex data.</p>

                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th data-priority="1">Last Action</th>
                                                    <th data-priority="3">Action Time</th>
                                                    <th data-priority="1">Module</th>
                                                    <th data-priority="3">Action Summary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>#SSNL125 <span class="co-name">Rahul</span></th>
                                                    <td>10-01-2023</td>
                                                    <td>12:12PM</td>
                                                    <td>Admin Manager</td>
                                                    <td>Add a User</td>
                                                </tr>
                                                <tr>
                                                    <th>#xSSNL1255 <span class="co-name">Vikram</span></th>
                                                    <td>09-01-2023</td>
                                                    <td>04:12PM</td>
                                                    <td>Transaction Management</td>
                                                    <td>Add Cash Entry</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <?= $this->include('partials/footer') ?>
    </div>
</div>
<!-- END layout-wrapper -->
<!-- END layout-wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/main') ?>
<?= $this->include('partials/js/responsive-table') ?>
</body>

</html>