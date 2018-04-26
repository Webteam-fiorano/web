<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 12/21/2016
 * Time: 10:19 AM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-358285-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-358285-1');
    </script>
    <meta charset="UTF-8"/>
    <?php if(!empty($fbdata)){
        echo $fbdata;
    }else{ ?>

    <?php }?>

    <title><?php if(!empty($title)){ echo $title;} ?></title>



    <?php if(!empty($meta)){
        echo $meta;
    }else{?>
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="Fiorano ESB, Fiorano MQ, ESB, Fiorano, Psd2, Whitpaper, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Software Technologies | Support with Invoative Products" />
        <meta name="classification" content="Fiorano is a leading provider of JMS,  including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration ,  Messaging Queue, SAP Solutions, Enterprise Service Bus, ESB, PSD2 enterprise middleware and peer-to-peer distributed systems" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@fiorano">
        <meta name="twitter:title" content="Home | Fiorano Software Technologies ">
        <meta name="twitter:description" content="Founded in 1995,  Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration ,  Messaging Queue, SAP Solutions, Enterprise Service Bus, ESB, PSD2 enterprise middleware and peer-to-peer distributed systems">
        <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
        <meta property="og:title" content="Home | Fiorano Software Technologies" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.fiorano.com/new/" />
        <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
        <meta property="og:description" content="Founded in 1995,  Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration ,  Messaging Queue, SAP Solutions, Enterprise Service Bus, ESB, PSD2 enterprise middleware and peer-to-peer distributed systems" />
        <meta property="og:site_name" content="http://www.fiorano.com" />
    <?php }?>

    <!--Font Awsome-->
    <link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"> </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css" />



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





    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '728682737333595',
                xfbml      : true,
                version    : 'v2.10'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">




<section class="color-1">

<!-- Navigation (navbar-fixed-top)-->
<nav class="navbar navbar-default " role="navigation" id="navbarselected">

    <div class="container container-fluid">
        <div id="">
            <div class="navbar-header page-scroll">
                <div  class="col-xs-8">
                    <a class="navbar-brand page-scroll" href="<?php echo site_url();?>">
                        <img class="col-xs-10 hidden-sm hidden-lg hidden-md" src="<?php echo base_url('assets/images/fiorano_logo.png'); ?>" />
                        <img class="hidden-xs" src="<?php echo base_url('assets/images/fiorano_logo.png'); ?>" />
                    </a>
                </div>
                <div  class="col-xs-4"><button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button></div>
            </div>
            <div id="navbarDiv">

                <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="collapse  navbar-collapse navbar-ex1-collapse navbar-left " >

                    <ul class="nav navbar-nav align-right menu cl-effect-14" id="navBarMenu">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li class="dropdown productList">
                            <a class="page-scroll dropbtn hidden-xs" href="<?php echo site_url('products');?>">Products</a>
                            <a class="page-scroll dropbtn hidden-sm hidden-lg hidden-md">PRODUCTS</a>
                            <div class="hasSubMenu productsMenu padding-bottom-50">
                                <ul class="sub-menu">
                                    <li class="menu-item col-sm-6 nopadding">

                                        <h4>Business Integration</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_integration');?>">Fiorano Integration</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('products/cloud_platform');?>">Fiorano Cloud Platform</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_api');?>">Fiorano API Management</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item col-sm-6 nopadding">
                                        <h4><a  class="" style="padding-left: 0px !important; color: #00599C;" href="<?php echo site_url('products/digital_transformation');?>">Digital Business Platform</a></h4>
                                        <h4>Enterprise Messaging</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('products/fiorano_mq');?>">FioranoMQ</a></li>
                                            <!--                                    <li class="menu-submenu"><a href="">Fiorano MQTT</a></li>-->

                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="dropdown solutionList">
                            <a class="page-scroll dropbtn hidden-xs" href="<?php echo site_url('solutions')?>">Solutions</a>
                            <a class="page-scroll dropbtn hidden-sm hidden-md hidden-lg">SOLUTIONS</a>
                            <div class="hasSubMenu solutionMenu padding-bottom-50">
                                <ul class="sub-menu">
                                    <li class="menu-item col-sm-6 nopadding">
                                        <h4>Industry Solutions</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/psd2')?>">PSD2 Accelerator</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/temenos_t24_core_banking_integration')?>">Core Banking</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/government_defense')?>">Government/Defense</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/health')?>">Health care</a></li>
                                        </ul>

                                    </li>
                                    <li class="menu-item col-sm-6 nopadding">
                                        <h4>Application Solutions</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/sap_solution')?>">SAP Integration</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/salesforce_integration')?>">Salesforce Integration</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('solutions/swift_integration')?>">SWIFT Integration</a></li>
                                        </ul>

                                    </li>

                                </ul>
                            </div>

                        </li>
                        <li class="dropdown serviceList">
                            <a class="page-scroll dropbtn hidden-xs" href="<?php echo site_url('services')?>">Services</a>
                            <a class="page-scroll dropbtn hidden-sm hidden-md hidden-lg">SERVICES</a>
                            <div class="hasSubMenuCenter serviceMenu padding-bottom-50">
                                <ul class="sub-menu">
                                    <li class="menu-item col-sm-12 nopadding">
                                        <h4>Professional Services</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('services/architecture_assessment_design')?>">Architecture Design</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('services/implementation')?>">Implementation</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('services/performance_tuning')?>">Performance Tuning</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('services/training')?>">Training</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('services/premium_support')?>">Premium Support</a></li>
                                        </ul>

                                    </li>


                                </ul>
                            </div>

                        </li>
                        <li class="dropdown customersList">
                            <a class="page-scroll dropbtn hidden-xs" href="<?php echo site_url('customers')?>">Customers</a>
                            <a class="page-scroll dropbtn hidden-sm hidden-md hidden-lg">CUSTOMERS</a>
                            <div class="hasSubMenuCenter customersMenu col-sm-12 padding-bottom-50">
                                <ul class="sub-menu">
                                    <li class="menu-item col-sm-12 nopadding">
                                        <h4>Customers</h4>
                                        <ul class="">

                                            <li class="menu-submenu"><a href="<?php echo site_url('customers/customers_by_industry')?>">Customers - By Industry</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('customers/customer_testimonials')?>">Customer Testimonials</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/casestudies')?>">Case Studies</a></li>

                                        </ul>

                                    </li>


                                </ul>
                            </div>

                        </li>
                        <li class="dropdown partnersList">
                            <a class="page-scroll dropbtn" href="<?php echo site_url('partners'); ?>">Partners</a>


                        </li>
                        <li class="dropdown resourcesList">
                            <a class="page-scroll dropbtn hidden-xs" href="<?php echo site_url('resources'); ?>">Resources</a>
                            <a class="page-scroll dropbtn hidden-sm hidden-md hidden-lg">RESOURCES</a>
                            <div class="hasSubMenu resourceMenu padding-bottom-50">
                                <ul class="sub-menu">

                                    <li class="menu-item col-sm-6 nopadding">
                                        <h4>Resources</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/downloads'); ?>">Product Downloads</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/datasheets'); ?>">Product Datasheets</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/documentation'); ?>">Product Documentation</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/online_tutorials'); ?>">Online Demos &amp; Product Tutorials</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/twominute_explainers'); ?>">2-Min Explainers</a></li>

                                        </ul>
                                        <!--<h4>Opensource</h4>
                                        <ul class="">
                                            <li id="" class="menu-submenu"><a href="<?php /*echo site_url('products/open_source_fiorano_esb');*/?>">Fiorano ESB Community Edition</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="menu-item col-sm-6 nopadding">
                                        <h4>&nbsp;</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/whitepapers'); ?>">Whitepapers</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('resources/casestudies'); ?>">Customer Case Studies</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('company/prod_review'); ?>">Analyst Reports &amp; Product Reviews</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('company/support'); ?>">Technical Support</a></li>
                                            <li class="menu-submenu"><a href="<?php echo __ROOT__ ?>/componentgallery/comp_index.php">Component Gallery</a></li>
                                        </ul>

                                    </li>

                                </ul>
                            </div>

                        </li>
                        <li class="dropdown companyList" id="companyMenu">
                            <a class="page-scroll dropbtn hidden-xs" href="<?php echo site_url('company/about'); ?>">Company</a>
                            <a class="page-scroll dropbtn hidden-sm hidden-md hidden-lg">Company</a>
                            <div class="hasSubMenuCenter customersMenu company menu">
                                <ul class="sub-menu">
                                    <li class="menu-item col-sm-12 nopadding">
                                        <h4>Company</h4>
                                        <ul class="">
                                            <li class="menu-submenu"><a href="<?php echo site_url('company/about'); ?>">About Us</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('company/pressreleases'); ?>">News & Press</a></li>
                                            <li class="menu-submenu"><a href="<?php echo site_url('company/events'); ?>">Events</a></li>
                                            <li class="menu-submenu"><a href="<?php echo __ROOT__ ?>/blog" target="_blank">Blog</a></li>

                                            <?php  if($this->session->userdata('logged_in')){ ?>
                                                <li class="menu-submenu"><a href="<?php  echo site_url('Accounts/signOut'); ?>">Log Out</a></li>

                                            <?php  }else{ ?>
                                                <li class="menu-submenu"><a href="<?php  echo site_url('accounts/login'); ?>">Login</a></li>
                                            <?php   } ?>


                                            <li class="menu-submenu"><a href="<?php echo site_url('company/contacts'); ?>">Contact Us</a></li>
                                        </ul>
                                        <!--<h4>Composite Applications</h4>
                                        <ul class="">
                                            <li id="" class="menu-submenu"><a href="">Fiorano Studio Tool</a></li>
                                        </ul>-->
                                    </li>


                                </ul>
                            </div>

                        </li>
                        <li>

                        </li>
                    </ul>

                    <div class="divRightMenuSearch">

                        <a id="searchId">
                            <i class="fa fa-search"></i>
                        </a>

                    </div>
                    <div class="searchBoxHeader">
                        <?php $attri = array("id"=>"fiorano-cludo"); echo form_open('',$attri)?>
                        <div class="nopadding">  <input  type="search" class='searchbox' id="query" autocomplete="off" placeholder="Search your query" style=""/></div>
                        <div class="nopadding"> <a class="searchclose" id="searchclose"><i class="fa fa-times-circle-o"></i></a></div>
                        <?php echo form_close()?>
                    </div>


                    <div class="pull-right" id="contactbtn">
                        <a data-toggle="modal" data-target="#contact_us" title="Contact Us">
                        <button  class=" btn btn-success bttn-contact"> Get in touch</button>
                        </a>
                    </div>

                    <div class="col-xs-12 hidden-sm hidden-lg hidden-md">
                        <div class="col-xs-6 hidden-sm">
                            <div class="textwidget">
                                <a id="lang-sel" class="lang-sel" href="<?php echo site_url('company/news');?>">
                                    News & Press
                                </a>
                            </div>
                        </div>
                        <div class=" col-xs-6 textwidget1 hidden-sm">
                            <div class="textwidget">
                                <a id="lang-sel" class="lang-sel" href="<?php echo site_url('resources/downloads')?>">
                                    Downloads
                                </a>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </div>

</nav>
</section>
<script>
    $('#searchId').click(function () {
        //$( "#navbarDiv" ).replaceWith( "<input type='text' class='searchbox'>" );
        $("#searchId").hide();
        $("#contactbtn").hide();
        $("#companyMenu").hide();
        $('.searchBoxHeader').show();


    });
    $('#searchclose').click(function () {
        //$( "#navbarDiv" ).replaceWith( "<input type='text' class='searchbox'>" );
        // $("#navbarDiv").show();
        $('.searchBoxHeader').hide();
        $("#searchId").show();
        $("#companyMenu").show();
        $("#contactbtn").show();
        $("#navBarMenu").show();
    });

    $(document).ready(function() {
        $('#query').keydown(function(e) {

            if (e.which === 13) {

                var query= $('#query').val();
                // var urlgo="http://www.fiorano.com/search.php?query="+query;
                var urlgo="<?php echo  site_url('company/search#?cludoquery=') ?>"+query+"&cludopage=1";
                //location.href = urlgo;
                window.open(urlgo);
                return true;
            }
        });

    });
</script>
