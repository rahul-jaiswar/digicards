<!doctype html>
<html lang="en">
<head>
    <?= $this->include('template/partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body class="" style="position: relative; width: 360px;margin: auto;">
    <div class="section tab-content mt-2 mb-1">
        <!-- waiting tab -->
        <div class="tab-pane fade show active" id="waiting" role="tabpanel">
            <div class="row">
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w160">
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
                            <img src="<?=base_url('')?>/public/assets/card/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
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
    <?= $this->include('template/pages/nav') ?>
    <?= $this->include('template/partials/vendor-scripts') ?>
</body>

</html>