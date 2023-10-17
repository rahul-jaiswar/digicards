<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body class="bg-white" style="position: relative;width: 360px;height: 640px;margin: auto;">

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Product Detail
        </div>
    </div>
    <!-- * App Header -->

   

    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section mt-2 mb-2">
            <div class="listed-detail mt-3">
                <div class="icon-wrapper">
                    <div class="iconbox">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                </div>
                <h3 class="text-center mt-2">Payment Sent</h3>
            </div>

            <ul class="listview flush transparent simple-listview no-space mt-3">
                <li>
                    <strong>Status</strong>
                    <span class="text-success">Success</span>
                </li>
                <li>
                    <strong>To</strong>
                    <span>Jordi Santiago</span>
                </li>
                <li>
                    <strong>Bank Name</strong>
                    <span>Envato Bank</span>
                </li>
                <li>
                    <strong>Transaction Category</strong>
                    <span>Shopping</span>
                </li>
                <li>
                    <strong>Receipt</strong>
                    <span>Yes</span>
                </li>
                <li>
                    <strong>Date</strong>
                    <span>Sep 25, 2020 10:45 AM</span>
                </li>
                <li>
                    <strong>Amount</strong>
                    <h3 class="m-0">$ 24</h3>
                </li>
            </ul>
        </div>
        <div class="section mt-2">
            <hr>    
            <!-- do not forget to delete me-1 and mb-1 when copy / paste codes -->
            <button type="button" class="btn btn-icon btn-primary me-1" data-bs-toggle="modal" data-bs-target="#DialogBasic">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </button>
            <button type="button" class="btn btn-icon btn-outline-primary me-1">
                <ion-icon name="newspaper-outline"></ion-icon>
            </button>
            <button type="button" class="btn btn-icon btn-success me-1">
                <ion-icon name="pricetag-outline"></ion-icon>
            </button>
            <button type="button" class="btn btn-icon btn-warning me-1">
                <ion-icon name="share-outline"></ion-icon>
            </button>
            <button type="button" class="btn btn-icon btn-info me-1">
                <ion-icon name="add-outline"></ion-icon>
            </button>
        </div>
        <!-- Dialog Basic -->
        <div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
                            <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">DELETE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Dialog Basic -->
    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('manager/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html> 