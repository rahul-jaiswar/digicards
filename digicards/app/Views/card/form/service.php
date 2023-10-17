<form class="custom-validation" action="<?=site_url('Card/service/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr>Add Service <hr></h4>
    <div class="row">
    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label class="uploadprofile" style="cursor: pointer;">
                Service Image
                <img id="profilehere" src="http://placehold.it/120x120" style="width:auto ;height: 120px;">
                <input id="profile" name="service_img" class='pis' onchange="uploadprofile(this);" type="file" style="display: none;">
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
                <label class="form-label">Select Service Category</label>
                <select class="form-select form-control" name="scategory_name" id="scategory_name">
                    <option value="">Choose Service Category</option>
                    <?php foreach($servicecat as $data):?>
                    <option value="<?php echo $data->scategory_name?>"><?php echo $data->scategory_name?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
            	<label class="form-label">Select Service Hours</label>
                <select class="form-select" name="availablity" id="availablity">
                    <option selected>Choose Avalibility</option>
                    <option value="Office Timing 9 to 6">Office Timing 9 to 6</option>
                    <option value="Always Open">Always Open</option>
                    <option value="By Appointment Only">By Appointment Only</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-3">
            <label class="form-label">Service Position</label>
            <select class="form-select form-control" name="position" id="position">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" class="form-control" name="sname" id="sname"/>
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Service Details URL</label>
            <input type="text" class="form-control" name="sdetails" id="sdetails" required />
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Service Price</label>
            <input type="number" class="form-control" name="sprice" id="sprice"  required />
        </div>
        <div class="col-xl-12 mb-3">
            <label>About Service</label>
            <textarea class="form-control" name="about_service" id="about_service" placeholder="Enter short info about services">
            </textarea>
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
    <table id="service_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Service Position</th>
                <th scope="col">Service Image</th>
                <th scope="col">Service URL</th>
                <th scope="col">Service Price</th>
                <th scope="col" style="width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php if($service):?>
            <?php foreach($service as $servicedata):?>
            <tr>
                <td style="width: 20%;">1</td>
                <td><img src="<?php echo base_url('public/service_img/'.$servicedata['service_img']); ?>" alt="" class="avatar-xs rounded-circle me-2">
                    <a href="<?=site_url('Users/details')?>" class="text-body"><?php echo $servicedata['sname'];?></a>
                </td>
                <td><?php echo $servicedata['sdetails'];?></td>
                <td><?php echo $servicedata['sprice'];?></td>
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