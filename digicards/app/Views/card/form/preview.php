<!-- Card Preview -->
<div class="tab-pane <?= strcmp($activetab, "preview") == 0 ? "active" : ""  ?>" id="nav-payments" role="tabpanel">
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