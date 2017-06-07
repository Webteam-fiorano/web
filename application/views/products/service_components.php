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
                <div class="col-sm-12 do">
                    <div class="col-sm-12">
                        <h3>Service Components</h3>
                        <p>Service Components are software programs or a set of programs and data that implement functions that are relevant in a business context. For instance, while updating a table in a database has only a technical meaning, the process of updating a customer address - whatever that involves technically - has a business meaning. Hence "update customer address" or "check inventory in warehouse" are Service Components since they have business semantics as opposed to technical semantics. Service Component Architecture (SCA) refers to the design and composition of business applications from modular Service Components.</p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-12">
                        <h3>Service Oriented Architecture (SOA)</h3>
                        <p>SOA refers to the design of applications via components (often referred to as "services") that expose interfaces that can be called by other client applications; multiple components can be chained together via request/reply calls to create a larger "composite application" which could potentially be considered a logical module within a larger business process. Unfortunately, the primary focus of SOA has been the concept of accessing functions in remote components to create a distributed application based on request/reply semantics. SOA infrastructure typically does not mandate any particular component-model that guides developers to create software modules based on a coarser level of granularity that matches higher-level business functions rather than lower-level technical functions. As such, typical SOA applications focus more on the notion of distributed computing rather than on the creation of reusable, modular Service Components, resulting in software systems that are difficult to develop, deploy, modify and change.</p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-12">
                        <h3>Event Driven Architecture (EDA)</h3>
                        <p>EDA refers to the design of applications as a collection of components that exchange events to perform business-functions. The major difference between SOA and EDA is that in an SOA, all intermediate Service Components suspend their operation until the relevant request/reply call returns, while in an EDA all Service Components continue to operate since their focus is on processing incoming messages and publishing outgoing messages; EDA is thus typically more efficient than an SOA approach due to pipelined, concurrent processing of events by multiple software modules chained together (since there is no waiting for blocked calls to return). Unfortunately, current EDA approaches suffer from the same problem as SOA since the focus is more on the event-exchanges between distributed software components rather than on the modularity and granularity of the components participating in the EDA process. </p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-7">
                        <h3>Service Component Architecture (SCA)</h3>
                        <p>SCA is an architectural approach in which application developers decompose problems into smaller modules, each of which executes a well-defined business function and is implemented as an encapsulated component. The interactions between Service Components may be either request/reply (SOA) or via events (EDA). Service Component Architecture thus moves the focus of application design from the concept of distributed computing towards the intelligent design of modular Service Components. A single SCA application may involve multiple request/reply calls as well as multiple event-exchanges. As such, SCA logically unifies SOA and EDA into a single framework, since the distributed nature of the interaction between Service Components in an application is now overshadowed by the notion of software modularity. Finding the right level of granularity at which to implement a Service Component now becomes more important than the request/reply or event-driven exchanges of information between the components themselves.</p>
                    </div>
                    <div class="col-sm-5 hidden-xs do_image"><img src="/assets/images/resources/sca.jpg" class="img-responsive" width="600px" height="600px"/></div>
                </div>

                <div class="col-sm-12 text-right">
                    <b class="b">Learn more:</b>
                    <p>
                        <img src="<?=__IMAGES__?>/ra1.gif" /><a href="<?php echo site_url('products/service_components_characteristics');?>">
                            <strong>&nbsp;Characteristics of Service Components</strong></a>
                    </p>
                    <p>
                        <img src="<?=__IMAGES__?>/ra1.gif" />
                        <a href="<?php echo site_url('products/service_component_architecture_benefits');?>">
                            <strong>&nbsp;Benefits of Service Component Architecture (SCA)</strong>
                        </a>
                    </p>
                    <p><img src="<?=__IMAGES__?>/ra1.gif" />
                        <a href="<?php echo site_url('products/application_integration');?>">
                            <strong>&nbsp;The Mission of Application Integration</strong>
                        </a>
                    </p>
                    <p>
                        <img src="<?=__IMAGES__?>/ra1.gif" />
                        <a href="<?php echo site_url('products/streamlining_integration_strategy');?>">
                            <strong>&nbsp;Streamlining Integration Strategy</strong>
                        </a>
                    </p>
                </div>
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