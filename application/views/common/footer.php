<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 12/21/2016
 * Time: 10:19 AM
 */
?>
<!-- jQuery -->





<!---->

<div class="col-xs-12">

    <a href="#" class="scrollup" style="display: block;">
        <i class="fa fa-arrow-circle-up"></i></a>

    <div id="side-bar" style="background:transparent;">

            <div id="slip" class="">
                <a href="<?php echo __ROOT__?>/request/demo.php">
                <button class="btn btn-primary">
                    <i class="fa fa-download"></i>
                    Request Demo</button>
                </a>
            </div>

    </div>
<div id="contact_us" class="modal fade" role="dialog">
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
                    <div class="col-sm-6 padding-top-20">Salutation <span class="reqMention">*</span>
                        <select class="form-control" required="required" name="salutation" id="salutation">
                            <option value="">Select one</option>
                            <option value="Mr." <?= @$_SESSION['salutation']=="Mr."?"selected":"" ?>>Mr.</option>
                            <option value="Ms." <?= @$_SESSION['salutation']=="Ms."?"selected":"" ?>>Ms.</option>
                            <option value="Dr." <?= @$_SESSION['salutation']=="Dr."?"selected":"" ?>>Dr.</option>
                        </select>
                        </div>
                    <div class="col-sm-6 padding-top-20"> Full Name<span class="reqMention">*</span>
                        <input type="text" required="required" placeholder="Enter your Name..." id="name" class="form-control"  name="name" value="<?= @$_SESSION['name'];?>" />
                    </div>
                    <div class="col-sm-6 padding-top-20"> Your Email<span class="reqMention">*</span>
                        <input type="text"  required="required" placeholder="Enter your e-mail..." class="form-control" id="email" name="email" value="<?= @$_SESSION['email'];?>"  />
                    </div>
                    <div class="col-sm-6 padding-top-20">Company<span class="reqMention">*</span>
                        <input type="text" required="required" class="form-control" id="company" placeholder="Enter your Company..."  name="company" value="<?= @$_SESSION['company'];?>"  />
                    </div>
                    <div class="col-sm-6 padding-top-20"> Phone Number<span class="reqMention">*</span>
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
                    <div class="col-sm-6 padding-top-20"> Which best describes you?<span class="reqMention">*</span>
                        <select name="profile" required="required" id="profile" style=" " class="form-control">
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
                    <div class="col-sm-6 padding-top-20"> Message category<span class="reqMention">*</span>
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
                    <div class="col-sm-6 padding-top-20">Your Subject<span class="reqMention">*</span>
                        <input type="text" id="subject" required="required" placeholder="Enter your Subject..." class="form-control" name="subject" value="<?= @$_SESSION['subject'];?>" />
                    </div>
                    <div class="col-sm-6 padding-top-20">Your Message<span class="reqMention">*</span>
                        <textarea name="message" required="required" id="message"  placeholder="Enter your Message..." class="form-control" title="Message" ><?= @$_SESSION['message']; ?></textarea>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <br/>
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <div class="g-recaptcha" data-sitekey="6Ldn5yEUAAAAAB8pG_vySOOHwqOKN9pduGgke0Fk"></div>
                        <br/>
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
                <div class="span3 col-sm-6 padding-bottom-20">
                    <div id="text-5" class="widget widget_text">
                        <a href="/company/company.php"><h4 class="widget-title">About Us</h4></a>
                        <div class="thin_line"></div>
                        <div class="textwidget " style="text-align: justify">
                            Founded in 1995, Fiorano is a global Corporation with proven leadership in Integration middleware, API Management and peer-to-peer distributed systems. Fiorano’s innovative digital business platform integrates applications and complex technologies into an enterprise nervous system, increases business process performance, yields higher message throughput and enhances availability through agent-based visual composition that bridges the capability gap between business models and their implementation, reducing costs and complexity.

                        </div>
                    </div>
                </div>
                <?php /*
                <div class="span3 col-sm-3 ">
                    <div id="recent-posts-4" class="widget widget_recent_entries">
                        <a href="<?php echo __ROOT__ ?>/blog/"><h4 class="widget-title">From the blog</h4></a>
                        <div class="thin_line"></div>
                        <ul>
                            <li>
                                <a href="<?php echo __ROOT__ ?>/blog/?p=88">Why traditional ESBs are a mismatch for Cloud-based Integration</a>
                               <!-- <span class="post-date">Oct 01, 2015</span>-->
                            </li>
                            <li>
                                <a href="<?php echo __ROOT__ ?>/blog/?p=71">Microservices - The issue of Granularity: Atomic or Composite?</a>
                                <!--<span class="post-date">Aug 03, 2015</span>-->
                            </li>
                            <li>
                                <a href="<?php echo __ROOT__ ?>/blog/?p=63">The API economy is here, is your business ready to Digitize and Monetize?</a>
                               <!-- <span class="post-date">Jul 15, 2015</span>-->
                            </li>
                        </ul>
                    </div>
                </div>*/?>
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
            </div>
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

<script>
    $(document).ready(function(){

        $('#contactBtn').click(function(){
            $('.getIn-model').css('min-height','620px');
            $('#openesb-download-button').show();
            $('#contact').show();
            $('#success-contact').hide();
            $('#error-contact').hide();
        });
        $('#lang-sel2').click(function(){
            $('#lang-drop').toggle();
        });
    });

    $('#frm11').submit(function(e){
        e.preventDefault();

        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            e.preventDefault();
            alert("Please check the recaptcha");
            return false;
        }
        var formData = new FormData($('#frm11')[0]);

        $.ajax({
            url: "<?php echo site_url('email/send_mail')?>",
            type: 'POST',
            data: formData,
            async: false,
            success: function (data) { console.log(data);
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
            processData: false
        });

    });
</script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="js/scrolling-nav.js"></script>-->

<script src="<?php echo base_url('assets/js/jquery.themepunch.tools.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.themepunch.revolution.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/common.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.carouFredSel-6.1.0-packed.js')?>"></script>
<script src="http://www.fiorano.com/contents/static/components/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/multichoice.min.js')?>"></script>
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>

<script>
    window.sr = ScrollReveal({ reset: false  });

    sr.reveal('.slide_left', { duration: 1000,scale: 1,origin: 'left',distance: '100px'});
    sr.reveal('.slide_right', { duration: 1000,scale: 1,origin: 'right',distance: '100px'});
</script>
</body>

</html>