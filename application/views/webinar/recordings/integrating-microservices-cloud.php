<?php
/**
 * Created by PhpStorm.
 * User: Hari
 * Date: 14-12-2017
 * Time: 12:05
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Hari
 * Date: 07-12-2017
 * Time: 16:29
 */?>

<?php
$webinar= "Integrating Microservices in the Cloud";

?>
<section class="unsubbanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padding-bottom-50 padding-top-50">
                <h1 class="white">
                    Webinar - <?php echo $webinar; ?>
                </h1>

            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-xs-12">
            <div class="col-xs-12 padding-top-30 padding-bottom-50 text-center">
                <h2 class="text-center"> <?php echo $webinar; ?></h2>
                <hr>
                <?php

                if( $reg==0){?>  <h4>Please complete the form to watch the webinar</h4><?php }?>
            </div>


            <?php

            if( $reg==0){?>

            <div class="col-sm-7">
                <p>
                    Enterprises are fast realizing the importance of integrating SaaS/Cloud applications, API and on-premises data and processes, to unleash hidden value. This webinar explores how managers can use a Microservice-centric
                    approach to aggressively tackle the unexpected new integration challenges posed by proliferation of cloud, mobile, social and big data projects.
                </p>

                <div class="col-xs-12 padding-top-20">
                    <table width="100%">
                        <td><hr color="#ddd" /></td>
                        <td style="width:1px; padding: 0 35px; white-space: nowrap; font-family: arial; font-size: 20px; color: #bbb">
                            Webinar - Presentators
                        </td>
                        <td><hr color="#ddd"/></td>
                    </table>

                    <div style="width:100%;padding-top: 25px; margin-bottom: 25px" class="divnew-effect1">

                        <div class="col-sm-6" style=" border-right: 1px solid #ddd">

                            <div style="text-align:left; float: left;width: 100%">

                                <img class="img-responsive" style="padding-left: 25%" src="<?php echo __ROOT__ ?>/images/Jason-Bloomberg-med.jpg" align="absmiddle" border="0" height="" width="">
                                <br>
                                <h3 style="padding-right: 16%; color: grey; font-size: 14px; text-align: center;"><b>Jason Bloomberg</b></h3>

                                <p style="padding-left: 0px; text-align: justify;padding-right: 15px; padding-top: 15px">
                                    Jason Bloomberg is the leading industry analyst and globally recognized expert on agile digital transformation. He writes and speaks on how today's disruptive enterprise technology trends support the digital professional's business transformation goals.

                                </p>

                            </div>

                        </div>

                        <div class="col-sm-6 padding-bottom-50">

                            <div style="text-align:left; float: right;width: 100%">

                                <img class="img-responsive" style="padding-left: 25%" src="<?php echo __ROOT__ ?>/images/atul_webinar.jpg" align="absmiddle" border="0" height="" width="">
                                <br>
                                <h3 style="padding-right: 0px; color: grey; font-size: 14px; text-align: center;"><b>Atul Saini</b></h3>

                                <p style="padding-left: 0px; text-align: justify;padding-right: 0px; padding-top: 15px">
                                    Atul Saini, Chief Executive Office and Chief Technology Officer at Fiorano Software founded the company
                                    in 1995 with the vision of bringing an architectural revolution in the realm of business integration. For over 2 decades,
                                    Atul has been at the forefront of integration and SOA, with continuous innovation from the days of basic messaging-middleware
                                    in the mid-90s through to present day peer-to-peer distributed processing.
                                </p>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-sm-5">
                <div class="col-xs-12 padding-bottom-50">

                    <div class="col-sm-12 form-RegDiv nopadding" style="background-color: #f6f6f6 !important; ">
                        <!-- <div class="well text-center" id="upper_arrow_div">
                                <h2>Register Now - <?php /*echo $eventname*/?></h2>
                            </div>-->


                        <?php
                        $attributes = array('class' => 'form-group', 'id' => 'register');
                        echo form_open('webinar/watchRecording', $attributes);
                        ?>


                        <div class="demoform padding-top-10 col-xs-12" style="color: #000000 !important;">

                            <input type="hidden" name="formdatval" id="formdatval" value="" />
                            <input type="hidden" name="webinar" id="webinar" value="<?php echo $webinar; ?>" />
                            <input type="hidden" name="source" value="<?php echo $source; ?>" />
                            <input type="hidden" name="webinar_url" value="<?php echo $webinar_url; ?>" />
                            <input type="hidden" name="regdet" id="regdet" value="<?php echo $reg; ?>" />
                            <div class="col-sm-12">
                                <label for="email" class="cols-sm-2 control-label black-color">Name<span class="reqMention"> *</span> </label>

                                <div class="form-group pad_right">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="name"   required="required"  placeholder="Name"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Company<span class="reqMention"> *</span> </label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="company" id="company"  required="required"  placeholder="Company name"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Your role <span class="reqMention"> *</span></label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="role" id="role" required="required"  placeholder="Your role"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Email address<span class="reqMention"> *</span> </label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" id="email"  required="required"  placeholder="Enter your email address"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12" >
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Telephone <span class="reqMention"> *</span></label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="phone" id="phone" pattern='^\+?\d{0,15}'  required="required"  minlength="10" placeholder="Enter your Telephone Number"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Country<span class="reqMention"> *</span> </label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">

                                            <select class="form-control" id="countrylist" name="countrylist" required> <?php echo country_select(); ?></select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12" >
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Level of Interest in Cloud Integration?<span class="reqMention"> *</span></label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                            <select class="form-control" name="interest" required="required">
                                                <option  value=""> Select which applies</option>
                                                <option value="Researching technology choices">Researching technology choices</option>
                                                <option value="Evaluating Short listed Choices/Vendors">Evaluating Short listed Choices/Vendors</option>
                                                <option value="Proof of concept in progress">Proof of concept in progress</option>
                                                <option value="Researching implementation best practices">Researching implementation best practices</option>
                                                <option value="Other">Other</option>
                                            </select>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Do you have an Integration Project planned or in progress? <span class="reqMention"> *</span> </label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <div class="col-xs-6"><input class="radio" type="radio" id="py" value="Yes" name="progress" /> <label for="py" class="black-color float-left">Yes</label></div>
                                            <div class="col-xs-6"><input class="radio float-left" type="radio" id="pn" value="No" name="progress" /> <label for="pn" class="black-color float-left">No</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 dchoice"  id="pdchoice">
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color ">What do you expect from us? Check all that apply <span class="reqMention"> *</span> </label></label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-product-hunt fa" aria-hidden="true"></i></span>
                                            <select name="dchoice[]" id="dchoice" class="multiselect-ui form-control col-xs-12"  multiple="multiple" required="required" >

                                                <option value="Product Demo">Product Demo</option>
                                                <option value="Evaluation copy of Product">Evaluation copy of Product</option>
                                                <option value="Call from our Sales Manager">Call from our Sales Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12" >
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label black-color">Comments</label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o fa" aria-hidden="true"></i></span>
                                            <textarea class="form-control" name="comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 nopadding ">
                                <div class=" col-xs-12 padding-top-20" >
                                    <div class="col-xs-12">

                                        <button id="FormButton" type="submit" class="btn-lg btn btn-primary col-xs-12 ">Watch Webinar </button>&nbsp;&nbsp;
                                        <?php /*if($reg==0){*/?><!--  <button type="reset" class="btn-md btn btn-default pull-left">Clear</button> --><?php /*}*/?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
        <?php }elseif($reg==1){?>

            <div class="col-xs-12"> <a class="pull-right" href="<?php site_url('webinar/recordings')?>"> Watch other recordings</a> </div>
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 padding-bottom-50">

                <iframe class="webinbar-video" src="<?php if(!empty( $video)) echo $video; ?>"
                        frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
        <?php }elseif($reg==2){?>
        <div class="col-xs-12 col-sm-offset-1 col-sm-10 padding-bottom-50">
            <div class="alert alert-warning">
                <strong>Warning!</strong> Some error occur in your Request, Please try again.
                <a href="" class="btn btn-success">Send Request Again</a>
            </div>





        </div>


    </div>
    <?php }?>

    </div>
</section>

<script>
    $( function() {
        $('.multiselect-ui').multiselect({
            /*Multi select in the system*/
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $(document).keydown(function (e) {
            if((e.which || e.keyCode) == 116){
                return false;

            }
        });
    });
</script>
