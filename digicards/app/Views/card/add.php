<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/datatable') ?>
    <?= $this->include('partials/css/pdfreader') ?>
</head>
<?= $this->include('partials/body') ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
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
	                        <div class="col-xl-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <h4 class="card-title">Udpate Card Details </h4>
	                                    <p class="card-title-desc">Note: (*) Mark Feild are Mandatory</p>
	                                    <!-- Nav tabs -->
	                                    <?php $activetab = \Config\Services::session()->get('activetab');
	                                    // echo"<pre>";
	                                    // print_r($activetab);
	                                    // exit();?>
	                                    <ul class="nav nav-pills nav-justified bg-light" role="tablist">
	                                        <li class="nav-item">
	                                            <a class="nav-link  <?= strcmp($activetab, "") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-template"
	                                                role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-postcard"></i></span>
	                                                <span class="d-none d-sm-block">Templates</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "info") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-info" role="tab">
	                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
	                                                <span class="d-none d-sm-block">Info</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "team") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-team" role="tab">
	                                                <span class="d-block d-sm-none"><i class="fas fa-users"></i></span>
	                                                <span class="d-none d-sm-block">Team</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "social") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-social" role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-facebook"></i></span>
	                                                <span class="d-none d-sm-block">Social Media</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "product") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-product" role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-box"></i></span>
	                                                <span class="d-none d-sm-block">Product</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "service") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-service" role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-store"></i></span>
	                                                <span class="d-none d-sm-block">Service</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "catalogue") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-catalogue" role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-book"></i></span>
	                                                <span class="d-none d-sm-block">Catalogue</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "gallery") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-gallery" role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-images"></i></span>
	                                                <span class="d-none d-sm-block">Gallery</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link <?= strcmp($activetab, "payment") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-payments" role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-wallet"></i></span>
	                                                <span class="d-none d-sm-block">Payments</span>
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="nav-link  <?= strcmp($activetab, "preview") == 0 ? "active" : ""  ?>" data-bs-toggle="tab" href="#nav-preview"
	                                                role="tab">
	                                                <span class="d-block d-sm-none"><i class="uil-postcard"></i></span>
	                                                <span class="d-none d-sm-block">Preview</span>
	                                            </a>
	                                        </li>
	                                    </ul>
	                                    <!-- Tab panes -->
	                                    <div class="tab-content text-muted">
	                                    	<!-- Card Template Selection End -->
	                                        <div class="tab-pane <?= strcmp($activetab, "") == 0 ? "active" : ""  ?>"  id="nav-template" role="tabpanel">
	                                        	<div class="row mt-4">
								                    <div class="col-xl-12 col-lg-12">
								                        <div class="card">
								                            <div class="card-body">
								                                <div>
								                                    <div class="row">
								                                        <div class="col-md-6">
								                                            <div>
								                                                <h5>Template Gallery</h5>
								                                            </div>
								                                        </div>
								                                        <div class="col-md-6">
								                                            <div class="form-inline float-md-end">
								                                                <div class="search-box ml-2">
								                                                    <div class="position-relative">
								                                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
								                                                        <i class="mdi mdi-magnify search-icon"></i>
								                                                    </div>
								                                                </div>
								                                            </div>
								                                        </div>
								                                    </div>
								                                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
								                                        <li class="nav-item">
								                                            <a class="nav-link disabled fw-medium" href="#" tabindex="-1" aria-disabled="true">Choose by:</a>
								                                        </li>
								                                        <li class="nav-item ">
								                                            <a class="nav-link active" href="">All</a>
								                                        </li>
								                                        <?php if($tempcat):?>
								                                        <?php foreach($tempcat as $data):?>
								                                        <li class="nav-item ">
								                                            <a class="nav-link" href="<?= site_url('Template/list/'.$data->temp_cat)?>"><?php echo $data->temp_cat; ?></a>
								                                        </li>
								                                        <?php endforeach; ?>
								                                        <?php endif; ?>
								                                    </ul>
								                                    <div class="row">
							                                    		<?php foreach($template as $data):?>
						                                        		<div class="col-xl-3 col-sm-4">
						                                        			<?php if($cardtemp->temp_name == $data->temp_name){?>
								                                            <div class="product-box">
								                                                <div class="product-img " style="height: 500px;overflow-x: hidden;overflow-y: auto;">
								                                                    <div class="product-ribbon badge bg-success">
								                                                        Template is Applied
								                                                    </div>
								                                                    <img src="<?php echo base_url('public/template/'.$data->temp_preview); ?>" alt="" class="img-fluid mx-auto d-block">
								                                                </div>
								                                                <form action="<?= site_url('Card/template/'.$cardtemp->company_code)?>" method="POST">
									                                                <input type="hidden" name="company_code" id="company_code" value="<?php echo $customer['company_code'] ?>">
									                                                <input type="hidden" name="temp_cat" id="temp_cat" value="<?php echo $data->temp_cat?>">
									                                                <input type="hidden" name="temp_name" id="temp_name" value="<?php echo $data->temp_name?>">
									                                                <div class="text-center product-content p-4">
									                                                    <hr>
									                                                    <h5 class="mb-1"><a href="#" class="text-dark">  <?php echo $data->temp_cat?> | <?php echo $data->temp_name?></a></h5>
									                                                    <span class="mb-0 text-muted product-color">
									                                                        <button action="submit"  class="col-md-12 btn btn-success waves-effect waves-light">Apply This Template</button>
									                                                    </span>
									                                                </div>
								                                                </form>
								                                            </div>
								                                            <?php }else{?>
							                                            	<div class="product-box">
																		        <div class="product-img " style="height: 500px;overflow-x: hidden;overflow-y: auto;">
																		            <img src="<?php echo base_url('public/template/'.$data->temp_preview); ?>" alt="" class="img-fluid mx-auto d-block">
																		        </div>
																		        <form action="<?= site_url('Card/template/'.$customer['company_code'])?>" method="POST">
																		            <input type="hidden" name="temp_name" id="temp_name" value="<?php echo $data->temp_name?>">
																		            <div class="text-center product-content p-4">
																		            <hr>
																		            <h5 class="mb-1"><a href="#" class="text-dark">  <?php echo $data->temp_cat?> | <?php echo $data->temp_name?></a></h5>
																		            <span class="mb-0 text-muted product-color">
																		                <button action="submit"  class="col-md-12 btn btn-success waves-effect waves-light">Apply This Template</button>
																		            </span>
																		        </div>
																		        </form>
																		    </div>
																			<?php }?>
								                                        </div>
							                                        	<?php endforeach; ?>
								                                    </div>
								                                    <!-- end row -->
								                                    <div class="row mt-4">
								                                        <div class="col-sm-6">
								                                            <div>
								                                                <p class="mb-sm-0">Page 2 of 84</p>
								                                            </div>
								                                        </div>
								                                        <div class="col-sm-6">
								                                            <div class="float-sm-end">
								                                                <ul class="pagination pagination-rounded mb-sm-0">
								                                                    <li class="page-item disabled">
								                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
								                                                    </li>
								                                                    <li class="page-item">
								                                                        <a href="#" class="page-link">1</a>
								                                                    </li>
								                                                    <li class="page-item active">
								                                                        <a href="#" class="page-link">2</a>
								                                                    </li>
								                                                    <li class="page-item">
								                                                        <a href="#" class="page-link">3</a>
								                                                    </li>
								                                                    <li class="page-item">
								                                                        <a href="#" class="page-link">4</a>
								                                                    </li>
								                                                    <li class="page-item">
								                                                        <a href="#" class="page-link">5</a>
								                                                    </li>
								                                                    <li class="page-item">
								                                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
								                                                    </li>
								                                                </ul>
								                                            </div>
								                                        </div>
								                                    </div>
								                                </div>
								                            </div>
								                        </div>
								                    </div>
								                </div>
	                                        </div>
	                                        <!-- Card Template Selection End -->
	                                        <div class="tab-pane <?= strcmp($activetab, "info") == 0 ? "active" : ""  ?>" id="nav-info" role="tabpanel">
	                                        	<?= $this->include('card/form/info') ?>
	                                        </div>
	                                        <!-- Card Information -->
	                                        <!-- Card Team -->
	                                        <div class="tab-pane <?= strcmp($activetab, "team") == 0 ? "active" : ""  ?>" id="nav-team" role="tabpanel">
	                                            <?= $this->include('card/form/team') ?>
	                                        </div>
	                                        <!-- Card Team -->
	                                        <!-- Card Social -->
	                                        <div class="tab-pane <?= strcmp($activetab, "social") == 0 ? "active" : ""  ?>" id="nav-social" role="tabpanel">
	                                            <?= $this->include('card/form/social') ?>
	                                        </div>
	                                        <!-- Card Social -->
	                                        <!-- Card Product -->
	                                        <div class="tab-pane <?= strcmp($activetab, "product") == 0 ? "active" : ""  ?>" id="nav-product" role="tabpanel">
	                                            <?= $this->include('card/form/product') ?>
	                                        </div>
	                                        <!-- Card Product -->
	                                        <!-- Card Service -->
	                                        <div class="tab-pane <?= strcmp($activetab, "service") == 0 ? "active" : ""  ?>" id="nav-service" role="tabpanel">
	                                            <?= $this->include('card/form/service') ?>
	                                        </div>
	                                        <!-- Card Service -->
	                                        <!-- Card Catalogue -->
	                                        <div class="tab-pane <?= strcmp($activetab, "catalogue") == 0 ? "active" : ""  ?>" id="nav-catalogue" role="tabpanel">
	                                            <?= $this->include('card/form/catalogue') ?>
	                                        </div>
	                                        <!-- Card Catalogue -->
	                                        <!-- Card Gallery -->
	                                        <div class="tab-pane <?= strcmp($activetab, "gallery") == 0 ? "active" : ""  ?>" id="nav-gallery" role="tabpanel">
	                                        	<?= $this->include('card/form/gallery') ?>
	                                        </div>
	                                        <!-- Card Gallery -->
	                                        <div class="tab-pane <?= strcmp($activetab, "payment") == 0 ? "active" : ""  ?>" id="nav-payments" role="tabpanel">
	                                        	<?= $this->include('card/form/payments') ?>
	                                        </div>
	                                        <!-- Card Preview -->
	                                        <div class="tab-pane <?= strcmp($activetab, "preview") == 0 ? "active" : ""  ?>" id="nav-preview" role="tabpanel">
	                                            <div class="row mt-4">
								                    <div class="col-xl-7">
								                        <div class="card">
								                            <div class="card-body">
								                                <div class="d-flex align-items-start">
								                                    <div class="ms-3 me-4">
								                                        <h1 class="display-4 mb-0">01</h1>
								                                    </div>
								                                    <div class="flex-grow-1 align-self-center">
								                                        <p class="mb-2">Template Name</p>
								                                        <h5 class="mb-0">Mobile eCommerce HTML Template (Layout One)</h5>
								                                    </div>
								                                </div>
								                            </div>
								                        </div>
								                        <div class="card">
								                        	<div class="card-body">
								                                <div class="d-flex align-items-start">
								                                    <div class="ms-3 me-4">	
								                                        <img src="https://htmldemo.net/rick/p2/img/rick.png" alt="qr code">
								                                    </div>
								                                    <div class="flex-grow-1 align-self-center">
								                                        <h4 class="mb-2">Sharing URL</h4>
								                                        <h5 class="mb-0">
								                                        	<a href="<?php echo $card_url.''.$customer['company_url']; ?>" target="_blank">
								                                        		<span class="badge bg-primary"><?php echo $card_url.''.$customer['company_url'];?></span>
								                                        	</a>
								                                    	</h5>
								                                        <h4 class="mt-2">Check Meta Tags of Social Media</h4>
								                                        <div class="btn-group" role="group" aria-label="Basic example">
				                                                        <a class="btn btn-outline-secondary"><i class="bx bxl-facebook-circle"></i></a>
				                                                        <button type="button" class="btn btn-outline-secondary"><i class="bx bxl-instagram-alt"></i></button>
				                                                        <button type="button" class="btn btn-outline-secondary"><i class="bx bxl-whatsapp-square"></i></button>
				                                                    </div>
								                                    </div>
								                                </div>
								                            </div>
								                        </div>
								                        <div class="card">
								                            <div class="card-body">
								                                <div class="d-flex align-items-start">
								                                    <div class="flex-grow-1 align-self-center">
								                                        <p class="mb-2">Font Family</p>
								                                        <h5 class="mb-0">"IBM Plex Sans", sans-serif</h5>
								                                    </div>
								                                </div>
								                            </div>
								                        </div>
								                    </div>
								                    <div class="col-xl-5">
								                    	<iframe src="<?php echo $card_url.''.$customer['company_url'];?>" style="height: 100%;width: 100%;"></iframe>
								                    </div>
								                </div>
	                                        </div>
	                                        <!-- Card Preview -->
	                                    </div>
	                                </div><!-- end card-body -->
	                            </div><!-- end card -->
	                        </div><!-- end col -->
	                    </div>
		            </div>
                </div> <!-- container-fluid -->
            </div>
        </div>
		<?= $this->include('partials/vendor-scripts') ?>
		<?= $this->include('partials/js/main') ?>
		<?= $this->include('partials/js/repeater') ?>
        <?= $this->include('partials/js/datatable') ?>
        <?= $this->include('partials/js/pdfreader.php') ?>
		<script type="text/javascript">

		    $(document).ready(function() {
		        $('#team_list').DataTable();
		        $('#social_list').DataTable();
		        $('#product_list').DataTable();
		        $('#service_list').DataTable();
		        $('#catalogue_list').DataTable();
		        $('#gallery_list').DataTable();
		        $('#payments_list').DataTable();

		        $('#lastname').blur('input', function() {
		            var firstname = $('#firstname').val();
		            var lastname = $('#lastname').val();
		            $('#username').val(firstname +"."+lastname);
		        });
		        $('#email_addressaaaaaa').change(function(){
		           var emailval = $('#email_address').val();
		           if(emailval != ''){
		                $.ajax({
		                    url: "<?php echo site_url(); ?>Customer/validateemail",
		                    method: "POST",
		                    data: {emailval:emailval},
		                    success: function(response){
		                    if (response.error){
		                        $("#email_address").val('');    
		                        $("#email_address").focus();
		                        $("#email_address").parent().before("<div style='color:red;'>Email Address Already Exist</div>");
		                    }else{
		                    }}
		                });
		            }
		        });
		        $('#mobile_noaaa').change(function(){
		           var mobileval = $('#mobile_no').val();
		           if(mobileval != ''){
		                $.ajax({
		                    url: "<?php echo site_url(); ?>Customer/validatemobile",
		                    method: "POST",
		                    data: {mobileval:mobileval},
		                    success: function(response){
		                    if (response.error){
		                        $("#mobile_no").val('');    
		                        $("#mobile_no").focus();
		                        $("#mobile_no").parent().before("<div style='color:red;'>Mobile No Address Already Exist</div>");
		                    }else{
		                    }}
		                });
		            }
		        });

		        $('.newbtn').bind("click" , function () {
				    $('#pic').click();
				});

				$('.uploadprofile').bind("click" , function () {
				    $('#profile').click();
				});


		    });

		    


		    function uploadcompanylogo(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();

			        reader.onload = function (e) {

			            $('#blah')
			                .attr('src', e.target.result);
			        };
			        reader.readAsDataURL(input.files[0]);
			    }
			}
			function uploadprofile(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();
			        reader.onload = function (e) {
			            $('#profilehere')
			                .attr('src', e.target.result);
			        };
			        reader.readAsDataURL(input.files[0]);
			    }
			}
		</script>
</body>

</html>

