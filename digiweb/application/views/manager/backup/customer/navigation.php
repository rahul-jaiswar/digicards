<div class="email-leftbar card">
<button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
    Change Template
</button>
<div class="mail-list mt-4">
	<a href="#" class="active"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i>Preview</a>
    <a href="<?php echo site_url('Customer/info/'.$this->uri->segment('3'))?>"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i>Info</a>
    <a href="<?php echo site_url('Customer/team/'.$this->uri->segment('3'))?>"><i class="uil-users-alt font-size-16 align-middle me-2"></i>Team</a>
    <a href="<?php echo site_url('Customer/social/'.$this->uri->segment('3'))?>"><i class="uil-facebook font-size-16 align-middle me-2"></i>Social Media</a>
    <a href="<?php echo site_url('Customer/product/'.$this->uri->segment('3'))?>"><i class="uil-box font-size-16 align-middle me-2"></i>Product</a>
    <a href="<?php echo site_url('Customer/service/'.$this->uri->segment('3'))?>"><i class="uil-store font-size-16 align-middle me-2"></i>Service</a>
    <a href="<?php echo site_url('Customer/catalogue/'.$this->uri->segment('3'))?>"><i class="uil-book font-size-16 align-middle me-2"></i>Catalogue</a>
    <a href="<?php echo site_url('Customer/gallery/'.$this->uri->segment('3'))?>"><i class="uil-images font-size-16 align-middle me-2"></i>Gallery</a>
    <a href="<?php echo site_url('Customer/payments/'.$this->uri->segment('3'))?>"><i class="uil-wallet font-size-16 align-middle me-2"></i>Payments</a>
</div>
<h6 class="mt-4">Template Components</h6>
<div class="mail-list mt-1">
    <a href="#"><span class="mdi mdi-circle-outline text-info float-end"></span>Bottom Bar</a>
    <a href="#"><span class="mdi mdi-circle-outline text-warning float-end"></span>Background</a>
    <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>QR Code</a>
    <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>URL Preview</a>
    <a href="#"><span class="mdi mdi-circle-outline text-success float-end"></span>Family</a>
</div>
</div>