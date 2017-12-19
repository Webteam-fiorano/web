<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/9/2017
 * Time: 5:59 PM
 */
?>

<section class="casestudy-logistics">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Logistics Services  – GlobalTranz
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">GlobalTranz</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12">

        </div>
        <div class="col-sm-9 col-xs-12  nopadding">

            <div class="col-xs-12">
                <h3 class="casestudyh3">
                    Logistics leader GlobalTranz Digitizes with
                    the Fiorano Integration/API Platform.
                </h3>
                <hr>
                <h4><small>Fiorano ESB coupled with Fiorano API Management streamline
                        operations at GlobalTranz</small></h4>
                <hr>

                <h4>Customer Profile</h4>
                <p>
                    GlobalTranz is a US based logistics technology innovator and
                    freight management company. A market leader in innovative
                    logistics technology with multiple solutions, GlobalTranz
                    dynamizes freight management by optimizing efficiency of
                    movement and matching shipper demand with carrier capacity
                    in real-time.
                </p>
                <p>
                    GlobalTranz has 25000+ shippers shipping millions of
                    packages across North America. The company recently won
                    the ACE award for fast growth, demonstrating the continued
                    success of its technology-driven freight brokerage solutions
                    and services.
                </p>
                <h4>Business Problem</h4>
                <p>
                    Innovations in technology are changing
                    business models across all verticals and
                    creating new and advanced operational
                    techniques. In the logistics industry,
                    web-services and SOA are slowly replacing EDI, while APIs
                    provide new levels of interoperability and reusability.
                </p>
                <p>
                    The business of LTL freight and shipping includes multiple
                    interactions with third-party players like agents, shippers,
                    customers and other stakeholders who play their respective
                    roles in the entire process. These 3rd party agents use
                    heterogenous software and message formats to communicate
                    with GlobalTranz's TMS (Transport Management Solution).
                    Point-to-point integrations between TMS and third-party
                    service providers were development intensive and had to
                    follow the complete SDLC (software development lifecycle)
                    before going live.
                </p><p>
                    The IT team at GlobalTranz required a solution to accelerate
                    interface and connector development. Developer productivity
                    was hampered since much of their time was consumed in
                    maintenance of programmed-from-scratch interfaces.
                    GlobalTranz was looking for a single platform to efficiently
                    create, deploy and monitor these interfaces.
                </p>
            </div>
            <div class="col-xs-12 padding-top-20">

                <h4>Solution</h4>
                <p>
                    After evaluating different vendors for application integration,
                    GlobalTranz chose Fiorano to provide the middleware for its
                    Microservice-centric architecture. The Fiorano ESB, coupled
                    with Fiorano API Management was used to consolidate
                    heterogeneous application integration endpoints.
                </p><p>
                    Fiorano consultants and solution architects assisted the IT
                    team at GlobalTranz to create use-cases for integrating
                    multiple applications. The team was productive within weeks
                    and now manages over 90% of all development work, reducing
                    the requirement for outside consultants.
                </p><p>
                    The end goal for a majority of GlobalTranz use-cases is to
                    create interface points with third-party services to connect back
                    into their proprietary Transportation Management Solution
                    (TMS) software without having to develop point to point
                    solutions.
                </p>
                <p class="text-center"> <img src="<?php echo __IMAGES__?>/globalTranz_it_architecture.png"  width="700"/>
                </p>
                <p style="text-align: center;"> GlobalTranz IT Architecture</p>
                <p>
                    Fiorano Restful endpoints are used by 3rd party applications
                    to asynchronously send data in multiple formats. Fiorano
                    processes pick up data from multiple third party channels like
                    FTP, Databases, Web services etc., transform and processes
                    the data and finally send the data to GlobalTranz internal
                    proprietary systems.
                </p><p>
                    The Fiorano platform is used for implementing variety of
                    business use cases related to shipment booking, tracking,
                    customer credit information processing and more:
                </p>
                <p>1. <b>Collections notes data synchronization between TMS
                        and a third-party collection software: </b>Collections software
                    notes are updated in a third-party FTP server on a daily push
                    interval. Fiorano processes pull files securely from FTP, ingest
                    the file into a flat file schema, process data and transform it to
                    call internal REST services to store data at a customer level
                    in TMS. This data is used by GTZ Sales users to pull
                    customer accounts and view collections notes (positive
                    balances etc.).
                </p><p>
                    2. <b>Handling inbound shipment tracking data: </b> Shipment
                    tracking data is provided by third party vendors. Data is
                    posted to Fiorano Restful services asynchronously in XML
                    and JSON formats. Fiorano processes update all the
                    intermediate systems and make the shipment tracking data
                    available in TMS.
                </p><p>
                    3. <b>Integration with a third-party document imaging
                        vendor: </b>GTZ works with a third-party document imaging
                    vendor for accounts payable and accounts receivable. When
                    users require a proof of delivery documents, the accounting
                    team handles it through a third-party vendor. Fiorano eventprocesses
                    handle automated document pushes to the vendor
                    and synchronize these with Globaltranz internal file stores.
                </p><p>
                    4. <b>Handling claims: </b> Third party carriers send claims
                    information through email. Automated Fiorano processes
                    fetche emails related to shipment and damage claims, extract
                    details using regular expressions and match these from a
                    database. Upon finding a match, multiple Restful services are
                    invoked to update information in the TMS.</p>
                <h2>Solution Highlights</h2>
                <p>
                    Fiorano ESB provides the interoperability and acts a unified
                    business backplane for GlobalTranz. Additionally, Fiorano API
                    management brings along its own set of features such as:
                </p>
                <ul><li>
                        <p>
                            <b> Security:</b> Security descriptors in the API
                            layer provide GlobalTranz's IT team with
                            a fine-grained control over the access of
                            an API by different end-users/usergroups.
                        </p></li><li><p>
                            <b>Metering:</b> For each API, a count is maintained of the number
                            of times the API has been called, together with a list of which
                            applications have made the calls. It is possible to set metering
                            limits as well as charges on a per-call (or other) basis for all
                            API calls.
                        </p></li><li><p>
                            <b>Monitoring:</b>  This allows system administrators to track which
                            APIs are using the most resources (CPU, memory etc.) and to
                            graph the related information to identify hotspots and
                            contention. Using this information, system administrators may
                            decide, for instance, to split API call-load over multiple API
                            Management servers (provided the underlying solution allows
                            for this scaling-out process).
                        </p></li><li><p>
                            <b>Management: </b>A high level view of the overall implement of API
                            Management across the enterprise, including a synopsis of the
                            security, metering and monitoring processes running across
                            multiple servers within and outside the enterprise firewall.
                        </p></li></ul>
                <p>
                    <b>"</b>Through use of the Fiorano platform for new
                    integration development endeavors we have been able
                    to speed up development time significantly through the
                    expansive out of the box component library in
                    combination with the ability to add custom code or
                    components as needed. Development of new
                    integrations under a consolidated platform has also
                    resulted in a reduction in knowledge transfer needs
                    from developer to developer. This has allowed us to
                    further expand upon internal best practices and design
                    methodology standards all driven around a single
                    unified integration framework.<b>"</b>
                </p>
                <p style="text-align:right; margin-top:30px;"><b>  Brett Garrick,
                        <br>
                        Integration Specialist,<br>
                        GlobalTranz</b></p>

                <h2>Result and Benefits</h2>

                <p>
                    <b>Mission-critical Integrations </b> -
                    GlobalTranz has met all the
                    milestones set for their integration
                    project timelines. After completing the
                    Fiorano training, the IT team developed more than 40
                    critical integration flows within 2 months. Without Fiorano,
                    such integrations would have taken 8-9 months for
                    development.
                </p><p>
                    <b>Enhanced Flexibility </b>- Fiorano API management
                    allows the application layer at GlobalTranz to be more
                    flexible. Instead of modifying the code at the backend,
                    developers can now make changes in the API layer by
                    applying policies. This enables the IT team to be more
                    responsive to change requests.
                </p><p>
                    <b>Increased Security </b>- Fiorano API Management is used as
                    an entry point for all the services exposed by Globlatranz. It is
                    used to add additional levels of security, to apply rules and
                    monitoring and to assign API keys to identify and track
                    consumers.
                </p><p>
                    <b>Standardized APIs</b> - A unified platform for developing and
                    maintaining integrations across the organization has not only
                    reduced the need for inter and intra team knowledge transfer,
                    but has also helped in creating standardized APIs. This
                    standardization of APIs further helps third-party developers in
                    deploying new applications.
                </p>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>About Fiorano Software</h4>
                <p>
                    Founded in 1995, Fiorano is a trusted provider of enterprise integration middleware, high performance messaging and distributed systems. Fiorano's innovative event-driven SOA platform integrates applications and complex technologies into an enterprise nervous system. Fiorano's hybrid Cloud-ESB integrates applications across SaaS, PaaS and on-premise worlds.

                    Global leaders including Federal Bank, Commercial Bank of Africa, NASA, US Coast Guard, POSCO, British Telecom, AT&T Labs, Vodafone and L'Oréal have deployed Fiorano's solutions to drive innovation through open, standards-based, event-driven SOA applications yielding unprecedented productivity.
                </p>
            </div>
        </div>

        <div class="col-sm-3 padding-top-50 margintop-50">
            <div class="col-sm-12 col-xs-6 user-casestudy padding-top-20 padding-bottom-20">

                <img style="" src="<?php echo __IMAGES__?>/globalTranz-logo.png" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "GlobalTranz decided on use of the Fiorano platform
                    as a mechanism for alleviating the pain points of our
                    convoluted legacy application structure. With the main
                    area of focus being the consolidation of application
                    integration points, the implementation of the Fiorano
                    platform thus far has been truly valuable in terms of
                    adding a consistent and manageable mechanism for
                    handling these integrations. By migrating existing
                    legacy integrations to the Fiorano platform we have
                    seen instant improvements in monitoring capabilities,
                    efficiency, and exception management. This includes
                    FTP-driven use cases, REST Service use cases, and
                    Database-driven use cases to name a few"
                </p>
                <p class="text-right">
                    <b>
                        Mr. Brett Garrick<br>
                        Integration Specialist<br>
                        GlobalTranz<br>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/globalTranz-case-study.pdf" target="_blank">
                    <img src="<?php echo base_url('assets/images/casestudies/casestudy-download-pdf.jpg')?>" class="img-responsive">
                </a>

            </div>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12 text-center align-center">
            <img src="<?php echo base_url('assets/images/casestudies/casestudy-bottom-image.jpg')?>" class="text-center">
        </div>
    </div>
</section>

