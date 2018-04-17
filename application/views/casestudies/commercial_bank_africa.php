
<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/20/2017
 * Time: 11:31 AM
 */?>
<section class="casestudy-finance">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Financial Service – Commercial Bank of Africa
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Aboitiz Power</li>
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
                    Powered by Fiorano ESB, Commercial Bank of Africa revolutionizes mobile-banking;
                </h3>
                <hr>
                <h4>M-Shwari logs 40,000 customers per day crossing Ksh1 billion
                    in transactions a month with core banking integration from Fiorano</h4>
                    <hr>
                <h4>Customer Profile</h4>
                <p>Commercial Bank of Africa Ltd (CBA) was founded in 1962 in Dar es Salaam, Tanzania and immediately thereafter established branches in Nairobi and Mombasa in Kenya, and in Kampala, Uganda. With the nationalization of banks in Tanzania, CBA was incorporated in Kenya in 1967. CBA is one of East Africa's largest privately owned banks and has operations in Kenya and Tanzania.</p>
                <p>CBA in partnership with Kenya's top mobile operator Safaricom (a partner of Vodafone Group) recently launched a revolutionary product, <em>M-Shwari</em>, a suite of banking products that are offered to more than 15 million Safaricom M-PESA customers via their mobile phones. <em>M-Shwari</em> has given CBA the platform to offer a much needed service to all market segments through mobile-banking services. These electronic accounts are processed by CBA which allows its customers to operate banking services entirely on a mobile phone, saving them from visiting a branch. All a customer needs is a handset and to be registered on M-PESA; there are no forms or additional documents required to sign up to <em>M-Shwari</em>.</p>
                <h4>Business Problem</h4>
                <p>The core banking systems infrastructure CBA had in place did not support initiatives to integrate mobile services effectively. To facilitate this launch, CBA first needed a way to integrate its core banking applications with other enablers. The mobile service, <em>M-Shwari</em>, enables real-time "Know Your Customer" verification and also uses algorithms based on the customer's credit history together with usage of Safaricom products to determine loan eligibility and maximum loan amounts. <em>M-Shwari</em> has various banking options for its users like customer activation, deposits, withdrawals, account statement, loan applications and paybacks, etc. All mobile-initiated transactions hit the Safaricom server (hosted by Vodafone) from where they are routed to the web service hosted on the CBA server. </p>
                <p>The IT team at CBA realized that integration with multiple systems would require monumental investments in hardware, software and consulting efforts, putting their entire project behind schedule. The point-to-point nature of connections between these different applications would make scalability and management a challenge and introduce multiple security vulnerabilities. Such a system would fall short of enterprise performance especially with increasing number of mobile banking users.</p>

                <h4>Solution Architecture</h4>
                <p>To successfully launch <em>M-Shwari</em>, CBA required a solution with the ability to seamlessly integrate with its partner Safaricom Limited (Vodafone subsidiary) mobile money platform, scaling to large number of users. Fiorano SOA Platform (Service Oriented Architecture) was chosen as the platform, allowing CBA to expose its Core Banking transactions as web service flows besides ensuring guaranteed message delivery and scalability. Fiorano ESB (Enterprise Service Bus) within Fiorano SOA integrates tightly with the <a href="/solutions/banking/temenos-t24-core-banking-integration.php">Core banking Integration</a> Framework (based on Temenos T24) used by CBA, moving integration from a one-to-one approach in CBA's core banking solution into a many-to-many integration hub. </p>
                <p>Fiorano built two flows on Fiorano SOA platform to integrate different systems, servers and databases: </p>

                <ul>
                    <li><b>Synchronous - Web service flow</b>
                        <p>Synchronous web services provide an immediate response to an invocation, send data and then receive the reply in the same synchronous invocation. All transactions are exposed as web services and Fiorano T24 outbound components are used to integrate with the T24 instance.</p>
                    </li>
                    <li><b>Asynchronous - Flow for intimating users on the status of Customer activation and loan application</b>
                        <p>Asynchronous messaging styles are useful for environments in which a service, such as a loan processor, can take a long time to process a client request. Asynchronous services also provide a more reliable, fault-tolerant and scalable architecture. When a request is sent for new customer activation or a loan application, a "Know Your Customer" verification is performed at the Government of Kenya Integrated Population Registry system (IPRS) and then the Fiorano custom-built Temenos T24 inbound adaptor in the Fiorano flow picks up the status updated record and sends the message to the Web Service hosted at Safaricom, which finally informs the user on the status of their loan (or other) application.</p>
                    </li>
                </ul>
                <p class="c"><a href="<?php echo __IMAGES__; ?>/commercial-bank-of-africa-cba-fiorano-esb-hd.jpg" target="_blank" title="Click to enlarge"><img src="<?php echo __IMAGES__; ?>/commercial-bank-of-africa-cba-fiorano-esb.jpg" alt="Fiorano ESB - Commercial Bank of Africa (CBA)"></a><br/><span class="h4 text-center">Fiorano SOA deployment at CBA</span></p>

                <h4>Solution Features</h4>
                <p>The Fiorano SOA platform provides several powerful features that make business process automation simple and quick.</p>
                <ul>
                    <li><strong class="b">Core Banking Integration:</strong>
                        <p>Fiorano SOA, effortlessly integrates Core Banking applications with multiple systems making Fiorano a fundamental part of banking architecture. Fiorano's architecture supports an incremental deployment model, enabling deployments to be more modular and standardized, less risky and less expensive.
                        </p></li>
                    <li><strong class="b">Peer-to-peer architecture: </strong>
                        <p>Fiorano SOA's distributed, peer-to-peer architecture linearly increases performance, since Fiorano supports in-built messaging at the end-points with each end-point able to communicate directly with other end-points, enabling parallel data-flows. This provides the capability to handle an increasing number of users with no degradation in performance. </p></li>
                    <li><strong class="b">Ability to easily expose Web Services to core applications: </strong>
                        <p>Fiorano's WS Stub component configuration from a WSDL uses the "top to bottom" approach. Existing WSDL are used to develop Web Services which is the simplest way to integrate with external systems (such as the Safaricom/Vodafone server in the case of CBA). </p></li>
                    <li><strong class="b">Availability of T24 Adaptors:</strong>
                        <p>Fiorano, in collaboration with Temenos, has available T24 adaptors which offer a codeless integration with the T24 Core Banking applications server, dramatically cutting down on implementation time. </p></li>
                    <li><strong class="b">Availability of FioranoMQ<sup>&reg;</sup> - The JMS compliant platform: </strong>
                        <p>Fiorano's FioranoMQ<sup>&reg;</sup>, a JMS-compliant messaging backbone underpins the Fiorano SOA/ESB platforms, improving operational efficiency, business agility and performance. FioranoMQ delivers with lowest latency, highest throughput real-time enterprise messaging (asynchronous and synchronous). </p></li>
                </ul>

                <h4>Business Benefits</h4>
                <ul class="pad">
                    <li><strong class="b">Quick launch of new product</strong> - Delivering <em>M-Shwari</em> to market fast was an immediate goal. With Fiorano SOA implemented in less than 5 weeks, CBA was able to launch its new product, <em>M-Shwari</em> in a hitherto unprecedented time frame. </li>
                    <li><strong class="b">Zero-coding environment</strong> - Fiorano's code-free integration approach dramatically reduces implementation time, allowing banks to bring new capabilities to market faster. </li>
                    <li><strong class="b">User friendly interface</strong> - Fiorano ESB allows CBA's core banking system to be integrated with any third-party application via a user friendly point and click tools. It also provides the ability to remotely monitor the applications with complete visibility across the enterprise. </li>
                    <li><strong class="b">Increase Business Agility</strong> - Fiorano SOA simplifies application maintenance and new application development, resulting in a positive customer experience with a dramatically reduced likelihood of outages.</li>
                    <li><strong class="b">Increased Productivity, Reduced Costs</strong> - With the Fiorano platform integrating different components, transformation code does not need to be written across multiple applications where these components are re-used. This leads to a direct increase in productivity and reduced overall cost of development. </li>
                    <li><strong class="b">High volume with low latency</strong> - CBA was able to easily handle an unexpectedly large volume of transactions and data. Over 15-20 million messages sent each day were delivered with high speed and low latency.</li>
                    <li><strong class="b">Easily scalable</strong> - Fiorano SOA provides a reliable messaging framework and a platform to design scalable and reusable solutions which can be critical with business expansion, mergers and acquisitions.</li>
                </ul>

                <h4>Result</h4>
                <p>When interviewed Dennis Volemi, CBA's Head of Technology, New Business Ventures said <em>"Fiorano's SOA platform built on the Fiorano ESB, Enterprise Service Bus and backed by Fiorano's solid JMS messaging product, FioranoMQ has been critical in enabling the speed and efficiency with which we have been able to roll out this innovative product (<em>M-Shwari</em>) and handle the unexpected large volume of transactions and data. <em>M-Shwari</em> has exceeded all the performance KPIs that we set out to achieve in the first 90 days"</em>. </p>
                <p>An average of 40,000 Kenyans have signed up for the <em>M-Shwari</em> services daily since its launch on November 27th, 2012. By December 27th, barely a month after its launch, <em>M-Shwari</em> customers had borrowed over Sh123 million and deposited in excess of Sh976 million in savings. Looking at the popularity of the new product, <em>M-Shwari</em> is expected to continue to signing up new customers at the same or a faster rate going forward.</p>
                <p>Sustaining this continuous growth without out compromising on the quality of service was one of the prime challenges CBA had to overcome. Happy with success in Kenya, CBA is looking to expand its services to other countries with Fiorano's SOA platform.</p>

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

                <img style=" padding-left: 26%;" src="<?php echo base_url('assets/images/casestudies/commercial-bank-africa-logo.png')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Fiorano has been critical in enabling the speed and efficiency with which we have been able to roll out this innovative product (M-Shwari) and handle the unexpected large volume of transactions and data. <br/>M-Shwari has exceeded all the performance KPIs that we set out to achieve in the first 90 days."
                </p>
                <p class="text-right">
                    <b>
                        Dennis Volemi,<br/>
                        Head of Technology,<br/>
                        Commercial Bank of Africa<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/CBA-Mobile-Banking.pdf" target="_blank">
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
