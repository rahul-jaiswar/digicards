<?php $this->load->view('default/header');?>
  <body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
      <div class="pre-content">
        <div class="logo-pre"><img src="<?php echo site_url('assets/web/images/logo.png')?>" alt="Logo" class="img-fluid" /></div>
        <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
      </div>
    </div>
    <!--End Preloader -->
    <?php $this->load->view('default/nav-campaign.php');?>
    
    <!--Start Hero-->
    <section class="hero-section niwax-lp2" id="home">      
      <div class="niwax-lp-img nlp2 niwax" data-rellax-speed="-2"><img src="<?php echo site_url('assets/web/images/hero/niwax-lp-2b.svg')?>" alt=""></div>
      <div class="niwax-lp-img nlp1 niwax" data-rellax-speed="4"><img src="<?php echo site_url('assets/web/images/hero/niwax-lp-2a.svg')?>" alt=""></div>
      <div class="niwax-lp-img nlp4 niwax" data-rellax-speed="2"><img src="<?php echo site_url('assets/web/images/hero/niwax-lp-2d.svg')?>" alt=""></div>
      <div class="niwax-lp-img nlp3 niwax" data-rellax-speed="3"><img src="<?php echo site_url('assets/web/images/hero/niwax-lp-2c.svg')?>" alt=""></div>
      <div class="text-block">
        <div class="container">
          <div class="row v-center">
            <div class="col-lg-7">
              <div class="header-headings">
                <span class="text-effect-1">Secret Santa Week</span>
        <h1 class="wow fadeIn mt20 mb30" data-wow-delay=".4s">Be Someone's Secret Santa and let them know there is someone to care for them.</h1>                
                
        <p class="wow fadeInUp" data-wow-delay=".4s">It's the Season of Christmas and New Year Eve. Time to spread the happiness be a secret santa for those whom you love and care with Tap Savvy</p>              
                <!-- btn set -->
                <div class="niwaxbtnvideo mt40 wow fadeIn" data-wow-delay="1s">
                  <a href="#" class="niwax-btn2">Be Secret Santa<i class="fas fa-chevron-right fa-icon"></i></a>
                  <div class="video-btn  d-flex v-center gap10">
                    <div class="video-intro-ppx"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&rel=0"><span class="triangle-play"></span></a></div>
                    <div class="title-hero">
                      <p>Play Video</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-5 v-center">
              <div class="niwax-lpimg-2">
                <img src="<?php echo site_url('assets/theme/santa/secret-santa-landing.jpg')?>"  alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Hero-->

    

  <?php $this->load->view('default/script.php');?>