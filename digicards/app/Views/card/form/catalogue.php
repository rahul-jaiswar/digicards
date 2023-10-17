<form class="repeater custom-validation" action="<?=site_url('Card/catalogue/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr>Add Catalogue
        <!-- <a class="btn btn-success btn-sm waves-effect float-end " data-bs-toggle="modal" data-bs-target="#addcharac"><i class="mdi mdi-plus"></i>  Add Product Characteristcs</a><hr> -->
    </h4>
    <div class="row">
    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label class="uploadcatalogue" style="cursor: pointer;">
                Catalogue Image
                <img id="cataloguehere" src="http://placehold.it/120x120" style="width:auto ;height: 120px;">
                <input id="catalogue" name="catalogue_img" class='pis' onchange="uploadcatalogue(this);" type="file" style="display: none;">
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
                <label class="form-label">Select Catalogue Category</label>
                <select class="form-select form-control" name="ccategory_name" id="ccategory_name">
                    <option value="">Choose Catalogue Category</option>
                    <?php foreach($productcat as $data):?>
                    <option value="<?php echo $data->category_name?>"><?php echo $data->category_name?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
            	<label class="form-label">Select Product Listing</label>
                <select class="form-select" name="clist_view" id="clist_view">
                    <option selected>Choose Listing View</option>
                    <option value="slider">Slider</option>
                    <option value="list">List</option>
                    <option value="2">2 x 2</option>
                    <option value="1">1 x 1</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-3">
            <label class="form-label">Catalogue Position</label>
            <select class="form-select form-control" name="position" id="position">
                <option value="">Select Catalogue Position</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="cname" id="cname" required />
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Details URL</label>
            <input type="text" class="form-control" name="cdetails" id="cdetails"  required />
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Price</label>
            <input type="number" class="form-control" name="cprice" id="cprice"  required />
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-xl-12 ">
            <label class="form-label">Characteristcs Value</label>
            <textarea class="form-control" name="characteristcs" id="characteristcs" required /></textarea>
        </div>
    </div>
    <div>
        <button type="reset" class="btn btn-secondary waves-effect">
            Cancel
        </button>
        <button type="submit" class="btn btn-primary waves-effect waves-light me-1 ">
            Submit
        </button>
    </div>
</form>
<div class="table-responsive mt-4 mb-4">
    <table id="catalogue_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Product Image</th>
                <th scope="col">Product Category</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product URL</th>
                <th scope="col">Action</th>    
            </tr>
        </thead>
        <tbody>
        	<?php if($catalogue):?>
            <?php foreach($catalogue as $cataloguedata):?>
            <tr>
                <td> 
                 	<img src="<?php echo base_url('public/catalogue/'.$cataloguedata['catalogue_img']); ?>" alt="" class="avatar-xs rounded-circle me-2"> 
                    <a href="<?=site_url('Users/details')?>" class="text-body">Simon Ryles</a>
                </td>
                <td><?php echo $cataloguedata['ccategory_name']?></td>
                <td><?php echo $cataloguedata['cname']?></td>
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
        	<?php endif?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    $('.uploadcatalogue').bind("click" , function () {
        $('#catalogue').click();
    });

    function uploadcatalogue(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#cataloguehere')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>