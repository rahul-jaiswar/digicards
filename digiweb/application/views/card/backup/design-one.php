<!doctype html>
<html lang="en">
<head>
    <?= $this->include('template/default/head-css') ?>
</head>

<body class="">
    <!-- Coin Status -->
    <div class="section full gradientSection">
        <div class="in coin-head">
            <div class="avatar-section">
                <a href="#">
                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w140 rounded">
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
                        <span class="title">Founder : Tap Savvy</span>
                        <h1 class="total">Naveen Upadhaya</h1>
                    </div>
                    <div class="right">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/qr.png" alt="img" class="image-block imaged w100">
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
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
                                <ion-icon name="location-outline"></ion-icon>
                            </div>
                            <strong>Map</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
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
    <!-- Coin Chart -->
    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/fb.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/insta.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/snap.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/tele.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/tt.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/fbm.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/wa.png" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/social/linked.png" alt="img" class="imaged w-100">
                    </div>
                </a>
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

        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="<?=base_url('')?>/public/assets/template/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">What will be the value of bitcoin in the next...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="<?=base_url('')?>/public/assets/template/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Rules you need to know in business</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="<?=base_url('')?>/public/assets/template/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">10 easy ways to save your money</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="<?=base_url('')?>/public/assets/template/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Follow the financial agenda with...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->

    </div>
    <!-- * News -->
    <?= $this->include('template/nav/business') ?>
    <?= $this->include('template/default/vendor-scripts') ?>
</body>

</html>