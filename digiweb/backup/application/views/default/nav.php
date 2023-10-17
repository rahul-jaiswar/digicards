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
        <li><a href="<?php echo site_url('App')?>" class="menu-links">Home</a></li>
        <li><a href="<?php echo site_url('App/process')?>" class="menu-links">How it Works?</a></li>
        <li><a href="<?php echo site_url('Shop')?>" class="menu-links">Shop</a></li>
        <li><a href="<?php echo site_url('App/contact')?>" class="menu-links">Support</a></li>
          <li><a  data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn3"><i class="fas fa-user"></i></a></li>
          <li><a href="https://wa.me/+919321768154?text=I'm%20interested%20in%20your%20product%20let's%20have%20%a%talk" class="btn-outline icon-btn" style="color:black;">Chat With Us <i class="fab fa-whatsapp"></i></a> </li>
        </ul>
      </div>
      <div class="mobile-menu2">
        <ul class="mob-nav2">
          <li><a class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="fas fa-qrcode"></i></a></li>
          <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
        </ul>
      </div>
    </div>
    <?php $this->load->view('default/mobile')?>
  </div>
</header>
<!--End Header -->