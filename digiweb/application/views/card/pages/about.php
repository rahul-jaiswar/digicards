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
            About
        </div>
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section full">
            <iframe src="https://www2.ed.gov/parents/schools/find/choose/choosing.pdf" width="100%" height="500px">
    </iframe>
            <img src="<?php echo site_url('assets/card/img/sample/photo/wide3.jpg')?>" alt="image" class="imaged w-100 square">
        </div>
        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">About us</h2>
                    Finapp is Bootstrap 5 based template for your wallet, banking, financial mobile projects.
                </div>
            </div>
        </div>
        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Learn More</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mollis iaculis aliquet. Duis euismod
                    nibh at neque gravida tincidunt. Nunc vitae fringilla augue. Nunc blandit tempor enim porttitor
                    bibendum. In ac blandit quam. Quisque laoreet ligula eu commodo cursus. In efficitur convallis
                    felis.
                </div>
            </div>
        </div>
        <div class="section full mt-3">
            <!-- carousel single -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="<?php echo site_url('assets/card/img/sample/photo/wide1.jpg')?>" alt="alt" class="imaged w-100">
                        </li>

                        <li class="splide__slide">
                            <img src="<?php echo site_url('assets/card/img/sample/photo/wide2.jpg')?>" alt="alt" class="imaged w-100">
                        </li>

                        <li class="splide__slide">
                            <img src="<?php echo site_url('assets/card/img/sample/photo/wide3.jpg')?>" alt="alt" class="imaged w-100">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Have a Question?</h2>
                    <p>Feel free to contact us with any problems. We will get back to you as soon as possible.</p>
                    <a href="app-contact.html" class="btn btn-primary">
                        <ion-icon name="mail-open-outline"></ion-icon> Contact
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('card/design/category/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html> 