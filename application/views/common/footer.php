<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 12/21/2016
 * Time: 10:19 AM
 */
?>
<div class="icon-bar-right-arrow" style="">
    <a class="Menuright-click" >
        <div class="right-arrow-right"> <i class="fa fa-lg fa-arrow-circle-o-right fa-large col-xs-6"></i></div>
        <div class="right-arrow-left is-hidden-object"> <i class="fa fa-lg fa-arrow-circle-o-left fa-large col-xs-6"></i></div>
    </a>
</div>


<div class="col-xs-12">

    <a href="#" class="scrollup" style="display: block;">
        <i class="fa fa-arrow-circle-up"></i></a>



    <div class="icon-bar-right">
        <a class="active tooltiphome" href="<?php echo __ROOT__?>/request/demo.php" title="Request a Demo"><i title="" class="fa fa-phone-square"></i></a>
    </div>

    <div id="contact_us" class="modal fade" role=   "dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <!-- <form class=""  action=""method="post">-->
            <?php
            $attributes=array('name'=>'contact','id'=>'frm11');

            echo form_open('#',$attributes );  ?>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Contact Us </h4>
                </div>

                <div class="modal-body form-group getIn-model" id="contact">

                    <p> To reach a sales representative immediately, call 1-800-663-3621 (Toll-Free within the USA) or submit this form selecting the appropriate message category and the relevant team will get in touch with you shortly. </p>
                    <hr>
                    <input class="" name="type" value="1" type="hidden">
                    <!--<div class="col-sm-6 padding-top-20">Salutation <span class="reqMention">*</span>
                        <select class="form-control" required="required" name="salutation" id="salutation">
                            <option value="">Select one</option>
                            <option value="Mr." <?/*= @$_SESSION['salutation']=="Mr."?"selected":"" */?>>Mr.</option>
                            <option value="Ms." <?/*= @$_SESSION['salutation']=="Ms."?"selected":"" */?>>Ms.</option>
                            <option value="Dr." <?/*= @$_SESSION['salutation']=="Dr."?"selected":"" */?>>Dr.</option>
                        </select>
                    </div>-->
                    <div class="col-sm-6 padding-top-20">Name <span class="reqMention">*</span>
                        <input type="text" required="required" placeholder="Enter your Name..." id="name" class="form-control"  name="name" value="<?= @$_SESSION['name'];?>" />
                    </div>
                    <div class="col-sm-6 padding-top-20">Email <span class="reqMention">*</span>
                        <input type="text"  required="required" placeholder="Enter your e-mail..." class="form-control" id="email" name="email" value="<?= @$_SESSION['email'];?>"  />
                    </div>
                    <div class="col-sm-6 padding-top-20">Company <span class="reqMention">*</span>
                        <input type="text" required="required" class="form-control" id="company" placeholder="Enter your Company..."  name="company" value="<?= @$_SESSION['company'];?>"  />
                    </div>
                    <div class="col-sm-6 padding-top-20"> Phone Number <span class="reqMention">*</span>
                        <input type="text" required="required" class="form-control" placeholder="Enter your Phone Number..." id="phone"  name="phone"  value="<?= @$_SESSION['phone'];?>"  />
                    </div>
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




                    <div class="col-sm-6 padding-top-20" id="messsge_cat"> Message category <span class="reqMention">*</span>
                        <select  name="category" required="required" id="category" style="" class="form-control">
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
                    <div id="lic_catDiv" class="col-sm-6 padding-top-20 "> Support Category <span class="reqMention">*</span>
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
                   <!-- <div class="col-sm-6 padding-top-20">Your Subject<span class="reqMention">*</span>
                        <input type="text" id="subject" required="required" placeholder="Enter your Subject..." class="form-control" name="subject" value="<?/*= @$_SESSION['subject'];*/?>" />
                    </div>-->
                    <div class="col-sm-6 yourMessage1 padding-top-20" id="your_mess">Your Message <span class="reqMention">*</span>
                        <textarea name="message" required="required" id="message"  placeholder="Enter your Message..." class="form-control" title="Message" ><?= @$_SESSION['message']; ?></textarea>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <br/>
                        <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->
                        <!-- <div id="recaptcha2"></div>-->
                        <!-- <div class="g-recaptcha" data-sitekey="6Lfq1gsTAAAAAN8CJvmc_5Y4_oZMNErmg9wvC1G7"></div>

                         <br/>-->
                    </div>


                </div>

                <div class="modal-body form-group getIn-model" id="success-contact">
                    <p> Thank you for your interest in Fiorano. Our Fiorano representative will contact you shortly.</p>
                </div>
                <div class="modal-body form-group getIn-model" id="error-contact">
                    <p>
                        Error occur in your request, Please try later!.
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="openesb-download-button" >Send Contact Request</button>
                </div>
            </div>
            <?php echo form_close(); ?>

        </div>
    </div>
</div>


<footer id="footer" class="type_">
    <div class="inner">
        <div class="container">
            <div class="row-fluid ff ">
                <div class="span3 col-sm-4 padding-bottom-20">
                    <div id="text-5" class="widget widget_text">
                        <a href="/company/company.php"><h4 class="widget-title">About Us</h4></a>
                        <div class="thin_line"></div>
                        <div class="textwidget " style="text-align: justify">
                            Founded in 1995, Fiorano is a global Corporation with proven leadership in Integration middleware, API Management and peer-to-peer distributed systems. Fiorano’s innovative digital business platform integrates applications and complex technologies into an enterprise nervous system, increases business process performance, yields higher message throughput and enhances availability through agent-based visual composition that bridges the capability gap between business models and their implementation, reducing costs and complexity.

                        </div>
                    </div>
                </div>

                <div class="span3 col-sm-3 ">
                    <div id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h4 class="widget-title">Quick Links</h4>
                        <div class="thin_line"></div>
                        <div class="tagcloud">
                            <?php if(!empty($qmain)){ /*pro= products, par = partners , sol= solutions, ser= services, cus= customers, res= resources, oth= others*/
                                if(empty($qsub)){ ?>
                                    <?php if($qmain !="pro"){ ?> <a href="<?php echo site_url('products')?>" class="tag-link-26" title="PRODUCTS" style="font-size: 22pt;">PRODUCTS</a> <?php }?>
                                    <?php if($qmain !="sol") {?> <a href="<?php echo site_url('solutions')?>" class="tag-link-30" title="SOLUTIONS" style="font-size: 8pt;">SOLUTIONS</a> <?php }?>
                                    <?php if($qmain !="ser"){?> <a href="<?php echo site_url('services')?>" class="tag-link-26" title="SERVICES" style="font-size: 22pt;">SERVICES</a> <?php }?>
                                    <?php if($qmain !="cus"){?> <a href="<?php echo site_url('customers')?>" class="tag-link-30" title="CUSTOMERS" style="font-size: 8pt;">CUSTOMERS</a> <?php }?>
                                    <?php if($qmain !="par"){?> <a href="<?php echo site_url('partners')?>" class="tag-link-26" title="PARTNERS" style="font-size: 22pt;">PARTNERS</a> <?php }?>
                                    <?php if($qmain !="res"){?> <a href="<?php echo site_url('resources')?>" class="tag-link-30" title="RESOURCES" style="font-size: 8pt;">RESOURCES</a> <?php }?>
                                <?php }else{
                                    if ($qmain=='pro'){?>
                                        <!-- @qsub values { ip=integration, esb= esb, api= api management, mq = mq, mqtt = mqtt, oesb = open sourse esb, estud= e studio, mic= micro services }-->
                                        <?php if($qsub !="ip"){ ?> <a href="<?php echo site_url('products/fiorano_integration')?>" class="tag-link-26" title="Integration Platform" style="font-size: 22pt;">Integration Platform</a> <?php }?>
                                        <?php if($qsub !="esb") {?> <a href="<?php echo site_url('products/fiorano_esb')?>" class="tag-link-30" title="ESB" style="font-size: 8pt;">ESB</a> <?php }?>
                                        <?php if($qsub !="api"){?> <a href="<?php echo site_url('products/fiorano_api')?>" class="tag-link-26" title="Api Management" style="font-size: 22pt;">Api Management</a> <?php }?>
                                        <?php if($qsub !="mq"){?> <a href="<?php echo site_url('products/fiorano_mq')?>" class="tag-link-30" title="MQ" style="font-size: 8pt;">MQ</a> <?php }?>
                                        <?php if($qsub !="mqtt"){?> <a href="<?php echo site_url('products/fiorano_mqtt')?>" class="tag-link-30" title="MQTT" style="font-size: 8pt;">MQTT</a> <?php }?>
                                        <?php if($qsub !="oesb"){?> <a href="<?php echo site_url('products/open_source_fiorano_esb')?>" class="tag-link-26" title="Opensource ESB" style="font-size: 22pt;">Opensource ESB</a> <?php }?>
                                        <?php if($qsub !="estud"){?> <a href="<?php echo site_url('products/fiorano_studio')?>" class="tag-link-30" title="Studio Tools" style="font-size: 8pt;">Studio Tools</a> <?php }?>
                                        <?php if($qsub !="mic"){?> <a href="<?php echo site_url('products/fiorano_microservices')?>" class="tag-link-26" title="Microservices" style="font-size: 22pt;">Microservices</a> <?php }?>

                                    <?php }elseif ($qmain=='sol'){?>
                                        <?php if($qsub !="psd2"){?> <a href="<?php echo site_url('solutions/psd2')?>" class="tag-link-30" title="PSD2" style="font-size: 8pt;">PSD2</a> <?php }?>
                                        <?php if($qsub !="swt"){ ?> <a href="<?php echo site_url('solutions/swift_integration')?>" class="tag-link-26" title="Swift Integration" style="font-size: 22pt;">Swift Integration</a> <?php }?>
                                        <?php if($qsub !="core") {?> <a href="<?php echo site_url('solutions/temenos_t24_core_banking_integration')?>" class="tag-link-30" title="Core Banking" style="font-size: 8pt;">Core Banking</a> <?php }?>
                                        <?php if($qsub !="health"){?> <a href="<?php echo site_url('solutions/health')?>" class="tag-link-26" title="Healthcare" style="font-size: 22pt;">Healthcare</a> <?php }?>
                                        <?php if($qsub !="sales"){?> <a href="<?php echo site_url('solutions/salesforce_integration')?>" class="tag-link-30" title="Salesforce Integration" style="font-size: 8pt;">Salesforce Integration</a> <?php }?>
                                        <?php if($qsub !="govern"){?> <a href="<?php echo site_url('solutions/government_defense')?>" class="tag-link-30" title="Government & Defense" style="font-size: 8pt;">Government & Defense</a> <?php }?>
                                        <?php if($qsub !="sap"){?> <a href="<?php echo site_url('solutions/sap_solution')?>" class="tag-link-26" title="Sap Solution" style="font-size: 22pt;">Sap Solution</a> <?php }?>

                                    <?php  }elseif ($qmain=='ser'){?>
                                        <?php if($qsub !="ardes"){?> <a href="<?php echo site_url('services/architecture_assessment_design')?>" class="tag-link-30" title="Architecture Assessment Design" style="font-size: 8pt;">Architecture Assessment Design</a> <?php }?>
                                        <?php if($qsub !="impl"){ ?> <a href="<?php echo site_url('services/implementation')?>" class="tag-link-26" title="Implementation" style="font-size: 22pt;">Implementation</a> <?php }?>
                                        <?php if($qsub !="ptun") {?> <a href="<?php echo site_url('services/performance_tuning')?>" class="tag-link-30" title="Performance Tuning" style="font-size: 8pt;">Performance Tuning</a> <?php }?>
                                        <?php if($qsub !="training"){?> <a href="<?php echo site_url('services/training')?>" class="tag-link-26" title="Healthcare" style="font-size: 22pt;">Training</a> <?php }?>
                                        <?php if($qsub !="psup"){?> <a href="<?php echo site_url('services/premium_support')?>" class="tag-link-30" title="Premium Support" style="font-size: 8pt;">Premium Support</a> <?php }?>

                                    <?php  }elseif ($qmain=='cus'){?>
                                        <?php if($qsub !="ind"){?> <a href="<?php echo site_url('services/customers_by_industry')?>" class="tag-link-30" title="Customers By Industry" style="font-size: 8pt;">Customers By Industry</a> <?php }?>
                                        <?php if($qsub !="test"){ ?> <a href="<?php echo site_url('services/customer_testimonials')?>" class="tag-link-26" title="Customers Testimonials" style="font-size: 22pt;">Customers Testimonials</a> <?php }?>
                                        <a href="<?php echo site_url('resources/casestudies')?>" class="tag-link-26" title="Customer Case Studies" style="font-size: 22pt;">Customer Case Studies</a>
                                    <?php  }elseif ($qmain=='cus'){?>
                                        <?php if($qsub !="ind"){?> <a href="<?php echo site_url('services/customers_by_industry')?>" class="tag-link-30" title="Customers By Industry" style="font-size: 8pt;">Customers By Industry</a> <?php }?>
                                        <?php if($qsub !="test"){ ?> <a href="<?php echo site_url('services/customer_testimonials')?>" class="tag-link-26" title="Customers Testimonials" style="font-size: 22pt;">Customers Testimonials</a> <?php }?>
                                        <a href="<?php echo site_url('resources/casestudies')?>" class="tag-link-26" title="Customer Case Studies" style="font-size: 22pt;">Customer Case Studies</a>
                                    <?php  }elseif ($qmain=='res'){?>
                                        <?php if($qsub !="two"){?> <a href="<?php echo site_url('resources/twominute_explainers')?>" class="tag-link-30" title="Two Minute Explainers" style="font-size: 8pt;">Two Minute Explainers</a> <?php }?>
                                        <?php if($qsub !="onl"){ ?> <a href="<?php echo site_url('resources/online_tutorials')?>" class="tag-link-26" title="Demos & Tutorials" style="font-size: 22pt;">Demos & Tutorials</a> <?php }?>
                                        <?php if($qsub !="white"){?> <a href="<?php echo site_url('resources/whitepapers')?>" class="tag-link-30" title="Whitepapers" style="font-size: 8pt;">Whitepapers</a> <?php }?>
                                        <?php if($qsub !="data"){ ?> <a href="<?php echo site_url('resources/datasheets')?>" class="tag-link-26" title="Datasheets" style="font-size: 22pt;">Datasheets</a> <?php }?>
                                        <?php if($qsub !="case") {?> <a href="<?php echo site_url('resources/casestudies')?>" class="tag-link-30" title="Case Studies" style="font-size: 8pt;">Case Studies</a> <?php }?>
                                        <?php if($qsub !="doc"){?> <a href="<?php echo site_url('resources/documentation')?>" class="tag-link-26" title="Healthcare" style="font-size: 22pt;">Documentation</a> <?php }?>
                                        <a href="<?php echo site_url('company/news')?>" class="tag-link-30" title="news" style="font-size: 8pt;">News</a>
                                    <?php  }



                                }
                            }else{ ?>
                                <a href="<?php echo site_url('products')?>" class="tag-link-26" title="PRODUCTS" style="font-size: 22pt;">PRODUCTS</a>
                                <a href="<?php echo site_url('solutions')?>" class="tag-link-30" title="SOLUTIONS" style="font-size: 8pt;">SOLUTIONS</a>
                                <a href="<?php echo site_url('services')?>" class="tag-link-26" title="SERVICES" style="font-size: 22pt;">SERVICES</a>
                                <a href="<?php echo site_url('customers')?>" class="tag-link-30" title="CUSTOMERS" style="font-size: 8pt;">CUSTOMERS</a>
                                <a href="<?php echo site_url('partners')?>" class="tag-link-26" title="PARTNERS" style="font-size: 22pt;">PARTNERS</a>
                                <a href="<?php echo site_url('resources')?>" class="tag-link-30" title="RESOURCES" style="font-size: 8pt;">RESOURCES</a>

                            <?php  }?>




                            <!-- <a href="<?php /*echo site_url('architecture/fiorano_microservices')*/?>" class="tag-link-26" title="2 topics" style="font-size: 22pt;">Microservices</a>
                            <a href="<?php /*echo site_url('products/fiorano_esb')*/?>" class="tag-link-30" title="1 topic" style="font-size: 8pt;">ESB</a>-->
                            <!-- <a href="" class="tag-link-33" title="1 topic" style="font-size: 8pt;">SOA</a>
                             <a href="" class="tag-link-34" title="1 topic" style="font-size: 8pt;">Cloud ESB</a>-->
                            <!-- <a href="" class="tag-link-29" title="1 topic" style="font-size: 8pt;">B2B</a>-->
                            <!--<a href="<?php /*echo site_url('products/fiorano_mq')*/?>" class="tag-link-35" title="1 topic" style="font-size: 8pt;">FioranoMQ</a>-->
                            <!--  <a href="<?php /*echo site_url('architecture/fiorano_microservices')*/?>" class="tag-link-27" title="1 topic" style="font-size: 8pt;">MQ Performance</a>
                            <a href="<?php /*echo site_url('architecture/fiorano_microservices')*/?>" class="tag-link-28" title="1 topic" style="font-size: 8pt;">Enterprise Messaging</a>-->
                            <!-- <a href="<?php /*echo site_url('solutions/sap_solution')*/?>" class="tag-link-28" title="1 topic" style="font-size: 8pt;">SAP Integration</a>-->
                        </div>
                    </div>
                </div>




                <div class="span3 col-sm-3 ">
                    <div class="widget widget_recent_entries">
                        <a href="<?php echo site_url('company/about')?>"><h4 class="widget-title">Contact &amp; Support</h4></a>
                        <div class="thin_line"></div>
                        <ul>
                            <li class="col-sm-6" style="padding-top: 0">
                                <a href="<?php echo site_url('company/about')?>">Company</a>
                            </li>
                            <li class="col-sm-6" style="padding-top: 0">
                                <a href="http://support.fiorano.com">Support Portal</a>
                            </li>
                            <li class="col-sm-6" style="padding-top: 0">
                                <a href="<?php echo site_url('company/contacts')?>">Contact Us</a>
                            </li>
                            <li class="col-sm-6" style="padding-top: 0">
                                <a href="<?php echo site_url('company/news')?>">News &amp; Events</a>
                            </li>
                            <li class="col-sm-6" style="padding-top: 0">
                                <a href="<?php echo site_url('company/careers')?>">Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="span3 col-sm-2 ">
                    <div class="widget widget_recent_entries">
                        <a href="<?php echo site_url('company/about')?>"><h4 class="widget-title">Follow us on</h4></a>
                        <div class="thin_line"></div>
                        <ul>
                            <li class="col-sm-4" style="padding-top: 0">
                                <a href="https://twitter.com/fioranoglobal" target="_blank" class="so fa fa-twitter" style="text-decoration: none;"></a>
                            </li>
                            <li class="col-sm-4" style="padding-top: 0">
                                <a href="https://www.linkedin.com/company/fiorano-software" target="_blank" class=" so fa fa-linkedin" style="text-decoration: none;"></a>
                            </li>
                            <li class="col-sm-4" style="padding-top: 0">
                                <a href="https://www.facebook.com/Fiorano.Global/" target="_blank" class=" so fa fa-facebook" style="text-decoration: none;"></a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="widget widget_text pull-right language-select">


             <div class="textwidget">
            <a id="lang-sel" class="lang-sel" href="#">
                <img id="lang-sel1" class="lang-sel" src="<?php echo base_url('assets/images/home/usa.gif');?>" /> <i style="padding-top: 3px" id="lang-sel2" class="fa fa-angle-down"></i>
            </a>
        </div>
        <ul id="lang-drop" class="flags">
            <li style="padding:10px" class="vc_box_shadow"><a href="<?php echo __ROOT__?>/jp/"><img src="<?php echo base_url('assets/images/home/japan.gif');?>" /> Japan</a></li>
            <li style="padding:10px" class="vc_box_shadow"><a href="<?php echo __ROOT__?>/de/"><img src="/images/flags/germany.gif" /> Germany</a></li>
            </ul>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 desc">© <?php echo date('Y'); ?> Fiorano Software and Affiliates. All Rights Reserved. <a href="<?php echo site_url('company/privacy')?>" >Privacy Statement</a> | <a href="<?php echo site_url('company/termsofuse')?>">Terms of Use</a></div>
            </div>
        </div>
    </div>
</footer>


<!--<script async defer>


    /* PLEASE DO NOT COPY AND PASTE THIS CODE. */(function() {if (!window['___grecaptcha_cfg']) { window['___grecaptcha_cfg'] = {}; };if (!window['___grecaptcha_cfg']['render']) { window['___grecaptcha_cfg']['render'] = 'explicit'; };if (!window['___grecaptcha_cfg']['onload']) { window['___grecaptcha_cfg']['onload'] = 'myCallBack'; };window['__google_recaptcha_client'] = true;var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://www.gstatic.com/recaptcha/api2/r20170717162708/recaptcha__en.js'; var elem = document.querySelector('script[nonce]');var nonce = elem && (elem['nonce'] || elem.getAttribute('nonce'));if (nonce) { po.setAttribute('nonce', nonce); }var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();

</script>-->
<script>
    var recaptcha1;
    var recaptcha2;
    var myCallBack = function() {
        //Render the recaptcha1 on the element with ID "recaptcha1"

        recaptcha2 = grecaptcha.render('recaptcha2', {
            'sitekey' : '6Lfq1gsTAAAAAN8CJvmc_5Y4_oZMNErmg9wvC1G7', //Replace this with your Site key
            'theme' : 'light'
        });

        recaptcha1 = grecaptcha.render('recaptcha1', {
            'sitekey' : '6LeJWioUAAAAAF7ys3eilKD5HF_RDSXl9UUMInMB', //Replace this with your Site key
            'theme' : 'light'
        });
    };


</script>

<script>

    $(document).ready(function(){
        $('.icon-bar-right-arrow').hide();

        $('.icon-bar-left').hide();
        $('.getIn-model').css('min-height','500px');
        $('#lic_catDiv').hide();
        var classmessage1 = $(".yourMessage1");
        $('#category').change(function () {
            if($('#category').val()=='Licensing'){
                $('#lic_catDiv').show();
                $('.getIn-model').css('min-height','550px');
                classmessage1.removeClass("col-sm-6");
                classmessage1.addClass("col-sm-12");
            }else{
                $('#lic_catDiv').hide();
                classmessage1.removeClass("col-sm-12");
                classmessage1.addClass("col-sm-6");
                $('.getIn-model').css('min-height','500px');
            }
        });

        $('#contactBtn').click(function(){

            $('#openesb-download-button').show();
            $('#contact').show();
            $('#success-contact').hide();
            $('#error-contact').hide();
        });
        $('#lang-sel2').click(function(){
            $('#lang-drop').toggle();
        });


    $('#frm11').submit(function(e) {
        e.preventDefault();

        /* var recaptcha = $("#g-recaptcha-response").val();
         if (recaptcha === "") {
             e.preventDefault();
             alert("Please check the recaptcha");
            return false;
         }*/
        var option = $('#category').val();
        var str = $("#email").val();
        var res = str.split("@");

        if ((option == "Careers at Fiorano") || (option == "Other")) {

        } else {
            if (res[0] == "info") {
                alert("Please provide your Corporate Email Id ");
                return false;
            }
            if (res[1] == "gmail.com") {
                alert("Please provide your Corporate Email Id ");
                return false;
            }
        }

        if (str == 'sample@email.tst') {
            alert("Sorry!");
            return false;
        }

        var formData = new FormData($('#frm11')[0]);

        $.ajax({
            url: "<?php echo site_url('email/send_mail')?>",
            type: 'POST',
            data: formData,
            async: false,
            success: function (data) {
                var suc= data;
                if(suc == 1){
                    $('#contact').hide();
                    $('.getIn-model').css('min-height','100px');
                    $('#openesb-download-button').hide();
                    $('#success-contact').show();
                }else{
                    $('#contact').hide();
                    $('.getIn-model').css('min-height','100px');
                    $('#openesb-download-button').hide();
                    $('#error-contact').show();
                }
            },
            cache: false,
            contentType: false,
            processData: false,
        });

    });
    });


    var $ = jQuery.noConflict();

    $(document).ready(function() {
        jQuery('ul.sf-menu').superfish({
            animation: {
                height: 'show'
            },
            delay: 100
        });
        $("#toggle-btn").click(function() {
            $(".sf-menu").slideToggle("slow");
        });

        $('.toggle-subarrow').click(
            function() {
                $(this).parent().toggleClass("mob-drop");
            });

        var header = $(".header-inner");
        $(window).scroll(function() {



            var scroll = $(window).scrollTop();
            if (scroll >= 100 && $(this).width() > 769) {
                header.addClass("navbar-fixed-top");

            } else {
                header.removeClass('navbar-fixed-top');
            }
        });
        $(this).find(".h4 i").each(function(){
            $(this).addClass("green");
        });
    });

</script>

<script>


</script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- Scrolling Nav JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
<!--<script src="js/scrolling-nav.js"></script>-->

<script src="<?php echo base_url('assets/js/jquery.themepunch.tools.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.themepunch.revolution.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/common.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.carouFredSel-6.1.0-packed.js')?>"></script>
<script src="<?php echo base_url('assets/component/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/multichoice.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/scrollreveal.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/debouce-script.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.4/superfish.min.js"></script>
<script>
    window.sr = ScrollReveal({ reset: false  });
    sr.reveal('.slide_left', { duration: 1000,scale: 1,origin: 'left',distance: '100px'});
    sr.reveal('.slide_right', { duration: 1000,scale: 1,origin: 'right',distance: '100px'});
</script>
<!--Cludo search  -->

<script>




    $(document).ready(function() {
        $('.icon-bar-right-arrow').hide();


        $('.icon-bar-left').hover(function(){
            $('.icon-bar-left').show();
           /* $('.icon-bar-right-arrow').hide();*/
        });

        $('.icon-bar-right-arrow').click(function(){
            $('.icon-bar-left').toggle();
            $(this).find(".right-arrow-right, .right-arrow-left").toggle();

        });


        window.onscroll = function() {myFunction();
            $('.searchBoxHeader').hide();
            $("#searchId").show();
            $("#navBarMenu").show();

        };
        var navbar = document.getElementById("navbarselected");
        var topval = navbar.offsetTop;

        function myFunction() {
            ;
            if (window.pageYOffset >= 100) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
            if (window.pageYOffset >= 370) {
                $('.icon-bar-left').show();
                $('.right-arrow-left').hide();
                $('.right-arrow-right').show();


                if (!$(".icon-bar-left")[0]){
                    $('.right-arrow-right').hide()
                }
            }else{
                $('.icon-bar-left').hide();
               
            }

        $(window).scroll($.debounce( 250, true, function(){
            $('.icon-bar-left').show();
            $('.icon-bar-right-arrow').hide();
        } ) );
        $(window).scroll($.debounce( 250, function(){

            $('.icon-bar-left').fadeOut();
            if (window.pageYOffset <= 370) {
                $('.icon-bar-right-arrow').hide();

            }else{
                $('.icon-bar-right-arrow').show();

            }
        } ) );
          /*  $('body').append('<div class="right-arrow">hello</div>');*/




        }

        /* $(window).scroll(function(){
             if ($(this).scrollTop() < 100) {

                alert(window.pageYOffset);
                $('#navbarselected').removeClass('sticky');
             }
         });*/

    });



    $(document).ready(function () {
        checkMenuActive();
       $(document).on("scroll", onScroll);
        $('.victoria-four').click(function () {
            var href = $(this).attr('href');
            var height1 = $(href).offset().top;
            $('html, body').animate({
                scrollTop: height1 - 80
            }, 1000, function () {
                $(document).on("scroll", onScroll);
            });
        });
        $('.dropdown').click(function () {
            var href = $(this).attr('href');
            var height1 = $(href).offset().top;
            $('html, body').animate({
                scrollTop: height1 - 80
            }, 1000, function () {
                $(document).on("scroll", onScroll);
            });
        });

        $('.icon-bar-left a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");
            $('a').each(function () {
                $(this).removeClass('active-scroll-leftmenu');
            });
            $(this).addClass('active-scroll-leftmenu');
            var target = this.hash,
              /*  menu = target;*/
            $target = $(target);
           var height= $target.offset().top;
            $('html, body').animate({
                scrollTop: height - 30
            },function () {
                $(document).on("scroll", onScroll);
            });

            /*$('html, body').stop().animate({
                'scrollTop': height
            }, 1000, 'linear', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });*/
        });




    });
function checkMenuActive(){
    var urlq = "<?php echo current_url(); ?>";
    if( urlq.indexOf('services') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".serviceList").addClass("dropdown-active");
    }else if( urlq.indexOf('products') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".productList").addClass("dropdown-active");
    } else if( urlq.indexOf('solutions') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".solutionList").addClass("dropdown-active");
    } else if( urlq.indexOf('customers') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".customersList").addClass("dropdown-active");
    }else if( urlq.indexOf('partners') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".partnersList").addClass("dropdown-active");
    } else if( urlq.indexOf('resources') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".resourcesList").addClass("dropdown-active");
    } else if( urlq.indexOf('company') >= 0){
        $(".dropdown").removeClass("dropdown-active");
        $(".companyList").addClass("dropdown-active");
    }else{
        $(".dropdown").removeClass("dropdown-active");
    }
}
    function onScroll(event){






        var scrollPos = $(document).scrollTop();
        $('.icon-bar-left a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            console.log(refElement);
            console.log(currLink);
            if ((refElement.position().top )  <= (scrollPos + 250 )) {
                console.log(refElement.position().top + (refElement.height()));
                $('.icon-bar-left a').removeClass("active-scroll-leftmenu");
                currLink.addClass("active-scroll-leftmenu");
            }
            else{
                currLink.removeClass("active-scroll-leftmenu");
            }
        });
    }
</script>
<!--&& refElement.position().top + (refElement.height()) > (scrollPos )-->

</body>

</html>