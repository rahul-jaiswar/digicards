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
                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w100 rounded">
                </a>
            </div>
            <h1 class="total">Customer Name</h1>
            <h4 class="caption">
                Company Name<strong>Designation</strong>
            </h4>
        </div>
    </div>
    <!-- * Coin Status -->
    <!-- Coin Chart -->
    <div class="section mb-2">
        <div class="card coin-chart">
            <div class="card-body pt-1">
                <!-- tabs -->
                <ul class="nav nav-tabs lined" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-24h" role="tab">
                            24H
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-1w" role="tab">
                            1W
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-1m" role="tab">
                            1M
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-1y" role="tab">
                            1Y
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-all" role="tab">
                            All
                        </a>
                    </li>
                </ul>
                <!-- * tabs -->
            </div>


            <!-- tab content -->
            <div class="tab-content">

                <div class="tab-pane fade show active" id="tab-24h" role="tabpanel">
                    <div class="chart-example-1"></div>
                </div>

                <div class="tab-pane fade" id="tab-1w" role="tabpanel">
                    <div class="chart-example-2"></div>
                </div>
                <div class="tab-pane fade" id="tab-1m" role="tabpanel">
                    <div class="chart-example-3"></div>
                </div>
                <div class="tab-pane fade" id="tab-1y" role="tabpanel">
                    <div class="chart-example-4"></div>
                </div>
                <div class="tab-pane fade" id="tab-all" role="tabpanel">
                    <div class="chart-example-5"></div>
                </div>
            </div>
            <!-- * tab content -->

        </div>
    </div>
    <!-- Coin Chart -->
    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Total Balance</span>
                    <h1 class="total">$ 2,562.50</h1>
                </div>
                <div class="right">
                    <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                        <div class="icon-wrapper">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>Send</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <strong>Cards</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="swap-vertical"></ion-icon>
                        </div>
                        <strong>Exchange</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->
    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <div class="user-card">
                        <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- * Stats -->
    <!-- App Capsule -->
    <div id="appCapsule">
        

        <!-- Send Money -->
        <div class="section full mt-4">
            <div class="section-heading padding">
                <h2 class="title">Send Money</h2>
                <a href="#" class="link">Add New</a>
            </div>
            <!-- carousel small -->
            <div class="carousel-small splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                                    <strong>Jurrien</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar3.jpg" alt="img" class="imaged w-100">
                                    <strong>Elwin</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar4.jpg" alt="img" class="imaged w-100">
                                    <strong>Alma</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar5.jpg" alt="img" class="imaged w-100">
                                    <strong>Justine</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar6.jpg" alt="img" class="imaged w-100">
                                    <strong>Maria</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar7.jpg" alt="img" class="imaged w-100">
                                    <strong>Pamela</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar8.jpg" alt="img" class="imaged w-100">
                                    <strong>Neville</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar9.jpg" alt="img" class="imaged w-100">
                                    <strong>Alex</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="<?=base_url('')?>/public/assets/template/img/sample/avatar/avatar10.jpg" alt="img" class="imaged w-100">
                                    <strong>Stina</strong>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel small -->
        </div>
        <!-- * Send Money -->

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
    </div>
    <!-- * App Capsule -->
    <?= $this->include('template/nav/business') ?>
    <?= $this->include('template/default/vendor-scripts') ?>
</body>

</html>