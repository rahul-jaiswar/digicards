<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('theme/default/head-css') ?>
</head>
<body class="">
    <!-- loader -->
    <div id="loader">
        <h1 style="">Tap Savvy</h1>
    </div>
    <!-- * loader -->
    <!-- App Capsule -->
    <div id="appCapsule" >
        <div class="section mt-2 text-center">
            <img src="<?php echo site_url('assets/web/images/black-logo.png')?>" alt="Logo" class="mega-white-logo" style="height: 100px;"/>
            <img src="https://media3.giphy.com/media/jFajAFsIzJnALlfi3n/giphy.gif?cid=ecf05e478i8fnc7m1cjj57s2ydf4eh9kmlgq7yxn072kxuvq&rid=giphy.gif&ct=s" style="height:150px;">
        </div>
        <img src="">
        <div class="section mb-5 p-2">
            <form action="<?php echo site_url('Santa/gift')?>" method="POST">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="mobile_no">Mobile No</label>
                                <input type="number" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Your Mobile Number">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                                <?php if ($this->session->flashdata('success')): ?>
                              <div class="alert alert-success bordered" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                                <?php $this->session->unset_userdata ( 'success' ); ?>
                              </div>
                              <?php elseif ($this->session->flashdata('error')): ?>
                                <?php echo $this->session->flashdata('error'); ?>
                              </div>
                              <?php $this->session->unset_userdata ( 'error' ); ?>
                              <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="https://media2.giphy.com/media/vFZQr5d3xAeSGES897/giphy.gif?cid=ecf05e47dox34l4lefxdmnpbxhoa2za6pzbrpktul75swqff&rid=giphy.gif&ct=s">
                <div class="form-button-group  transparent" style="background: url('');">
                    <button type="submit" class="btn btn-danger btn-block btn-lg">Click to Know Gift of Your Santa</button>
                </div>  
            </form>
        </div>

    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('theme/default/vendor-scripts') ?>
</body>

</html>