<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/23/2017
 * Time: 4:42 PM
 */
?>
<section>

    <div class="container">
        <div class="col-xs-12 padding-top-50">
        <p>Whitepaper : </p>
        </div>

        <div class="col-xs-12">
            <div class="col-sm-7 padding-top-10">

                <h3>Demystifying PSD2</h3>
                <p class=" ">
                    <!--<img src="<?php /*echo base_url('assets/images/resources/Whitepaper-psd2.jpg')*/?>" class="img-responsive"/>-->
                </p>
                <p>

                    The European Union is simplifying online electronic payments across the banking value-chain with the Revised Payment Services Directive (PSD2). The benefits of the regulation to end-customers coupled with increased competition and innovation across the industry driven by Open Banking makes for crucial changes to the banking sector with interest from a global audience. PSD2 not only simplifies electronic payments but also mandates critical organizational changes across the entire retail-banking value-chain.
                </p>
                <p>
                   In this paper, you'll learn about:
                    <ul class="padding-bottom-70">
                    <li class="">
                        Implications of PSD2 from an end-user standpoint
                    </li>
                    <li>
                        How PSD2 simplifies payments and impacts the overall retail banking value-chain
                    </li>
                    <li>
                        Third-party providers in the PSD2 world
                    </li>
                    <li>
                        Current PSD2-readiness levels of retail banks
                    </li>
                </ul>
                </p>


                <div class="col-sm-12 nopadding">
                    <div class="col-xs-12 padding-bottom-70 ">

                        <div class="col-xs-12 nopadding text-left">
                            <h4>Share this Whitepaper</h4>
                            <hr class="double-white">
                        </div>
                        <div class="col-xs-12 nopadding">
                            <div class="social-btns nopadding  text-left align-left " style="text-align: left">

                                <!--                                facebook js-->
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=728682737333595";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <!--                                twitter js-->
                                <div id="twitter-wjs"></div>
                                <script>window.twttr = (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[1],
                                            t = window.twttr || {};
                                        if (d.getElementById(id)) return t;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "https://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);

                                        t._e = [];
                                        t.ready = function(f) {
                                            t._e.push(f);
                                        };

                                        return t;
                                    }(document, "script", "twitter-wjs"));</script>
                                <a class="fb-share-button btn facebook fb-xfbml-parse-ignore" target="_blank" data-href="<?php echo site_url('resources/whitepaper_psd2')?>" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.fiorano.com%2Fnew%2Findex.php%2Fresources%2Fwhitepaper_psd2&amp;src=sdkpreparse" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500, left=24, top=24, scrollbars, resizable')"><i class="fa fa-facebook"></i></a>
                                <a class="twitter-share-button btn twitter" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.fiorano.com%2Fnew%2Findex.php%2Fresources%2Fwhitepaper_psd2" onclick="return !window.open(this.href, 'Twitter', 'width=600,height=500, left=24, top=24, scrollbars, resizable')"><i class="fa fa-twitter"></i></a>
                                <a class="btn google" href="https://plus.google.com/share?url=http://www.fiorano.com/new/index.php/resources/whitepaper_psd2" onclick="return !window.open(this.href, 'Google+', 'width=400,height=400, left=24, top=24, scrollbars, resizable')"><i class="fa fa-google"></i></a>
                                <a class="btn dribbble" href="mailto: ?Subject=Your%20Subject&amp;body=http%3A%2F%2Fwww.fiorano.com%2Fnew%2Findex.php%2Fresources%2Fwhitepaper_psd2"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="col-sm-5">
                <div class="col-xs-12 padding-bottom-50">

                    <div class="col-sm-12 form-RegDiv nopadding" style="background-color: #f6f6f6 !important; ">



                            <div class="text-center col-xs-12 padding-top-30">
                                <b>Use FIorano Form for Download</b>
                            </div>
                                               <?php
                        $attributes = array('class' => 'form-group', 'id' => 'register');
                        echo form_open('resources/whitepaper_psd2', $attributes);
                        ?>


                        <div class="demoform padding-top-10 col-xs-12" style="color: #000000 !important;">
                            <input type="hidden" name="regdet" id="regdet" value="<?php echo $reg; ?>" />
                            <?php

                            if( $reg==0){?>
                                <input type="hidden" name="formdatval" id="formdatval" value="" />
                                <input type="hidden" name="whitepaper" id="whitepaper" value="Demystifying PSD2" />
                                <input type="hidden" name="source" value="<?php echo $source; ?>" />
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
                                        <label for="email" class="cols-sm-2 control-label black-color">Your interest in PSD2 :<span class="reqMention"> *</span></label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <select class="form-control" name="interest" required="required">
                                                    <option  value=""> Please choose your interest</option>
                                                    <option  value="Represent a bank or financial institution subject to compliance">Represent a bank or financial institution subject to compliance</option>
                                                    <option  value="Represent a Fintech"> Represent a Fintech</option>
                                                    <option  value="Represent a System integrator/Consultant advising clients regarding PSD2">Represent a System integrator/Consultant advising clients regarding PSD2</option>
                                                    <option  value="Represent a compliance/Government Regulator">Represent a compliance/Government Regulator</option>
                                                    <option  value="Other">Other</option>
                                                </select>

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
                            <?php }elseif($reg==1){?>
                                <div class="col-xs-12">
                                    <div class="alert alert-success">
                                        <h4><strong>Success!</strong> Thank you for Download PSD2 Whitepaper</h4>
                                    </div>
                                </div>
                            <?php }elseif($reg==2){?>
                                <div class="col-xs-12">
                                    <div class="alert alert-warning">
                                        <strong>Warning!</strong> Some error occur in your Download, Please try again.
                                    </div>
                                </div>
                            <?php }?>

                        <div class="col-xs-12 nopadding ">
                            <div class=" col-xs-12 padding-top-20" >
                                <div class="col-xs-12">

                                    <button id="FormButton" type="submit" class="btn-lg btn btn-primary col-xs-12 ">Download Whitepaper </button>&nbsp;&nbsp;
                                    <?php /*if($reg==0){*/?><!--  <button type="reset" class="btn-md btn btn-default pull-left">Clear</button> --><?php /*}*/?>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-sm-5">  <hr class="double-white"> </div>
                                    <div class="col-sm-1 padding-top-10">OR  </div>
                                    <div class="col-sm-6"> <hr class="double-white"> </div>

                                    <div class="col-xs-12">
                                        <div class="col-xs-12 text-center  padding-top-30">
                                            <div class="col-sm-6">
                                                <i class="fa fa-user-circle-o fa-4x"></i><br>
                                                <!--<a href="<?php /*echo __ROOT__*/?>/downloads/login.php?action=PSD2-Whitepaper&s=whitepapers">Download Using Fiorano Account </a>-->
                                                <a href="<?php echo site_url('accounts/login/wp/PSD2-Whitepaper')?>">Download Using Fiorano Account </a>

                                            </div>
                                            <?php //echo site_url('accounts/login/wp/Demystifying-PSD2') ?>

                                            <div class="col-sm-6">
                                                <i class="  fa fa-user fa-4x"></i><br>
                                                <a href=" <?php echo __ROOT__?>/Accounts/Register?action=PSD2-Whitepaper&s=whitepapers">Create Fiorano Account & Download</a>
                                                <?php //echo site_url('accounts/login/wp/Demystifying-PSD2') ?>

                                            </div>


                                        </div>

                                    </div>
                                <!-- <a href="<?php /*echo __ROOT__*/?>/downloads/login.php?action=Demystifying-PSD2&s=whitepapers" target="_blank">Existing Users: Download Using Fiorano Login</a>
                                    <a href="<?php /*echo __ROOT__*/?>/Accounts/Register?action=Demystifying-PSD2&s=whitepapers" target="_blank">New Users: Create Fiorano Account and Download</a>-->
                                </div>
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


    $("#register").submit(function() {
        //event.preventDefault();
       var hiddata= $('#formdatval').val();
       if(hiddata !=''){
           return false;
       }


    });

    $( document ).ready(function() {
        if( $('#regdet').val()=="1"){
            setTimeout(function(){
                window.open(' https://www.fiorano.com/whitepapers/PSD2-Whitepaper.pdf', '_blank');
               }, 3000);
        }
    });

</script>