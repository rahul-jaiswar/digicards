<form class="repeater custom-validation" action="<?=site_url('Card/social/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr>Add New Social Channel <hr></h4>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label class="uploadicon" style="cursor: pointer;">
                Social Image
                <img id="iconhere" src="http://placehold.it/120x120" style="width:auto ;height: 120px;">
                <input id="icon" name="icon_img" class='pis' onchange="uploadicon(this);" type="file" style="display: none;">
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
                <label class="form-label">Select Social Channel Name</label>
                <select class="form-select form-control" name="channel_name" id="channel_name" required>
                    <?php if(!empty($csocial['channel_name'])){?>
                        <option value="<?php echo $csocial['channel_name'];?>"><?php echo $csocial['channel_name'];?></option>
                        <option value="">Choose Social Media or Channel Name</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Whatsapp">Whatsapp</option>
                    <?php }else{?>
                        <option value="">Choose Social Media or Channel Name</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Whatsapp">Whatsapp</option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Enter URL</label>
                <?php if(!empty($csocial['channel_url'])){?>
                    <input type="text" class="form-control"name="channel_url" id="channel_url" value="<?php echo $csocial['channel_url'];?>"  required/>
                <?php }else{?>
                    <input type="text" class="form-control" name="channel_url" id="channel_url"  required placeholder="Enter Social URL"/>
                <?php }?>
            </div>
        </div>
        <div class="col-xl-12 mb-3">
            <label>Choose Icon Visibility</label>
            <select class="form-select form-control" name="icon_visibility" id="icon_visibility">
            	<?php if(!empty($csocial['icon_visibility'])){?>
            		<option value="<?php echo $csocial['icon_visibility']?>"><?php echo $csocial['icon_visibility']?></option>
            		<option value="">Select the Icon Visibility</option>
            		<option value="Visible">Visible</option>
                	<option value="Hide">Hide</option>
            	<?php }else{?>
            		<option value="">Select the Icon Visibility</option>
            		<option value="Visible">Visible</option>
                	<option value="Hide">Hide</option>
            	<?php }?>
            </select>
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
    <table id="social_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Icon</th>
                <th scope="col">Company Name</th>
                <th scope="col">Channel Name</th>
                <th scope="col">Channel Status</th>
                <th scope="col" style="width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach($social as $socialdata):?>
            <tr>
                <td><img src="<?php echo base_url('public/social_icon/'.$socialdata['icon_img']); ?>" alt="" class="avatar-xs rounded-circle me-2"></td>
                <td><?php echo $socialdata['company_name']?></td>
                <td><?php echo $socialdata['channel_name']?></td>
                <td><?php if($socialdata['icon_visibility'] != 'Visible'){?>
                    Un Visible
                	<?php }else{?>
            		Visible
                	<?php }?>
                </td>
                <td>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="<?= site_url('Card/social/'.$socialdata['social_id']) ?>" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        	<?php endforeach;?>
        </tbody>
    </table>
</div>
<script type="text/javascript">

    $('.uploadicon').bind("click" , function () {
        $('#icon').click();
    });

    function uploadicon(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#iconhere')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>