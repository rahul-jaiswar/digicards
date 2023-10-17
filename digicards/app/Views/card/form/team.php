<form class="custom-validation" action="<?=site_url('Card/team/'.$customer['company_code'])?>" method="POST" enctype="multipart/form-data">
    <h4 class="card-title"><hr> Team Member Info <hr></h4>
    <div class="row">
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company Code</label>
            <input type="text" class="form-control" name="company_code" id="company_code" value="<?php echo $customer['company_code'] ?>" readonly/>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="company_name" id="company_name"  value="<?php echo $customer['company_name'] ?>"  readonly/>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Enter Team Name</label>
            <select class="form-select form-control" name="team_name" id="team_name">
            	<?php if(!empty($tmember['team_name'])){?>
            	<option value="<?php echo $tmember['team_name'] ?>"><?php echo $tmember['team_name'] ?></option>
                	<option value="">Enter or Select Team Name</option>
                    <option value="Referral">Operations</option>
                    <option value="Referral">Markeing</option>
                    <option value="Referral">Tech</option>
                    <option value="Referral">Sales</option>
                <?php }else{?>
                	<option selected="">Enter or Select Team Name</option>
                    <option value="Referral">Operations</option>
                    <option value="Referral">Markeing</option>
                    <option value="Referral">Tech</option>
                    <option value="Referral">Sales</option>
                <?php }?>
            </select>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Enter Person Designation</label>
            <select class="form-select form-control" name="designation" id="designation">
            	<?php if(!empty($tmember['designation'])){?>
            	<option value="<?php echo $tmember['designation'] ?>"><?php echo $tmember['designation'] ?></option>
            	<option value="">Select Designation</option>
                <optgroup label="Top Management">
                <option value="Chairperson">Chairperson</option>
                <option value="Chairperson">President</option>
                <option value="Referral">CEO</option>
                <option value="Referral">Executive Director</option>
                <option value="Referral">Managing Director</option>
                <option value="Referral">Chief Operating Officer </option>
                <option value="Referral">Chief Finance Officer</option>
                <option value="Referral">Vice President</option>
                </optgroup>
                <optgroup label="Middle Management">
                <option value="Referral">General Manager</option>
                <option value="Referral">Area Manager</option>
                <option value="Web Commerce">Director</option>
                <option value="Web Commerce">Branch Manager</option>
                <option value="Web Commerce">Senior Manager</option>
                </optgroup>
                <optgroup label="Lower Management">
                <option value="Referral">Supervisor</option>
                <option value="Referral">Manager</option>
                <option value="Referral">Assistant Manager</option>
                <option value="VP">Section Head</option>
                <option value="Manager">Team Lead</option>
                <option value="Executive">Executive</option>
                </optgroup>
                <?php }else{?>	
            	<option selected="">Select Designation</option>
                <optgroup label="Top Management">
                <option value="Chairperson">Chairperson</option>
                <option value="Chairperson">President</option>
                <option value="Referral">CEO</option>
                <option value="Referral">Executive Director</option>
                <option value="Referral">Managing Director</option>
                <option value="Referral">Chief Operating Officer </option>
                <option value="Referral">Chief Finance Officer</option>
                <option value="Referral">Vice President</option>
                </optgroup>
                <optgroup label="Middle Management">
                <option value="Referral">General Manager</option>
                <option value="Referral">Area Manager</option>
                <option value="Web Commerce">Director</option>
                <option value="Web Commerce">Branch Manager</option>
                <option value="Web Commerce">Senior Manager</option>
                </optgroup>
                <optgroup label="Lower Management">
                <option value="Referral">Supervisor</option>
                <option value="Referral">Manager</option>
                <option value="Referral">Assistant Manager</option>
                <option value="VP">Section Head</option>
                <option value="Manager">Team Lead</option>
                <option value="Executive">Executive</option>
                </optgroup>
                <?php }?>
            </select>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Card Material</label>
            <select class="form-select" name="card_category" id="card_category">
            	<?php if(!empty($tmember['card_category'])){?>
            		<option value="<?php echo $tmember['card_category']?>"><?php echo $tmember['card_category']?></option>
            		<option value="">Select Card Material</option>
                    <option value="1">Plain PVC</option>
                    <option value="3">Premium PVC</option>
                    <option value="4">Plain Wooden</option>
                    <option value="4">Metal Premium Card (Rose GOLD)</option>
                    <option value="4">Metal Premium Card (GOLD)</option>
                    <option value="4">Metal Premium Card (Stainless Steel)</option>
        		<?php }else{?>
        			<option selected>Select Card Material</option>
                    <option value="1">Plain PVC</option>
                    <option value="3">Premium PVC</option>
                    <option value="4">Plain Wooden</option>
                    <option value="4">Metal Premium Card (Rose GOLD)</option>
                    <option value="4">Metal Premium Card (GOLD)</option>
                    <option value="4">Metal Premium Card (Stainless Steel)</option>
        		<?php }?>
                
            </select>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">User Code</label>
            <?php if(!empty($tmember['userUID'])){?>
            	 <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo $tmember['userUID']; ?>" readonly />
            <?php }else{?>	
            	 <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo "TAPT".(rand(0,10000));?>" readonly />
            <?php }?>	
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">First Name</label>
            <?php if(!empty($tmember['firstname'])){?>
            	<input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" value="<?php echo $tmember['firstname']?>" />
            <?php }else{?>	
            	<input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
            <?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Last Name</label>
            <?php if(!empty($tmember['lastname'])){?>
            	<input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" value="<?php echo $tmember['lastname']; ?>" />
            <?php }else{?>	
            	<input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
            <?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Username</label>
            <div class="input-group">
        	<?php if(!empty($tmember['username'])){?>
        		<input type="text" class="form-control" required placeholder="Create Username" name="username" id="username" value="<?php echo $tmember['username']?>">
                <div class="input-group-text">@tap-savvy.com</div>
            <?php }else{?>	
            	<input type="text" class="form-control" required placeholder="Create Username" name="username" id="username">
                <div class="input-group-text">@tap-savvy.com</div>
            <?php }?>
                
            </div>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Email</label>
            <?php if(!empty($tmember['email'])){?>
            	<input type="email" class="form-control" required placeholder="Enter Email Address" name="email" id="email" value="<?php echo $tmember['email']?>" />
            <?php }else{?>	
            	<input type="email" class="form-control" required placeholder="Enter Email Address" name="email" id="email" />
            <span class="text-danger"><?= isset($validation) ? display_error($validation,'emailaddress') : '' ?></span>
            <?php }?>
            
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Mobile No</label>
            <?php if(!empty($tmember['mobile_no'])){?>
            	<input type="text" class="form-control" required placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" value="<?php echo $tmember['mobile_no']?>" />
            <?php }else{?>	
            	<input type="text" class="form-control" required placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" />
            <?php }?>
            
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Password</label>
            <?php if(!empty($tmember['team_password'])){?>
            	<input type="password" class="form-control" required placeholder="Create Password" name="team_password" id="team_password" value="<?php echo $tmember['team_password']?>" />
            <?php }else{?>	
            	<input type="password" class="form-control" required placeholder="Create Password" name="team_password" id="team_password" />
            <?php }?>
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Upload Profile Image</label>
            <?php if(!empty($tmember['designation'])){?>
            	<input type="file" class="form-control"  placeholder="Enter Last Name" name="profile_image" id="profile_image" value="" />
            <?php }else{?>	
            	<input type="file" class="form-control"  placeholder="Enter Last Name" name="profile_image" id="profile_image" />
            <?php }?>
            
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Whatsapp Mobile No</label>
            <?php if(!empty($tmember['whatsapp_business'])){?>
            	<input type="text" class="form-control"  placeholder="Enter Last Name" name="whatsapp_business" id="whatsapp_business" value="<?php echo $tmember['whatsapp_business']?>" />
            <?php }else{?>	
            	<input type="text" class="form-control"  placeholder="Enter Last Name" name="whatsapp_business" id="whatsapp_business" />
            <?php }?>
            
        </div>
        <div class="col-xl-4 mb-3">
            <label class="form-label">Alternate No</label>
            <?php if(!empty($tmember['alternate_no'])){?>
            	<input type="text" class="form-control"  placeholder="Enter Last Name" name="alternate_no" id="alternate_no" value="<?php echo $tmember['alternate_no']?>" />
            <?php }else{?>
            	<input type="text" class="form-control"  placeholder="Enter Last Name" name="alternate_no" id="alternate_no" />	
            <?php }?>
            
        </div>
        <div class="col-xl-12 mb-3">
            <label class="form-label">About Member</label>
            <?php if(!empty($tmember['about'])){?>
            <textarea class="form-control" rows="2" name="about" id="about"><?php echo $tmember['about']?></textarea>
            <?php }else{?>	
            	<textarea class="form-control" rows="2" name="about" id="about"></textarea>
            <?php }?>
            
        </div>
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
<div class="table-responsive mt-4 mb-4">
    <table id="team_list" class="table table-centered table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">Company Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Email</th>
                <th scope="col" style="width: 200px;">Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach($team as $teamdata):?>
            <tr>
                <td>
                    <img src="<?=site_url('public/assets/images/users/avatar-2.jpg')?>" alt="" class="avatar-xs rounded-circle me-2">
                    <a href="<?=site_url('Users/details')?>" class="text-body"><?php echo $teamdata['firstname'].''.$teamdata['lastname']; ?></a>	
                </td>
                <td><?php echo $teamdata['userUID']?></td>
                <td><?php echo $teamdata['username']?></td>
                <td><?php echo $teamdata['company_name']?></td>
                <td><?php echo $teamdata['designation'];?></td>
                <td><?php echo $teamdata['email']?></td>
                <td>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                        	<?php if($teamdata['enable'] == 0){?>
                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil-exclamation-circle font-size-18"></i></a>
                        	<?php }else{?>
                    		<a href="javascript:void(0);" class="px-2 text-primary"><i class="uil-circle font-size-18"></i></a>
                        	<?php }?>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?= site_url('Card/team/'.$teamdata['userUID'])?>" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        	<?php endforeach;?>
        </tbody>
    </table>
</div>