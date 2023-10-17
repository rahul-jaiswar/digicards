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
            Student Detail
        </div>
    
    </div>
    <!-- * App Header -->

    
     <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section">

            <ul class="listview simple-listview no-space mt-3">
                <li>
                    <span>Blood Group</span>
                    <strong>A+</strong>
                </li>
                <li>
                    <span>Date of Birth</span>
                    <strong>12 Sep 1995</strong>
                </li>
            </ul>


        </div>

    </div>
    <!-- * App Capsule -->

    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
</body>

</html>