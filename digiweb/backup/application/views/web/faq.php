<?php $this->load->view('default/header');?>
   <body>
      <?php $this->load->view('default/loader.php');?>
      <?php $this->load->view('default/nav-black');?>
      <!--Mobile contact-->
      <div class="popup-modal1">
         <div class="modal" id="menu-popup">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <div class="common-heading">
                        <h4 class="mt0 mb0">Write a Message</h4>
                     </div>
                     <button type="button" class="closes" data-bs-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                           <div class="fieldsets row">
                              <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                              <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                              <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                              <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                              <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                           </div>
                           <div class="fieldsets mt20 pb20">
                              <button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Mobile contact-->
      <!--End Header -->
      <!--Breadcrumb Area-->
      <section class="breadcrumb-area " data-background="images/banner/9.jpg">
         <div class="text-block">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 v-center">
                     <div class="bread-inner">
                        <div class="bread-menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="#">FAQ</a></li>
                           </ul>
                        </div>
                        <div class="bread-title">
                           <h2>FAQ</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Breadcrumb Area-->
      <!--Start Faqs-->
      <section class="pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <h2 class="mb0">FAQS</h2>
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-md-6 mt60">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading-1">
						  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapseOne">
							Incomprehensibility or readability? That is the question.
						  </button>
						</h2>
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
						  <div class="accordion-body">
							<div class="data-reqs">								
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>								
							 </div>
						  </div>
						</div>
					  </div>
					  <div class="accordion-item">
						<h2 class="accordion-header" id="heading-2">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapseOne">
							Origin and meaning of the Lorem Ipsum text
						  </button>
						</h2>
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
						  <div class="accordion-body">
							<div class="data-reqs">
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>								
							 </div>
						  </div>
						</div>
					  </div>					
				 </div>
               </div>

                <div class="col-md-6 mt60">
				<div class="accordion" id="accordionExample-a">
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-b">
						  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
							Incomprehensibility or readability? That is the question.
						  </button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse show" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
						  <div class="accordion-body">
							<div class="data-reqs">								
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>								
							 </div>
						  </div>
						</div>
					  </div>
					  <div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
							Origin and meaning of the Lorem Ipsum text
						  </button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
						  <div class="accordion-body">
							<div class="data-reqs">
								<h5 class="pb20">Content List</h5>
								<p>5 Years Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>								
							 </div>
						  </div>
						</div>
					  </div>					
				 </div>
               </div>     
            </div>
         </div>
      </section>
      <!--End Faqs-->
      <?php $this->load->view('default/footer.php');?>
   <?php $this->load->view('default/off-canvas.php');?>
<?php $this->load->view('default/script.php');?>