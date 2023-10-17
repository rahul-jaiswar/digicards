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
                    <div class="card">
                        <div class="card-body">
                            <table id="payment" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Company Code</th>
                                        <th>Company Name</th>
                                        <th>Total Payment Channel</th>
                                        <th>Total UPI QR</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
                                        <td>Company Name</td>
                                        <td>2</td>
                                        <td>12</td>
                                        <td>
                                            <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
                                            <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Customer"><i class="uil-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <button class="col-md-12 btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#addchannel">Add Payment Channel Category Name <i class="uil uil-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <table id="channel" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Company Code</th>
                                        <th>Channel Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $row = 1; if($paymentcatlist): ?>
                                    <?php foreach($paymentcatlist as $data): ?>
                                    <tr>
                                        <td><?= $row++?></td>
                                        <td><?= $data->company_name?></td>
                                        <td><?= $data->upichannel_name?></td>
                                        <td>
                                            <a href="<?= site_url('Customer/payment_status')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer">Set to Activate</a>
                                            <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
                                            <a href="<?= site_url('Customer/deleteUPIChannel/'.$data->upichannel_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete UPI Payment Category"><i class="uil-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="addchannel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Channel Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= site_url('Customer/payments')?>" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <select class="form-control" name="company_name" id="company_name" required>
                                            <option value="">Select Company Name</option>
                                            <?php if($customerlist): ?>
                                            <?php foreach($customerlist as $data): ?>
                                            <option value="<?php echo $data['company_name']; ?>"><?php echo $data['company_name']; ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="upichannel_name" class="col-form-label">Enter Payment Channel Name</label>
                                        <input type="text" class="form-control" name="upichannel_name" id="upichannel_name" required>
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                     <button class="col-md-12 btn btn-outline-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#addbankinfo">Add Bank Payment Information <i class="uil uil-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <table id="bankpayment" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Company Code</th>
                                        <th>Bank Infomation</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $row = 1; if($bankpayment): ?>
                                    <?php foreach($bankpayment as $data): ?>
                                    <tr>
                                        <td><?= $row++?></td>
                                        <td><?= $data->company_code?></td>
                                        <td>
                                            <?= $data->bank_name?><br>
                                            <?= $data->holder_name?><br>
                                            <?= $data->account_no?><br>
                                            <?= $data->IFSC_code?><br>
                                            <?= $data->GST_no?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('Customer/payment_status')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer">Set to Activate</a>
                                            <a href="<?= site_url('Customer/update')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Customer"><i class="uil-edit"></i></a>
                                            <a href="<?= site_url('Customer/deleteBankDetails/'.$data->bank_name)?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Bank Details Payment"><i class="uil-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="addbankinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Bank Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= site_url('Customer/bankPayments')?>" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <select class="form-control" name="company_name" id="company_name" required>
                                            <option value="">Select Company Name</option>
                                            <?php if($customerlist): ?>
                                            <?php foreach($customerlist as $data): ?>
                                            <option value="<?php echo $data['company_name']; ?>"><?php echo $data['company_name']; ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bank_name" class="col-form-label">Bank Name</label>
                                        <select class="form-control"  name="bank_name" id="bank_name" required>
                                            <option value="">Select Bank Name</option>
                                            <option value="Bank of Baroda">Bank of Baroda</option>
                                            <option value="Bank of India">Bank of India</option>
                                            <option value="Bank of Maharashtra">Bank of Maharashtra</option>
                                            <option value="Canara Bank">Canara Bank</option>
                                            <option value="Central Bank of India">Central Bank of India</option>
                                            <option value="Indian Bank">Indian Bank</option>
                                            <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                                            <option value="Punjab and Sind Bank">Punjab and Sind Bank</option>
                                            <option value="Punjab National Bank">Punjab National Bank</option>
                                            <option value="State Bank of India">State Bank of India</option>
                                            <option value="UCO Bank">UCO Bank</option>
                                            <option value="Union Bank of India">Union Bank of India</option>
                                            <option value="Axis Bank">Axis Bank</option>
                                            <option value="Bandhan Bank">Bandhan Bank</option>
                                            <option value="CSB Bank">CSB Bank</option>
                                            <option value="City Union Bank">City Union Bank</option>
                                            <option value="DCB Bank">DCB Bank</option>
                                            <option value="Dhanlaxmi Bank">Dhanlaxmi Bank</option>
                                            <option value="Federal Bank">Federal Bank</option>
                                            <option value="HDFC Bank">HDFC Bank</option>
                                            <option value="ICICI Bank">ICICI Bank</option>
                                            <option value="IndusInd Bank">IndusInd Bank</option>
                                            <option value="IDFC FIRST Bank">IDFC FIRST Bank</option>
                                            <option value="Jammu & Kashmir Bank">Jammu & Kashmir Bank</option>
                                            <option value="Karnataka Bank">Karnataka Bank</option>
                                            <option value="Karur Vysya Bank">Karur Vysya Bank</option>
                                            <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                            <option value="IDBI Bank">IDBI Bank</option>
                                            <option value="Nainital bank">Nainital bank</option>
                                            <option value="RBL Bank">RBL Bank</option>
                                            <option value="South Indian Bank">South Indian Bank</option>
                                            <option value="Tamilnadu Mercantile Bank">Tamilnadu Mercantile Bank</option>
                                            <option value="YES Bank">YES Bank</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="upichannel_name" class="col-form-label">Account Holder Name</label>
                                        <input type="text" class="form-control" name="holder_name" id="holder_name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="upichannel_name" class="col-form-label">Account No</label>
                                        <input type="text" class="form-control" name="account_no" id="account_no" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="upichannel_name" class="col-form-label">IFSC Code</label>
                                        <input type="text" class="form-control" name="IFSC_code" id="IFSC_code" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="upichannel_name" class="col-form-label">Company GST No</label>
                                        <input type="text" class="form-control" name="GST_no" id="GST_no" required>
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
            </div>
        </div>	
    </div> <!-- container-fluid -->
</div>
    <?= $this->include('partials/vendor-scripts') ?>
	<?= $this->include('partials/js/main') ?>
	<?= $this->include('partials/js/datatable') ?>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#payment').DataTable();
		    $('#channel').DataTable();
            $('#bankpayment').DataTable();
		});
	</script>
</body>
</html>

