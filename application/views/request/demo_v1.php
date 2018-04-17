<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 9/14/2017
 * Time: 5:57 PM
 */?>
<section id="intro" class="section-contact">
    <div class="container">
        <div class="col-xs-12 resourceBanner ">
            <div class="productHead col-sm-10">
                <h1 class="productHeadTitle">Get in touch. <br>We are always  <br>standing by and eager to help.</h1>
                <div class="col-sm-8 hidden-xs nopadding">
                    <!--<p class="productHeadDesc hidden-xs padding-top-20" >
                        Fiorano provides an enterprise integration platform consisting of a full-stack of enterprise-grade integration components.
                        Our software forms the digital backbone
                        that complements your IT Infrastructure to enable real-time information exchange across your enterprise and partners.
                    </p>-->
                </div>
            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-right">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li class="active">Request a Demo</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12 ">
            <div class="section-header">
                <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
<b>
                    Fiorano provides an enterprise integration platform consisting of a full-stack of enterprise-grade integration components.
    <br>Our software forms the digital backbone that complements your IT Infrastructure to enable real-time information exchange across your enterprise and partners.
</b>
                <hr></p>

            </div>
        </div>
        <div class="col-xs-12 padding-top-30">

        </div>
        <div class="col-xs-12 ">
            <div class="col-sm-6 padding-top-30">
                <div class="col-xs-12  padding-top-30">
                <p class="col-sm-3 col-sm-offset-1"> <img src="<?php echo base_url('assets/images/common/Demo-Diagram-user.png')?>" class="img-responsive"/></p>
                <p class="col-sm-7" style="padding-top: 8%;">
                    <b>Speak to a Fiorano expert to find out how we can help.</b>
                </p>
                </div>
                <div class="col-xs-12  nopadding">
                    <hr>
                    <p class="col-sm-7 col-sm-offset-1" style="padding-top: 6%;">
                       <b>Use the form to either schedule a demo of our software or to get someone from sales to get in touch with you.</b>
                    </p>
                    <p class="col-sm-3 "> <img src="<?php echo base_url('assets/images/common/Demo-Diagram-form.png')?>" class="img-responsive"/></p>
                </div>

                <div class="col-sm-12 nopadding">
                    <div class="col-xs-12 padding-bottom-70 ">
                        <div class="col-xs-12 padding-top-70">
                           <h3>
                               Quick facts about Fiorano:
                               <hr>
                           </h3>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-sm-12 demoQuick padding-top-30" >
                                <i class="fa fa-industry fa-large" style="font-size: 50px; color:#245580"> </i> <h4><b> Founded 1995</b></h4>
                            </div>
                        </div>
                        <div class="col-xs-12  padding-top-30">
                           <div class="col-sm-12 demoQuick">
                               <i class="fa fa-globe fa-large" style="font-size: 50px; color:#245580"> </i> <h4> <b>Present in <b> 8 </b> countries </b></h4>

                           </div>
                        </div>
                        <div class="col-xs-12 ">
                           <div class="col-sm-12 demoQuick ">
                               <i class="fa fa-gear fa-large" style="font-size: 50px; color:#245580"> </i> <h4><b>Over 600 Implementations </b></h4>

                           </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12 padding-bottom-50">

                    <div class="col-sm-12 form-RegDiv nopadding" style="background-color: #f6f6f6 !important; border: #d1d1d1 2px solid;">
                        <div class="text-center col-xs-12 padding-top-10">

                            <h3>
                                <b>Get in touch</b>

                            </h3>
                            <hr class="double-grey">
                            <p>
                                <b>Please share your details for Demo or Sales quote</b>
                            </p>


                        </div>
                        <?php
                        $attributes = array('class' => 'form-group', 'id' => 'reqForm');
                        echo form_open('request/demo', $attributes);
                        ?>


                        <div class="demoform padding-top-10 col-xs-12">
                            <?php

                            if($reg ==0){?>
                                <input type="hidden" name="hidval" id="hidval" value="">


                                <div class="col-sm-12">
                                    <label for="option" class="cols-sm-2 control-label black-color">What do you need to get in touch about?<span class="reqMention"> *</span> </label>

                                    <div class="form-group pad_right">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                                            <select class="form-control" required="required" id="demo-choice" name="get_choice">
                                                <option value="">- Select -</option>
                                                <option value="demo">See our software in action</option>
                                                <option value="quote">Speak to Sales for a quote</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="name" class="cols-sm-2 control-label black-color">Name<span class="reqMention"> *</span> </label>

                                    <div class="form-group pad_right">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name" maxlength="35"  required="required"  placeholder="Name"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label black-color">Company<span class="reqMention"> *</span> </label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="company" id="company" maxlength="35" required="required"  placeholder="Company Name"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label black-color">Your Role<span class="reqMention"> *</span> </label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="role" id="role" maxlength="35"  required="required"  placeholder="Your Role"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label black-color">Email Address<span class="reqMention"> *</span> </label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                <input type="email" maxlength="35" class="form-control" name="email" id="email"  required="required"  placeholder="Enter your Email Address"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12" >
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label black-color">Telephone <span class="reqMention"> *</span> </label></label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="phone" id="phone" pattern='^\+?\d{0,15}'  maxlength="18" required="required"  placeholder="Enter your Telephone Number"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label black-color">Your Country or Region<span class="reqMention"> *</span> </label></label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-gear fa" aria-hidden="true"></i></span>
                                                <select name="country" class=" form-control" required="required" >
                                                    <?php echo country_select(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="demo-div" >


                                    <div class="col-sm-12" >
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label black-color">Demo Choice<span class="reqMention"> *</span> </label></label>
                                            <div class="cols-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-gear fa" aria-hidden="true"></i></span>
                                                    <select class="form-control" required="required" id="choice" name="choice">
                                                        <option value="">- Select -</option>
                                                        <option value="Product"> Fiorano Products</option>
                                                        <option value="Solution">Fiorano Solutions</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 dchoice"  id="pdchoice">
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label black-color">Product Choice<span class="reqMention"> *</span> </label></label>
                                            <div class="cols-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                                    <select name="pchoice[]" id="pchoice" class="multiselect-ui form-control col-xs-12"  multiple="multiple" >
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
                                    <div class="col-sm-12 dchoice" id="sdchoice">
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label black-color">Solution Choice<span class="reqMention"> *</span> </label></label>
                                            <div class="cols-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-handshake-o fa" aria-hidden="true"></i></span>
                                                    <select name="schoice[]" id="schoice" class="multiselect-ui form-control col-xs-12" multiple="multiple" >
                                                        <option value="Fiorano PSD2">Fiorano PSD2</option>
                                                        <option value="Fiorano Core Banking ">Fiorano Core Banking</option>
                                                        <option value="Fiorano Government/Defense ">Fiorano Government/Defense</option>
                                                        <option value="Fiorano Healthcare">Fiorano Healthcare</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <label for="email" class="col-xs-12 control-label nopadding black-color">Date & Time  <span class="reqMention"> *</span> </label></label>
                                            <div class="col-xs-6 nopadding">
                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                                    <input class="form-control" type="text" id="datepicker"  name="datepicker" required="required"  placeholder="Choose your Date" >
                                                </div>
                                            </div>
                                            <div class="col-xs-6 nopadding">
                                                <div class="input-group padding-bottom-20 col-xs-offset-1">
                                                    <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>

                                                    <input type="text" class="form-control" name="timepicker" id="timepicker"  placeholder="Time" required="required"/>
                                                    <span class="input-group-addon">GMT</i></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label black-color">Description / Information<span class="reqMention"> *</span> </label></label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-mail-reply-all fa" aria-hidden="true"></i></span>
                                                <textarea class="form-control" required name="desc" id="desc"  placeholder="Tell us your Project Requirements"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php }elseif($reg==1){?>
                                <div class="col-xs-12">
                                    <div class="alert alert-success">
                                        <h4><strong>Success!</strong> Thank you for your interest. Your Request for demo has been booked. We will contact you shortly.</h4>
                                    </div>
                                </div>
                            <?php }elseif($reg==2){?>
                                <div class="col-xs-12">
                                    <div class="alert alert-warning">
                                        <strong>Warning!</strong> Some error occur in your registration, Please try again.
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <div class="col-xs-12 nopadding ">
                            <div class="well col-xs-12" id="lower_arrow_div">
                                <div class="col-xs-12">
                                    <?php if($reg==0){?>
                                        <button type="submit"  id="reqSub" class="btn-md btn btn-success col-sm-6 col-sm-offset-3">Request a Demo </button>&nbsp;&nbsp;
                                        <?php /*if($reg==0){*/?><!--  <button type="reset" class="btn-md btn btn-default pull-left">Clear</button> --><?php /*}*/?>
                                    <?php }else{?>

                                        <a href="<?php echo site_url('request/demo') ?>"><button type="button"  class="btn-md btn btn-success col-xs-6 col-xs-offset-3">Back to Demo</button></a>
                                    <?php }?>
                                </div>

                            </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>





            </div>
        </div>
    </div>
</section>





<script>
    $( function() {
        $('#demo-div').hide();
        $('.dchoice').hide();
        $( "#datepicker" ).datepicker({ minDate: 0});
        $('.multiselect-ui').multiselect({ /*Multi select in the system*/
            includeSelectAllOption: true
        });
        $('#demo-choice').change(function () {
            var valueselect= $('#demo-choice').val();
            if(valueselect=="demo"){
                $('#demo-div').show();
            }else{
                $('#demo-div').hide();
            }
        });
        $('#choice').change(function () {/*Hide and collapse the demo choice*/
            var vale= $('#choice').val();
            if(vale=='Product'){
                $('#sdchoice').hide();
                $('#pdchoice').show();
                $('#schoice').attr('required', false);
                $('#pchoice').attr('required', true);
            }else if(vale=='Solution'){

                $('#pdchoice').hide();
                $('#sdchoice').show();
                $('#pchoice').attr('required', false);
                $('#schoice').attr('required', true);

            }else{
                $('#sdchoice').hide();
                $('#pdchoice').hide();
                $('#pchoice').attr('required', false);
                $('#schoice').attr('required', false);
            }
        });
        $('#timepicker').timepicker({/*For the time picker*/
            timeFormat: 'h:mm p',
            interval: 60,
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });

        $( "#reqForm" ).submit(function( event ) {
            var hidval = $('#hidval').val();
            if(hidval==''){
                return true;
            }else{
                alert('Un authorized access to the form, please try after sometime!')
                return false;
            }
        });
    });

</script>


























