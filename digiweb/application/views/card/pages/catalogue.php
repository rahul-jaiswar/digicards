<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body class="" style="position: relative;width: 360px;height: 640px;margin: auto;">
    <!-- loader -->
    <div id="loader">
        <img src="<?php echo site_url('assets/card/img/loading-icon.png')?>" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Our Catalogue
        </div>
        <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#actionSheetForm">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader pe-0 ps-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#waiting" role="tab">
                    Category One
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#paid" role="tab">
                    Category Two
                </a>
            </li>
        </ul>
    </div>
    <!-- * Extra Header -->


    <!-- Form Action Sheet -->
    <div class="modal fade action-sheet" id="actionSheetForm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Bill</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">

                        <form>
                            <div class="form-group basic">
                                <label class="label">Bill ID</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">#</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount" value="41512">
                                </div>
                                <div class="input-info">Enter the ID of the bill you want to add.</div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Form Action Sheet -->


    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">

        <div class="section tab-content mt-2 mb-1">

            <!-- waiting tab -->
            <div class="tab-pane fade show active" id="waiting" role="tabpanel">
                <div class="row">
                    <a href="<?= site_url($this->uri->segment('1').'/cat-details') ?>">
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/1.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 14</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    </a>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/2.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 8</div>
                            <p>Monthly Payment </p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/3.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 15</div>
                            <p>Envato Elements Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/4.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 49</div>
                            <p>Subscription Fees</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/5.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 12</div>
                            <p>Pro Membership</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/1.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 14</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/2.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 8</div>
                            <p>Monthly Payment </p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/3.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 15</div>
                            <p>Envato Elements Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * waiting tab -->



            <!-- paid tab -->
            <div class="tab-pane fade" id="paid" role="tabpanel">
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="<?php echo site_url('assets/card/img/sample/brand/1.jpg')?>" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 14</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">DETAIL</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * paid tab -->

        </div>

    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('card/design/category/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html> 