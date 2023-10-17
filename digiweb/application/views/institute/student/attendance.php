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
                Attendance
            </div>
            <div class="right">
            </div>
        </div>
        <!-- * App Header -->
        <div id="appCapsule">
            <div class="section mt-4">
                <div class="section-heading">
                    <h2 class="title">Attendence Report</h2>
                </div>
            </div>
            <ul class="listview image-listview inset mb-2">
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="moon-outline" role="img" class="md hydrated" aria-label="moon outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Subject Name</div>
                            <div class="form-check form-switch  ms-2">
                                <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                                <label class="form-check-label" for="darkmodeSwitch"></label>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="moon-outline" role="img" class="md hydrated" aria-label="moon outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Subject Name</div>
                            <div class="form-check form-switch  ms-2">
                                <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                                <label class="form-check-label" for="darkmodeSwitch"></label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="section mt-4">
                <div class="section-heading">
                    <h2 class="title">Attendence Report</h2>
                </div>
                <div class="goals">
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Today</h4>
                            </div>
                            <div class="price">499</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Weekly</h4>
                            </div>
                            <div class="price">1000</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Monthly</h4>
                            </div>
                            <div class="price">2,500</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                        </div>
                    </div>
                    <!-- * item -->
                </div>
            </div>
        </div>
    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
</body>

</html>