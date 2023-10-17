<?php $this->load->view('default/header');?>
<body>
  <!--Start login Form-->
  <section class="login-page ">
    <div class="v-center m-auto">
      <a href="<?php echo site_url('App')?>" class="d-block text-center mb30"><h3 class="" style="color: white;">Tap-Savvy</h3></a> 
      <div class="login-form-div">        
        <h4 class="mb40 text-center">Forgot Your Password?</h4>
        <div class="form-block">
          <form id="contact-form" action="<?php echo site_url('Panel/register')?>" method="POST">
            <div class="fieldsets row" style="width: 500px;">
              <div class="col-md-12 form-group">
                <input name="email" id="email" type="text"  placeholder="Enter Your Registered Email" required="required">
              </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-12 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
              </div>
            </div>             
          </form>
        </div>
      </div>      
      </div>      
    </section>
    <!--End login Form-->
<?php $this->load->view('default/script.php');?>