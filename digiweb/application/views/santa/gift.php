<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('theme/default/head-css') ?>
    <style type="text/css">

canvas {
  display: block;
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  
}
.content {
  /*  background-color: rgba(0, 0, 0, 0.4); */
  margin: 0 auto;
  padding: 20px;
  max-width: 500px;
  height: auto;
}
.wrapper {
  /*  background-color: rgba(0, 0, 0, 0.4); */
  display: flex;
  align-item: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}
</style>
</head>
<body class="">
   
    <!-- Coin Status -->
   
    <div class="section full gradientSection">
         <canvas id="canvas"></canvas>
        <div class="in coin-head">
            <div class="avatar-section">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
            </div>
        </div>
    </div>
    <!-- * Coin Status -->
    <!-- Coin Chart -->
    <div class="section mb-2">
        <div class="card coin-chart">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">For</span>
                        <h2 class="total"><?php echo $this->session->userdata('firstname')?></h2>
                    </div>
                    <div class="right">
                        <img src="<?=base_url('')?>/assets/theme/santa/santa.png" alt="img" class="image-block imaged w100">
                    </div>
                </div>
                <!-- * Balance -->
                <h2 class="card-title">
                This is a Gift Especally for you i am your secret santa bet you can't guess who.</h2>  
            </div>
        </div>
    </div>
    <!-- Coin Chart -->
    <!-- Stats -->
    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Open Gift</div>
                    <div class="value text-success">
                    	<a href="<?php echo site_url('Santa/open_gift')?>"><img src="<?=base_url('')?>/assets/theme/santa/icon/gift.png" alt="img" class="image-block imaged w100" style="z-index:1"></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Secret Message</div>
                    <div class="value text-danger">
                    	<a href="<?php echo site_url('Santa/message')?>"><img src="<?=base_url('')?>/assets/theme/santa/icon/message.png" alt="img" class="image-block imaged w100" style="z-index:1"></a>
                    	</div>
                </div>
            </div>
            <div class="col-12">
                    <div class="mt-5">
                    	<a href="<?php echo site_url('Panel/register')?>"><button type="button" class="btn btn-primary btn-lg btn-block">Now it Your Turn to be Someone's</button></a>
                    </div>
                    <div class="mb-2"></div>
            </div>

        </div>
    </div>
   
    <!-- * Stats -->
    <!-- * Stats -->
    <!-- * App Capsule -->
    <?php $this->load->view('theme/default/vendor-scripts') ?>
    <script type="text/javascript">
  
window.onload = function () {
  //canvas init
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");

  //canvas dimensions
  var W = window.innerWidth;
  var H = window.innerHeight;
  canvas.width = W;
  canvas.height = H;

  //snowflake particles
  var mp = 25; //max particles
  var particles = [];
  for (var i = 0; i < mp; i++) {
    particles.push({
      x: Math.random() * W, //x-coordinate
      y: Math.random() * H, //y-coordinate
      r: Math.random() * 4 + 1, //radius
      d: Math.random() * mp //density
    });
  }

  //Lets draw the flakes
  function draw() {
    ctx.clearRect(0, 0, W, H);

    ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
    ctx.beginPath();
    for (var i = 0; i < mp; i++) {
      var p = particles[i];
      ctx.moveTo(p.x, p.y);
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, true);
    }
    ctx.fill();
    update();
  }

  //Function to move the snowflakes
  //angle will be an ongoing incremental flag. Sin and Cos functions will be applied to it to create vertical and horizontal movements of the flakes
  var angle = 0;
  function update() {
    angle += 0.01;
    for (var i = 0; i < mp; i++) {
      var p = particles[i];
      //Updating X and Y coordinates
      //We will add 1 to the cos function to prevent negative values which will lead flakes to move upwards
      //Every particle has its own density which can be used to make the downward movement different for each flake
      //Lets make it more random by adding in the radius
      p.y += Math.cos(angle + p.d) + 1 + p.r / 2;
      p.x += Math.sin(angle) * 2;

      //Sending flakes back from the top when it exits
      //Lets make it a bit more organic and let flakes enter from the left and right also.
      if (p.x > W + 5 || p.x < -5 || p.y > H) {
        if (i % 3 > 0) {
          //66.67% of the flakes
          particles[i] = { x: Math.random() * W, y: -10, r: p.r, d: p.d };
        } else {
          //If the flake is exitting from the right
          if (Math.sin(angle) > 0) {
            //Enter from the left
            particles[i] = { x: -5, y: Math.random() * H, r: p.r, d: p.d };
          } else {
            //Enter from the right
            particles[i] = { x: W + 5, y: Math.random() * H, r: p.r, d: p.d };
          }
        }
      }
    }
  }

  //animation loop
  setInterval(draw, 33);
};

</script>
</body>

</html>