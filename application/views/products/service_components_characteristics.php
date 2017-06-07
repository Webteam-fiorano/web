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
                <div class="col-sm-12 do text-center">
                    <h4>Business components are software modules that follow the semantics of business-functions, as distinct from technical components that are typically implement a single technical function. For instance, "update customer address" is a service component since it has a meaning relevant in a business context, while "update database table" is a technical component since it implements a technical function that has no direct business relevance. The process of developing applications as a collection of service components that exchange information via request/reply or events is referred to as Service Component Architecture (SCA). SCA applications can be modified, managed and changed with little or no programmer intervention, making the SCA approach significantly more attractive for the deployment of business systems in comparison with traditional monolithic application design.<br><br>SCA has three important characteristics:<b>Encapsulation, Modularity and Integrated Support for Services and Events.</b></h4>
                </div>

                <div class="col-sm-12 do">
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>

                    <div class="col-sm-9">
                        <h4>Encapsulation </h4>
                        <p>A well-known feature from the days of object-oriented programming in the late 70s - refers to the separation of the interface and implementation of a software component. The external interfaces of a service component expose the relevant functions offered by the component, while the internal implementation details are 'hidden' from unauthorized external access. Business components can be "client-based", in which case they have service-interfaces that can be called by external programs to invoke functions, or event-driven, in which case they have event-descriptors that have to be matched at runtime for an event to be consumed at an input port. Since the only access to a service component is via its external interfaces, the internal implementation of the component can be changed without affecting any applications using the component. As such, it is possible to replace an existing service component in a SCA application with a new component that shares the same interfaces but has a different internal implementation. The separation of interface from implementation allows service components to be designed, developed and tested by independent teams of developers in different geographical locations provided that the interface contracts between the components remain fixed. Encapsulation also supports versioning, configuration management, dynamic deployment and a host of other useful features for the development of modern distributed business applications</p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-9">
                        <h4>Modularity </h4>
                        <p>It refers to the process of decomposing a problem into a set of smaller problems. Business components are modular in the sense that each service component implements a relevant business function. The internal implementation of single Service Component module typically consists of a series of steps or "activities" which are chained together to implement the information flow required by the component.<br><br>The Fiorano SCA platform is unique in that it incorporates a service component model that allows developers to specify request/reply or event-driven external interfaces, together with BPEL (Business Process Execution Language) activities for the internal implementation of the component. A Fiorano service component is thus coarse-grained, since the internal implementation may be a BPEL flow with any level of complexity. Multiple coarse-grained components can be combined in a "higher-level" SOA or EDA flow, enabling flexible SCA applications. </p>
                    </div>
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>

                    <div class="col-sm-9">
                        <h4> Integrated Support for Services and Events</h4>
                        <p>The Fiorano SCA platform supports service components with both service-interfaces (supporting SOA) and event-descriptors (supporting EDA), leading to a common design and deployment model for both services and events. Importantly, the Fiorano platform implements a single metadata repository for service components (including request/reply and event-driven interfaces), together with shared development and management tools, enabling componentized SCA applications that combine services and events in a common architecture model.</p>
                    </div>
                </div>

                <div class="col-sm-12 text-left">
                    <strong class="b">Learn more:</strong>
                    <ul class="redbullet">
                        <li><a href="<?php echo site_url('products/service_component_architecture_benefits');?>">&nbsp;Benefits of Service Component Architecture</a></li>
                        <li><a href="<?php echo site_url('products/application_integration');?>">&nbsp;The Mission of Application Integration</a></li>
                        <li><a href="<?php echo site_url('products/streamlining_integration_strategy');?>">&nbsp;Streamlining your Integration Strategy</a></li>
                        <li><a href="<?php echo site_url('products/service_components');?>">&nbsp;Service Component Architecture: Unifying SOA and EDA</a></li>
                    </ul>
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