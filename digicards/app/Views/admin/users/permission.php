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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="">
                                    <div class="row">
                                        <div class="col-xl-5 mb-3">
                                            <select class="form-select form-control" name="gender">
                                                <option selected>Select Role to Update Permission</option>
                                                <option value="Account No">Admin</option>
                                                <option value="Agent">Agent</option>
                                                <option value="Customer">Members</option>
                                                <option value="Customer">Accounts</option>
                                                <option value="Branch">Branch</option>
                                                <option value="Users">Users</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Permission</th>
                                                <th>For</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">1</td>
                                                <td data-field="name">bank-view-any</td>
                                                <td data-field="age">bank</td>
                                                <td data-field="gender">View any bank permission</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

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

<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('partials/js/table-edit') ?>
<?= $this->include('partials/js/main') ?>
</body>

</html>