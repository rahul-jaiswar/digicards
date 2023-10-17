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
        <div class="pageTitle">Team Manager</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section mt-2">
            <div class="section-title">Add Team Member<hr></div>
            <form>
                <div class="form-group basic animated">
                    <div class="custom-file-upload" id="fileUpload1">
                        <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg">
                        <label for="fileuploadInput">
                            <span>
                                <strong>
                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                    <i>Upload Profile Photo</i>
                                </strong> 
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">First Name</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter First Name">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">Last Name</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter Last Name">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">User Name</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter User Name">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="email4b">E-mail</label>
                        <input type="email" class="form-control" id="email4b" placeholder="Enter Email Address">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">Mobile No</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter Mobile No">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">Password</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter User Password">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">Whatsapp No</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter User Password">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="text4b">Alternate No</label>
                        <input type="text" class="form-control" id="text4b" placeholder="Enter User Password">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic animated">
                    <div class="input-wrapper">
                        <label class="label" for="textarea4b">About Member</label>
                        <textarea id="textarea4b" rows="2" class="form-control"
                            placeholder="Textarea"></textarea>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
            </form>
        </div>
        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright © Finapp 2021. All Rights Reserved.
            </div>
            Bootstrap 5 based mobile template.
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('manager/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html> 