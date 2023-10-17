<form class="custom-validation" action="<?=site_url('Card/gallery/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr>Upload Gallery<hr></h4>
    <div class="row">
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company Code</label>
            <input type="text" class="form-control" name="company_code" id="company_code" value="<?php echo $customer['company_code'] ?>" readonly/>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="company_name" id="company_name"  value="<?php echo $customer['company_name'] ?>"  readonly/>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Upload Gallery Images</label>
            <input type="file" class="form-control" name="image_name" id="image_name" required multiple />
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
    <table id="gallery_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Total Image</th>
                <th scope="col">Date</th>
                <th scope="col" style="width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach($gallery as $gallerydata):?>
            <tr>
                <td>
                    <img src="<?=site_url('public/assets/images/users/avatar-2.jpg')?>" alt="" class="avatar-xs rounded-circle me-2">
                    <a href="<?=site_url('Users/details')?>" class="text-body">Simon Ryles</a>
                </td>
                <td><?php echo $gallerydata?></td>
                <td><?php echo $gallerydata?></td>
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
        </tbody>
    </table>
</div>