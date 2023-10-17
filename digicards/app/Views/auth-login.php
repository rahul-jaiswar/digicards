<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
</head>
<body class="authentication-bg">
    <div class="account-pages">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="<?= site_url('Panel/index')?>" class="mb-2 d-block auth-logo">
                            <img src="<?= site_url('public/assets/images/logo-black.png')?>" alt="" height="50" class="logo logo-dark">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue</p>
                            </div>
                            <div class="p-2 mt-4">
                                <?= \Config\Services::validation()->listErrors();
                                $message = \Config\Services::session()->getFlashdata('msg');
                                //echo"<pre>";print_r(isset($message));exit();?>
                                <?php if (isset($message)) : ?>
                                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                    <?= \Config\Services::session()->getFlashdata('msg'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                                <?php endif; ?>
                                <form action="<?= site_url('Panel/login')?>" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email ID</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Office Email ID" required>
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="auth-recoverpw" class="text-muted">Forgot password?</a>
                                        </div>
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>© <script>
                                document.write(new Date().getFullYear())
                            </script> Tap-Savvy Pvt Ltd. All rights reserved.</p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <script src="assets/js/app.js"></script>

</body>

</html>