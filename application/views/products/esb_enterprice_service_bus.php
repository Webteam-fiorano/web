<!-- Intro Section -->
<section id="intro" class="intro-section-esb" >
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano ESB </h1>
                <div class="col-sm-8 hidden-xs nopadding">
                <p class="productHeadDesc hidden-xs" >
                    Create a secure, agile message driven enterprise back plane  with distributed, parallel data flow between end points for dynamic scalability and extensibility with Fiorano's speedy peer to peer architecture

                </p>
                </div>
            </div>
            <div class="productHeadDownload col-sm-4 ">
                <!-- <a href="#" id="download-github" class="btn-danger btn btn-large downHeadBtn"><i class="fa fa-large fa-github"></i> Download Source &nbsp; &nbsp; &nbsp; &nbsp;</a><br><br>-->
                <a href="<?php echo __ROOT__?>/downloads/download_fiorano.php" class="download-binaries btn-danger btn btn-large downHeadBtn"><i class="fa fa-large fa-download"></i> Download Product &nbsp; &nbsp; &nbsp;</a><br><br>
                <a href="<?php echo __ROOT__?>/pdf/fiorano_esb_brochure.pdf" class="btn-success btn btn-large downHeadBtn"><i class="fa fa-large fa-arrow-down"></i> Download Datasheet&nbsp; &nbsp;</a>
            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-left">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('products'); ?>">Products</a></li>
            <li> <a href="<?php echo site_url('products/fiorano_integration'); ?>">Fiorano Integration</a></li>
            <li class="active"> Fiorano ESB</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12 text-center submenu-main">
            <div class="col-sm-3  ">
                <a class=" animated-button victoria-four" href="#Overview">Overview <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-3">
                <a class=" animated-button victoria-four" href="#architecture">Architecture <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-3">
                <a class=" animated-button victoria-four" href="#keyFeactures">Key Features <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-3 ">
                <a class=" animated-button victoria-four" href="#benifits">Benefits <i class="fa fa-arrow-down"></i> </a>
            </div>

        </div>
      </div>
</section>
<!-- About Section -->
<section id="Overview" class="about-section">
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB (Enterprise Service Bus)</h1>
                    <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                </div>
                <div class="col-lg-5 col-sm-5 productLeft">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <p class="productDesc">
                        An ESB acts as a high-speed expressway for data flow in an enterprise, enabling seamless communication among mutually interacting software applications
                        <br>
                        Fiorano ESB obviates point-to-point integration efforts and integrates heterogeneous applications, databases, cloud and other systems streamlining the complex architecture of an enterprise.
                        Organizations can deploy the light-weight but powerful and scalable Fiorano ESB as their IT infrastructure backbone to enable real-time information across the enterprise.
                    </p>
                </div>
                <div class="col-lg-7 col-sm-7 productRight">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 padding-bottom-50 "><img class="img-responsive" src="<?php echo base_url('assets/images/products/Fiorano-ESB-Microservice-Top.png')?>" alt="Fiorano SOA Platform"></div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
     </div>
</section>
<section id="architecture" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB – Technical Architecture</h1>
                    <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">The Fiorano ESB implements a brokered, peer-to-peer (often referred to as super peer) system architecture, which combines the management benefits of centralized hub-and-spoke systems with the performance benefits of fully distributed peer-to-peer systems, while avoiding the particular disadvantages of both of these individual approaches.</p>
                </div>
                <div class="row text-center componentdiv">
                    <div class="col-md-3">
                        <div class="col-xs-12 padding-bottom-20">
                        <img src="<?php echo base_url('assets/images/products/Enterprise-Class-Backbone.png')?>" class=" col-xs-6 col-xs-offset-3 img-circle componentImg"/>
                        </div>
                            <h4 class="service-heading">Enterprise Class Backbone</h4>
                        <p class="text-muted productDesc">Underlying the ESB architecture is an enterprise-class, standards-based messaging backbone which provides secure and reliable communications between any number of applications and distributed integration processes across the enterprise. Using Fiorano's unique distributed peer-to-peer JMS implementation, the backbone allows distributed integration processes and composite
                            applications to scale to meet the requirements of the most demanding global enterprise networks.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="col-xs-12 padding-bottom-20">
                        <img src="<?php echo base_url('assets/images/products/Efficiency.png')?>" class="col-xs-6 col-xs-offset-3 img-circle componentImg"/>

                        </div>
                        <h4 class="service-heading">Efficiency</h4>
                        <p class="text-muted productDesc">ESB peers at the end-points of the network allow distributed microservices to exchange events concurrently, enabling all of the parallelism in an integration process to be exploited. For instance, an order management system in a manufacturing plant can check its inventory status even as the sales-force management system is updating the order database. Data transformations and other computations required by distributed integration processes are performed concurrently at the end-points of the network.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="col-xs-12 padding-bottom-20">
                        <img src="<?php echo base_url('assets/images/products/Unbounded-Scalability.png')?>" class=" col-xs-6 col-xs-offset-3 img-circle componentImg"/>
                        </div>
                            <h4 class="service-heading">Unbounded Scalability</h4>
                        <p class="text-muted productDesc">With dispersed computation and parallel message-flow between nodes, ESB peers scale naturally and seamlessly with the addition of new peer nodes and Enterprise microservices across the network.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="col-xs-12 padding-bottom-20">
                            <img src="<?php echo base_url('assets/images/products/Ease-of-Administration.png')?>" class=" col-xs-6 col-xs-offset-3 img-circle componentImg"/>
                        </div>

                        <h4 class="service-heading">Ease of Administration</h4>
                        <p class="text-muted productDesc"> In a Fiorano ESB network, operations such as event-handling, security authentication and administration are performed by centralized servers. ESB peers at the end-points of the network are easily administered via tools connected to the centralized ESB Enterprise Server.</p>
                    </div>
                </div>
                <div class="section-header">
                    <p class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; font-size: 25px !important;">Fiorano's brokered peer-to-peer architectural approach thus combines the benefits of both peer-to-peer systems and hub-and-spoke systems in a single cohesive architecture for a scalable enterprise backbone.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="keyFeactures">
    <div class="container">
        <div class="row">
            <div class="row benifitsData">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offer-section offer-section-two section" id="keyFeactures">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB – Key Features</h2>
            <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB is an Enterprise Service Bus (ESB) built on a Microservices architecture that enables enterprises to integrate applications and processes in real-time with a federated bimodal approach to integration. This unique architectural design attributes a host of features to Fiorano ESB:</p>
        </div>
        <div class="row">
            <div class="container">
                <div class="row nopadding">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container nopadding ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                            <div class="list-group">
                                <a href="#" class="list-group-item active text-center">
                                    Message-Driven Microservice Model
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    Distributed, Dynamic Deployment and Management
                                </a>
                                <a href="#" class="list-group-item text-center">
                                   Event-Process Orchestration
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    Lifecycle Management and Versioning
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    Support for multiple protocols and transports
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                            <!-- flight section -->
                            <div class="bhoechie-tab-content active">

                                <h3> Message-Driven Microservice Model</h3>
                                <div>
                                    <p> Defines a coarse-grained, message-driven model for Enterprise microservices enabling each microservice to execute as an independent entity that is not tied into the context of execution until runtime, simplifying the componentization of existing Web Services, Database applications, Legacy, J2EE and .NET software assets, enhancing their reuse within event-driven
                                        business processes and automatically maximizing the parallelism concurrency within each business integration process.</p>
                                </div>
                            </div>
                            <!-- train section -->
                            <div class="bhoechie-tab-content">
                                <h3>Distributed, Dynamic Deployment and Management</h3>
                                <div>
                                    <p>Enables microservice deployment across the ESB infrastructure from any centralized location, allowing each individual microservice to be independently configured, managed,
                                        updated and redeployed without disrupting other services or processes.</p>
                                    </ul>
                                </div>
                            </div>
                            <!-- hotel search -->
                            <div class="bhoechie-tab-content">
                                <h3>Event-Process Orchestration</h3>
                                <div>
                                    <p>By enabling message-flows between distributed microservices to be set up dynamically by the underlying middleware, allows the logical process design to be mapped directly to physical services distributed across the ESB, empowering non-technical "citizen integrators" to compose, deploy and modify simple business processes.</p>
                                </div>
                            </div>
                            <div class="bhoechie-tab-content">
                                <h3> Lifecycle Management and Versioning</h3>
                                <div>
                                    <p>  Configuration management of labeled microservices and event-processes allowing controlled deployment across network end-points together with automatic transitions, with customizable service and process profiles, across the software lifecycle (development, QA, staging, production)</p>
                                </div>
                            </div>
                            <div class="bhoechie-tab-content">
                                 <h3>Support for multiple protocols and transports</h3>
                                <div>
                                   <p> Allows users to choose the transport used for event-flows between distributed microservices at runtime, providing the flexibility to use multiple transports and protocols across any distributed event-process.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section id="benifits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB – Benefits</h2>
          <!--  <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>
        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-archive"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Realigned Enterprise Resources</h4>
                            <p>With Fiorano Integration, your enterprise can shift its focus from non-productive maintenance plans to new innovation and value creation projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Reduced Cost and Simplified Architecture</h4>
                            <p>Fiorano's easy-to-use and deploy platform dramatically reduces development costs. Enterprises that have deployed the Fiorano Integration backplane have achieved 40-80% productivity gains compared to other solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Increased visibility for business value</h4>
                            <p>Enterprise software resources when organized as services make it easier to expose functionalities for internal and external consumption. Apart from reducing time-to-market, this also increases organization transparency and customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Increased Agility</h4>
                            <p>Business processes rely on underlying software. With rapidly evolving markets, business process implementations need to be modified in near-real time, a process easily facilitated by the flexibility of Fiorano's Microservice-based architecture.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-language"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Faster time-to-market</h4>
                            <p>Easy service orchestration and choreography allows rapid deployment of new integration flows enabling organizations to quickly adapt to evolving external business and environmental events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 500ms; animation-name: fadeInUp;">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Re-use your assets</h4>
                            <p>Software re-use is the primary benefit of Microservices and with Fiorano Integration Platform is used as a means to reduce the cost and time of new application development. Microservices increases IT responsiveness and facilitate competitive business change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<?php /*
<section class="offer-section offer-section-three section service-page-three-offer" id="resource">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano ESB – Resources</h2>
            <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row">
            <div class="ofer-items">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <a href="<?php echo site_url('resources/online_tutorials')?>" class="read-more">
                        <h3>Integration Demo & Video</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-video-o fa-stack-1x fa-inverse"></i>
                    </span>
                            </div>
                        </div>
                        </a>
                        <div class="offer-details align-left">
                            <ol>Fiorano Integration Platform
                                Simplifying Integration
                            </ol>
                            <ol> Database Synchronization</ol>
                            <ol> HL7 Integration Flow</ol>
                            <ol>  SAP Integration</ol>
                            <ol> Temenos T24 - Fiorano ESB Integration</ol>

                            <a href="<?php echo site_url('resources/online_tutorials')?>" class="read-more">Read All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <a href="<?php echo __ROOT__?>/products/esb-enterprise-service-bus/resources.php" class="read-more">
                        <h3>Whitepapers </h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                                <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-word-o fa-stack-1x fa-inverse"></i>
                    </span>
                            </div>
                        </div>
                        </a>
                        <div class="offer-details">
                            <h4><a href="<?php echo  __ROOT__?>/whitepapers/soaesb/rest-based-soa.php">REST-Based SOA</a></h4>
                            <p> Efficient, Dynamic, Flexible SOA Implementations</p>
                            <h4><a href="<?php echo  __ROOT__?>/whitepapers/fiorano_message_driven_soa.php">Message-Driven SOA</a></h4>
                            <p> Getting rapid results with SOA</p>
                            <br>
                            &nbsp;
                            <br>
                            <a href="<?php echo __ROOT__?>/products/esb-enterprise-service-bus/resources.php" class="read-more">Read All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <a href="<?php echo __ROOT__?>/products/esb-enterprise-service-bus/resources.php" class="read-more">
                        <h3>Case Studies</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                               <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                 <i class="fa fa-file-powerpoint-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                        </div>
                        </a>
                        <div class="offer-details">
                            <h4><a href="<?php echo  __ROOT__?>/customers/casestudies/united-states-coast-guard.php">United States Coast Guard</a></h4>
                            <p>  Fiorano ESB, Enterprise Service Bus forms backbone of SOA infrastructure at USCGs</p>
                            <h4><a href="<?php echo  __ROOT__?>/customers/casestudies/commercial-bank-of-africa.php">CBA</a></h4>
                            <p>  Powered by Fiorano ESB, Commercial Bank of Africa revolutionizes mobile-banking</p>
                            <br>
                            <a href="<?php echo __ROOT__?>/products/esb-enterprise-service-bus/resources.php" class="read-more">Read All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>*/?>
<section id="demoRequest" class="odd-section">
    <div class="banner">
        <div class="container">
            <div class="row reqBar">
                <div class="col-lg-6">
                    <h2 style="margin-top:50px;">Request a demo - Fiorano ESB</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons ">
                        <li class="alignright" style="float: right;">
                            <a href="<?php echo  __ROOT__?>/products/esb-enterprise-service-bus/request-demo.php" class="btn btn-success btn-lg "><i class="fa fa-arrow-down fa-fw"></i> <span class="network-name">Request a Demo</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
</section>


<div class="icon-bar-left">
    <a class="" href="#Overview" >Overview</a>
    <a class="" href="#architecture" >Architecture</a>
    <a class="" href="#keyFeactures" >Key Features</a>
    <a class="" href="#benifits" >Benefits</a>

</div>
