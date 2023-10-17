<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('theme/default/head-css') ?>
</head>
<body class="">
    <div class="section full">
        <img src="<?=base_url('')?>/assets/theme/santa/message-background.jpg" alt="image" class="imaged w-100 square" style="height: 150px;">
    </div>
    <?php if($this->session->userdata('SCUID')=='SC1995'){?>
    <?php foreach($customer as $data):?>
    <div class="section mt-3 mb-3">
        <div class="card-block bg-secondary mb-2">
            <div class="card-main">
            <div class="balance">
                <h1 class="title"><?php echo $data->firstname; ?></h1>
            </div>
            <div class="in">
                <div class="card-number">
                    <span class="label">Contact No</span>
                    <?php echo $data->mobile_no; ?>
                </div>
                <div class="bottom">
                    <div class="card-expiry">
                        <span class="label">Email ID</span>
                        <?php echo $data->email; ?>
                    </div>
                    <div class="card-ccv">
                        <span class="label">CCV</span>
                        553
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php endforeach;?>
    <?php }?>
    <!-- * card block -->
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