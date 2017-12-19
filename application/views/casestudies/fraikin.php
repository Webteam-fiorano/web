<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/9/2017
 * Time: 4:52 PM
 */
?>


<section class="casestudy-logistics">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Logistics – Fraikin
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Fraikin</li>
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
                    Fiorano SOA powers electronic traffic fine management and inventory management for French logistics giant, Fraikin
                </h3>
                <hr>
                <h4>Customer Profile</h4>
                <p>Fraikin is one of the largest commercial vehicle fleet services company
                    in Europe, providing fleet management, contract hire and rental
                    solutions, together with other support services, to both the private
                    and public sector. Fraikin operates 230 integrated service facilities
                    across Belgium, France, Luxembourg, Slovakia, Spain, Switzerland,
                    Poland and the UK, employing over 3,000 staff. Today, the Group
                    collectively manages in excess of 64,000 vehicles.</p>

                </p>
                <p>Fraikin is a leading provider of commercial
                    vehicles fleet services in Europe, including contract hire, fleet
                    management and rentals with its international Head quarters in Paris.</p>
                <p>
                    Fraikin's strength in delivering transport solutions lies in building
                    strong business-to-business relationships to ensure it meets its
                    customer's requirements for utmost satisfaction. This success has
                    earned Fraikin a long list of major clients, from food manufacturers to
                    paper merchants, as well as high-tech logistics companies and parcel
                    carriers.</p>
                <p>Fraikin has deployed Fiorano SOA Platform as an integration platform for several projects.
                </p>
                <h3 class="casestudyh3">Project 1: Fiorano SOA powers electronic Traffic Fine Management for French Logistics Giant</h3>
                <hr>
                <h4>Business Problem</h4>
                <p>
                    Fraikin, being a leading vehicle fleet service provider in Europe, has a
                    fleet of 40,000 vehicles running on the roads of France. With such a large fleet on road, incidents of traffic violation are not uncommon.
                    The traffic fines, including parking fines and speeding fines, issued to
                    Fraikin are to the extent of 12,000 fine tickets per year. </p>
                <p>
                    Until recently, before the computerization of the fine management
                    system, the fine tickets were sent to Fraikin by post. On receipt of
                    fine tickets by Fraikin, they used the details of fine tickets to
                    manually search the clients' credentials for the hired vehicles, and
                    the fine tickets were sent to them.</p>
                <p>
                    With the implementation of an electronic system of fine management by
                    the Government of France, Fraikin was given a set of specifications to
                    develop an application to facilitate electronic communication between
                    the logistics giant and the Government. The government specifications
                    included mandatory communication of Fraikin's fleet to the Government
                    twice a year, communication of Fraikin's fleet modification every week
                    and quick processing of traffic penalties or fines. The biggest
                    challenge for Fraikin was to build a rapidly deployable integrated
                    platform, which would meet all the requirements specified by the
                    government. </p>
            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>Fraikin has a multi-platform environment including Windows machines and
                    an IBM z/OS mainframe Main client records and vehicles records are stored in the mainframe DB2 database. In order to build a scalable
                    integration platform and to leverage on  existing hardware,
                    Fraikin decided to deploy Fiorano Middleware Platform SOA.</p>
                <p>Fraikin used the Fiorano Platform to develop a series of event processes to exchange and process traffic fines.</p>

                <strong class="b">Event Process Flow 1</strong>: The first
                process flow was constructed to enable communication of Fraikin's fleet
                to the French police, twice a year. This process converts the flat file
                provided by the mainframe into an XML file, which is verified against
                the government specified schema. If the file is correct and error-free,
                it is sent to government records via FTP.</p>
                <p><strong class="b">Event Process Flow 2</strong>: An event
                    process flow was built to meet the government requirement of
                    communication of fleet modification every week. This event process is
                    similar to the first flow, except its frequency is weekly. These
                    flows help the French Police keep records of the vehicle fleet of the
                    largest logistics services company in Europe.</p>
                <p><strong class="b">Event Process Flow 3</strong>: An event
                    flow was built to receive fine notifications by the French Traffic
                    Authority. This flow retrieves and processes the XML file sent by the
                    French Police on a daily basis. This XML file is split into messages
                    and each message becomes a Web Service request sent to the mainframe,
                    where the DB2 database is updated.</p>
                <p><strong class="b">Event Process Flow 4</strong>: Another
                    process flow was constructed to facilitate Fraikin's response to the
                    government, communicating the credentials of the companies hiring
                    Fraikin's fleet at the time of penalty. This flow is a continuation of
                    the previous flow, which extracts the information to every demand, as
                    updated on the DB2. A flat file with responses to the demands sent by
                    French Police are being written by the mainframe, and this flat file is
                    being converted to XML, which is then submitted to the Police via FTP.</p>
                <p><strong class="b">Event Process Flow 5</strong>: An event
                    process was created to manage errors in reporting. There have been
                    incidences of rejection of responses by Fraikin, sent in event process
                    4. In such cases, the event process 5 receives the errors and processes
                    them. </p>
                <p class="c text-center"> <img alt="Fraikin Data Center" src="<?php echo __IMAGES__?>/cs_fraikin_01.jpg" border="0"> </p>


                <h4>Benefits</h4>

                <p>

                    Some of the benefits of Fiorano powered Fraikin's communication platform are
                </p>
                <ul>

                    <li>Fiorano enabled Fraikin to quickly put in place an
                        infrastructure that was compliant with the new Government regulation of
                        electronic communication.</li>

                    <li>Accurate and error-free record management of its extensive fleet of vehicles for the French Traffic Police.</li>

                    <li>Quick and error-free processing of traffic fine
                        notification, including receipt of the notifications, response to the
                        latter while directing the Police to the respective companies hiring Fraikin
                        fleet at the time of traffic violation.</li>


                </ul>


                <h3 class="casestudyh3">Project 2: Fiorano SOA Platform facilitates Inventory and Facility Management for Fraikin </h3>
                <hr>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Business Problem</h4>
                <p>
                    Fraikin operates over 220 integrated service facilities across Europe
                    and uses the Fiorano SOA Platform, to manage its complex warehouse
                    inventory across these locations. With parts information and inventory
                    levels changing with every purchase / usage at various warehouses
                    spread across different geographic locations, the challenge lies in
                    effectively updating and maintaining stock of hundreds of these parts.
                    With various legacy systems already in place, there was a strong need
                    for a flexible, versatile integration platform that would encompass the
                    existing legacy applications and provide an easy means of access to
                    these for newer technologies. </p>


                <p class="c text-center"><a href="<?php echo __IMAGES__?>/cs_fraikin_03_hr.jpg"><img alt="Image" src="<?php echo __IMAGES__?>/cs_fraikin_03.jpg" border="0"></a>
                </p>


                <h4>Solution</h4>
                <p>
                    Fiorano SOA platform with its diverse set of adapters is being used to
                    unify and merge data from different sources and formats into  one
                    unified repository. The data (as raw text) across different transports
                    including emails, flat files over FTP, shared file systems are culled
                    into the Enterprise Service Bus (ESB), converted to appropriate formats
                    using the powerful set of transformation adapters and routed to
                    appropriate data channels. Fraikin's existing legacy applications are
                    integrated into this platform and exposed to the standards gateway using Fiorano's
                    standard based pre-build adapters. This lets Fraikin's partner and
                    service facility applications to co-exist with the legacy
                    applications. </p>


                <p class="text-center"> <img alt="Image" src="<?php echo __IMAGES__?>/cs_fraikin_02.jpg" />
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

                <img style=" padding-left: 19%;" src="<?php echo __IMAGES__?>/fraikin_logo.jpg" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "We worked closely with Fiorano while implementing the integration platform
                    at Fraikin. With Fiorano, we were able to meet Government-mandated
                    communication specifications and timelines. Fraikin's communication
                    with the Government is now in sync with the specified regulations and
                    their traffic fine processing system is streamlined to meet the
                    demanding traffic penalty scenario in France."ss
                </p>
                <p class="text-right">
                    <b>
                        Franck Lerivrain<br/>
                        Development Manager<br/>Fraikin<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/CS_Logistics_FSOA_EMEA_Fraikin.pdf" target="_blank">
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

