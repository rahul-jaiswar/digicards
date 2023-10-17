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
            Notice
        </div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="listview-title mt-1">New Notice</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-transactions.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notice One
                    </div>
                </a>
            </li>
            <li>
                <a href="app-transaction-detail.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notice Two
                    </div>
                </a>
            </li>
            <li>
                <a href="app-transaction-verification.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notice Three
                    </div>
                </a>
            </li>
        </ul>
        <div class="listview-title">Old Notice</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-blog.html" class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notice One
                    </div>
                </a>
            </li>
            <li>
                <a href="app-blog-post.html" class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notice Two
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
</body>

</html>