<?php $eventname= "DEMYSTIFYING PSD2 - October 2017 ";
$eventdate=' October 2017 ';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8"/>
    <?php if(!empty($fbdata)){
        echo $fbdata;
    }else{ ?>
        <!-- <meta property="og:url" content="http://www.fiorano.com/new/" />
    <meta property="og:type" content="website" />
    <meta property="og:title"  content=" <?php /*if(!empty($title)){ echo $title;} */?>" />
    <meta property="og:description"   content=<?php /*if(!empty($title)){ echo $title;} */?> " />
    <meta property="og:image" content="http://objdevelopment.com/notice/wp-content/uploads/65a4465e9258729f8085c4d780700dad.jpg" />-->
    <?php }?>
    <link rel="canonical" href="http://www.fiorano.com/new/" />
    <title><?php if(!empty($title)){ echo $title;} ?></title>

    <?php if(!empty($meta)){
        echo $meta;
    }else{?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="esb, rest, industry standards, event enabled, peer to peer, web services"/><meta name="description" content="Reduce complexity and increases flexibility by enabling linear,  build-as-you-grow scalability with no performance bottlenecks and 24x7 forever availability. Integrate applications and processes as standards-based,  event-enabled services over a distributed,  centrally managed infrastructure built entirely on industry standards including XML,  Web Services and REST"/> <link rel='stylesheet' id='rs-plugin-settings-css'

    <?php }?>

    <!--Font Awsome-->
    <link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>-->


    <link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery.timepicker.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/fiorano.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/revSlider.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<section>
    <div class=container>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 padding-top-50 text-center">
                    <a href="http://www.fiorano.com/new/" target="_blank"><img src="<?php echo base_url('assets/images/fiorano_logo.png')?>" class="text-center"/></a>
                </div>
                <div class="col-xs-12 text-center">
                    <h2 class=""><strong> Demystifying PSD2</strong></h2>
                    <!--<h4>Join us for the Breakfast meet</h4>-->
                    <hr>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class=container>
        <div class="row">
            <div class="col-xs-12 padding-top-20">

                    <div class="col-xs-12">
                        <h3 style="color: #980c2f;">The registration to this month's PSD2 Breakfast Meeting on September 29, 2017, has now been closed. </h3>
                        <h4 class="text-center black-color padding-top-10 " >
                          Please check here early October for details on Fiorano's October's PSD2 Breakfast Meeting in London. Thank you for your interest. <br>
                                We look forward to seeing you last week of October.
<hr class="double-grey">

                        </h4>

                    </div>


                <div class="col-sm-8 col-sm-offset-2">

                    <div class="col-xs-11 col-xs-offset-1 padding-bottom-50">

                        <div class="col-xs-12 form-RegDiv nopadding" style="background-color: rgba(109, 116, 122, 0.9);">



                            <div class="col-xs-12 text-center eventform_head">
                                <h4 class="text-center">
                                    Please provide your information to be invited to the next event scheduled for end of October.</h4>
                            </div>

                            <?php
                            $attributes = array('class' => 'form-group', 'id' => 'register');
                            echo form_open('company/event_register', $attributes);
                            ?>


                            <div class="demoform padding-top-10 col-xs-12">
                                <?php
                                if( $reg==0){?>
                                    <input type="hidden" name="eventname" value="<?php echo $eventname; ?>" />
                                    <input type="hidden" name="eventdate" value="<?php echo $eventdate; ?>" />
                                    <input type="hidden" name="eventhonyspot" value="" />
                                    <input type="hidden" name="source" value="<?php echo $source; ?>" />

                                    <div class="col-sm-12">
                                        <label for="email" class="cols-sm-2 control-label">Name<span class="reqMention"> *</span> </label>

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
                                                    <input type="text" class="form-control" name="company" id="company" maxlength="35" required="required"  placeholder="Company name"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label">Your role<span class="reqMention"> *</span> </label>
                                            <div class="cols-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="role" id="role" maxlength="35"  required="required"  placeholder="Your role"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label">Email address<span class="reqMention"> *</span> </label>
                                            <div class="cols-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    <input type="email" maxlength="35" class="form-control" name="email" id="email"  required="required"  placeholder="Enter your email address"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" >
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label ">Telephone<span class="reqMention"> *</span></label>
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
                                            <label for="email" class="cols-sm-2 control-label ">Comments</label>
                                            <div class="cols-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa" aria-hidden="true"></i></span>
                                                    <textarea class="form-control" name="comments" placeholder="Interest in PSD2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }elseif($reg==1){?>
                                    <div class="col-xs-12">
                                        <div class="alert alert-success">
                                            <h4><strong>Success!</strong> Thank you for your interest in our upcoming meet on <?php echo $eventname?> at <?php echo $eventdate?> has been booked. We will contact you shortly.</h4>
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

                                        <button type="submit" class="btn-md btn btn-success col-xs-6 col-xs-offset-3">Submit </button>&nbsp;&nbsp;

                                    </div>

                                </div>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    </div>


                </div>

            </div>

    </div>

    </div>
</section>



<script>
    $( function() {



        $('.multiselect-ui').multiselect({
            includeSelectAllOption: true
        });
    });

</script>