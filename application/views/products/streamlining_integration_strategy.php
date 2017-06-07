<?php
$layout_data = array(
    "css" => array(),
    "lhs" => "products_lhs.htm",
    "js" => array("v3/scroller.min.js"),
    "navigation" => "navigation.php",
    "header" => "header.php",
    "footer" => "footer.php",
    "breads" => array("title"=>"What we do","img"=>"/images/v3/stripe.jpg","crumbs"=>array(array("url"=>"/products/products.php","title"=> "Products"))),
    "title" => "Application Integration, SOA Integration, EDA Integration, Application Integration Services, Enteprise Service Bus (ESB)",
    "meta" => array("keywords"=>"Application Integration, SOA Integration, EDA Integration, Application Integration Services, Enteprise Service Bus (ESB), Service Oriented Approach Integration, Event Driven Architecture Integration, unifying SOA and EDA",
        "description"=>"Fiorano is a leading provider of enterprise software for service-oriented architecture, enterprise  and business process management (BPM), including Java Messaging  Service, JMS Server, SAP integration, Messaging Queue ",
        "abstract"=>"Message-Driven SOA, SOA platform, Java Message Service (JMS), SAP Solutions, JMS Server, ESB, JMS, SOA, FioranoMQ, Enterprise Service Bus, Java Messaging Service, Service Oriented Architecture, Messaging Queue, Enterprise messaging, SAP integration, JMS performance, JMS Server, SOA platform,Busines process management, BMS")
);
//the_template('double.tpl','en_v3');
?>

<?php // CONTENT ?>



<section id="what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 do text-center"><h3>Enterprises must have an application integration strategy and a comprehensive middleware infrastructure to meet the growing needs of modern business. Click on the links below to learn how businesses are streamlining their internal processes and integrating their systems using Business Components deployed over an Enterprise Service Bus.</h3></div>
                <div class="col-sm-12 we_do">
                    <div class="col-sm-5 do_left">
                        <h3><a href="<?=__ROOT__?>/products/integration_patterns.php">Fundamental
                                    Integration Patterns</a> </h3>
                        <p>All application integrations fall into one of the following three patterns: database consistency relationships, multi-step processes and composite application patterns. Developers need to understand all three basic integration patterns use one (or more) of them as required based on the requirements of the final application.</p>
                    </div>
                    <div class="col-sm-2 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                    <div class="col-sm-5">
                        <h3><a href="<?=__ROOT__?>/products/conventional-approaches.php">The
                                    Rigidity of Conventional Approaches</a></h3>
                        <p>Traditional integration is performed using a variety of point-to-point communication mechanisms using an architecture where the end-point applications are smart but the network isn't.</p>
                    </div>
                </div>
                <div class="col-sm-12 we_do">
                    <div class="col-sm-5 do_left">
                        <h3><a href="<?=__ROOT__?>/products/middleware-integration-modern-approach.php">The
                                    Modern Approach - Business Components plugged into an Intelligent
                                    Connectivity Fabric</a></h3>
                        <p>Modern business applications are assembled by combining a set of reusable, independently developed business components. <a
                                    href="<?=__ROOT__?>/products/service-components.php">Business Component
                                Architecture</a> offers several advantages over traditional application design approaches.</p>
                    </div>
                    <div class="col-sm-2 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                    <div class="col-sm-5">
                        <h3><a href="<?=__ROOT__?>/products/esb_key_for_bca.php">The
                                    Enterprise Service Bus - Key Middleware for Business Components</a></h3>
                        <p>An ESB is a middleware platform that supports intelligent routing of information between business components distributed across a network. Unlike other platforms, ESBs support both request/ reply as well as event-driven interactions between business components on a single technology base with a shared component model and common tools for design, development, deployment, security and administration.</p>
                    </div>
                </div>


                <div class="col-sm-12 text-left">
                    <strong class="b">Learn more:</strong>
                    <ul class="pad redbullet">
                        <li><a href="<?php echo site_url('products/application_integration');?>">&nbsp;The
                                Mission of Application Integration</a></li>
                        <li><a href="<?php echo site_url('products/service_components');?>">&nbsp;Business
                                Component Architecture: Unifying SOA and EDA</a></li>
                    </ul>
            <!--    <h2 style="padding-top: 23px">Connecting Anything to Everything</h2>
                <p>Fiorano's infrastructure platform solves the most challenging integration problems across <a href="/products/Fiorano-Integration-Platform/Fiorano-Integration-Platform.php">SOA</a>, SaaS and APIs, connecting anything to everything. Whether you need real-time application integration, business process automation, better business analytics, <a href="/products/api-management.php">API management</a> or big data integration Fiorano delivers an enterprise-class integration platform both on-premise and as an elastically scalable cloud-hosted iPaaS that connects all of your disparate data sources, cloud applications and APIs with the rest of the enterprise at the speed and agility to unlock the potential of this connected era.</p>

                <h2>A Modern Integration Platform  </h2>
                <p>Unlike traditional EAI or legacy systems where the infrastructure architecture is a bottleneck, the Fiorano integration platform powers real time digital enterprises with a bimodal integration and API Management strategy that leverages the best of systematic (centralized, high-control) and adaptive (federated, high-speed) approaches to deliver solutions across cloud, on-premise and hybrid environments. <a href="/products/ESB-enterprise-service-bus/Fiorano-Cloud-Platform.php">Fiorano's architecture</a> is inherently cloud-friendly, each peer can go on premise or in a cloud instance, and thus scale elastically with the cloud. The <a href="/products/components/adapters.php">Fiorano Components</a> can be easily configured to run in the cloud or behind the firewall, depending on the enterprise infrastructure. </p>

                <h2>Real-Time Integration - technology with no delays, moving at the speed of thought</h2>
                <p>A primary challenge for any digital transformation initiative is to enable the use of real-time events to improve business process efficiency and operational sense and respond capabilities. Fiorano's peer-to-peer distributed integration platform technology allows enterprises to implement real-time systems in a linearly-scalable manner. The unique peer-to-peer message pipelining architecture ensures that data flows directly between distributed endpoints while control is managed centrally, allowing controlled and unbounded scalability. Fiorano combines the complex value-chain of ecosystems to support digital business initiatives so enterprises can sense and respond to opportunities and threats at the speed of thought.</p>

                <h2>We Understand the Integrators Dilemma</h2>
                <p> The proliferation of cloud, mobile, social and big data projects have led enterprises to shift their integration competency from the back office to the omnichannel digital world. Fiorano provides a high-speed approach to integration that enterprises require for their high-velocity IT projects which typically rely on a cloud-friendly architecture with ultra-fast time to deployment, while also allowing business users to perform lightweight, self-service data and application integration - 'citizen integration'. Unlike the more traditional integration approaches, Fiorano provides interoperability using RESTful protocols, JSON formats, <a href="/products/api-management.php">API management</a> and cloud-streams for enabling near-real-time integration across ecosystems within digital business moments.</p>
                <strong>Learn more:</strong>
                <p><img src="<?=__IMAGES__?>/ra1.gif" /> <a
                        href="<?=__ROOT__?>/products/streamlining-integration-strategy.php"><strong>&nbsp;Streamlining
                            your Integration Strategy</strong></a></p>
                <p><img src="<?=__IMAGES__?>/ra1.gif" /><a
                        href="<?=__ROOT__?>/products/service-components.php"><strong>&nbsp;Service
                            Component Architecture: Unifying SOA and EDA</strong></a></p> -->
            </div>
        </div>
</section>