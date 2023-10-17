<!--Start Header -->
<header class="nav-bg-b main-header navfix fixed-top menu-white">
  <div class="container m-pad">
    <div class="menu-header">
      <div class="dsk-logo"><a class="nav-brand" href="<?php echo site_url();?>">
        <img src="<?php echo site_url('assets/web/images/white-logo.png')?>" alt="Logo" class="mega-white-logo"/>
        <img src="<?php echo site_url('assets/web/images/black-logo.png')?>" alt="Logo" class="mega-darks-logo"/>
        </a>
      </div>
      <div class="custom-nav" role="navigation">
        <ul class="nav-list onepge">
        <li><a href="<?php echo site_url('/')?>" class="menu-links">Home</a></li>
        <li class="sbmenu rpdropdown">
          <a href="#" class="menu-links">About Us</a>
          <div class="nx-dropdown menu-dorpdown">
             <div class="sub-menu-section">
              <div class="sub-menu-center-block">
               <div class="sub-menu-column smfull">
                <ul>
                   <li><a href="<?php echo site_url('App/company')?>" style="color:black;"> Company</a></li>
                   <li><a href="<?php echo site_url('App/whyus')?>" style="color:black;">Why Us?</a></li>
                   <li><a href="<?php echo site_url('App/community')?>" style="color:black;">Join the Community</a></li>
                </ul>
               </div>
              </div>
             </div>
          </div>
         </li>
        <li><a href="<?php echo site_url('App/process')?>" class="menu-links">How it Works?</a></li>
        <li><a href="<?php echo site_url('Shop')?>" class="menu-links">Shop</a></li>
        <li><a href="<?php echo site_url('App/contact')?>" class="menu-links">Support</a></li>
          <li><a  data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn3"><i class="fas fa-user"></i></a></li>
        </ul>
      </div>
    </div>
    <?php //$this->load->view('default/mobile')?>
  </div>
</header>
<!--End Header -->