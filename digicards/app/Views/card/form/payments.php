<form class="custom-validation" action="<?=site_url('Card/payments/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr>Add Payments  <hr></h4>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label class="uploadqr" style="cursor: pointer;">
                Upload UPI QR
                <img id="qrhere" src="http://placehold.it/120x120" style="width:auto ;height: 120px;">
                <input id="qrcode" name="channel_QR" class='pis' onchange="uploadqr(this);" type="file" style="display: none;">
            </label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
            <div class="mb-2"> 
                <label class="form-label">Company Code</label>
                <input type="text" class="form-control" name="company_code" id="company_code" value="<?php echo $customer['company_code'] ?>" readonly/>
            </div>
            <div class="">
                <label class="form-label">Company Name</label>
                <input type="text" class="form-control" name="company_name" id="company_name"  value="<?php echo $customer['company_name'] ?>"  readonly/>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
            <div class="mb-2"> 
                <label class="form-label">Select Payment Channel</label>
                <select class="form-select form-control" name="upichannel_name" id="upichannel_name">
                    <option value="">UPI Payment Channel</option>
                    <?php if($upicategory):?>
                    <?php foreach($upicategory as $data):?>
                        <option value="<?php echo $data->upichannel_name; ?>"><?php echo $data->upichannel_name; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <option value="Google Pay">Google Pay</option>
                    <option value="Phone Pay">Phone Pe</option>
                    <option value="Paytm">Paytm</option>
                    <option value="Bahart Pay">Bahart Pay</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Registered Number</label>
                <input type="text" class="form-control" name="registered_no" id="registered_no" placeholder="XXXXXXXXXX" required/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-3">
            <label class="form-label">Enter UPI ID or URL</label>
            <input type="text" class="form-control"name="channel_link" id="channel_link" placeholder="XXX@XXX.XX" required/>
        </div>
    </div>
    <div>
        <div>
            <button type="reset" class="btn btn-secondary waves-effect">
                Cancel
            </button>
            <button type="submit" class="btn btn-primary waves-effect waves-light me-1 ">
                Submit
            </button>
        </div>
    </div>
</form>
<div class="table-responsive mt-4 mb-4">
    <table id="payments_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">QR</th>
                <th scope="col">Registerd Number</th>
                <th scope="col">Bank Details</th>
                <th scope="col" style="width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($payment):?>
            <?php foreach($payment as $paymentdata):?>
            <tr>
                <td>
                    <img src="<?php echo base_url('public/payment_qr/'.$paymentdata['channel_QR']); ?>" alt="" class="avatar-xs rounded-circle me-2">
                    <a href="<?=site_url('Users/details')?>" class="text-body"><?php echo $paymentdata['upichannel_name'];?></a>
                </td>
                <td><?php echo $paymentdata['registered_no'];?></td>
                <td><?php echo $paymentdata['channel_link'];?></td>
                <td>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
</div>
<script type="text/javascript">

    $('.uploadqr').bind("click" , function () {
        $('#qrcode').click();
    });

    function uploadqr(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#qrhere')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
