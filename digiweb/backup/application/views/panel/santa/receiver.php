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
    <div id="appCapsule">
        <div class="section mt-2 text-center">
            <img src="<?php echo site_url('assets/web/images/black-logo.png')?>" alt="Logo" class="mega-white-logo" style="height: 100px;"/>
        </div>
        <div class="section mb-5 p-2">
            <form action="<?php echo site_url('Santa/receiver')?>">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">Full Name</label>
                                <input type="email" class="form-control" id="email1" placeholder="Your e-mail">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Mobile No</label>
                                <input type="password" class="form-control" id="password1" autocomplete="off"
                                    placeholder="Your password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password2">Email ID</label>
                                <input type="password" class="form-control" id="password2" autocomplete="off"
                                    placeholder="Type password again">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password2">Address</label>
                                <textarea class="form-control">
                                	
                                </textarea>
                                <input type="password" class="form-control" id="password2" autocomplete="off"
                                    placeholder="Type password again">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="custom-control custom-checkbox mt-2 mb-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheckb1">
                                <label class="form-check-label" for="customCheckb1">
                                    I agree <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and
                                        conditions</a>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                </div>
            </form>
        </div>

    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('theme/default/vendor-scripts') ?>
</body>

</html>