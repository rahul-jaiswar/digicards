<?php $this->load->view('default/header');?>
<body>
  <section class="login-page">
    <div class="v-center m-auto">

      <a href="<?php echo site_url('App')?>" class="d-block text-center mb30"><h3 class="" style="color: white;">Tap-Savvy</h3></a> 
      <div class="login-form-div">        
        <h4 class="mb40 text-center">Shift to Tap Cards</h4>
        <div class="form-block">
          <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success bordered" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
            <button aria-label="" class="close" data-dismiss="alert"></button>
            <?php $this->session->unset_userdata ( 'success' ); ?>
          </div>
          <?php elseif ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger bordered" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
            <button aria-label="" class="close" data-dismiss="alert"></button>
          </div>
          <?php $this->session->unset_userdata ( 'error' ); ?>
          <?php endif; ?>
          <form id="contact-form" action="<?php echo site_url('Panel/login')?>" method="POST">
            <div class="fieldsets row">
              <div class="col-md-12 form-group">
                <input type="email" name="email" id="email" type="text"  placeholder="Enter your Registered Email ID" required="required">
              </div>
              <div class="col-md-12 form-group"><input  name="password" type="password"   placeholder="Enter Password" required="required">
              </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-6 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
              </div>
              <div class="col-md-6 form-group v-center text-right"><a href="<?php echo site_url
              ('Panel/forgot')?>" class="psforgt">Forgot Password?</a>     </div>
            </div> 
            <hr class="mt30 mb30">  
            <div class="text-center">
              <a href="<?php echo site_url('Panel/register')?>"><p class="mb20">Register as New Customer</p></a>
            </div>        
          </form>
        </div>
      </div>      
      </div>      
    </section>
    <!--End login Form-->
<?php $this->load->view('default/script.php');?>