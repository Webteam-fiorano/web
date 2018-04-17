<?php
/**
 * Created by PhpStorm.
 * User: Hari
 * Date: 29-01-2018
 * Time: 15:15
 */
?>

<section class="padding-bottom-50 padding-top-50" xmlns="http://www.w3.org/1999/html">

    <div class="container">

        <div id="forgot">
            <div class="col-xs-12">
                <h2>Fiorano Account - View Profile </h2><hr>
            </div>

            <div class="row">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3><i class="fa fa-user fa-4x"></i></h3>
                                    <h2 class="text-center"><?php echo $this->session->userdata['logged_in']['name'] ?> Profile</h2>

                                    <div class="panel-body">
                                        <?php
                                        $attributes = array('class' => 'form-group', 'id' => 'register');
                                        echo form_open('accounts/profile', $attributes);
                                        ?>

                                        <div class="demoform padding-top-70 col-xs-12" style="background-color: #f5f5f5;">

                                            <div class="col-xs-12 text-center text-red">
                                                <?php echo validation_errors(); ?>

                                            </div>
                                            <div class="col-xs-12 text-center text-bold black-color ">
                                                <?php  if($status==1){
                                                    echo "Successfully Updated your details";
                                               }?>
                                            </div>
                                            <div class="col-sm-12  padding-top-50">
                                                <div class="col-sm-2 col-xs-12">
                                                    <input name="profId" value="<?php echo $userDet['0']->id; ?>" type="hidden">
                                                    <label for="salutation" class="col-sm-12 nopadding control-label text-left black-color"><span
                                                                class="reqMention"> *</span> </label>
                                                    <div class="input-group">
                                                  <!--  <span class="input-group-addon">
                                                        <i class="fa fa-user-circle" aria-hidden="true"></i></span>-->
                                                        <select class="form-control" name="salutation" id="salutation" required="required" placeholder="Salutation">
                                                            <option value=""></option>
                                                            <option value="Mr" <?php if( $userDet['0']->salutation=="Mr" ){ ?> selected="selected" <?php } ?>>Mr.</option>

                                                            <option value="Ms" <?php if( $userDet['0']->salutation=="Ms" ){ ?> selected="selected" <?php } ?>>Ms.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-xs-12">
                                                    <label for="fname" class="col-sm-12 control-label nopadding text-left  black-color">First Name<span
                                                                class="reqMention"> *</span> </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="fname" id="fname" required="required" value="<?php echo $userDet['0']->first_name; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-xs-12">
                                                    <label for="lname" class="col-sm-12 control-label nopadding text-left black-color">last Name<span
                                                                class="reqMention"> *</span> </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="lname" id="lname" required="required" value="<?php echo $userDet['0']->last_name?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 padding-top-15 ">
                                                <div class="col-sm-6 col-xs-12">
                                                    <label for="company" class="col-sm-12 nopadding control-label text-left black-color">Company<span
                                                                class="reqMention"> *</span> </label>
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-building"
                                                                                   aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="cname" id="cname"
                                                               required="required" placeholder="Company name" value="<?php echo $userDet['0']->company; ?>"/>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12  padding-top-15">
                                                    <label for="website" class="col-sm-12 nopadding control-label text-left  black-color">Company
                                                        Website<span class="reqMention"> *</span> </label>
                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-globe"
                                                                                   aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="website" id="website"
                                                               required="required" placeholder="Company website" value="<?php echo $userDet['0']->website; ?>"/>

                                                    </div>
                                                </div>



                                                <div class="form-group col-sm-6">


                                                </div>
                                                <div class="form-group col-sm-6">


                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <label for="country" class="col-sm-6 control-label  text-left black-color">Country<span
                                                            class="reqMention"> *</span> </label>
                                                <label for="yourrole" class="col-sm-6 control-label text-left  black-color">Your Role<span
                                                            class="reqMention"> *</span> </label>

                                                <div class="form-group col-sm-6">
                                                    <div class="cols-sm-12">
                                                        <div class="input-group">
                                                            <select class="form-control" name="country" id="country" required ">
                                                                <?php echo country_select(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <div class="cols-sm-12">
                                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user-circle-o"
                                                                                   aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="yourrole" id="yourrole"
                                                                   required="required" placeholder="Your Role" value="<?php echo $userDet['0']->job_title; ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="email" class="col-sm-6 control-label text-left black-color">Email address<span
                                                            class="reqMention"> *</span> </label>
                                                <label for="email" class="col-sm-6 control-label text-left black-color">Telephone<span
                                                            class="reqMention"> *</span></label>
                                                <div class="form-group col-sm-6 ">
                                                    <div class="cols-sm-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                            <input type="email" class="form-control" readonly="readonly" name="email" id="email" required="required"
                                                                   placeholder="Enter your email address"  onBlur="return isCorporateId(this.value);" value="<?php echo $this->session->userdata['logged_in']['email'] ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">

                                                    <div class="cols-sm-12">
                                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone fa"
                                                                                   aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="phone" id="phone"
                                                                   pattern='^\+?\d{0,15}' required="required"
                                                                   placeholder="Enter your Telephone Number" value="<?php echo $userDet['0']->phone; ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <?php // }elseif($reg==1){?>
                                            <div class="col-xs-12 hidden">
                                                <div class="alert alert-success">
                                                    <h4><strong>Success!</strong> Thank you for your interest. Your Request
                                                        for <?php //echo $eventname?> at <?php //echo $eventdate?> has been booked.
                                                        We will contact you shortly.</h4>
                                                </div>
                                            </div>
                                            <?php //}elseif($reg==2){?>
                                            <div class="col-xs-12 hidden">
                                                <div class="alert alert-warning">
                                                    <strong>Warning!</strong> Some error occur in your registration, Please try
                                                    again.
                                                </div>
                                            </div>
                                            <?php //}?>
                                        </div>
                                    </div>
                                    <div class="well col-xs-12" id="lower_arrow_div">


                                        <div class="col-sm-3 pull-right">
                                            <div class="form-group ">
                                                <button id="regSubmuit" type="submit" class="btn btn-success btn-md btn-block login-button">
                                                    Update
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 pull-right">
                                            <div class="form-group ">
                                                <button type="reset" id="reset"
                                                        class="btn btn-default btn-md btn-block login-button">Reset
                                                </button>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>

                                    <?php echo form_close(); ?>

                                </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        document.getElementById('country').value ="<?php echo $userDet['0']->country; ?>";
    });

</script>