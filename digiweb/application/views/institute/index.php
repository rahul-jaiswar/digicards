<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('theme/default/head-css') ?>
</head>
<body class="">
    <!-- Coin Status -->
    <div class="section full gradientSection">
        <div class="in coin-head">
            <div class="avatar-section">
                <a href="#">
                    <img src="https://www.pngitem.com/pimgs/m/192-1925180_student-circle-student-images-in-a-circle-hd.png" alt="avatar" class="imaged w140 rounded">
                </a>
            </div>
        </div>
    </div>
    <!-- * Coin Status -->
    <!-- Coin Chart -->
    <div class="section mb-2">
        <div class="card coin-chart">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <h1 class="total"> Upadhaya</h1>
                        <span class="title">FYJC</span>
                    </div>
                    <div class="right">
                        <img src="<?=base_url('')?>/assets/theme/img/sample/qr.png" alt="img" class="image-block imaged w100">
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="<?php echo site_url('Institute/info')?>" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                            <strong>Info</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>
                            <strong>Call</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>
                            <strong>Mail</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="app-cards.html">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="globe-outline"></ion-icon>
                            </div>
                            <strong>Webiste</strong>
                        </a>
                    </div>
                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
    </div>
    <!-- Coin Chart -->

    
    <div class="section-heading">
        
    </div>
    <ul class="listview image-listview inset mb-2">

        <li>
            <div class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>+91 123456789</div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>+91 123456789</div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>student@gmail.com</div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <div class="in">
                    <div>Student ID: 12122</div>
                </div>
            </div>
        </li>
    </ul>
    <!-- Stats -->
    <div class="section mt-3 mb-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">About</h2>
                Finapp is Bootstrap 5 based template for your wallet, banking, financial mobile projects.
            </div>
        </div>
    </div>
    
    <!-- * Stats -->
    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
            	<a href="crypto-exchange.html" class="btn btn-block btn-lg btn-success"><ion-icon name="bookmark-outline"></ion-icon>  Save Contact</a>
            </div>
            <div class="col-6">
                <a href="crypto-exchange.html" class="btn btn-block btn-lg btn-success"><ion-icon name="share-social-outline"></ion-icon> Share Contact</a>
            </div>
        </div>
    </div>
    <!-- * Stats -->
    <!-- News -->
    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title">Lastest News</h2>
            <a href="app-blog.html" class="link">View All</a>
        </div>
    </div>
    <!-- * News -->
    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
</body>

</html>