<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/1/2017
 * Time: 12:18 PM
 */
?>
<?php $eventname= "Meeting the Integration Challenge ";
$eventdate=' 14 June 2017 ';
?>

<section id="intro" class="event-section">
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <!--<div class="productHead col-sm-8">
                <h1 class="productHeadTitle"><?php /*echo $eventname*/?></h1>
                <p class="white">
                    <h3></br>
                    Date - <?php /*echo $eventdate */?> </br>
                    Time - 7:30 AM </br>
                    Place - Sheraton Addis, Taitu Street, </br> Addis Ababa 1000, Ethiopia</br>
                </h3>
                </p>
            </div>-->
        </div>
    </div>
</section>
<section class="event-regBG">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padding-bottom-50 padding-top-50">
            <div class="col-sm-2"></div>
                <div class="col-sm-9 form-RegDiv nopadding">
                    <div class="well text-center" id="upper_arrow_div">
                        <h2>Register Now - <?php echo $eventname?></h2>
                    </div>


                        <?php
                        $attributes = array('class' => 'form-group', 'id' => 'register');
                        echo form_open('company/event_register', $attributes);
                        ?>


                    <div class="demoform padding-top-50 col-xs-12">
                        <?php if( $reg==0){?>
                        <input type="hidden" name="eventname" value="<?php echo $eventname; ?>" />
                        <input type="hidden" name="eventdate" value="<?php echo $eventdate; ?>" />
                        <div class="col-sm-8 col-sm-offset-2">
                            <label for="email" class="cols-sm-2 control-label">Name<span class="reqMention"> *</span> </label>

                            <div class="form-group pad_right">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"   required="required"  placeholder="Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Company<span class="reqMention"> *</span> </label>
                                <div class="cols-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="company" id="company"  required="required"  placeholder="Company name"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your role<span class="reqMention"> *</span> </label>
                                <div class="cols-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="role" id="role"  required="required"  placeholder="Your role"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 col-sm-offset-2">
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

                        <div class="col-sm-8 col-sm-offset-2" >
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Telephone</label>
                                <div class="cols-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone" pattern='^\+?\d{0,15}'  required="required"  placeholder="Enter your Telephone Number"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8 col-sm-offset-2 hidden" >
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Preferred date</label>
                                <div class="cols-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        <input id="datepicker" type="text" class="form-control" name="datepicker" id="datepicker"   placeholder="Select the Date"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8 col-sm-offset-2 hidden">
                            <label for="email" class="cols-sm-2 control-label">Time / Timezone<span class="reqMention"> *</span> </label>
                            <div class="form-group pad_left">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="timepicker" id="timepicker"     placeholder="time"/>
                                </div>
                            </div>

                        </div>

                            <div class="col-sm-8 col-sm-offset-2">
                                <label for="email" class="cols-sm-2 control-label">Products Choice<span class="reqMention"> *</span> </label>
                                <div class="form-group pad_left">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                          <select id="dates-field2" name="pchoice[]" class="multiselect-ui form-control" multiple="multiple" required="required" style="color:#000;">
                                            <option value="Fiorano Integration">Fiorano Integration</option>
                                            <option value="Fiorano ESB">Fiorano ESB</option>
                                            <option value="Fiorano API Management">Fiorano API Management</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-8 col-sm-offset-2" >
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">  Are you currently working on any integration project? <span class="reqMention"> *</span></label>
                                    <label><input type="radio" name="curentwork" value="Yes" required="required">Yes</label> &nbsp;&nbsp;&nbsp; <label><input required="required" type="radio" name="curentwork" value="No">No</label>
                                </div>
                            </div>
                            <div class="col-sm-8 col-sm-offset-2" >
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Your Note / Comments </label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
                                            <textarea type="text" class="form-control" name="comments" id="comments"  placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!--<div class="col-sm-8 col-sm-offset-2" >
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Captcha <span class="reqMention"> *</span></label>
                                <div class="cols-sm-12">
                                   <div class="input-group">
                                        <script src='https://www.google.com/recaptcha/api.js'></script>
                                        <div class="g-recaptcha" data-sitekey="6LfYwSMUAAAAALBOMaQAoEcCSGP1H9_VBQ90XpBC" aria-required="true" required="required" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                    <?php }elseif($reg==1){?>
                            <div class="col-xs-12">
                                <div class="alert alert-success">
                                    <h4><strong>Success!</strong> Thank you for your interest. Your Request for <?php echo $eventname?> at <?php echo $eventdate?> has been booked. We will contact you shortly.</h4>
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

                                <button type="submit" class="btn-lg btn btn-success pull-right ">Register </button>&nbsp;&nbsp;
                                <?php if($reg==0){?>  <button type="reset" class="btn-lg btn btn-default pull-left">Clear</button> <?php }?>
                            </div>

                        </div>
                    </div>
                    <?php echo form_close();?>
                </div>
                    </div>



            </div>
        </div>


</section>
<script>
    $( function() {

        var array = ["14-06-2017","19-06-2017"]

        $('#datepicker').datepicker({
            beforeShowDay: function(date){
                var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
                return [ array.indexOf(string) != -1]
           }
        });

        $('#timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 60,
            minTime: '10',
            maxTime: '6:00pm',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
        $('.multiselect-ui').multiselect({
            includeSelectAllOption: true
        });
    });

   /* $('#register').submit(function(e) {
        e.preventDefault();

        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            e.preventDefault();
            alert("Please check the recaptcha");
            return false;
        }
    });*/
</script>

