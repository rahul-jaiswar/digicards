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
                Document Vault
            </div>
            <div class="right">
            </div>
        </div>
         <!-- App Capsule -->
	    <div id="appCapsule">

	        <div class="section">
	            <div class="splash-page mt-5 mb-5">
	                <div class="mb-3"><img src="https://pbs.twimg.com/profile_images/1562399772258205699/hkkCWT7F_400x400.jpg" alt="image" class="imaged w-50 square">
	                </div>
	                <h2 class="mb-2">Welcome back again!</h2>
	                <p>
	                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam.
	                </p>
	            </div>

	        </div>
			<div class="col-12">
                <a href="app-pages.html" class="btn btn-lg btn-primary btn-block">Fetch from Digilocker</a>
            </div>
	        
	           
	                
	            

	    </div>
	    <!-- * App Capsule -->
    <?php $this->load->view('institute/nav/student') ?>
    <?php $this->load->view('institute/default/vendor-scripts') ?>
   
<script type="text/javascript"
src="https://services.digitallocker.gov.in/requester/api/2/dl.js"
id="dlshare" data-app-id="YOUR_APP_ID" data-app-hash="YOUR_APP_HASH"
time-stamp=”TIMESTAMP” data-callback="YOUR_FUNCTION_NAME">
</script>
</body>

</html>