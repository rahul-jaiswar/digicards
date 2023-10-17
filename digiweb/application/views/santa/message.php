<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('theme/default/head-css') ?>
</head>
<body class="">
    <div class="section full">
        <img src="<?=base_url('')?>/assets/theme/santa/message-background.jpg" alt="image" class="imaged w-100 square" style="height: 150px;">
    </div>

    <div class="section mt-3 mb-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">A message from your Secret Santa</h2>
                Hey <?php echo $this->session->userdata('firstname')?> ,<br>
<?php echo $this->session->userdata('message')?><br>
Secret santa.
            </div>
        </div>
    </div>

    <!--div class="section full mt-3">
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <img src="<?=base_url('')?>/assets/theme/santa/icon/gift.png" alt="alt" class="imaged w-100">
                    </li>

                    <li class="splide__slide">
                        <img src="<?=base_url('')?>/assets/theme/santa/icon/gift.png" alt="alt" class="imaged w-100">
                    </li>

                    <li class="splide__slide">
                        <img src="<?=base_url('')?>/assets/theme/santa/icon/gift.png" alt="alt" class="imaged w-100">
                    </li>

                </ul>
            </div>
        </div>
    </div-->
    <div class="col-12">
        <div class="mt-5">
        	<a href="<?php echo site_url('Panel/register')?>"><button type="button" class="btn btn-primary btn-lg btn-block">Now it Your Turn to be Someone's</button></a>
        </div>
        <div class="mb-2"></div>
    </div>
    <!-- DEBUG-VIEW START 2 APPPATH\Views\template\nav\business.php -->
    <?php $this->load->view('theme/default/vendor-scripts') ?>
</body>

</html>