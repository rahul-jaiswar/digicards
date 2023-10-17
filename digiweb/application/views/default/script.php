      <!-- js placed at the end of the document so the pages load faster -->
      <script src="<?php echo site_url('assets/web/js/vendor/modernizr-3.5.0.min.js')?>"></script>
      <script src="<?php echo site_url('assets/web/js/jquery.min.js')?>"></script>
      <script src="<?php echo site_url('assets/web/js/bootstrap.bundle.min.js')?>"></script> 
      <script src="<?php echo site_url('assets/web/js/plugin.min.js')?>"></script>
      <script src="<?php echo site_url('assets/web/js/preloader.js')?>"></script>      
      <!--common script file-->
      <script src="<?php echo site_url('assets/web/js/main.js')?>"></script>   
      <script>
         $(window).on('load',function(){
         var delayMs = 4000; // delay in milliseconds
         setTimeout(function(){
              $('#leadModal').modal('show');
          }, delayMs);
         });   
      </script>
   </body>
</html>