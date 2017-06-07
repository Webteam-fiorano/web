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



<section id="fiorano_healthcare_framework_itk">
        <div class="container healthcare_shadow">
            <div class="row">
                <div class="col-sm-12 healthcare_top">
                    <div class="col-sm-6 do_image healthcare_top_left text-center">
                        <h2><b>Fiorano ITK Framework</b></h2>
                    </div>
                    <div class="col-sm-6 healthcare_top_right">
                        <h1><b>T</b></h1>
                        <p>he Fiorano Healthcare Framework is the backbone for integrating new and old systems within the healthcare environment. Built on the proven speed, scalability, and reliability of Fiorano's Enterprise Service Bus (ESB), the framework is compatible with the NHS Interoperability Toolkit (ITK).</p>
                        <p>The Interoperability Toolkit is an NHS Technology Office initiative aimed at accelerating the National Program for IT with its move from a "replace all" to a "connect all" approach. The ITK is the conduit for this change.</p>
                        <p>"The ITK consists of the development and delivery of a set of technical standards and frameworks for interoperability, covering transactional and analytical services." </p>
                        <p>[<a href="http://www.connectingforhealth.nhs.uk/systemsandservices/interop/background" target="_blank">http://www.connectingforhealth.nhs.uk/systemsandservices/interop/background</a>]</p>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="col-sm-12 healthcare padding-top-20">
                        <p>The Healthcare Framework consists of:
                        <ul>
                            <li>The Fiorano ITK Middleware for interconnection of ITK compliant systems.</li>
                            <li>Fiorano ITK <a href="<?=__ROOT__?>/products/components/adapters.php">Adapters</a>
                                to integrate legacy and existing systems.</li>
                            <li>Capabilities for complex event processing, analytical services
                                and discrete health applications to help remove duplication of
                                functionality commonly found across multiple systems related to
                                discharge summary reporting, patient tracking, patient registry and so
                                on.</li>
                        </ul>
                        </p>
                        <p>The adaptability and scalability of the Fiorano Healthcare
                            Framework makes it suitable for integrating a wide range of systems both
                            small and big. These include systems located-within a GP practice,
                            within a hospital as well as connecting many practices and hospitals
                            together over a wide area.
                        <p><strong class="b">Fiorano ITK Middleware</strong><br />
                            This is middleware that is a fully compliant ITK broker that can route
                            or broadcast HL7 and CDA messages (as well as PDFs, diagnostic images
                            and so on) in a simple but highly configurable manner. Integrating a new
                            ITK compliant system into an existing environment with the Fiorano
                            Healthcare Framework can be achieved in minutes.</p>
                        <p><strong class="b">Fiorano ITK Adapters</strong><br />
                            Since the Fiorano Healthcare Framework is built on the Fiorano ESB,
                            integrating existing non-ITK compliant systems is simple due to the
                            plethora of Aapters that come pre-built within Fiorano ESB - the visual
                            design tool makes this easy for an in-house IT team, but should a bit of
                            help be required then Fiorano's 24/7 technical team are always at hand.
                        </p>
                        <p><strong class="b">Fiorano ITK Capabilities</strong><br />
                            While integration can improve communication within and between
                            healthcare organizations, Fiorano understands that patient care is
                            maximised by taking a holistic view of the treatment they receive and
                            have, therefore, introduced the concept of &quot;Capabilities&quot; to
                            extend the healthcare solution. For example, an organization's
                            effectiveness is measured by reporting the through-put and waiting-times
                            across departments. With the Fiorano Healthcare Framework and the
                            Complex Event Processing functionality within Fiorano ESB, it is
                            possible to add capabilities to construct reports from analysis of
                            messages as they pass through. Over time, as more services are added to
                            the ITK specification, this enables complex reporting and analysis of a
                            patient's treatment throughout an organization. This assists in
                            answering questions such as: &quot;How long did the A&amp;E patient have
                            to wait between being admitted and receiving pain relief for their
                            broken wrist?&quot;</p>
                    </div>
                    <div class="col-sm-12 do_image healthcare">
                        <img class="img-responsive" src="<?=__IMAGES__?>/solution_health01.jpg"  width="450px" height="450px" />
                    </div>
                    <div class="col-sm-12 healthcare padding-top-20">
                        <p>The depth of the information analyzed by the framework grows
                            linearly with the growth of the ITK message vocabulary. Easily
                            configurable Fiorano flows analyzes information thus allowing the
                            creation of a number of reports including:</p>
                        <p>
                        <ul>
                            <li>average throughput of a department</li>
                            <li>average waiting time from referral to consultation</li>
                            <li>time between specific medical treatments given to a particular
                                patient</li>
                            <li>re-occurring health problems of a particular patient</li>
                            <li>... and more</li>

                        </ul>
                        </p>
                        <p>Another issue solved by the Fiorano Healthcare Framework is the
                            maintenance and accuracy of patient records. By using ITK Spine Mini
                            Services, the Fiorano Healthcare Framework can analyze and report on
                            discrepancies between a patient's demographic information that is passed
                            between systems and which is held in the PDS on the SPINE.</p>
                        <p class="do_image" style="text-align: center"><a
                                    href="<?=__IMAGES__?>/solution_health_hq02.jpg" target="_blank"><img
                                        src="<?=__IMAGES__?>/solution_health02.jpg" class="img-responsive" /></a></p>
                        <p>Fiorano's peer-to-peer architecture is unique in its ability to
                            allow a system to scale seamlessly from a single hospital deployment to
                            the national deployment of connected systems.</p>

                        <p class="do_image" style="text-align: center"><a
                                    href="<?=__IMAGES__?>/solution_health_hq03.jpg" target="_blank"><img
                                        src="<?=__IMAGES__?>/solution_health03.jpg" class="img-responsive" /></a></p>
                        <p>
                        <p>Additionally, the Fiorano ESB exposes a web portal to monitor and
                            manage the integration of the healthcare systems. A few features of the
                            portal include:</p>
                        <ul>
                            <li>role based access security</li>
                            <li>alerting of potential performance issues</li>
                            <li>tracking of healthcare messages as they travel between systems</li>

                        </ul>
                        </p>
                        <p class="do_image" style="text-align: center"><a
                                    href="<?=__IMAGES__?>/solution_health_hq04.jpg" target="_blank"><img
                                        src="<?=__IMAGES__?>/solution_health04.jpg" class="img-responsive" /></a></p>
                        <br/><br/>
                        <strong class="h3"> Related Resources</strong>
                        <p class="do_image" style="padding-left:20px;"><a href="<?=__ROOT__?>/whitepapers/fiorano-itk-framework.php" ><img src="<?=__IMAGES__?>/acrobat.gif" class="img-responsive"/> Download ITK Whitepaper</a></p>

                    </div>



                    </div>
<!--                <div class="col-sm-12">-->
<!--                    <div class="col-sm-6">-->
<!--                        <h4>Real-Time Integration - technology with no delays, moving at the speed of thought</h4>-->
<!--                        <p>Unlike traditional EAI or legacy systems where the infrastructure architecture is a bottleneck, the Fiorano integration platform powers real time digital enterprises with a bimodal integration and API Management strategy that leverages the best of systematic (centralized, high-control) and adaptive (federated, high-speed) approaches to deliver solutions across cloud, on-premise and hybrid environments. <a href="/products/ESB-enterprise-service-bus/Fiorano-Cloud-Platform.php">Fiorano's architecture</a> is inherently cloud-friendly, each peer can go on premise or in a cloud instance, and thus scale elastically with the cloud. The <a href="/products/components/adapters.php">Fiorano Components</a> can be easily configured to run in the cloud or behind the firewall, depending on the enterprise infrastructure. </p>-->
<!--                    </div>-->
<!--                    <div class="col-sm-6">-->
<!--                        <h4>We Understand the Integrators Dilemma</h4>-->
<!--                        <p> The proliferation of cloud, mobile, social and big data projects have led enterprises to shift their integration competency from the back office to the omnichannel digital world. Fiorano provides a high-speed approach to integration that enterprises require for their high-velocity IT projects which typically rely on a cloud-friendly architecture with ultra-fast time to deployment, while also allowing business users to perform lightweight, self-service data and application integration - 'citizen integration'. Unlike the more traditional integration approaches, Fiorano provides interoperability using RESTful protocols, JSON formats, <a href="/products/api-management.php">API management</a> and cloud-streams for enabling near-real-time integration across ecosystems within digital business moments.</p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
</section>
<script>
    $(document).ready(function(){
        $(".healthcare_top_left,.heathcare_top_right").css({'height':($(".healthcare_top").height()+'px')});
    });
</script>