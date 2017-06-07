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
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                    <div class="col-sm-9">
                        <h4>What is Application Integration and why is it difficult?</h4>
                        <p>Application Integration is defined as the process of making independently designed application systems work together. Integration is generally difficult because, in every case, developers must reconcile disparate information architectures involving different data, process and object models. In addition, in most cases, developers must also make the overall solution operate across multiple operating systems, databases and middleware technologies.</p>
                        <p>According to research firm Gartner, application integration accounts for approximately 35 percent of the total cost of application design, development and maintenance in a typical enterprise - large, medium or small. Since integration is vital to all modern enterprises, the crucial issue is how to integrate, not whether to integrate. What are the most effective organizational strategies, software tools and design-patterns for integration? There is now general consensus in the industry that the base infrastructure for integration within the enterprise will be the <a href="/products/ESB-enterprise-service-bus/Fiorano-ESB-enterprise-service-bus.php">Enterprise Service Bus (ESB)</a> and that in the months and years to come applications will increasingly be composed from Service Components, which form the basis for both SOA (Service Oriented Architecture) and EDA (Event Driven Architecture).</p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-9">
                        <h4>Why application integration is mandatory for modern businesses</h4>
                        <p>Integration is expensive and difficult, but enterprises do it anyway because they have no choice. The motivation of integration typically comes from outside the IT department and is driven by multiple factors including enterprise business strategy, outside forces such as regulatory bodies (Sarbanes Oxley, HIPPA, Basel 2), or business partners to enable B2B relationships. Although enterprise managers understand that better integration technology and design will save money in the long term, most senior managers rarely spend money on integration just to clean up processes within the IS department. Managers are typically unable or unwilling to invest today to reap unquantifiable benefits several years into the future. As a result, integration is undertaken on a piecemeal basis, and only in response to urgent business needs, which tend to vary over time. Today, integration is driven by the need to respond to laws (Sarbanes Oxley, HIPPA, Basel 2), mergers and acquisitions, requirements for self-service portals for customers and employees, <a href="/products/Fiorano-B2B-TradeConnect/Enterprise-Level-B2B-Gateway.php">B2B collaboration</a> and others.</p>
                    </div>
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                    <div class="col-sm-9">
                        <h4>Reasons that do not drive integration projects</h4>
                        <p>Application integration is seldom performed for purely technical reasons, such as the consolidation of disparate middleware platforms into a few strategic choices, or for providing a technology base for creating flexible application systems in the future. Other technical reasons such as saving money in the IT department, reducing IT Staff, using the latest technology and conformance to the latest emerging IT standards are also typically not enough to convince most senior managers to spend resources on integration. For these reasons and more, integration projects are typically executed mainly in response to urgent or relatively urgent business requirements.</p>
                    </div>
                </div>
                <div class="col-sm-12 text-right">
                    <strong>Learn more:</strong>
                    <p><img src="<?=__IMAGES__?>/ra1.gif" /> <a
                                href="<?php echo site_url('products/streamlining_integration_strategy');?>"><strong>&nbsp;Streamlining
                                your Integration Strategy</strong></a></p>
                    <p><img src="<?=__IMAGES__?>/ra1.gif" /><a
                                href="<?php echo site_url('products/service_components');?>"><strong>&nbsp;Service
                                Component Architecture: Unifying SOA and EDA</strong></a></p>
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