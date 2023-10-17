<!--start off canvas nav -->    
<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">    
  <div class="offcanvas-body p0">
    <div class="companyinfodiv">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <h4>Get In Touch</h4>
      <p class="mt5">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
    </div>
    <div class="contactinfo-bar mt50">
     <div class="form-block sidebarform">
        <h4>Shift to Tap Cards</h4>
        <form id="panel-login" data-bs-toggle="validator" class="shake mt20" action="<?php echo site_url('Panel/login')?>" method="POST">
          <div class="row">
            <div class="form-group col-sm-12">
            <input type="text" name="email"  id="email" placeholder="Enter Email ID" required data-error="Please fill Out">
            <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-12">
            <input type="password" name="password"  id="password" placeholder="Enter Password" required>
            <div class="help-block with-errors"></div>
            </div>
          </div>
          <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Login <span class="circle"></span></button>
          <a href="<?php echo site_url('Panel/register')?>" class="btn-outline lnk btn-main  mt10 col-md-12">Register with Tap Savvy <span class="circle"></span></a>
          <div id="msgSubmit" class="h3 text-center hidden"></div>
          <div class="clearfix"></div>
        </form>
        <div class="getintouchblock">
          <div class="media mt15">
            <div class="icondive"><img src="<?php echo site_url('assets/web/images/icons/call.svg')?>" alt="icon"></div>
            <div class="media-body getintouchinfo">
              <a href="tel:123456790">+91 93217 68154 <span>Mon-Fri 9am - 6pm</span></a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive"><img src="<?php echo site_url('assets/web/images/icons/whatsapp.svg')?>" alt="icon"></div>
            <div class="media-body getintouchinfo">
              <a href="tel:123456790">+91 93217 68154 <span>Mon-Fri 9am - 6pm</span></a>
            </div>
          </div>
          <div class="media mt15">
          <div class="icondive"><img src="<?php echo site_url('assets/web/images/icons/mail.svg')?>" alt="icon"></div>
          <div class="media-body getintouchinfo">
            <a href="mailto:info@website.com">info@tap-savvy.com <span>Online Support</span></a>
          </div>
          </div>
          <div class="media mt15">
          <div class="icondive"><img src="<?php echo site_url('assets/web/images/icons/map.svg')?>" alt="icon"></div>
          <div class="media-body getintouchinfo">
            <a href="mailto:info@website.com">Santacruz East, Mumbai<span>Visit Our Office</span></a>
          </div>
          </div>
        </div>
        

      </div> 
     </div>
     </div>     
     </div>     
<!--end off canvas nav -->