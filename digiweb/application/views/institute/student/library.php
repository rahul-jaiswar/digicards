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
            Library
        </div>
        
    </div>
    <!-- * App Header -->

    
    <!-- * Dialog Basic -->
        <div id="appCapsule" class="full-height">
            <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">New Arrivals</h2>
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQubKvdknFyNXw8UXKMLhfyMfKBngC8B_S8dVj8AC48NPOu9sNF" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Economics</strong>
                            <p>By Steven Levitt</p>
                        </div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTkNekI0cmUKoUidFP0lzSQyWDh_etKpa1mW7EKFHunAUku7FPS" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>The Undercover Economist</strong>
                            <p>Tim Harford, 2005</p>
                        </div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <div class="section mt-2">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Book Name</th>
                                <th scope="col">Issue Date</th>
                                <th scope="col" class="text-end">Return Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Book Name</th>
                                <td>12-12-2020</td>
                                <td class="text-end text-primary">12-01-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Name</th>
                                <td>12-12-2020</td>
                                <td class="text-end text-primary">12-01-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Name</th>
                                <td>12-12-2020</td>
                                <td class="text-end text-primary">12-01-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Name</th>
                                <td>12-12-2020</td>
                                <td class="text-end text-primary">12-01-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Name</th>
                                <td>12-12-2020</td>
                                <td class="text-end text-primary">12-01-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Name</th>
                                <td>12-12-2020</td>
                                <td class="text-end text-primary">12-01-2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
</body>

</html>