<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('panel/partials/head-css') ?>
</head>
    <?php $this->load->view('panel/partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('admin/partials/sidebar') ?>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Welcome to Our Founder<span class="float-end"><?php echo $this->session->userdata('firstname')."".$this->session->userdata('lastname') ?></span></h4>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                    <?php if ($this->session->flashdata('success')): ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php $this->session->unset_userdata ( 'success' ); ?>
                      </div>
                      <?php elseif ($this->session->flashdata('error')): ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <?php $this->session->unset_userdata ( 'error' ); ?>
                    <?php endif; ?>
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="custom-validation" action="<?=site_url('Users/add')?>" method="POST">
                                    <h4 class="card-title">General Info <hr></h4>
                                    <div class="row">
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">User Type</label>
                                            <select class="form-select" name="userType" id="userType">
                                                <option selected>Select Access Category</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Franchise</option>
                                                <option value="3">Manager</option>
                                                <option value="4">Executive</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">User Code</label>
                                            <input type="text" class="form-control" name="userUID" id="userUID" value="<?php echo "TAPM".(rand(0,10000));?>" readonly />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" required placeholder="Enter First Name" name="firstname" id="firstname" />
                                            
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname" id="lastname" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" required placeholder="Enter Date of Birth" name="user_dob" id="user_dob" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Gender</label>
                                            <select class="form-select" name="gender" id="gender">
                                                <option selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required placeholder="Create Username" name="username" id="username">
                                                <div class="input-group-text">@tap-savvy.com</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" required placeholder="Enter Email Address" name="email" id="email" />
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'emailaddress') : '' ?></span>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Email Status</label>
                                            <select class="form-select" name="email_status" id="email_status">
                                                <option value="UnVerified">UnVerified</option>
                                                <option value="Verified">Verified</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" required placeholder="Create Password" name="password" id="password" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input type="text" class="form-control" required placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" />
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation,'mobileno') : '' ?></span>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Landline</label>
                                            <input type="text" class="form-control"  placeholder="Enter Landline No" name="landline" id="landline" />
                                        </div>
                                    </div>
                                    <h4 class="card-title">Company Info <hr></h4>
                                    <div class="row">
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company Code</label>
                                            <input type="text" class="form-control" readonly placeholder="Enter Company Code" name="company_code" id="companyCode" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Company Email</label>
                                            <input type="text" class="form-control" required placeholder="Enter Company Email" name="company_email" id="companyEmail" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Contact Partner</label>
                                            <input type="text" class="form-control" required placeholder="Enter Contact Partner" name="contact_partner" id="contactPartner" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Primary Contact</label>
                                            <input type="text" class="form-control" required placeholder="Enter Primary Contact" name="primary_contact" id="primaryContact" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Country</label>
                                            <select class="form-select" name="country" id="country">
                                                <option value="IN">India</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Address</label>
                                            <div>
                                                <textarea required class="form-control" rows="5" name="address" id="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control"  placeholder="Enter Postal Code" name="pincode" id="pincode" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" placeholder="Enter State Name" name="state" id="state" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control"  placeholder="Enter City Name" name="city" id="city" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">PAN No</label>
                                            <input type="text" class="form-control"  placeholder="Enter PAN No" name="panno" id="panno" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">STN No</label>
                                            <input type="text" class="form-control"  placeholder="Enter STN No" name="stnno" id="stnno" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">GST No</label>
                                            <input type="text" class="form-control"  placeholder="Enter GST No"  name="gstno" id="gstno"/>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Office Longitude</label>
                                            <input type="text" class="form-control"  placeholder="Enter Office Longitude" name="office_longitutde" id="office_longitutde" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Office Latitude</label>
                                            <input type="text" class="form-control"  placeholder="Enter Office Longitude" name="office_latitude" id="office_latitude" />
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Google Maps Link</label>
                                            <input type="text" class="form-control"  placeholder="Enter Google Map" name="map_link" id="map_link" />
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

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
        </div>
        <!-- END layout-wrapper -->

        <?php $this->load->view('panel/partials/vendor-scripts') ?>

        <script src="<?php echo site_url('assets/admin/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo site_url('assets/admin/js/app.js')?>"></script>

    </body>

</html>

