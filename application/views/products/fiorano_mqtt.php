<section id="intro" class="intro-sectionMq">
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano MQTT</h1>
                <div class="col-sm-8 hidden-xs nopadding">
                <p class="productHeadDesc hidden-xs" >
                    MQTT is a light weight event and message oriented protocol that allows devices/sensors to communicate with remote systems in an efficient and asynchronous fashion.
                </p>
                </div>
            </div>

        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-left">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> products</li>
            <li> <a href="<?php echo site_url('products/fiorano_mq'); ?>">MQ</a></li>
            <li class="active">MQTT</li>
        </ul>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-xs-12 text-center submenu-main">
            <div class="col-sm-2 col-sm-offset-1 ">
                <a class=" animated-button victoria-four" href="#Overview">Architecture <i class="fa fa-arrow-down"></i></a>
            </div>

            <div class="col-sm-2">
                <a class=" animated-button victoria-four" href="#keyFeactures">Key Features <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-2 ">
                <a class=" animated-button victoria-four" href="#benifits">Benefits <i class="fa fa-arrow-down"></i> </a>
            </div>
            <div class="col-sm-2  ">
                <a class=" animated-button victoria-four" href="#usecases"> Use Cases <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-2">
                <a class=" animated-button victoria-four"href="#applications">Applications <i class="fa fa-arrow-down"></i></a>
            </div>

        </div>
    </div>
</section>
<section id="Overview" class="about-section">

    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano MQTT - Architecture </h1>
                    <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                </div>
                <div class="col-lg-5 col-sm-5 productLeft">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>

                    <p class="productDesc">MQTT is a light weight event and message oriented protocol that allows devices/sensors to communicate with remote systems in an efficient and asynchronous fashion; specially designed for resource constrained devices over unreliable networks with low-bandwidth and high-latency issues.
                    </p>
                    <p  class="productDesc">
                     Fiorano MQTT supports the MQTT 3.1.1 (now an OASIS Standard) protocol which runs simultaneously with the JMS Server (FioranoMQ).
                    </p>
                        <p  class="productDesc">MQTT uses the publish/subscribe message pattern enabling one-to-many message distribution and decoupling of applications. The MQTT protocol embedded in the Fiorano MQTT Server uses the same Topic destinations as FioranoMQ and automatically maps MQTT clients and JMS clients, alloying a Topic destination to concurrently host MQTT/JMS Publishers and Subscribers. Each MQTT packet is converted into a JMS BytesMessage for consumption by JMS subscribers, while a JMS message is converted into an MQTT packet for consumption by MQTT subscribers as required.</p>

                </div>
                <div class="col-lg-7 col-sm-7 productRight ">
                    <img class="img-responsive padding-top-50 padding-top-hidxs" src="<?php echo base_url('assets/images/products/MQTT-Solution-Overview.jpg')?>" alt="Fiorano SOA Platform">
                </div>
            </div>

        </div>
    </div>
</section>



<section id="keyFeactures" class="even-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano MQTT – Key Features</h2>
            <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> Fiorano MQTT is running on FioranoMQ server which is proven product for delivering the industry's lowest latency, highest throughput, real-time enterprise messaging.</p>
        </div>
        <div class="row padding-bottom-50 padding-bottom-hidxs">
            <div class="features">
                <div class="col-xs-12 nopadding">
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">MQTT – JMS conversion</h4>
                                <p>MQTT messages published from devices/sensors can be received by JMS subscribers also.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Client authentication based on LDAP realm</h4>
                                <p>Fiorano MQTT connection authentication can use LDAP plug-in.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Fault tolerance</h4>
                                <p>Following Fiorano specific mechanisms can be used for fault tolerance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 nopadding">
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">High Availability(HA)</h4>
                                <p>Shared High-Availability (HA) models with industry-leading performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Client-Side Persistence</h4>
                                <p>Client-side persistence for added availability in server-down conditions. This feature is also used to support two-step acknowledgement process for QOS2 level packet. Client Side persistence is used only for QOS 1 and QOS2 level packets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-recycle"></i>

                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">High connection numbers</h4>
                                <p>Thousands of devices/sensors can be connected simultaneously and send/receive message packets asynchronously.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--

<section id="benifits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano MQTT – Key Features</h2>
          <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> Fiorano MQTT is running on FioranoMQ server which is proven product for delivering the industry's lowest latency, highest throughput, real-time enterprise messaging.</p>
        </div>
        <div class="row">
            <div class="co-xs-12 nopadding">
              <div class="col-md-6">
                  <img src="<?php /*echo base_url('assets/images/products/performance.png')*/?>"/>
              </div>
                <div class="col-md-6 padding-bottom-50 padding-top-50">
                    <h4>MQTT – JMS conversion</h4>
                    <p>MQTT messages published from devices/sensors can be received by JMS subscribers also.</p>
                    <h4>Client authentication based on LDAP realm</h4>
                    <p>Fiorano MQTT connection authentication can use LDAP plug-in.</p>
                    <h4>Fault tolerance</h4>
                    <p>Following Fiorano specific mechanisms can be used for fault tolerance.</p>
                    <h4> HA (High Availability</h4>
                    <p>Shared High-Availability (HA) models with industry-leading performance.</p>
                    <h4>Client-Side Persistence</h4>
                    <p>Client-side persistence for added availability in server-down conditions. This feature is also used to support two-step acknowledgement process for QOS2 level packet. Client Side persistence is used only for QOS 1 and QOS2 level packets.</p>
                    <h4>High connection numbers</h4>
                    <p>Thousands of devices/sensors can be connected simultaneously and send/receive message packets asynchronously.</p>


                </div>
            </div>
        </div>
    </div>
</section>-->


<section class="offer-section offer-section-three section service-page-three-offer odd-section" id="benifits" >
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano MQTT – Benefits</h2>
            <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row">
            <div class="ofer-items">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <h3>Cost effective</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                    </span>
                            </div>
                        </div>
                        <div class="offer-details">
                            <p>  It saves your devices' resource requirements like power and bandwidth. Thereby increasing the battery life and enhancing remote connection ability of sensors and devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <h3>Mobile Friendly </h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                                <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile-phone fa-stack-1x fa-inverse"></i>
                    </span>
                            </div>
                        </div>
                        <div class="offer-details ">
                             <p>Being light weight messaging protocol makes it the preferred protocol for communication among Mobile apps.</p>
                         <br><br>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <h3>  Reliable message delivery</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                               <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                 <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                        </div>
                        <div class="offer-details  ">
                            <p>The asynchronous nature or publish/subscribe messaging pattern provides greater reliability of message delivery, thus ensuring zero message loss.</p>
                          </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-offer-item row">
                        <h3> Easy Integration</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                               <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                 <i class="fa fa-gears fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                        </div>
                        <div class="offer-details  ">
                            <p>Message agnostic and Standards-based technology makes it easier to integrate different applications, devices and even legacy systems.</p>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="even-section" id="usecases">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano MQTT – Use Cases </h2>
        </div>
        <div class="row">
            <div class="col-md-6 padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">

                 <h4>IoT (messaging broker/hub between devices/sensors and back-end applications) </h4>
                <br>
                <p> Fiorano MQTT receives data (messages) from thousands of devices/sensors and the delivers them to MQTT and JMS based back-end processing. Fiorano MQTT can then pass this data to different enterprise
                    applications such as ERP, PLM, MES, CRM and/or Big Data processing systems, via Fiorano ESB.</p>
            </div>
            <div class="col-md-6 padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">
                <img class="col-xs-12" src="<?php echo base_url('assets/images/products/IoT.png')?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">
                <img class="col-xs-12" src="<?php echo base_url('assets/images/products/M2M.png')?>"/>
            </div>
            <div class="col-md-6 padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">
                <h4>M2M (broker/hub for Machine to Machine messaging and for mediating backend processing) </h4>
                <br>
                <p>Fiorano MQTT can be used as broker for machine to machine real-time messaging. A back-end processing system can be positioned (as shown in the figure)
                    for performing the mediation functions like data mapping, data code conversion, encryption/decryption etc.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">

                <h4>Local Hub (simple hub for devices/sensors messaging) </h4>
                <br>
                <p> Fiorano MQTT can be used as a simple messaging hub between devices/sensors.</p>
            </div>
            <div class="col-md-6 padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">
                <img class="img-responsive" src="<?php echo base_url('assets/images/products/Local-Hub.png')?>" width="350"/>
            </div>

        </div>
    </div>

</section>
<section id="applications">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano MQTT – Real world applications</h2>
        </div>
        <div class="row padding-top-50 padding-bottom-50 padding-bottom-hidxs padding-top-hidxs">

            <div class="col-md-3 col-sm-6">
                <div class="single-feature row">
                    <div class="offer-icon">
                        <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tablet fa-stack-1x fa-inverse"></i>
                    </span>
                        </div>
                    </div>
                    <br>
                    <h4>Remote monitoring </h4>
                    <p class="text-justify">
                        There are various places that are inaccessible to humans but still require constant monitoring. From Tsunami buoys reading sea waves to pipelines and railway tracks spread across thousands of miles, all require constant monitoring for their uninterrupted service. Fiorano MQTT is the ideal choice for such applications as it can operate
                        under constrained network and requires less power, drastically reducing the cost of managing a similar always connected network.
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-feature row">
                    <div class="offer-icon">
                        <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-building fa-stack-1x fa-inverse"></i>
                    </span>
                        </div>
                    </div>
                    <br>
                    <h4>
                        Manufacturing
                    </h4>
                   <p class="text-justify">
                       In the current scenario of organizations with scaled up production lines and automated software/ hardware handling the production units, sensors and control units are of paramount importance as they regulate the production. With Fiorano
                       MQTT, it is possible to ensure the reliable and fast message transfer between the different devices and their control units.
                   </p>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-feature row">
                    <div class="offer-icon">
                        <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-chain fa-stack-1x fa-inverse"></i>
                    </span>
                        </div>
                    </div>
                    <br>
                    <h4>Supply Chain Management</h4>
                   <p class="text-justify">
                       The supply chain management primarily involves different parties receiving and sending shipments. The process can be automated using grid applications and devices sending information about delivery/ items received and forwarded etc.
                       The shipment's safety can also be ensured en route by tracking the navigation/accelerometer/proximity sensor etc.
                   </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="single-feature row">
                    <div class="offer-icon">
                        <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile-phone fa-stack-1x fa-inverse"></i>
                    </span>
                        </div>
                    </div>
                    <br>
                    <h4>Mobility</h4>
                    <p class="text-justify">
                        The mobile devices are evolving everyday and are no longer considered as a mere communication device any more. Along with communications, these devices support a host of other functions as well.
                        But due to size and weight constraints, they don't have enough power to support all the functions all day long. Another issue is the number of concurrent users which is responsible for low latency of networks. The ability of Fiorano MQTT to work efficiently under these conditions (less availability of power and bandwidth) makes it suitable messaging protocol for mobile apps communication.
                    </p>
                </div>
            </div>
    </div>

</section>
<div class="icon-bar-left">
    <a class="" href="#Overview" >Architecture</a>
    <a class="" href="#keyFeactures" >Key Features</a>
    <a class="" href="#benifits" >Benefits</a>
    <a class="" href="#usecases" >Use Cases </a>
    <a class="" href="#applications" >applications</a>
</div>