<form class="custom-validation" action="<?=site_url('Card/info/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr> General Info <hr></h4>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<label class="newbtn" style="cursor: pointer;">
				Upload Company Logo 
				<img id="blah" src="http://placehold.it/400x125" style="width: 100%;height:125px;">
			    <!-- <img id="blah" src="http://placehold.it/120x120" > -->
			    <input id="pic" class='pis' onchange="uploadcompanylogo(this);" type="file" style="display: none;">
			</label>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="mb-3">
                <label class="form-label">Company Code</label>
                <input type="text" class="form-control" name="company_code" id="company_code" value="<?php echo $customer['company_code'] ?>" readonly/>
            </div>
            <div class="mb-3">
                <label class="form-label">Company Name</label>
                <input type="text" class="form-control" name="company_name" id="company_name" value="<?php echo $customer['company_name'] ?>"  readonly/>
            </div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="mb-3">
                <label class="form-label">Company Category</label>
                <select class="form-select form-control" name="company_cat" id="company_cat" required>
                    <option value="<?php echo $customer['company_cat']?>"><?php echo $customer['company_cat']?></option>
                    <option>Choose or Company Category</option>
                    <option value="Companies Limited by Shares">Companies Limited by Shares</option>
                    <option value="Companies Limited by Guarantee">Companies Limited by Guarantee</option>
                    <option value="Unlimited Companies">Unlimited Companies</option>
                    <option value="One Person Companies (OPC)">One Person Companies (OPC)</option>
                    <option value="Private Companies">Private Companies</option>
                    <option value="Public Companies">Public Companies</option>
                    <option value="Holding and Subsidiary Companies">Holding and Subsidiary Companies</option>
                    <option value="Associate Companies">Associate Companies</option>
                    <option value="Companies in terms of Access to Capital">Companies in terms of Access to Capital</option>
                    <option value="Government Companies">Government Companies</option>
                    <option value="Foreign Companies">Freign Companies</option>
                    <option value="Charitable Companies">Charitable Companies</option>
                    <option value="Dormant Companies">Dormant Companies</option>
                    <option value="Nidhi Companies">Nidhi Companies</option>
                    <option value="Public Financial Institutions">Public Financial Institutions</option>
                </select>
            </div>
			<div class="mb-3">
                <label class="form-label">Company Est Date</label>
                <?php if(!empty($card['est_date'])){?>
                	<input type="date" class="form-control" name="est_date" id="est_date" value="<?php echo date('Y-m-d', strtotime($card['est_date'])) ?>" />
                <?php }else{?>
                	<input type="date" class="form-control" name="est_date" id="est_date" />
                <?php }?>
            </div>
		</div>
	</div>
    <div class="row">
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company PAN NO</label>
            <?php if(!empty($card['PAN_no'])){?>
            	<input type="text" class="form-control" name="PAN_no" id="PAN_no" value="<?php echo $card['PAN_no']?>"  />
           	<?php }else{?>
           		<input type="text" class="form-control" name="PAN_no" id="PAN_no"  />
           	<?php }?>
            
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company STN NO</label>
            <?php if(!empty($card['STN_no'])){?>
            	<input type="text" class="form-control"name="STN_no" id="STN_no" value="<?php echo $card['STN_no']?>" />
           	<?php }else{?>
           		<input type="text" class="form-control"name="STN_no" id="STN_no" />
           	<?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company GST NO</label>
            <?php if(!empty($card['GST_no'])){?>
            	<input type="text" class="form-control" name="GST_no" id="GST_no" value="<?php echo $card['GST_no']?>"  />
           	<?php }else{?>
           		<input type="text" class="form-control" name="GST_no" id="GST_no"   />
           	<?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company Trademark</label>
            <?php if(!empty($card['cust_copyright'])){?>
            	<input type="text" class="form-control" name="cust_copyright" id="cust_copyright" value="<?php echo $card['cust_copyright']?>" />
           	<?php }else{?>
           		<input type="text" class="form-control" name="cust_copyright" id="cust_copyright"/>
           	<?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company Email</label>
            <?php if(!empty($card['company_email'])){?>
            	<input type="email" class="form-control" name="company_email" id="" value="<?php echo $card['company_email']?>" />
           	<?php }else{?>
           		<input type="email" class="form-control" name="company_email" id="" />
           	<?php }?>
           
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Support Email</label>
            <?php if(!empty($card['support_email'])){?>
            	<input type="email" class="form-control" name="support_email" id="" value="<?php echo $card['support_email']?>" />
           	<?php }else{?>
           		<input type="email" class="form-control" name="support_email" id="" />
           	<?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Support Contact</label>
            <?php if(!empty($card['sup_contact_no'])){?>
            	<input type="number" class="form-control" name="sup_contact_no" id="" value="<?php echo $card['sup_contact_no']?>" />
           	<?php }else{?>
           		<input type="number" class="form-control" name="sup_contact_no" id="" />
           	<?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Whastapp Business</label>
            <?php if(!empty($card['whatsapp_business'])){?>
            	<input type="number" class="form-control" name="whatsapp_business" id="" value="<?php echo $card['whatsapp_business']?>" />
           	<?php }else{?>
           		<input type="number" class="form-control" name="whatsapp_business" id=""/>
           	<?php }?>
            
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Website URL</label>
            <?php if(!empty($card['website_url'])){?>
            	<input type="text" class="form-control" name="website_url" id="" value="<?php echo $card['website_url']?>" />
           	<?php }else{?>
           		<input type="text" class="form-control" name="website_url" id="" />
           	<?php }?>
            
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
    		<label class="form-label">Upload Company Profile PDF</label>
    		<div id="preview-container">
			    <img src="http://placehold.it/100x125" id="upload-dialog" style="width: 100%;height:125px;">
			    <input type="file" id="pdf-file" name="pdf" accept="application/pdf" />
			    <div id="pdf-loader">Loading Preview ..</div>
			    <canvas id="pdf-preview" width="150"></canvas>
			    <div class="row">
			        <span id="pdf-name"></span>
			    </div>
			    <div class="row">
			        <button class="" id="cancel-pdf">Cancel</button>
			    </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
    		<label class="form-label">Upload Company Catalogue PDF</label>
    		<div id="preview-container">
			    <img src="http://placehold.it/100x125" id="upload-dialog" style="width: 100%;height:125px;">
			    <input type="file" id="pdf-file" name="pdf" accept="application/pdf" />
			    <div id="pdf-loader">Loading Preview ..</div>
			    <canvas id="pdf-preview" width="150"></canvas>
			    <div class="row">
			        <span id="pdf-name"></span>
			    </div>
			    <div class="row">
			        <button class="" id="cancel-pdf">Cancel</button>
			    </div>
			</div>
		</div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
            <div class="mb-3">
                <label class="form-label">Company Map Link</label>
                <?php if(!empty($card['company_map_link'])){?>
                	<input type="text" class="form-control" name="company_map_link" id="" value="<?php echo $card['company_map_link']?>" />
               	<?php }else{?>
               		<input type="text" class="form-control" name="company_map_link" id="" />
               	<?php }?>
            </div>
            <div class="mb-3">
                <label class="form-label">Intro Video URL</label>
                <?php if(!empty($card['intro_video'])){?>
                	<input type="text" class="form-control" name="intro_video" id="" value="<?php echo $card['intro_video']?>" />
               	<?php }else{?>
               		<input type="text" class="form-control" name="intro_video" id="" />
               	<?php }?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-3">
            <label class="form-label">About the Company</label>
            <?php if(!empty($card['about_us'])){?>
            	<textarea class="form-control" placeholder="Write about Company...." name="about_us" id=""><?php echo $card['about_us']?></textarea>
           	<?php }else{?>
           		<textarea class="form-control" placeholder="Write about Company...." name="about_us" id=""></textarea>
           	<?php }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-3">
            <label class="form-label">Country</label>
            <?php if(!empty($card['country'])){?>
            	<input type="text" class="form-control" name="country" id="country" value="<?php echo $card['country']?>" />
           	<?php }else{?>
           		<input type="text" class="form-control" name="country" id="country"/>
           	<?php }?>
            
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">State</label>
            <?php if(!empty($card['state'])){?>
            	<input type="text" class="form-control" name="state" id="state" value="<?php echo $card['state']?>" />
           	<?php }else{?>
           		<input type="text" class="form-control" name="state" id="state" />
           	<?php }?>
            
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">City</label>
            <?php if(!empty($card['city'])){?>
            	<input type="text" class="form-control" name="city" id="city" value="<?php echo $card['city']?>"/>
           	<?php }else{?>
           		<input type="text" class="form-control" name="city" id="city" />
           	<?php }?>
            
        </div>
        <div class="col-xl-3 mb-3">
            <label class="form-label">Pincode</label>
            <?php if(!empty($card['pincode'])){?>
            	<input type="text" class="form-control" name="pincode" id="pincode" value="<?php echo $card['pincode']?>" />
           	<?php }else{?>
           		<input type="text" class="form-control" name="pincode" id="pincode" />
           	<?php }?>
            
        </div>
        <div class="col-xl-12 mb-3">
            <label class="form-label">Company Address</label>
            <?php if(!empty($card['address'])){?>
            	<textarea class="form-control" placeholder="Enter Full Address" name="address" id="address"><?php echo $card['address']?></textarea>
           	<?php }else{?>
           		<textarea class="form-control" placeholder="Enter Full Address" name="address" id="address"></textarea>
           	<?php }?>
        </div>
    </div>
    <div class="row">
    	
    </div>
    <div>
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                Submit
            </button>
            <button type="reset" class="btn btn-secondary waves-effect">
                Cancel
            </button>
        </div>
    </div>
</form>

<script type="text/javascript">
    var _PDF_DOC,
        _CANVAS = document.querySelector('#pdf-preview'),
        _OBJECT_URL;

    function showPDF(pdf_url) {
        PDFJS.getDocument({ url: pdf_url }).then(function(pdf_doc) {
            _PDF_DOC = pdf_doc;

            // Show the first page
            showPage(1);

            // destroy previous object url
            URL.revokeObjectURL(_OBJECT_URL);
        }).catch(function(error) {
            // trigger Cancel on error
            document.querySelector("#cancel-pdf").click();
            
            // error reason
            alert(error.message);
        });;
    }

    function showPage(page_no) {
        // fetch the page
        _PDF_DOC.getPage(page_no).then(function(page) {
            // set the scale of viewport
            var scale_required = _CANVAS.width / page.getViewport(1).width;

            // get viewport of the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height
            _CANVAS.height = viewport.height;

            var renderContext = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };
            
            // render the page contents in the canvas
            page.render(renderContext).then(function() {
                document.querySelector("#pdf-preview").style.display = 'inline-block';
                document.querySelector("#pdf-loader").style.display = 'none';
            });
        });
    }


    /* Show Select File dialog */
    document.querySelector("#upload-dialog").addEventListener('click', function() {
        document.querySelector("#pdf-file").click();
    });

    /* Selected File has changed */
    document.querySelector("#pdf-file").addEventListener('change', function() {
        // user selected file
        var file = this.files[0];

        // allowed MIME types
        var mime_types = [ 'application/pdf' ];
        
        // Validate whether PDF
        if(mime_types.indexOf(file.type) == -1) {
            alert('Error : Incorrect file type');
            return;
        }

        // validate file size
        if(file.size > 10*1024*1024) {
            alert('Error : Exceeded size 10MB');
            return;
        }

        // validation is successful

        // hide upload dialog button
        document.querySelector("#upload-dialog").style.display = 'none';
        
        // set name of the file
        document.querySelector("#pdf-name").innerText = file.name;
        document.querySelector("#pdf-name").style.display = 'inline-block';

        // show cancel and upload buttons now
        document.querySelector("#cancel-pdf").style.display = 'inline-block';
        

        // Show the PDF preview loader
        document.querySelector("#pdf-loader").style.display = 'inline-block';

        // object url of PDF 
        _OBJECT_URL = URL.createObjectURL(file)

        // send the object url of the pdf to the PDF preview function
        showPDF(_OBJECT_URL);
    });

    /* Reset file input */
    document.querySelector("#cancel-pdf").addEventListener('click', function() {
        // show upload dialog button
        document.querySelector("#upload-dialog").style.display = 'inline-block';

        // reset to no selection
        document.querySelector("#pdf-file").value = '';

        // hide elements that are not required
        document.querySelector("#pdf-name").style.display = 'none';
        document.querySelector("#pdf-preview").style.display = 'none';
        document.querySelector("#pdf-loader").style.display = 'none';
        document.querySelector("#cancel-pdf").style.display = 'none';
    });
</script>