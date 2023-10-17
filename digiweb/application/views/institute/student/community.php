<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('theme/default/head-css') ?>
</head>
<body class="">
        <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Community
        </div>
        
    </div>
    <!-- * App Header -->

    
    <!-- * Dialog Basic -->
    <div id="appCapsule" class="full-height">

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Cell Association</h2>
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="https://www.lalacollege.edu.in/assets/FrontendAssessts/img/logo_footer.png" alt="img" class="image-block imaged w48">
                        <div>
                            <h2>Student Cell</h2>
                        </div>
                    </div>
                </a>
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="https://www.lalacollege.edu.in/assets/FrontendAssessts/img/logo_footer.png" alt="img" class="image-block imaged w48">
                        <div>
                            <h2>Sports Cell</h2>
                        </div>
                    </div>
                </a>
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="https://www.lalacollege.edu.in/assets/FrontendAssessts/img/logo_footer.png" alt="img" class="image-block imaged w48">
                        <div>
                            <h2>Dance Cell</h2>
                        </div>
                    </div>
                </a>
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/NSS-symbol.jpeg" alt="img" class="image-block imaged w48">
                        <div>
                            <h2>National Service Scheme</h2>
                        </div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->
    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
</body>

</html>