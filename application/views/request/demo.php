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
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Request a Demo</h1>
                <div class="col-sm-8 hidden-xs nopadding">
                    <p class="productHeadDesc hidden-xs padding-top-20" >
                        See how Fiorano’s innovative products and solutions integrate applications and complex technologies to increase business process performance, bridge the capability gap between business models, and reduce costs and complexity.
                    </p>
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
        <div class="col-xs-12">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; padding-top: 0 !important;">Request a Demo </h2>

            </div>
            <div class="col-sm-2 hidden-xs" ></div>
            <div class="col-sm-8">

                <div class="col-xs-12 padding-bottom-50">

                    <div class="col-sm-12 form-RegDiv nopadding">
                        <!-- <div class="well text-center" id="upper_arrow_div">
                                <h2>Register Now - <?php /*echo $eventname*/?></h2>
                            </div>-->
                        <div class="col-xs-12 text-center eventform_head padding-top-70 padding-bottom-30">
                            <h4 class="padding-top-20">Book your Demo slot</h4>
                        </div>

                        <?php
                        $attributes = array('class' => 'form-group', 'id' => 'reqForm');
                        echo form_open('request/demo', $attributes);
                        ?>


                        <div class="demoform padding-top-30 col-xs-12">
                            <?php

                            if($reg ==0){?>
                                <input type="hidden" name="hidval" id="hidval" value="">
                                <div class="col-sm-12">
                                    <label for="name" class="cols-sm-2 control-label">Name<span class="reqMention"> *</span> </label>

                                    <div class="form-group pad_right">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name" maxlength="35"  required="required"  placeholder="Name"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Company<span class="reqMention"> *</span> </label>
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
                                        <label for="email" class="cols-sm-2 control-label">Your Role<span class="reqMention"> *</span> </label>
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
                                        <label for="email" class="cols-sm-2 control-label">Email Address<span class="reqMention"> *</span> </label>
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
                                        <label for="email" class="cols-sm-2 control-label ">Telephone <span class="reqMention"> *</span> </label></label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="phone" id="phone" pattern='^\+?\d{0,15}'  maxlength="18" required="required"  placeholder="Enter your Telephone Number"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12" >
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label ">Demo Choice<span class="reqMention"> *</span> </label></label>
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
                                        <label for="email" class="cols-sm-2 control-label ">Product Choice<span class="reqMention"> *</span> </label></label>
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
                                        <label for="email" class="cols-sm-2 control-label ">Solution Choice<span class="reqMention"> *</span> </label></label>
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
                                        <label for="email" class="col-xs-12 control-label nopadding ">Date & Time  <span class="reqMention"> *</span> </label></label>
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

                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label ">Your Country or Region<span class="reqMention"> *</span> </label></label>
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
                                <div class="col-sm-12 ">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label ">Project Description / Information<span class="reqMention"> *</span> </label></label>
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
                                    <button type="submit"  id="reqSub" class="btn-md btn btn-success col-xs-6 col-xs-offset-3">Request a Demo </button>&nbsp;&nbsp;
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

    $('.dchoice').hide();
    $( "#datepicker" ).datepicker({ minDate: 0});
    $('.multiselect-ui').multiselect({ /*Multi select in the system*/
    includeSelectAllOption: true
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

<!--time zone data
minTime: '10',
maxTime: '9:00pm',
startTime: '10:00',-->