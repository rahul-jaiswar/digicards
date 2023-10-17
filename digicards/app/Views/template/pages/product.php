<!doctype html>
<html lang="en">
<head>
    <?= $this->include('template/default/head-css') ?>
</head>
<body class="">
    <div class="pe-0 ps-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#waiting" role="tab">
                    Service
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#paid" role="tab">
                    Other
                </a>
            </li>
        </ul>
    </div>
    <div class="section tab-content mt-2 mb-1">
        <!-- waiting tab -->
        <div class="tab-pane fade show active" id="waiting" role="tabpanel">
            <div class="row">
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 14</div>
                        <p>Prime Monthly Subscription</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 8</div>
                        <p>Monthly Payment </p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/3.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 15</div>
                        <p>Envato Elements Subscription</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/4.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 49</div>
                        <p>Subscription Fees</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/5.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 12</div>
                        <p>Pro Membership</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 14</div>
                        <p>Prime Monthly Subscription</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 8</div>
                        <p>Monthly Payment </p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/3.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 15</div>
                        <p>Envato Elements Subscription</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- * waiting tab -->
        <!-- paid tab -->
        <div class="tab-pane fade" id="paid" role="tabpanel">
            <div class="row">
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>/public/assets/template/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        </div>
                        <div class="price">$ 14</div>
                        <p>Prime Monthly Subscription</p>
                        <a href="#" class="btn btn-primary btn-block btn-sm">DETAIL</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- * paid tab -->
    </div>
    <?= $this->include('template/nav/business') ?>
    <?= $this->include('template/default/vendor-scripts') ?>
</body>
</html>