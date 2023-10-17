<?php $this->load->view('default/header');?>
<body>
  <!--Start login Form-->
  <section class="login-page">
    <div class="v-center m-auto">
      <a href="<?php echo site_url('App')?>" class="d-block text-center mb30"><h3 class="" style="color: white;">Tap-Savvy</h3></a> 
      <div class="login-form-div">        
        <h4 class="mb40 text-center">Register as New User</h4>
        <div class="form-block">
          <form id="contact-form" action="<?php echo site_url('Panel/register')?>" method="POST">
            <div class="fieldsets row">
              <div class="col-md-12 form-group">
                <input type="text" name="name" id="name"  placeholder="Enter Name" required="required">
              </div>
              <div class="col-md-12 form-group">
                <input  type="email" name="email" id="email" placeholder="Enter Email" required="required">
              </div>
              <div class="col-md-12 form-group">
                <input  type="number" pattern="[789][0-9]{9}"  name="mobileno" id="mobileno" placeholder="Enter Mobile" required="required">
              </div>
              <div class="col-md-12 form-group"><input  name="password" type="password"   placeholder="Enter Password" required="required">
              </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-12 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
              </div>
            </div>
            <div class="text-center">
              <a href="<?php echo site_url('Panel/login')?>"><p class="mt20">Already Registered Let's Login</p></a>
            </div>               
          </form>
        </div>
      </div>      
      </div>      
    </section>
    <!--End login Form-->
<?php $this->load->view('default/script.php');?>