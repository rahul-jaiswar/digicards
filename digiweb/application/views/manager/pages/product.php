<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head-css') ?>
    <style type="text/css">
    </style>
</head>
<body class="" style="position: relative;width: 360px;height: 640px;margin: auto;">
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
        <div class="pageTitle">Inputs</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section mt-2">
            <div class="section-title">Basic</div>
            <div class="card">
                <div class="card-body">

                    <form>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="userid1">User ID</label>
                                <input type="text" class="form-control" id="userid1" placeholder="Enter an User ID">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount1">Amount</label>
                                <input type="text" class="form-control" id="amount1" placeholder="Enter an Amount">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="section mt-2">
            <div class="section-title">Animated</div>
            <div class="card">
                <div class="card-body">
                    <div class="mb-05">
                        Type something to activate animation.
                    </div>
                    <form>

                        <div class="form-group basic animated">
                            <div class="input-wrapper">
                                <label class="label" for="userid2">User ID</label>
                                <input type="text" class="form-control" id="userid2" placeholder="User ID">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic animated">
                            <div class="input-wrapper">
                                <label class="label" for="amount2">Amount</label>
                                <input type="text" class="form-control" id="amount2" placeholder="Amount">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <div class="section mt-2">
            <div class="section-title">Additional Text</div>
            <div class="card">
                <div class="card-body">

                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="userid3">User ID</label>
                                <input type="text" class="form-control" id="userid3" placeholder="Type an User ID">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-info">Please type an user id</div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount3">Amount</label>
                                <input type="text" class="form-control" id="amount3" placeholder="Enter an amount">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-info">Min $ 50 - Max $ 500</div>
                        </div>
                    </form>

                </div>
            </div>
        </div>



        <div class="section mt-2">
            <div class="section-title">Upload Input</div>
            <div class="card">
                <div class="card-body">

                    <form>
                        <div class="custom-file-upload" id="fileUpload1">
                            <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg">
                            <label for="fileuploadInput">
                                <span>
                                    <strong>
                                        <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                        <i>Upload a Photo</i>
                                    </strong>
                                </span>
                            </label>
                        </div>

                    </form>

                </div>
            </div>
        </div>



        <div class="section mt-2 mb-2">
            <div class="section-title">Types</div>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="text4">Text</label>
                                <input type="text" class="form-control" id="text4" placeholder="Text Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email4">E-mail</label>
                                <input type="email" class="form-control" id="email4" placeholder="E-mail Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="select4">Select</label>
                                <select class="form-control custom-select" id="select4">
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                    <option value="4">Select 4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password4">Password</label>
                                <input type="password" class="form-control" id="password4" autocomplete="off"
                                    placeholder="Password Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="phone4">Phone</label>
                                <input type="tel" class="form-control" id="phone4" placeholder="Phone Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="textarea4">Textarea</label>
                                <textarea id="textarea4" rows="2" class="form-control"
                                    placeholder="Textarea"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="section mt-2 mb-2">
            <div class="section-title">Boxed Inputs</div>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="text4b">Text</label>
                                <input type="text" class="form-control" id="text4b" placeholder="Text Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="email4b">E-mail</label>
                                <input type="email" class="form-control" id="email4b" placeholder="E-mail Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="select4b">Select</label>
                                <select class="form-control custom-select" id="select4b">
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                    <option value="4">Select 4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="password4b">Password</label>
                                <input type="password" autocomplete="off" class="form-control" id="password4b"
                                    placeholder="Password Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="phone4b">Phone</label>
                                <input type="tel" class="form-control" id="phone4b" placeholder="Phone Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="textarea4b">Textarea</label>
                                <textarea id="textarea4b" rows="2" class="form-control"
                                    placeholder="Textarea"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->
    <?php $this->load->view('manager/nav')?>
    <?php $this->load->view('partials/vendor-scripts') ?>
</body>
</html> 