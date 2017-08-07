
<section id="intro" class="commuity-section">
    <div class="container">
        <div class="col-xs-12 productBanner ">

            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano ESB Community Edition</h1>
                <div class="col-sm-8 hidden-xs nopadding">
                <p class="productHeadDesc hidden-xs" >
                    The Fiorano ESB Core is now Open Source &amp; built on top of industry standards including OSGi (Apache Karaf) and JMS.
                </p>
                </div>
            </div>
            <div class="productHeadDownload col-sm-4 ">
                <a href="#" id="download-github" class="btn-danger btn btn-large" data-toggle="modal" data-target="#myModal"><i class="fa fa-large fa-github"></i> Download Source &nbsp; &nbsp; &nbsp; &nbsp;</a><br/><br/>
                <a href="#" class="download-binaries btn-danger btn btn-large" data-toggle="modal" data-target="#myModal"><i class="fa fa-large fa-download"></i> Download Binaries &nbsp; &nbsp; &nbsp;</a><br/><br/>
               <!-- <a href="/opensource/forum/" class="btn-success btn btn-large"><i class="fa fa-large fa-user"></i> Join the Discussion&nbsp; &nbsp; &nbsp;&nbsp;</a>-->
            </div>
            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-right">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('products'); ?>">Products</a></li>
            <li class="active"> Fiorano ESB</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">

        <div class="row">
            <div class="section-header">
                <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB Community Edition </h1>

            </div>

    <div class="col-xs-12 padding-top-50 padding-bottom-50">

        <p class="">
            Fiorano ESB Community Edition enables application integration by choreographing Microservices into asynchronous flows via the Fiorano Studio and associated tools. The transport is pluggable and the user may choose any available JMS engine including Apache ActiveMQ, JBOSS, TIBCO, IBM or FioranoMQ.
            <br>
            Fiorano ESB Community Edition includes a Microservices toolkit that enables the development of JMS-compliant Microservices in a number of supported languages including Java, C, C++ and C#. See "Fiorano Microservices Tookit" for more info.
            <br>
            Fiorano's Community Edition ESB uses a wire-level protocol called the <a href="http://www.fiorano.com/documentation/pages/viewpage.action?pageId=6228152"> Component Control Protocol (CCP)</a>, which allows asynchronous communication between the Community Edition ESB server and micro services being choreographed/orchestrated into application flows.
        </p>
    </div>
            <div class="col-xs-12 padding-bottom-50">

                <table style="border-color: #807F80; border-collapse: collapse; margin-top: 25px;" cellspacing="5" cellpadding="10" border="0" class="col-xs-12 esbtable">
                    <tbody><tr>
                        <td class="title b l" width="250">Communication</td>
                        <td class="title b c" width="350">Runtime Deployment</td>
                        <td class="title b c" width="350">Monitoring</td>
                    </tr>
                    <tr>
                        <td class="c1 ea-bb">Deployed Microservices communicate asynchronously using JMS</td>
                        <td class="c2">
                            <ul class="l text-left">
                                <li>Automatically creates the JMS endpoints (i.e. message queues and Topics) for individual Microservices</li>
                                <li>Also creates "routes" for communication</li>
                            </ul>
                        </td>
                        <td class="c1">
                            <ul class="l">
                                <li>Includes tools and APIs for managing and monitoring Microservices</li>
                                <li>Ability to debug and modify message flows between Microservices</li>
                            </ul>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="col-xs-12 esb-getting margin-top-50">
        <div class="container">
        <div class="section-header white">
            <h1 class="text-left wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;">
                Getting Started
            </h1>
            <p class="white">
                The below section helps you get started with the project in a few minutes time
            </p>
        </div>
        </div>
    </div>
    <div class="container ">
        <div class="padding-top-50 padding-bottom-50 col-sm-12 esb-install">
            <br>
            <h2>Installing Fiorano ESB Community Edition Platform</h2>
            <ol>
                <li>
                    Download the Fiorano ESB Community Edition Installer from <a class="download-binaries" href="#" data-toggle="modal" data-target="#myModal" >here</a>.
                </li>
                <li>
                    Extract it to your preferred location on the disk drive.
                    <br><br>
                    <div class="alert alert-warning">
                        The root folder to which the installer is extracted is referred as FIORANO_HOME here on.
                    </div><br>
                    <div class="alert alert-success">
                        Refer the <a href="/documentation/display/OSE/System+Requirements" target="_blank">System Requirements</a> section to understand the minimum system requirements.
                    </div>
                </li>
                <li>
                    Navigate through the extracted files to the bin directory (in FIORANO_HOME) and execute the following command:<br>
                    <ul>
                        <li>Windows: fiorano.bat</li>
                        <li>Linux: ./fiorano</li>
                    </ul><br>
                    <div class="alert alert-info">
                        The Fiorano server starts along with its dependent modules.
                    </div>
                </li>
                <li>
                    Configure the extracted configuration files.<br>
                    Go to <b>FIORANO_HOME &gt; etc</b> and provide configuration as required in the following files:<br>
                    <ul>
                        <li>
                            Transport Configuration<br>
                            Provide Transport Server related details in the com.fiorano.openesb.transport.provider.cfg file.
                        </li>
                        <li>
                            RMI Configuration<br>
                            Provide RMI details in the com.fiorano.openesb.rmiconnector.cfg file.
                        </li>
                        <li>
                            Server Configuration<br>
                            Provide server lookup and connection timeout value in the com.fiorano.openesb.server.cfg file.
                        </li>
                    </ul>
                </li>
                <li>
                    Launching eStudio:
                    <p>eStudio is an Orchestration tool used to create microservice application flows.</p>
                    <p>
                        To launch the eStudio application, navigate to <b>FIORANO_HOME/eStudio/bin</b> and execute eStudio.
                    </p>
                    <div class="alert alert-success">
                        Refer to the <a href="/documentation/display/PUB/Starting+Fiorano+eStudio" target="_blank">Starting Fiorano eStudio</a> section to follow the steps as illustrated in the documentation for the Enterprise version.
                    </div>
                </li>
                <li>
                    <a href="http://fiorano.com/documentation/display/PUB/Examples">Create flows using estudio</a> and <a href="http://fiorano.com/documentation/display/PUB/Deploying+in+Enterprise+Server">deploy them to the server</a>.
                </li>
                <li>
                    <a href="http://fiorano.com/documentation/display/PUB/Common+Configurations#CommonConfigurations-ComponentInstancePropertiesComponentInstanceProperties">On the fly changes</a> to the flows with zero downtime.
                </li>
                <li>
                    <a href="http://fiorano.com/documentation/display/PUB/Debugging+Applications">Add breakpoints and intercept messages</a>
                </li>
            </ol>
            <br><br>
        </div>

    </div>


</section>
<section>
    <div class="col-xs-12 esb-getting margin-top-50">
        <div class="container">
            <div class="section-header white">
                <h1 class="text-left wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;">

                    Fiorano ESB Community Edition Components & Packages
                </h1>
                <p class="white">
                    Components & Packages for Fiorano ESB Community Edition
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-xs-12  padding-top-50">
            <div class="col-sm-4">
                <div class="esb-c">
                    <img src="<?php echo base_url('assets/images/products')?>/openesb-info.png" width="64" />
                    <p>
                        <b>Fiorano ESB Community Edition Server</b><br/>
                        An OSGi container built on top of Apache Karaf which acts as both manager and runtime for microservices
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="esb-c">
                    <img src="<?php echo base_url('assets/images/products')?>/openesb-messaging-engine.png" width="72" style="margin-bottom: 10px" />
                    <p>
                        <b>Messaging Engine</b><br/>
                        The messaging engine is pluggable and the user may choose any available JMS engine including Apache ActiveMQ, JBOSS, TIBCO, IBM or FioranoMQ.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="esb-c">
                    <img src="<?php echo base_url('assets/images/products')?>/openesb-dashboard.png" width=48" style="margin-bottom: 10px;" />
                    <p>
                        <b>Dashboard</b><br/>
                        Built on top of Hawtio, an open source HTML5/Angular JS web console
                    </p>
                </div>
            </div>

        </div>

        <div class="col-xs-12 padding-top-20 padding-bottom-50">


        <div class="col-sm-2"> </div>
        <div class="col-sm-4">
            <div class="esb-c">
                <img src="<?php echo base_url('assets/images/products')?>/openesb-toolkit.png" width="48" />
                <p>
                    <b>Microservice Toolkit</b><br/>
                    Open source toolkit to develop and monetize new microservices
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="esb-c">
                <img src="<?php echo base_url('assets/images/products')?>/openesb-estudio.png" width="48" />
                <p>
                    <b>eStudio</b><br/>
                    An orchestration Tool based on Eclipse
                </p>
            </div>
        </div>
        </div>
    </div>
</section>

 <section id="esb_packag_bg">
<div class="container">
        <div class="col-xs-12">
            <!--New design for packages-->
            <div class="wrapper">
                <!-- PRICING-TABLE CONTAINER -->
                <!-- /PRICING-TABLE -->
                <div class="package_detalils"> 
                    <img src="<?php echo base_url('assets/images/products/ESB-Package.png') ?>">
                </div>
            </div>
            <!--Close design for packages-->

            <!--<table cellspacing="5" cellpadding="15" border="0" style="border-color: #807F80; border-collapse: collapse" class="col-xs-12 esbtable">
                <tr>
                    <td class="title b c col-xs-3" >Package 1</td>
                    <td class="title b c col-xs-3" >Package 2</td>
                    <td class="title b c col-xs-3" >Package 3</td>
                    <td class="title b c col-xs-3" >Package 4</td>
                </tr>
                <tr>
                    <td class="c2 ea-bb l" valign="top">
                        <ul class="bullet">
                            <li class="text-left">
                                Fiorano ESB Community Edition Core
                            </li>
                            <li class="text-left">
                                Tools
                                <ul >
                                    <li class="text-left">eStudio </li>
                                    <li class="text-left">Dashboard </li>
                                    <li class="text-left">Microservices toolkit</li>
                                </ul>
                            </li>
                            <li class="text-left">
                                Complimentary Adapter Pack
                            </li>
                        </ul>
                    </td>
                    <td class="c2 ea-bb l" valign="top">
                        <ul class="bullet">
                            <li class="text-left">
                                Package 1
                            </li>
                            <li style="list-style: none; padding-left: 10px">
                                +
                            </li>
                            <li class="text-left">
                                Support, Updates and Maintenance
                            </li>
                        </ul>
                    </td>
                    <td class="c2 ea-bb l" valign="top">
                        <ul class="bullet">
                            <li class="text-left">
                                Package 2
                            </li>
                            <li style="list-style: none; padding-left: 10px">
                                +
                            </li>
                            <li class="text-left">
                                Base Adapter Pack (Database, File, Bridges (SMTP, POP3, FTP, WebServices, REST, etc.)
                            </li>
                        </ul>
                    </td>
                    <td class="c2 ea-bb l" valign="top">
                        <ul class="bullet">
                            <li class="text-left">
                                Package 3
                            </li>
                            <li style="list-style: none; padding-left: 10px">
                                +
                            </li>
                            <li class="text-left">
                                Professional Adapter Pack  (SAP,  SWIFT, various financial services applications including ISO 8085, Temenos T24, etc.)
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="c1 ea-bb c">
                        Free
                    </td>
                    <td class="c1 ea-bb">
                        Subscription Fee for  Support
                    </td>
                    <td class="c1 ea-bb c">
                        Subscription Fee for Support
                        <br/>+<br/>
                        Subscription Fee for Base Adapter Packs
                    </td>
                    <td class="c1 ea-bb c">
                        Subscription Fee for Support
                        <br/>+<br/>
                        Subscription Fee for Professional Adapter Pack
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="c">
                        <button class="btn btn-primary btn-large" style="width: 200px; margin-top:20px; margin-bottom: 50px;" onclick="showContactUs()">Get in touch</button>
                    </td>
                </tr>
            </table>-->
        </div>

    </div>


</section>
<section>
    <div class="col-xs-12 esb-getting margin-top-50">
        <div class="container">
            <div class="section-header white">
                <h1 class="text-left wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;">
                    Github Resources
                </h1>
                <p class="white">
                    Fiorano's Open source repositories and their respective Documentation Wikis are available in the Fiorano github pages as listed below. Sign Up/In to github so that you can contribute to the following repositories by forking them.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-xs-12 padding-bottom-50 padding-top-50">
            <table cellspacing="5" cellpadding="10" border="0" style="border-color: #807F80; border-collapse: collapse" class="col-xs-12 esbtable">
                <tr>
                    <td class="title b l col-xs-6">Repository</td>
                    <td class="title b c col-xs-6" >Description</td>
                </tr>
                <tr>
                    <td class="c1 ea-bb align-center text-center">
                        <a target="_blank" href="https://github.com/FioranoSoftware/FioranoESB"><i class="icon icon-github"></i> Fiorano ESB Community Edition Platform</a>
                    </td>
                    <td class="c2 l">
                        Fiorano's Open source Platform provides life cycle management of microservices, microservice flows and automates communication between microservices using Fiorano ESB Community Edition. <br/>
                        <br/><a href="/architecture/Fiorano-Microservices.php">Learn more &raquo;</a> <br/><br/>
                    </td>
                </tr>
                <tr>
                    <td class="c1 ea-bb">
                        <a target="_blank" href="https://github.com/FioranoSoftware/Fiorano-Microservice-Toolkit"><i class="icon icon-github"></i> Microservice Toolkit</a>
                    </td>
                    <td class="c2 l">
                        Fiorano Microservice framework provides SDKs (presently in Java, C#, C and C++) to <a href="http://www.fiorano.com/documentation/display/PUB/Creating+Custom+Microservices">build microservices</a>. The business logic can be plugged into the generated code. The microservices can then be build and deployed to Fiorano Microservice Platform using Maven.<br/>
                        <br/><a href="/architecture/Fiorano-Microservice-Keybenefits.php">Learn more &raquo;</a> <br/><br/>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</section>

<section>
    <div class="col-xs-12 esb-getting margin-top-50">
        <div class="container">
            <div class="section-header white">
                <h1 class="text-left wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;">
                    Microservice Toolkit
                </h1>
                <p class="white">
                    Create or extend microservices using the Fiorano Microservice Toolkit.
                </p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="col-xs-12 padding-bottom-50 padding-top-50">
            <div class="section_clear">
            <div class="content ol-sm-12 wpb_column esb-install">
                <Br/>
                <p>
                    Fiorano provides a microservices development toolkit to develop microservices using different programming languages like Java, C, CPP and C#. This SDK generates template code which handles asynchronous communication with other microservices as well as processing capabilities like multi-threading and connection pooling. Business logic can be plugged into the generated code. The microservices can then be built and deployed to the Fiorano Microservice Platform using Maven.
                    <br/><br/>
                    The framework also provides samples which demonstrate general usage patterns. Some of the commonly used microservices in the enterprise version are also open for reference for developers looking to build their own services.
                </p>
                <h2>Architecture</h2>
                <p>
                    The open source toolkit enables multi-language development. It includes wizards to auto-generate skeleton source code for new Microservices based on various inputs/outputs, resources required, format (XML/JSON) and structure of data. The auto-generated code includes an eclipse-based UI for configuring microservice instances such as endpoint generation, connection pooling, multi-threading, and data marshalling/un-marshalling.
                </p>
                <p><a href="http://www.fiorano.com/documentation/display/PUB/Creating+Custom+Microservices">Fiorano Microservice Toolkit/Deployment Pack Benefits</a></p>
                <ul>
                    <li>
                        Free integrated deployment environment for Microservices and flows
                        <ul>
                            <li>
                                Includes eStudio &ndash; eclipse-based graphical tool to visually define interactions and communications between various microservices in a flow.
                            </li>
                            <li>
                                Define applications ('flows') as a composition of multiple microservice instances
                            </li>
                            <li>
                                Modify/change microservice source-code or configurations
                            </li>
                        </ul>
                    </li>
                    <li>
                        Free Web-based dashboard to monitor/manage microservices deployed across the Fiorano ESB Community Edition/Container network
                    </li>
                    <li>
                        Multiple commonly-used services included for free: JSON CBR, Aggregator, Splitter, Join, Timer, Sleep, Duplicate Content Check, Sequencer
                    </li>
                </ul>
                <br/><br/>
            </div>
        </div>

        </div>
    </div>
</section>
<section >

    <div class="section-header">
        <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">More about ESB Community Edition </h1>

    </div>
<div class="content-section-a">
    <div class="container padding-bottom-20">
        <div class="row padding-top-50">
            <div class="section-header">
                <!--<h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Events</sup></h1>-->
            </div>
        </div>
        <div class="col-xs-12 nopadding text-center align-center">
            <a href="https://www.fiorano.com/opensource/forum/" target="_blank" class="">
                <div class="col-sm-3">
                    <div class="offer-icon-animate timeMenu">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary1"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>

                    </span>
                        <h3 class="service-heading">Discussion Forum</h3>
                    </div>
                </div>
            </a>
            <a href="https://www.fiorano.com/documentation/display/OSE/" title="Documentation" target="_blank">
                <div class="col-sm-3">
                    <div class="offer-icon-animate timeMenu" >
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary1"></i>
                        <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                        <h3>  Documentation</h3>

                    </div>
                </div>
            </a>
            <a href="/products/esb-enterprise-service-bus/" title="Enterprise Edition" target="_blank">
                <div class="col-sm-3">
                    <div class="offer-icon-animate timeMenu">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary1"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                        <h3> Enterprise<br>Edition</h3>
                    </div>
                </div>
            </a>
            <a href="<?php echo site_url('products/fiorano_esb_license')?>" title="License" target="_blank">
                <div class="col-sm-3">
                    <div class="offer-icon-animate timeMenu">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary1"></i>
                        <i class="fa fa-id-badge fa-stack-1x fa-inverse"></i>
                    </span>
                        <h3 >License</h3>
                    </div>
                </div>
            </a>




        </div>
    </div>
</div>
</section>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <?php
        $attributes=array('name'=>'contact','id'=>'esbbtn');

        echo form_open('#',$attributes );  ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Download Fiorano ESB Community Edition</h4>
            </div>
            <div class="modal-body form-group esb-model">
                <input class="" name="type" value="1" type="hidden">
                <div class="col-sm-6 padding-top-20"><input class="form-control" required="required" name="name" placeholder="Name" minlength="3" type="text"></div>
                <div class="col-sm-6 padding-top-20"> <input class=" form-control" required="required" name="email" minlength="5" placeholder="E-Mail" type="email"></div>
                <div class="col-sm-6 padding-top-20"><input class=" form-control" required="required" name="phone" minlength="6" placeholder="Phone" type="tel"></div>
                <div class="col-sm-6 padding-top-20"><input class="form-control" name="designation" placeholder="Designation" minlength="5" type="text"></div>
                <div class="col-sm-6 padding-top-20"><input class="form-control" name="company" placeholder="Company" minlength="5" type="text"></div>
                <div class="col-xs-12"><h4 style=>Please check all that applies</h4><br></div>

                <div class="col-sm-6">
                    <input name="questions[]" id="q1" class="span1 clear col-xs-1" style=" " value="I am evaluating for a planned ESB Project" type="checkbox">
                    <label style="font-size: 13px; line-height: 16px" for="q1" class="span11 col-xs-11"> I am evaluating for a planned ESB Project</label>
                </div>
                <div class="col-sm-6">
                    <input name="questions[]" id="q2" class="span1 col-xs-1" style="" value="I am interested in contributing to the open source community" type="checkbox">
                    <label style="font-size: 13px; line-height: 16px" for="q2" class="span11 col-xs-11"> I am interested in contributing to the open source community</label>
                </div>
                <div class="col-sm-6">
                    <input name="questions[]" id="q3" class="span1 col-xs-1" style="" value="I'm interested in publishing on the Microservices Gallery" type="checkbox">
                    <label style="font-size: 13px; line-height: 16px" for="q3" class="span11 col-xs-11"> I'm interested in publishing on the Microservices Gallery</label>
                </div>
                <div class="col-sm-6">
                    <input name="questions[]" id="q4" class="span1 col-xs-1" style="" value="I would like to speak to a Fiorano Expert" type="checkbox">
                    <label style="font-size: 13px; line-height: 16px" for="q4" class="span11 col-xs-11"> I would like to speak to a Fiorano Expert</label>
                </div>
                <div class="clear">&nbsp;</div>
                <div class="col-xs-12">
                    <div class="col-xs-12 nopadding"> <h4 style="">License Agreement</h4></div>

                    <input id="eula" style="height: auto !important;" name="eula" value="1" type="checkbox">
                    <label for="eula">
                        By downloading Fiorano ESB Community Edition you agree to the <a target="_blank" style="text-decoration: underline; color: blue" href="license.php">license</a>
                    </label>
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <br/>
                    <div id="recaptcha1"></div>
                    <!--<script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="6LeJWioUAAAAAF7ys3eilKD5HF_RDSXl9UUMInMB"></div>-->
                    <br/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" id="openesb-download-button" >Submit</button>
            </div>
        </div>
       <?php echo form_close();?>

    </div>
</div>



<script>

    $('#download-github').click(function(e) {
        $("#esbbtn").attr('binaries', 0);
        $("input[name=type]").val(0);

        e.preventDefault();
    });

    $('.download-binaries').click(function(e) {
        $("#esbbtn").attr('binaries', 1);
        $("input[name=type]").val(1);

        e.preventDefault();
    });

    $('#esbbtn').submit(function(e){
        e.preventDefault();
        var recaptcha = $("#g-recaptcha-response").val();
        if (recaptcha === "") {
            e.preventDefault();
            alert("Please check the recaptcha");
            return false;
        }
        var formData = new FormData($('#esbbtn')[0]);
        $.ajax({
            url: "http://www.fiorano.com/products/open-source-esb/fiorano-esb/index.php",
            type: 'POST',
            data: formData,
            async: false,
            success: function (data) { console.log(data);
                var suc= data;
                if ($("#esbbtn").is('[binaries=1]')) {
                    location.href = "<?php echo __ROOT__ ?>/downloads/fiorano-platform/community-edition/"
                } else {
                    location.href = "https://github.com/FioranoSoftware/FioranoESB/archive/master.zip"
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });

    });
</script>