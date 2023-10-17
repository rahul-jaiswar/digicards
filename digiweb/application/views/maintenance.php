<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.bottomright {
  position: absolute;
  bottom: 0;
  right: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="middle">
    <img src="assets/web/images/white-logo.png" alt="Logo" class="mega-white-logo" height="150" />
    <h1>We are Unders <br> Maintenance Mode</h1>
    <hr>
    <p>2 days left</p>
  </div>
  <div class="bottomleft">
    <p>Call On: +91 9321768154</p>
  </div>
  <div class="bottomright">
    <p>Email: info@tap-savvy.com</p>
  </div>
</div>

</body>
</html>
