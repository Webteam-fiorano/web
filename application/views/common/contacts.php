<link href="<?php echo base_url('assets/css/css-map/cssmap-continents.css'); ?>" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

// CSSMap;
        $("#map-continents").CSSMap({
            "size": 1450,
            "tooltips": "floating-top-center",
            "responsive": "auto",
            "onClick":function(e){var a=e.children('a');
                var url = a.attr('href').split('#')[1]+".php";
                window.location ="http://www.fiorano.com//partners/"+url;
            }
        });
// END OF THE CSSMap;

    });
</script>

<section class="section-contact">
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Contact Us</h1>

            </div>
            <div class=" col-sm-8 padding-top-50">
                <div class="col-sm-12 padding-bottom-20">

                    <button type="button" style="" href="#" data-toggle="modal" data-target="#contact_us" class="download-binaries btn-danger btn btn-large downHeadBtn"><i class="fa fa-large fa-user-o"></i> Sales Enquiries</button>
                </div>
                <div class="col-sm-12 padding-bottom-20">
                    <a href="<?php echo site_url('company/support')?>"  class="btn-success btn btn-large downHeadBtn"><i class="fa fa-large fa-user"></i> Technical Support</a>
                </div>

            </div>

        </div>
    </div>
</section>
<section class="contactForm" id="contactForm">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="section-header padding-bottom-20">
                    <h2 class="section-title text-center wow fadeInDown  animated" style="visibility: visible; animation-name: fadeInDown;padding-top: 2% !important;">Get in Touch</h2>
                </div>
                <div class="col-xs-12">

                    <?php if(empty($response)){?>
                        <?php $attributes=array('name'=>'contact','id'=>'frmcontact');

                        echo form_open('company/contacts',$attributes );  ?>
                        <div class="col-sm-10 col-xs-12 col-sm-offset-1" id="contact1">

                            <p> To reach a sales representative immediately, call 1-800-663-3621 (Toll-Free within the USA) or submit this form selecting the appropriate message category and the relevant team will get in touch with you shortly. </p>
                            <hr class="double-white">
                            <input class="" name="type" value="" id="hiddnval" type="hidden">


                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20">Name <span class="reqMention">*</span>
                                    <input type="text" required="required" placeholder="Enter your Name..." id="name" class="form-control"  name="name" value="<?= @$_SESSION['name'];?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20">Email <span class="reqMention">*</span>
                                    <input type="text"  required="required" placeholder="Enter your e-mail..." class="form-control" id="email" name="email" value="<?= @$_SESSION['email'];?>"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20">Company <span class="reqMention">*</span>
                                    <input type="text" required="required" class="form-control" id="company" placeholder="Enter your Company..."  name="company" value="<?= @$_SESSION['company'];?>"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20"> Phone Number <span class="reqMention">*</span>
                                    <input type="text" required="required" class="form-control" placeholder="Enter your Phone Number..." id="phone"  name="phone"  value="<?= @$_SESSION['phone'];?>"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20">Your country or region <span class="reqMention">*</span>
                                    <select name="country" required="required" id="country"  style="" class="form-control">
                                        <option value="">&nbsp;&nbsp;&nbsp;-- Select Country --</option>
                                        <?php
                                        $countries = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antigua","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Azores","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei Darussalam","Virgin Islands","Bulgaria","Burkina Faso","Burma","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo","Cook Islands","Costa Rica","Croatia","Cuba","Cyprus","Czech Republic","Democratic Republic of the Congo","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Faroe Islands","Fiji Islands","Finland","France","French Guiana","French Polynesia","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montserrat","Morocco","Mozambique","Myanmar","Nakhodka","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger Republic","Nigeria","Niue","Northern Mariana Islands","North Korea","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Republic of the Congo","Romania","Russia","Rwanda","Saint Helena","Saint Kitts and Nevis","Saint Lucia","Saint Pierre And Miquelon","Saint Vincent And The Grenadines","Samoa","San Marino","Sao Tome And Principe","Saudi Arabia","Senegal","Serbia and Montenegro","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","Spain","Sri Lanka","St. Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syrian Arab Republic","Taiwan","Tajikistan","Tanzania","Thailand","Togo","Tonga","Tokelau","Tonga Islands","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","USA","Uzbekistan","Vanuatu","Venezuela","Vietnam","Wallis and Futuna","Western Sahara","Western Samoa","Yemen","Yugoslavia","Zaire","Zambia","Zimbabwe");
                                        foreach($countries as $country){
                                            if(@$_SESSION['country'] == $country)
                                                echo "<option value=\"{$country}\" selected>{$country}</option>";
                                            else
                                                echo "<option value=\"{$country}\">{$country}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20"> Which best describes you? <span class="reqMention">*</span>
                                    <select name="profile" required="required" id="profile" class="form-control">
                                        <option value="">Select one</option>
                                        <option value="Existing Fiorano customer" <?= @$_SESSION['profile']=="Existing Fiorano customer"?"selected":"" ?>>Existing Fiorano customer </option>
                                        <option value="Senior Management (CEO/CIO/CTO/VP)" <?= @$_SESSION['profile']=="Senior Management (CEO/CIO/CTO/VP)"?"selected":"" ?>>Senior Management (CEO/CIO/CTO/VP)</option>
                                        <option value="IT Manager Developer" <?= @$_SESSION['profile']=="IT Manager Developer"?"selected":"" ?>>IT Manager/Developer</option>
                                        <option value="Government" <?= @$_SESSION['profile']=="Government"?"selected":"" ?>>Government</option>
                                        <option value="Researcher/Student/University"<?= @$_SESSION['profile']=="Researcher/Student/University"?"selected":"" ?>>Researcher/Student/University</option>
                                        <option value="Media/Press" <?= @$_SESSION['profile']=="Media/Press"?"selected":"" ?>>Media/Press</option>
                                        <option value="Other" <?= @$_SESSION['profile']=="Other"?"selected":"" ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 padding-top-20" id="messsge_cat"> Message category <span class="reqMention">*</span>
                                    <select  name="category" required="required" id="category1" style="" class="form-control">
                                        <option value="" selected>Select one</option>
                                        <option value="Product technical information" <?= @$_SESSION['category']=="Product technical information"?"selected":"" ?>>Product technical information</option>
                                        <option value="Product purchase information" <?= @$_SESSION['category']=="Product purchase information"?"selected":"" ?>>Product purchase information</option>
                                        <option value="Licensing" <?= @$_SESSION['category']=="Licensing"?"selected":"" ?>>Licensing</option>
                                        <option value="Accounting Finance" <?= @$_SESSION['category']=="Accounting Finance"?"selected":"" ?>>Accounting/Finance</option>
                                        <option value="Marketing Media PR" <?= @$_SESSION['category']=="Marketing Media PR"?"selected":"" ?>>Marketing, Media or PR</option>
                                        <option value="Feedback" <?= @$_SESSION['category']=="Feedback"?"selected":"" ?>>Feedback</option>
                                        <option value="Legal" <?= @$_SESSION['category']=="Legal"?"selected":"" ?>>Legal</option>
                                        <option value="Careers at Fiorano" <?= @$_SESSION['category']=="Careers at Fiorano"?"selected":"" ?>>Careers at Fiorano</option>
                                        <option value="Other" <?= @$_SESSION['category']=="Other"?"selected":"" ?>>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div id="lic_catDiv1" class="col-sm-6 padding-top-20 "> Support Category <span class="reqMention">*</span>
                                    <select name="lic_cat"  id="lic_cat" style=" " class="form-control">
                                        <option value="">Select one</option>
                                        <option value="Password lock" >Password lock </option>
                                        <option value="Request License extension" > Request License extension</option>
                                        <option value="Generating Licenses" > Generation of license</option>
                                        <option value="Change of IP address">Change of IP address</option>
                                        <option value="Schedule License Portal Training">Schedule License Portal Training</option>
                                        <option value="Expired support">  Expired support</option>
                                        <option value="Other" >Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 yourMessage padding-top-20" id="your_mess">Your Message <span class="reqMention">*</span>
                                    <textarea name="message" required="required" id="message"  placeholder="Enter your Message..." class="form-control" title="Message" ><?= @$_SESSION['message']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-sm-offset-3">
                                <br/>
                                <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->
                                <!-- <div id="recaptcha2"></div>-->
                                <!-- <div class="g-recaptcha" data-sitekey="6Lfq1gsTAAAAAN8CJvmc_5Y4_oZMNErmg9wvC1G7"></div>

                                 <br/>-->
                            </div>

                            <div class="col-xs-12 padding-bottom-30">
                                <hr class="double-white">
                                <button class="btn btn-lg pull-right btn-success"> Submit </button>
                            </div>
                        </div>
                        <?php  echo form_close();?>
                    <?php }else{ ?>
                        <div class="col-xs-12">
                            <div class="col-xs-10 col-xs-offset-1 padding-bottom-30 padding-top-30">

                                <div>
                                    <?php if($response=='sucess') { ?>
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> Thank you for the request our team will contact shortly !
                                        </div>

                                    <?php }else{ ?>
                                        <div class="alert alert-danger">
                                            <strong>Error!</strong> Please try again.
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1lucQbonUecOXD7J9YekVnTISOyPWI2I1" width="100%" height="480"></iframe>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> USA </h1>
                <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
            </div>
            <div class="col-xs-12 padding-bottom-50">
                <div class="col-sm-6 padding-top-20 col-xs-12">
                    <div class="col-md-3 hidden-sm hidden-xs"></div>
                    <div class="col-md-9 pull-right col-xs-12">
                        <p  class="">
                        <h4><strong >Fiorano Software, Inc.</strong></h4>
                        </p>
                        <p>
                            230 California Avenue, Suite 103<br/>

                            Palo Alto, CA 94306<br/>
                            USA <br/>
                            Tel: +1-650-326-1136<br/>
                            Fax: +1-646-607-5875
                        </p>
                        <p>1-800-663-3621 (Toll-Free within the USA)<br/>
                            <a href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a> <br/>
                        </p>
                    </div>

                </div>
                <div class="col-sm-1 hidden-xs" style="border-left: #C0C0C0 2px solid;height:230px;">
                    &nbsp;
                </div>
                <div class="col-sm-5 col-xs-12 padding-top-20 padding-sideways-0">
                    <div class="col-xs-12 socialIcon padding-top-50 padding-top-hidxs padding-sideways-0">

                        <div class="col-sm-12 nopadding text-center">
                            <a href="https://www.facebook.com/Fiorano.Global/" title="Facebook" target="_blank" class="fa fa-facebook-square"></a>
                            <a href="https://twitter.com/FioranoGlobal" title="Twitter" target="_blank" class="fa fa-twitter-square"></a>
                            <a href="#" class="fa fa-google-plus-square"></a>
                            <a href="https://www.linkedin.com/company-beta/19105/?pathWildcard=19105" title="Linkedin" target="_blank" class="fa fa-linkedin-square"></a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="contact-offices" >
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;"> Worldwide Offices </h2>
            <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

    <div class="contact-bg" style="height:600px;">


    </div>
        <div class="backgrond-contact-bg  ">
            <div class="nopadding col-xs-12 padding-top-70" style="margin-top:-210px !important;">
                <div class="container">
                    <div class="col-xs-12 nopadding">



                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/UK_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>UNITED
                                KINGDOM</b></h3>

                        <p class="white">
                            <b>Fiorano Software Ltd.</b><br/>
                            3000 Hillswood Drive,<br/>
                            Hillswood Business Park,<br/>
                            Chertsey, Surrey, KT16 0RS, <br/>
                            UK<br/>
                            Tel: +44 (0) 1932 895005<br/>
                            Fax: +44 (0) 1932 325413<br />
                            <br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>


                    </div>
                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/France_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>FRANCE</b></h3>


                        <p class="white">
                            <b>Fiorano Software Ltd.</b><br/>
                            Immeuble Louis Vuitton,<br/>
                            101 avenue des Champs &Eacute;lys&eacute;es,<br/>
                            75008 Paris<br/>
                            FRANCE<br/>
                            Tel: +33 1 5652 9446<br/>
                            Fax: +33 1 5652 9292<br/>
                            <br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>




                    </div>
                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/Germany_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>GERMANY</b></h3>


                        <p class="white">
                            <b>Fiorano Software Ltd.</b> <br/>
                            Bruehler Str. 21, <br/>
                            D-68782  <br/>Bruehl <br/>
                            GERMANY <br/>
                            Tel: +49 6202 702007 <br/>
                            <!--                                                Fax: +49 (0)211 97712519<br />-->
                            <br/><br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>




                    </div>
                    </div>
                    <div class="col-xs-12 nopadding ">
                        <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                            <img src="<?php echo base_url('assets/images/company/UAE_Icon.png')?>" class="text-center align-center"/>
                            <h3><b>UNITED
                                    ARAB EMIRATES</b></h3>


                            <p class="white">
                                <b>Fiorano Software Ltd.</b><br/>
                                Dubai Internet City, Building 16,<br/>
                                Ground Floor, EX-22, <br/>
                                PO Box 73030,<br/>
                                UNITED ARAB EMIRATES<br/>
                                Tel: +971 4 319 7349<br/>
                                Fax: +44 (0) 1932 325413<br/>
                                <br>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>




                        </div>
                        <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                            <img src="<?php echo base_url('assets/images/company/China_Icon.png')?>" class="text-center align-center"/>
                            <h3><b>CHINA</b></h3>


                            <p class="white">
                                <b>Shubei Software Technology </b><br/>
                                Techchart Plaza, No.30 Xueyuan Road<br/>
                                Building A, Suite 503,<br/>
                                Haidian District, Beijing 100083<br/>
                                CHINA<br/>
                                Tel: +86 10 82608510<br/>
                                Fax: +86 10 82608511-8001<br/><br/>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>
                        </div>
                        <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                            <img src="<?php echo base_url('assets/images/company/India_Icon.png')?>" class="text-center align-center"/>
                            <h3><b>INDIA</b></h3>
                            <p class="white">
                                <b>Fiorano Software Technologies
                                    Pvt. Ltd.</b> <br/>
                                # 1, UGF, Inventor, ITPL, <br/>
                                Whitefield Road, <br/>
                                Bangalore - 560 066<br/>
                                INDIA <br/>
                                Tel: +91 80 4017 0000 <br/>
                                Fax: +91 80 4017 0047 <br />
                                <br/>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>
                        </div>

                    </div>

                </div>
                <div class="col-xs-12 nopadding ">
                    <div class=" col-sm-offset-2 col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/Japan_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>JAPAN</b></h3>
                        <p class="white">
                           <b>Fiorano Software Kabushiki Kaisha.</b> <br/>
                                Level 11, Aoyama Palacio Tower, <br/>
                                3-6-7 Kita-Aoyama, Minato-ku, <br/>
                                Tokyo 107-0061 <br/>
                                JAPAN <br/>
                                Tel: +81 3 5464 8743 <br/>
                                Fax: +81 3 4496 6466 <br />
                                <br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>
                    </div>

                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50 padding-bottom-50">
                        <img src="<?php echo base_url('assets/images/company/Singapore_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>SINGAPORE</b></h3>
                        <p class="white">
                            <b>Fiorano Software Pte. Ltd.</b><br/>
                            Level 42,<br/>
                            Suntec Tower Three, <br/>
                            8 Temasek Boulevard- 038988<br/>
                            SINGAPORE <br/>
                            Tel: +65 6829 2234<br/>
                            Fax: +65 6826 4015<br/><br/>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-bottom">
    <div class="container">
        <div class="row">
            <div class="section-header padding-bottom-20">
                <h2 class="section-title text-center wow fadeInDown white animated" style="visibility: visible; animation-name: fadeInDown;padding-top: 2% !important;">Sales Inquiries</h2>
                <p class="text-center wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;">
                    <a id="lang-sel" class="lang-sel white" href="#" data-toggle="modal" data-target="#contact_us">
                        <b>Click here</b>

                    </a> to reach a member of the Fiorano sales staff for sales related inquiries.<br>
                    Call: +1-650-326-1136 or 1-800-663-3621 (Toll-Free within the USA)<br></p>
            </div>
        </div>
    </div>
</section>




<script>

    $(document).ready(function(){

        $('#lic_catDiv1').hide();
        var classmessage = $(".yourMessage");
        $('#category1').change(function () {
            if($('#category1').val()=='Licensing'){
                $('#lic_catDiv1').show();
                classmessage.removeClass("col-sm-6");
                classmessage.addClass("col-sm-12");
                $("#lic_cat").prop('required',true);
                }else{
                $('#lic_catDiv1').hide();
                classmessage.removeClass("col-sm-12");
                classmessage.addClass("col-sm-6");
                $("#lic_cat").prop('required',false);
                }
        });
    });

    $("#frmcontact").submit(function(){
        if($('#hiddnval').val()!=""){
            alert("The unsecured access, please try again later");
            return false;
        }else{


        }
    });
</script>







