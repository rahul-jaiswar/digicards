<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body class="bg-white" style="position: relative;width: 360px;height: 640px;margin: auto;">

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
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
            Payments Detail
        </div>
    </div>
    <!-- * App Header -->
    <div id="appCapsule" class="full-height">
        <div class="section mt-2 mb-2">
            <div class="listed-detail mt-3">
                <img src="<?php echo site_url('assets/card/img/sample/photo/wide3.jpg')?>" alt="image" class="imaged w-100 square">
                <h3 class="text-center mt-2">Company Name</h3>
            </div>
            <ul class="listview flush transparent simple-listview no-space mt-3">
                <li>
                    <strong>Bank Name</strong>
                    <span class="text-success">XYZ</span>
                </li>
                <li>
                    <strong>IFSC Code</strong>
                    <span>XYZ</span>
                </li>
                <li>
                    <strong>Account Holder Name</strong>
                    <span>XYZ</span>
                </li>
            </ul>
        </div>
        <!-- my cards -->
        <div class="section full mt-4">
            <div class="section-heading padding">
                <h2 class="title">Payment QR</h2>
            </div>
            <!-- carousel single -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <!-- card block -->
                            <div class="card-block bg-primary">
                                <div class="card-main">
                                    <div>
                                        <div class="balance">
                                            <span class="label">Payment Gateway</span>
                                            <h1 class="title">G-PAY</h1>
                                        </div>
                                        <div class="in">
                                            <div class="bottom">
                                                <div class="card-expiry">
                                                    <span class="label">UPI ID</span>
                                                    7738925170
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-success square me-1">PAY NOW</a>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <img src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt="img" class="image-block imaged" style="width: 100px;position: relative;left: 50px;">
                                    </div>
                                </div>
                            </div>
                            <!-- * card block -->
                        </li>
                        <li class="splide__slide">
                            <!-- card block -->
                            <div class="card-block bg-dark">
                                <div class="card-main">
                                    <div>
                                        <div class="balance">
                                            <span class="label">Payment Gateway</span>
                                            <h1 class="title">G-PAY</h1>
                                        </div>
                                        <div class="in">
                                            <div class="bottom">
                                                <div class="card-expiry">
                                                    <span class="label">UPI     ID</span>
                                                    7738925170
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-success square me-1">PAY NOW</a>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <img src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt="img" class="image-block imaged" style="width: 100px;position: relative;left: 50px;">
                                    </div>
                                </div>
                            </div>
                            <!-- * card block -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel single -->

        </div>
        <!-- * my cards -->
        <!-- Dialog Basic -->
        <div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
                            <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">DELETE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Dialog Basic -->
    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('card/design/category/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html> 