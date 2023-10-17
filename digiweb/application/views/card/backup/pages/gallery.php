<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body class="" style="position: relative;width: 360px;height: 640px;margin: auto;">
    <div class="section tab-content mt-2 mb-1">
        <!-- waiting tab -->
        <div class="tab-pane fade show active" id="waiting" role="tabpanel">
            <div class="row">
                <div class="col-6 mb-2">
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#DialogImage">
                        <div class="in">
                            <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                        </div>
                    </a>
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                <div class="col-6 mb-2">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w160">
                </div>
                
            </div>
        </div>
         <!-- Dialog Image -->
        <div class="modal fade dialogbox" id="DialogImage" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="image" class="img-fluid">
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">BACK</a>
                            <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">SHARE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="paid" role="tabpanel">
            <div class="row">
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?=base_url('')?>assets/card/img/sample/brand/placeholder.jpg" alt="img" class="image-block imaged w48">
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
    <?php $this->load->view('card/design/category/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html>