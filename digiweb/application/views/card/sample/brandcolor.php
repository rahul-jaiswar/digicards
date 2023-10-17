<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<?php if(isset($customize)){?>
<body  style="background-color: black;">
    <div class="section" style="background-color: black;text-align: center;">
    <div class="in coin-head">
        <div class="avatar-section">
            <a href="#">
                <img src="<?php echo site_url('assets/card/img/sample/avatar/avatar1.jpg')?>" alt="avatar" class="imaged w200 mt-4">
            </a>
        </div>
    </div>
<?php }else{?>
<body> 
    <div class="section">
        <div class="in coin-head">
            <div class="avatar-section">
                <a href="#">
                    <img src="<?php echo site_url('assets/card/img/sample/avatar/avatar1.jpg')?>" alt="avatar" class="imaged w200 mt-4">
                </a>
            </div>
        </div>
    </div>
<?php }?>
    
<div class="section mb-2" style="background-color: black;">
    <div class="card coin-chart" >
        <div class="wallet-card" style="background-color: black;border: solid white;">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title" style="color:white;">Founder : Tap Savvy</span>
                    <h1 class="total" id="company_name" style="color:white;">Circle Square</h1>
                </div>
                <div class="right">
                    <!-- <img src="" alt="img" class="image-block imaged w100"> -->
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="icon-wrapper" style="background-color: black;">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <strong style="color: white;">Call</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                        <div class="icon-wrapper" style="background-color: black;">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <strong style="color: white;">Mail</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper" style="background-color: black;">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>
                        <strong style="color: white;">Map</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                        <div class="icon-wrapper" style="background-color: black;">
                            <ion-icon name="save-outline"></ion-icon>
                        </div>
                        <strong style="color: white;">Save</strong>
                    </a>
                </div>
            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
</div>
<!-- Social Media -->
<div class="section full mt-4" style="background-color: black;">
    <div class="section-heading padding">
        <h2 class="title" style="color:white;">Our Social Media</h2>
    </div>
    <!-- carousel small -->
    <div class="carousel-small splide" >
        <div class="splide__track">
            <ul class="splide__list" >
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <div class="user-card" style="background-color:black;">
                            <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                            <strong style="color:white;">Jurrien</strong>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- * carousel small -->
</div>
<div class="section full mt-4" >
    <ul class="listview image-listview flush" style="background-color: black;">
        <li>
            <a href="app-notification-detail.html" class="item">
                <div class="icon-box bg-danger">
                    <ion-icon name="key-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>
                        <div class="mb-05" style="color:white;"><strong>7738925170</strong></div>
                        <div class="text-small mb-05" style="color:white;">Person Name</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="app-notification-detail.html" class="item">
                <div class="icon-box bg-danger">
                    <ion-icon name="key-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>
                        <div class="mb-05" style="color:white;"><strong>7738925170</strong></div>
                        <div class="text-small mb-05" style="color:white;">Person Name</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="app-notification-detail.html" class="item">
                <div class="icon-box bg-danger">
                    <ion-icon name="key-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>
                        <div class="mb-05" style="color:white;"><strong>Santacruz West</strong></div>
                        <div class="text-small mb-05" style="color:white;">Mountain View, California, United States</div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="app-notification-detail.html" class="item">
                <div class="icon-box bg-danger">
                    <ion-icon name="key-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>
                        <div class="mb-05" style="color:white;"><strong>Email</strong></div>
                        <div class="text-small mb-05" style="color:white;">info@circlesquare.co.in</div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</div>
<div class="section" style="background-color: black;">
    <div class="row mt-2 mb-2">
        <div class="col-6">
            <a href="app-pages.html" class="btn btn-lg btn-block" style="background-color:black;color:white;border: solid white;">Share</a>
        </div>
        <div class="col-6">
            <a href="app-pages.html" class="btn btn-lg btn-block" style="background-color:black;color:white;border: solid white;">Save</a>
        </div>
    </div>
</div>
<div  style="background-color: black;" class="section mt-2 mb-2">
    <div class="section-title">Share Card on Whatsapp</div>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="phone4b">Use STD Code</label>
                        <input type="tel" class="form-control" id="" placeholder="+91 XXXXXXXXX">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                        <a href="app-pages.html" class="btn btn-md mt-2 btn-success btn-block"><ion-icon name="logo-whatsapp"></ion-icon> Whatsapp Now</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- app footer -->
<div class="appFooter" style="position: relative;bottom: 0em;">
    <div class="footer-title">
        Copyright © Tap-Savvy 2023. All Rights Reserved.
    </div>www.tap-savvy.com
</div>
<?php $this->load->view('card/category/nav')?>
<?php $this->load->view('partials/vendor-scripts') ?>
<?php $this->load->view('card/data/card_api') ?>
</body>
</html>  