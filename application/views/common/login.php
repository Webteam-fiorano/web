<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 1/18/2017
 * Time: 3:36 PM
 */
?>
<section class="padding-bottom-50 padding-top-50" xmlns="http://www.w3.org/1999/html">
    <div id="login-overlay" class="container">
        <div id="login">
            <div class="col-xs-12">
                <h2>Login </h2>
                <hr>
            </div>
           <div class="row">
               <div class="col-xs-6">
                   <p class="lead">Register now for <span class="text-success">FREE</span></p>
                   <ul class="list-unstyled" style="line-height: 2">
                       <li><span class="fa fa-check text-success"></span> Lorem ipsum dolor sit </li>
                       <li><span class="fa fa-check text-success"></span> Lorem ipsum dolor sit </li>
                       <li><span class="fa fa-check text-success"></span> Lorem ipsum dolor sit </li>
                       <li><span class="fa fa-check text-success"></span> Lorem ipsum dolor sit </li>
                       <li><span class="fa fa-check text-success"></span> Lorem ipsum dolor sit </li>
                       <li><a href=""><u>Read more</u></a></li>
                   </ul>
                   <p><a id="toRegister" class="btn btn-primary btn-block">Yes please, register now!</a></p>
               </div>
               <div class="col-xs-6">
                   <div class="well">
                       <?php echo validation_errors(); ?>
                       <?php echo form_open('accounts/');  ?>
                       <!--<form id="loginForm" method="POST" action="/login/" novalidate="novalidate">-->
                            <?php  if(empty($d_type)){ $d_type='';  }?>
                            <?php  if(empty($f_loc)){ $f_loc='';  }?>
                            <?php if(!empty($d_type)){ ?>
                                <input type="hidden" value="<?php echo $d_type?>"  name="d_type" />
                                <input type="hidden" value="<?php echo $f_loc?>"  name="f_loc" />
                          <?php   }else{ ?>
                                <input type="hidden" value="1"  name="d_type" />
                            <?php }?>


                           <div class="form-group">
                               <label for="username" class="control-label">Username</label>
                               <input type="text" class="form-control" id="username" name="username" value="harshit.shrivastava@fiorano.com" required="" title="Please enter you username" placeholder="example@gmail.com">
                               <span class="help-block"></span>
                           </div>
                           <div class="form-group">
                               <label for="password" class="control-label">Password</label>
                               <input type="password" class="form-control" id="password" name="password" value="fiorano" required="" title="Please enter your password">
                               <span class="help-block"></span>
                           </div>
                           <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                           <!--<div class="checkbox">
                               <label>
                                   <input type="checkbox" name="remember" id="remember"> Remember login
                               </label>
                               <p class="help-block">(if this is a private computer)</p>
                           </div>-->
                           <button type="submit" class="btn btn-success btn-block">Login</button>
                           <a id="toForgot" class="btn btn-default btn-block">Help to login</a>
                       <?php echo form_close();?>
                   </div>
               </div>

           </div>
        </div>
        <div id="forgot">
            <div class="col-xs-12">
                <h2>Need Help - Forgot Password </h2>
                <hr>
            </div>
<?php  $attribute = array('class' => 'form-group', 'id' => 'forgot');
 echo form_open('accounts/reset', $attribute)
?>
            <div class="row">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3><i class="fa fa-lock fa-4x"></i></h3>
                                    <h2 class="text-center">Forgot Password?</h2>
                                    <p>You can reset your password here.</p>
                                    <div class="panel-body">

                                        <form class="form">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>

                                                        <input name="emailInput" id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                                </div>
                                            </fieldset>
                                        </form>

                                    </div>
                                    <input class="btn btn-sm btn-system pull-right" value="login" id="backToMain" type="button">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php  echo  form_open();?>
        </div>

        <div id="register">

            <div class="row main">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h1 class="title">Fiorano- Registration</h1>
                        <hr />
                    </div>
                </div>

                <div class="main-login main-center">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                <?php
                $attributes = array('class' => 'form-group', 'id' => 'register');
                echo form_open('accounts/register', $attributes);
                ?>
                            <div class="col-xs-10">

                                <?php  if(empty($d_type)){ $d_type='';  }?>
                                <?php  if(empty($f_loc)){ $f_loc='';  }?>
                                <?php if(!empty($d_type)){ ?>
                                    <input type="hidden" value="<?php echo $d_type?>"  name="d_type" />
                                    <input type="hidden" value="<?php echo $f_loc?>"  name="f_loc" />
                                <?php   }else{ ?>
                                    <input type="hidden" value="1"  name="d_type" />
                                <?php }?>


                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Name<span class="reqMention"> *</span> </label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"   required="required" placeholder="Enter your  Name"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xs-10">
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Company Name/ Company Website<span class="reqMention"> *</span> </label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="cname" id="cname"   required="required"  placeholder="Enter your Company Name"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-xs-10">
                               <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">email <span class="reqMention"> *</span> </label>
                                        <div class="cols-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="email"  required="required"  placeholder="Enter your Email"/>
                                            </div>
                                        </div>
                                    </div>
                             </div>

                            <div class="col-xs-10" >
                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Telephone <span class="reqMention"> *</span> </label>
                                    <div class="cols-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="phone" id="phone" required="required"  placeholder="Enter your Telephone"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-10">

                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Password <span class="reqMention"> *</span> </label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" required="required" name="password" id="password"  placeholder="Enter your password"/>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="col-xs-10">
                                <div class="form-group">
                                    <label><div class="col-xs-1 nopadding"><input type="checkbox"  required="required" class="form-control"></div><div class="col-xs-11"><p class="col-xs-10">By checking this box you confirm you have read the Disclaimer and Terms of Use and agree and accept them.</p></div></label
                                </div>
                            </div>
                            <div class="col-xs-3 pull-left">
                                <div class="form-group ">
                                    <a  id="toLogin">Login</a>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col-xs-3 pull-right">
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                </div>
                            </div>

                            <div class="col-xs-3 pull-right">
                                <div class="form-group ">
                                    <button type="button" id="reset" class="btn btn-default btn-lg btn-block login-button">Reset</button>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                      <?php echo form_close();?>
                    </div>
            </div>
            </div>

            </div>

    </div>

</section>
<script>
    $( document ).ready(function() {
       $('#forgot') .hide();
        $('#register') .hide();

        /*to going to forgot section*/
        $('#toForgot').click(function(){
            $('#register') .hide();
            $('#login') .hide();
            $('#forgot') .show();
        });
        $('#toLogin').click(function(){
            $('#register') .hide();
            $('#forgot') .hide();
            $('#login') .show();
        });

        $('#toRegister').click(function(){
            $('#forgot') .hide();
            $('#login') .hide();
            $('#register') .show();
        });

        $('#backToMain').click(function(){
            $('#register') .hide();
            $('#forgot') .hide();
            $('#login') .show();
        });
        $('#reset').click(function(){
                       document.getElementById("register").reset();
        });

    });
</script>

