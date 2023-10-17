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
                                    <a href="<?= site_url('Customer/add')?>" class="btn btn-success waves-effect waves-light float-end"><i class="mdi mdi-plus"></i> Add New Voucher</a>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
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
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
				            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
				                <thead> 
				                    <tr class="bg-transparent">
				                        <th>Customer ID</th>
				                        <th>Order Date</th>
				                        <th>Category</th>
				                        <th>Amount</th>
				                        <th>Receipt</th>
                                        <th>Pay Mode</th>
				                        <th>Status</th>
				                    </tr>
				                </thead>
				                <tbody>
				                	<?php foreach($customer as $data):?>
				                    <tr>
				                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#<?php echo $data['company_code']; ?></a> </td>
				                        <td>12-02-2005</td>
				                        <td><?php echo $data['firstname']."  ".$data['lastname'];?></td>
				                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
				                        <td><?php echo $data['mobile_no']; ?></td>
				                        <td>
				                            <a href="<?= site_url('Card/view/'.$data['company_code'])?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Card"><i class="uil-postcard"></i></a>
				                            <a href="<?= site_url('Customer/update/'.$data['company_code'])?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Customer"><i class="uil-edit"></i></a>
				                            <a href="<?php echo site_url('Customer/delete/'.$data['company_code']) ?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
				                        </td>
				                    </tr>
				                	<?php endforeach;?>
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