<form class="custom-validation" action="<?=site_url('Card/product/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr>Add Bulk Product <hr></h4>
    <div class="row">
    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <label class="uploadproduct" style="cursor: pointer;">
                Product Image
                <img id="producthere" src="http://placehold.it/120x120" style="width:auto ;height: 120px;">
                <input id="product" name="productImg" class='pis' onchange="uploadproduct(this);" type="file" style="display: none;">
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
                <label class="form-label">Select Product List</label>
                <select class="form-select" name="list_view" id="list_view">
                    <option selected>Choose Listing View</option>
                    <option value="1">2 x 2</option>
                    <option value="1">3 x 3</option>
                    <option value="1">1 x 1</option>
                </select>
            </div>
            <div class="">
                <label class="form-label">Select Product Category</label>
                <select class="form-select form-control" name="category_name" id="category_name">
                    <option value="">Choose Product Category</option>
                    <?php foreach($productcat as $data):?>
                    <option value="<?php echo $data->category_name?>"><?php echo $data->category_name?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Position</label>
            <select class="form-select form-control" name="position" id="position">
                <option value="">Select Product Position</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Name</label>
            <div class="row">
                <div class="btn-group" role="group">
                    <input type="text" class="form-control" name="pname" id="pname" required/>
                </div>
            </div>
        </div> 
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Details URL</label>
            <input type="text" class="form-control" name="pdetails" id="pdetails" />
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Product Price</label>
            <input type="number" class="form-control" name="pprice" id="pprice" required/>
        </div>
        <div class="col-xl-12 mb-3">
            <label>About Product</label>
            <textarea class="form-control" name="description" id="description"></textarea>
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
    <table id="product_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Product Position</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product URL</th>
                <th scope="col">Product Price</th>
                <th scope="col" style="width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php if($product):?>
            <?php foreach($product as $pddata):?>
            <tr>
                <td style="width: 20%;"><?php echo $pddata['position'];?></td>
                <td><img src="<?php echo base_url('public/product_image/'.$pddata['product_img']); ?>" alt="" class="avatar-xs rounded-circle me-2">
                    <a href="<?=site_url('Users/details')?>" class="text-body"><?php echo $pddata['pname'];?></a>
                </td>
                <td><?php echo $pddata['pdetails'];?></td>
                <td><?php echo $pddata['pprice'];?></td>
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
    $('.uploadproduct').bind("click" , function () {
        $('#product').click();
    });

    function uploadproduct(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#producthere')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>