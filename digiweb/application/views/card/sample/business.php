<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body style="height:1380px;"><?php /*echo"<pre>";
print_r($details);
exit();*/?>
<div class="section full gradientSection">
    <div class="in coin-head">
        <div class="avatar-section">
            <?php if(isset($details)){?>
                <img src="<?php echo site_url('')?>" alt="avatar" class="imaged w140">
            <?php }else{?>
                <img src="<?php echo site_url('assets/card/img/sample/avatar/avatar1.jpg')?>" alt="avatar" class="imaged w140">
            <?php }?>
        </div>
    </div>
</div>
<div class="section mb-2">
    <div class="card coin-chart">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <?php if(isset($details)){?>
                        <span class="title">Founder : Tap Savvy</span>
                    <?php }else{?>
                        <span class="title">Founder : Tap Savvy</span>
                    <?php }?>
                    <?php if(isset($details)){?>
                        <h1 class="total" id="company_name"></h1>
                    <?php }else{?>
                        <h1 class="total" id="company_name"></h1>
                    <?php }?>
                </div>
                <div class="right">
                    <?php if(isset($details)){?>
                        <img src="" alt="img" class="image-block imaged w100">
                    <?php }else{?>
                        <!-- <img src="" alt="img" class="image-block imaged w100"> -->
                    <?php }?>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <?php if(isset($details)){?>
                        <a href="#">
                    <?php }else{?>
                        <a href="#">
                    <?php }?>
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <strong>Call</strong>
                    </a>
                </div>
                <div class="item">
                    <?php if(isset($details)){?>
                        <a href="#">
                    <?php }else{?>
                        <a href="#">
                    <?php }?>
                        <div class="icon-wrapper">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <strong>Mail</strong>
                    </a>
                </div>
                <div class="item">
                    <?php if(isset($details)){?>
                        <a href="#">
                    <?php }else{?>
                        <a href="#">
                    <?php }?>
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>
                        <strong>Map</strong>
                    </a>
                </div>
                <div class="item">
                    <?php if(isset($details)){?>
                        <a href="#">
                    <?php }else{?>
                        <a href="#">
                    <?php }?>
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="save-outline"></ion-icon>
                        </div>
                        <strong>Save</strong>
                    </a>
                </div>
            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
</div>
<!-- Social Media -->
<div class="section full mt-4">
    <div class="section-heading padding">
        <h2 class="title">Our Social Media</h2>
    </div>
    <!-- carousel small -->
    <div class="carousel-small splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php if(isset($socialpack)){?>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Jurrien</strong>
                            </div>
                        </a>
                    </li>
                <?php }else{?>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar2.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Jurrien</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar3.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Elwin</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar4.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Alma</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar5.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Justine</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar6.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Maria</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar7.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Pamela</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar8.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Neville</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar9.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Alex</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="<?php echo site_url('assets/card/img//sample/avatar/avatar10.jpg')?>" alt="img" class="imaged w-100">
                                <strong>Stina</strong>
                            </div>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <!-- * carousel small -->
</div>
<div class="section full mt-4">
    <ul class="listview image-listview flush">
        <?php if(isset($contacts)){?>
            <li>
                <a href="app-notification-detail.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                            <div class="mb-05"><strong>7738925170</strong></div>
                            <div class="text-small mb-05">Person Name</div>
                        </div>
                    </div>
                </a>
            </li>
        <?php }else{?>
            <li>
                <a href="app-notification-detail.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                            <div class="mb-05"><strong>7738925170</strong></div>
                            <div class="text-small mb-05">Person Name</div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="app-notification-detail.html" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                            <div class="mb-05"><strong>7738925170</strong></div>
                            <div class="text-small mb-05">Person Name</div>
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
                            <div class="mb-05"><strong>Santacruz West</strong></div>
                            <div class="text-small mb-05">Mountain View, California, United States</div>
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
                            <div class="mb-05"><strong>Email</strong></div>
                            <div class="text-small mb-05">info@circlesquare.co.in</div>
                        </div>
                    </div>
                </a>
            </li>
        <?php }?>
    </ul>
</div>
<div class="section">
    <div class="row mt-2 mb-2">
        <div class="col-6">
            <a href="" class="btn btn-lg btn-primary btn-block">Share</a>
        </div>
        <div class="col-6">
            <a href="<?php echo site_url('Card/vcard')?>" class="btn btn-lg btn-primary btn-block">Save</a>
        </div>
    </div>
</div>
<div class="section mt-2 mb-2">
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
<script type="text/javascript">
    // api url
    const api_url ="http://localhost/digicards/card/TSC7676";
      
    // Defining async function
    async function getapi(url) {
        
        // Storing response
        const response = await fetch(url);
        // Storing data in form of JSON
        var data = await response.json();
        console.log(data);
        if (response) {
            hideloader();
        }
        show(data);
    }
    // Calling that async function
    getapi(api_url);
      
    // Function to hide the loader
    function hideloader() {
        console.log("loading");
        //document.getElementById('loading').style.display = 'none';
    }
    // Function to define innerHTML for HTML table
    function show(data) {
        document.getElementById("company_name").innerHTML = data[0].company_name

    //     let tab = 
    //         `<tr>
    //           <th>Name</th>
    //           <th>Office</th>
    //           <th>Position</th>
    //           <th>Salary</th>
    //          </tr>`;
        
    //     // Loop to access all rows 
    //     for (let r of data.list) {
    //         tab += `<tr> 
    //     <td>${r.name} </td>
    //     <td>${r.office}</td>
    //     <td>${r.position}</td> 
    //     <td>${r.salary}</td>          
    // </tr>`;
    //     }
    //     // Setting innerHTML as tab variable
    //     document.getElementById("employees").innerHTML = tab;    
    }
</script>
</body>
</html>  