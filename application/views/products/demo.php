<?php
$selVersion = array("1040"=>'selected', "1033"=>'',"1032"=>'',"1031"=>'',"1030"=>'',"1020"=>'',"1010"=>'',"10"=>'',"951"=>'',"950"=>'',"942"=>'',
    "941"=>'',"940"=>'',"930"=>'',"922"=>'',"921"=>'',"920"=>'',"911"=>'',"910"=>'',
    "902"=>'',"901"=>'',"900"=>'');
$captcha = true;
$mail_sent = false;
if (isset($_POST["poc"])) {
    //Check Captcha

    $captcha = true;
    FrameWork::load("reCaptchaV2.php", Resource::PLUGIN);
    if(function_exists('reCaptchaVerify')) {
        if (reCaptchaVerify($_POST['g-recaptcha-response'], "") === false) {
            __message("demo", __render(USER_CAPTCHA_FAILED));
            $captcha = false;
        }
    }

    if ($captcha) {
        __::load("Mail", Resource::PLUGIN);
        $param["from"] = "download-notifications@in.fiorano.com";
        // $param["to"] = "ravi.chandran@in.fiorano.com, Ravi";
        $param["to"] = "download-notifications@in.fiorano.com";
        $param["subject"] = "Request for Demo - " . $_POST["name"] . " ( " . $_POST["company"] . " )";
        $param["template"] = "demo.tpl";
        //$mail_sent = dispatch_mail($param);
        $mail_sent = send_mail('demo',$param["to"], $param["subject"],$param["from"], true);
        !$mail_sent?__message("demo", __render("Sorry, we were unable to take your request.")):"";

        $p["from"] = "no-reply@fiorano.com";
        $p["to"] = $_POST["email"];
        $p["subject"] = "Request for Demo submitted";
        $p["template"] = "demo-thankyou.tpl";
        //dispatch_mail($p);
        send_mail('demo-thankyou',$p["to"], $p["subject"],$p["from"], true);

    }
}

$layout_data = array(
    "css" => array("jquery.timepicker.css","sumoselect.css"),
    "js" => array("jquery.timepicker.min.js","jquery.sumoselect.min.js"),
    "lhs" => "products_lhs.htm",
    "navigation" => "navigation.php",
    "header" => "header.php",
    "footer" => "footer.php",
    "breads" => array("title"=>"Request a Demo","img"=>"/images/v3/stripe.jpg","crumbs"=>array(array("url"=>"/products/products.php","title"=> "Products"))),
    "title" => "Fiorano Cloud ESB - Demo",
    "meta" => array("keywords" => "Fiorano Cloud ESB - Demo",
        "description" => "")
);
//the_template('double.tpl', 'en_v3');
?>

<?php //CONTENT  ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.9.2/themes/redmond/jquery-ui.css" />
<script src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<script type="text/javascript">
    var RecaptchaOptions = {
        theme: 'custom',
        custom_theme_widget: 'recaptcha_widget'
    };
    $(document).ready(function() {
        $("#timepicker").timepicker({'step': 15});
        $("#datepicker").datepicker({dateFormat: 'd MM, yy'});

        window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 7 });
        window.test = $('.testsel').SumoSelect({okCancelInMulti:true });
    });
    function check() {
        var frm = document.forms.poc_form;
        if (frm.name.value == "" || frm.email.value == "" || frm.company.value == "" || frm.date.value == "" || frm.project_description.value == "") {
            alert("Please fill all the fields.");
            return false;
        }

        var flag = 0;
        var prodSelected = "";
        for (var i = 0; i < 6; i++) {
            if(frm.products[i].selected){
                flag ++;
                if(prodSelected == "")
                    prodSelected = prodSelected + frm.products[i].value;
                else
                    prodSelected = prodSelected + ", " + frm.products[i].value;
            }
        }
        if (flag == 0) {
            alert ("Please select a product for demo");
            return false;
        } else {
            frm.productSelected.value = prodSelected;
        }

        if (!isValidEmail(frm.email.value))
        {
            alert("Invalid E-Mail Address.");
            return false;
        }
        return true;
    }
    function add_a2bi() {
        $("#a2bi").append("<tr>" +
            "<td><input type=\"text\" class=\"txt\" name=\"applications[]\" value=\"\" style=\"width:150px\"  /></td>" +
            "<td><input type=\"text\" class=\"txt\" name=\"platforms[]\" value=\"\" style=\"width:150px\"  /></td>" +
            "<td><input type=\"text\" class=\"txt\" name=\"comments[]\" value=\"\" style=\"width:200px\"  /></td>" +
            "</tr>");
        $("#remove_last").show();
    }
    function remove_last_a2bi() {
        if ($("#a2bi tr").length > 2) {
            $("#a2bi tr:last").remove();
        }
        if ($("#a2bi tr").length < 3) {
            $("#remove_last").hide();
        }

    }
    $( function() {
        $( "#datepicker" ).datepicker();
    } );

</script>

<section id="loginbg" class="padding-bottom-50 padding-top-50" xmlns="http://www.w3.org/1999/html">
    <div>

        <div class="row main">

            <div class="main-login main-center">
                <div class="col-sm-3 col-xs-1"></div>
                <div class="col-sm-6">
                    <div class="row well col-sm-12 text-center" id="upper_arrow_div">
                        <h2>REQUEST A DEMO</h2>
                    </div>
                <div class="col-sm-12 demoform">

                    <?php
                    $attributes = array('class' => 'form-group', 'id' => 'register');
                    echo form_open('accounts/register', $attributes);
                    ?>



                    <div class="col-xs-12">
                        <label for="email" class="cols-sm-2 control-label">Name<span class="reqMention"> *</span> </label>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 pad_left">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="cname" id="cname"   required="required"  placeholder="First name"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 pad_right">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="cname" id="cname"   required="required"  placeholder="Last name"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Company<span class="reqMention"> *</span> </label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="email"  required="required"  placeholder="Company name"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your role<span class="reqMention"> *</span> </label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  required="required"  placeholder="Company website"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Email address<span class="reqMention"> *</span> </label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="email"  required="required"  placeholder="Enter your email address"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12" >
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Telephone</label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="phone" id="phone" required="required"  placeholder="Enter your Telephone"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Product Choice(s)<span class="reqMention"> *</span> </label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt" aria-hidden="true"></i></span>
                                    <select class="selectpicker" multiple data-width="100%">
                                        <option value="Fiorano Integration">Fiorano Integration</option>
                                        <option value="Fiorano ESB">Fiorano ESB</option>
                                        <option value="Fiorano Cloud">Fiorano Cloud</option>
                                        <option value="Fiorano B2B">Fiorano B2B</option>
                                        <option value="Fiorano API Management ">Fiorano API Management</option>
                                        <option value="Fiorano Mobile Integration ">Fiorano Mobile Integration</option>
                                        <option value="FioranoMQ">FioranoMQ</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12" >
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Preferred date</label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <input id="datepicker" type="text" class="form-control" name="phone" id="phone" required="required"  placeholder="date"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <label for="email" class="cols-sm-2 control-label">Time / Timezone<span class="reqMention"> *</span> </label>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 pad_left">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="cname" id="cname"   required="required"  placeholder="time"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 pad_right">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <select class="selectpicker" data-width="100%" title="timezone">
                                    <option>Pacific</option>
                                    <option>Eastern</option>
                                    <option>Central</option>
                                    <option>Mountain</option>
                                    <option>GMT</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Country<span class="reqMention"> *</span> </label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag" aria-hidden="true"></i></span>
                                    <select class="selectpicker" data-width="100%" data-country="US">
                                        <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua">Antigua</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Azores">Azores</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Virgin Islands">Virgin Islands</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji Islands">Fiji Islands</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea Bissau">Guinea Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Nakhodka">Nakhodka</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger Republic">Niger Republic</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="North Korea">North Korea</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option><option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome And Principe">Sao Tome And Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Vincent">St. Vincent</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Tokelau">Tokelau</option><option value="Tonga Islands">Tonga Islands</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Western Samoa">Western Samoa</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12" >
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Project Description / Information</label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
                                    <textarea type="text" class="form-control" name="phone" id="phone" required="required"  placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- space for captcha -->

                    <div class="col-sm-6 col-sm-push-3 text-center">
                        <button type="submit" class="btn btn-info btn-lg btn-block login-button">Download now</button>
                    </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
                </div>





            <?php echo form_close();?>
        </div>
    </div>
    </div>

                       <!--     <table align="center" border="0" cellspacing="0" cellpadding="3">
                                <tr>
                                    <td class="r b">Name </td>
                                    <td><input type="text" class="txt" name="name" value="<?php echo @$_POST['name']; ?>" style="width:200px" /></td>
                                </tr>
                                <tr>
                                    <td class="r b">Company </td>
                                    <td><input type="text" class="txt" name="company" value="<?php echo @$_POST['company']; ?>" style="width:200px"  /></td>
                                </tr>
                                <tr>
                                    <td class="r b">Your Role </td>
                                    <td><input type="text" class="txt" name="role" value="<?php echo @$_POST['role']; ?>" style="width:200px"  /></td>
                                </tr>
                                <tr>
                                    <td class="r b">Email </td>
                                    <td><input type="text" class="txt" name="email" value="<?php echo @$_POST['email']; ?>" style="width:200px"  /></td>
                                </tr>
                                <tr>
                                    <td class="r b">Phone Number </td>
                                    <td><input type="text" class="txt" name="phone"  value="<?php echo @$_POST['phone']; ?>" style="width:200px" /></td>
                                </tr>

                                <tr>
                                    <td class="r b">Product Choice(s) </td>
                                    <td>
                                        <select multiple="multiple" placeholder="Select Here" class="SlectBox" name="products" style="z-index: 999">
                                            <option value="Fiorano Integration">Fiorano Integration</option>
                                            <option value="Fiorano ESB">Fiorano ESB</option>
                                            <option value="Fiorano Cloud">Fiorano Cloud</option>
                                            <option value="Fiorano B2B">Fiorano B2B</option>
                                            <option value="Fiorano API Management ">Fiorano API Management</option>
                                            <option value="Fiorano Mobile Integration ">Fiorano Mobile Integration</option>
                                            <option value="FioranoMQ">FioranoMQ</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="r b">Preferred Date </td>
                                    <td><input type="text" id="datepicker" class="txt" name="date" value="<?php echo @$_POST['date']; ?>" style="width:200px"  /></td>
                                </tr>
                                <tr>
                                    <td class="r b" >Time </td>
                                    <td>
                                        <input type="text" id="timepicker" class="time txt" style="width:75px" name="time" value="<?php echo @$_POST['time']; ?>" />

                                        <select id="timezone" name="timezone" title="Select Timezone" style="background-color:#fafafa;height:25px;">
                                            <option value="timezone">&ndash; Timezone &ndash; </option>
                                            <option value="Pacific" <?php echo @$_POST["timezone"] == "Pacific" ? "selected" : ""; ?>>Pacific </option>
                                            <option value="Eastern" <?php echo @$_POST["timezone"] == "Eastern" ? "selected" : ""; ?>>Eastern </option>
                                            <option value="Central" <?php echo @$_POST["timezone"] == "Central" ? "selected" : ""; ?>>Central </option>
                                            <option value="Mountain" <?php echo @$_POST["timezone"] == "Mountain" ? "selected" : ""; ?>>Mountain </option>
                                            <option value="GMT" <?php echo @$_POST["timezone"] == "GMT" ? "selected" : ""; ?>>GMT </option>
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="r b">Your country or region </td>
                                    <td>
                                        <select name="country" size="1" style="background-color:#fafafa;height:25px;width:200px;">
                                            <option value="">&nbsp;&nbsp;&nbsp;-- Select Country --</option>
                                            <?php
                                            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antigua", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Azores", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei Darussalam", "Virgin Islands", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Faroe Islands", "Fiji Islands", "Finland", "France", "French Guiana", "French Polynesia", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Ivory Coast", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Nakhodka", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger Republic", "Nigeria", "Niue", "Northern Mariana Islands", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Republic of the Congo", "Romania", "Russia", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Pierre And Miquelon", "Saint Vincent And The Grenadines", "Samoa", "San Marino", "Sao Tome And Principe", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "Spain", "Sri Lanka", "St. Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Tokelau", "Tonga Islands", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "USA", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Wallis and Futuna", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zaire", "Zambia", "Zimbabwe");
                                            foreach ($countries as $country) {
                                                if (@$_POST['country'] == $country)
                                                    echo "<option value=\"{$country}\" selected>{$country}</option>";
                                                else
                                                    echo "<option value=\"{$country}\">{$country}</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="r b">Project Description / Information </td>
                                    <td><textarea cols="40" rows="4" name="project_description" ><?php echo @$_POST['project_description']; ?></textarea></td>
                                </tr>

                                <?php if (isset($_POST["applications"])): ?>
                                    <?php
                                    foreach (@$_POST["applications"] as $key => $value) {
                                        echo "<tr><td><input type=\"text\" class=\"txt\" name=\"applications[]\" value=\"" . $_POST["applications"][$key] . "\" style=\"width:150px\" /></td>";
                                        echo "<td><input type=\"text\" class=\"txt\" name=\"platforms[]\" value=\"" . $_POST["platforms"][$key] . "\" style=\"width:150px\" /></td>";
                                        echo "<td><input type=\"text\" class=\"txt\" name=\"comments[]\" value=\"" . $_POST["comments"][$key] . "\" style=\"width:200px\" /></td></tr>";
                                    }
                                    ?>
                                <?php endif; ?>
                                <?php if (function_exists("reCaptchaVerify")): ?>
                                    <tr>
                                        <td class="r b">Verification</td>
                                        <td height="28">
                                            <div id="recaptcha_widget" style="display:none">
                                                <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
                                            </div>
                                            <script src='https://www.google.com/recaptcha/api.js'></script>
                                            <div class="g-recaptcha" data-sitekey="6Lfq1gsTAAAAAN8CJvmc_5Y4_oZMNErmg9wvC1G7"></div>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <tr>
                                    <td colspan="2" class="c" style="padding-right:10%;padding-top:25px;">
                                        <input type="submit" name="poc" value="Request a demo" class="theme-button" />
                                    </td>
                                </tr>
                            </table>
                        </form>

                </div>
            <div id="fs"></div>
        </div>-->
</section>