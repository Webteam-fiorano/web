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
                <div class="col-sm-12 do text-center"><h4>The process of developing applications as a collection of Service Components that exchange information via request/reply or events is referred to as Service Component Architecture (SCA). In contrast to traditional monolithic applications that are designed as a single whole, SCA applications consist of a coalition of Service Components that communicate either via events (EDA) or via request/reply calls (SOA). SCA offers several key advantages over the traditional approach of monolithic application design:</h4></div>
                <div class="col-sm-12 we_do">
                    <div class="col-sm-5 do_left">
                        <h4>Flexibility of Development</h4>
                        <p>Service Components are easier to develop because the semantics of each independent Service Component are significantly less complex than the overall of a single, (relatively large) monolithic application; each Service Component can be developed by a different team of developers, each of whom focus only on their component without having to know the details of work done by others. </p>
                    </div>
                    <div class="col-sm-2 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                    <div class="col-sm-5">
                        <h4>Reuse</h4>
                        <p> Since each Service Component has well-defined interfaces, each component can be developed, tested and debugged independent of the other components. This not only speeds up project implementations but, in the case of well-designed Service Components, also leads to significantly enhanced reuse.</p>
                    </div>
                </div>
                <div class="col-sm-12 we_do">
                    <div class="col-sm-5 do_left">
                        <h4>Dynamic Deployment and Runtime Modification/Replacement</h4>
                        <p>Service Components can be dynamically deployed to remote nodes at runtime, and components within a process can be easily replaced by new or updated components, further reducing the time taken to modify or change an existing process in response to business requirements.</p>
                    </div>
                    <div class="col-sm-2 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                    <div class="col-sm-5">
                        <h4>Configuration Management and Version Control</h4>
                        <p>Service Components facilitate version control and dynamic configuration management, allowing fine-grained control over deployments across the enterprise. </p>
                    </div>
                </div>
                <hr>
                <div class="col-sm-12 do">
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>

                    <div class="col-sm-9">
                        <h2>Service Component Domains </h2>
                        <p>Enterprises that choose the SCA approach will have multiple domains of Service Components to ease the task of developing and deploying componentized SOA and EDA applications. For instance, the finance department may have a set of reusable Service Components that only make sense in that domain; likewise, the manufacturing department may have its own unique set of Service Components developed to optimize the processes within that department.<br><br>While it may not be organizationally or technically possible to effectively reuse all Service Components across multiple departments, most large organizations will federate their domains to maximize their reuse of component designs and implementations. In many cases, even when an enterprise has multiple packaged-applications and/or complex legacy systems, it is possible to create a Service Components that access the relevant modules to permit reuse. Even though multiple component domains are an absolute requirement for most enterprise over time, a single set of base Service Components can address the needs of over 70% of most small to medium-sized integration projects. The Fiorano ESB platform incorporates this base set of components "out of the box" allowing a large number of integration projects to be implemented by business analysts with little or no programmer intervention.</p>
                    </div>
                </div>

                <div class="col-sm-12 text-left">
                    <strong class="b">Learn More: </strong>
                    <ul class="pad redbullet">
                        <li><a href="<?php echo site_url('products/application_integration');?>">&nbsp;The Mission of Application Integration</a></li>
                        <li><a href="<?php echo site_url('products/streamlining_integration_strategy');?>">&nbsp;Streamlining your Integration Strategy</a></li>
                        <li><a href="<?php echo site_url('products/service_components');?>">&nbsp;Service Component Architecture: Unifying SOA and EDA</a></li>
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