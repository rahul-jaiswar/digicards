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
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
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
                        <span class="title">Founder : Tap Savvy</span>
                        <h2 class="total">Naveen Upadhaya</h2>
                    </div>
                    <div class="right">
                        <img src="<?=base_url('')?>/assets/theme/santa/santa.png" alt="img" class="image-block imaged w100">
                    </div>
                </div>
                <!-- * Balance -->
                <h2 class="card-title">About us</h2>
                This is a Gift Especally for you i am your secret santa bet you can't guess who.  
            </div>
        </div>
    </div>
    <!-- Coin Chart -->
    <!-- Stats -->
    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Open Gift</div>
                    <div class="value text-success">
                    	<a href="<?php echo site_url('Santa/open_gift')?>"><img src="<?=base_url('')?>/assets/theme/santa/icon/gift.png" alt="img" class="image-block imaged w100"></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Secret Message</div>
                    <div class="value text-danger">
                    	<a href="<?php echo site_url('Santa/message')?>"><img src="<?=base_url('')?>/assets/theme/santa/icon/message.png" alt="img" class="image-block imaged w100"></a>
                    	</div>
                </div>
            </div>
            <div class="col-12">
                <div class="mt-5">
                	<button type="button" class="btn btn-primary btn-lg btn-block">Now it Your Turn to be Someone's</button>
                </div>
                <div class="mb-2"></div>
            </div>

        </div>
    </div>
    <!-- * Stats -->
    <!-- * Stats -->
    <!-- * App Capsule -->
    <?php $this->load->view('theme/default/vendor-scripts') ?>
</body>

</html>