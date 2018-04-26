<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/9/2017
 * Time: 4:36 PM
 */
?>

<section class="casestudy-finance">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Financial Services – Forex
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Forex</li>
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
                    Fiorano enables a leading Forex company to achieve immediate tangible benefits of higher productivity and lower costs
                </h3>
                <hr>
                <h4>Customer Profile</h4>
                <p>Forex Capital Market is the largest non-bank Futures Commission Merchant (FCM) in the world that specializes solely in spot Forex. It services over 50,000 retail clients and over 400 institutional clients from more than 80 countries, making its trading volume virtually unrivaled in the online currency market.</p>
                <h4>Business Problem</h4>
                <p>
                    The Forex Company offers traders access to the global currency market pioneering the process of dealing directly from live, streaming two-way prices thus enabling traders to take advantage of the liquidity of the currency market.
                </p>
                <p>With over 50,000 clients with an average monthly trading volume that exceeded $70 billion, the Company needed not only the right technology but one that could be implemented quickly and efficiently. In order to achieve this, it had to bring in modularity to its solutions and ensure 100% message delivery and scalability, all at a reduced cost.</p>
                <ul>
                    <li><strong style="color:#CC3300;">Scalability Issues</strong><br/>
                        The Company's client base has been growing rapidly. In order to support an increased number of simultaneously connected users, it needed to add one or more instances of Middleware Servers with the ability to handle high volume messaging at large scale. The backend system needed to have enough resources to handle a large number of Middleware "black boxes".</li>
                    <li><strong style="color:#CC3300;">Nonflexible Architecture</strong><br/>Current messaging architecture did not permit building of next generation business applications founded on a component-based architecture.</li>
                    <li><strong style="color:#CC3300;">Unreliable Messaging during Remote Connectivity</strong><br/>
                        With clients worldwide, a major concern has been users in areas where internet connectivity is less than reliable, and where users experience greater latency. The Company had to address this issue by setting up Proxy Servers in these geographic regions to minimize any latency and ensure reliable message delivery.</li>
                    <li><strong style="color:#CC3300;">Proprietary Messaging Frameworks</strong><br/>
                        Proprietary frameworks are generally not accepted by larger financial institutions. Therefore, in order to extend customer base and market leadership, there was a need to shift to a standards-based messaging system.</li>
                </ul>
                <p>Managing the inefficient and non-scalable infrastructure involved significant custom programming, leading to difficulty in transition to a component-based solution as well as lost revenues.</p>
                <p>Considering the expected surge in the number of clients downloading the Company's trading application, the requirement called for highly scalable and reliable infrastructure that would also enable the Company's monolithic architecture to achieve modularity via a component based architecture. </p>


            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>
                    The message flow across the Company's system(s) was based on a business entity approach, where a business object (entity) is delivered from component to component as a separate message. The Fiorano Enterprise  Service Bus (ESB) was incorporated to bring in modularity to the solutions and ensure 100% message delivery and scalability. The message-based ESB has helped the Company ensure that business messages flow with 100% reliability. At the same time, this messaging system has helped shield the communication level details from the business application module. Using this concept, an independent, linearly scalable, peer-to-peer message transport solution was built.</p>
                <p>The figure below shows how a Fiorano ESB Service is able to communicate with the back-end system by wrapping the Server side runtime library of the Company's business application. At the same time, the service is able to communicate with other services across the network using peer-to-peer JMS messaging supported by the Fiorano Peer Server (which embeds the world's fastest JMS server: FioranoMQ). Running the same service on top of a Fiorano Peer Server in contrast to a raw JMS Server provides innumerable benefits, which include remote deployment, monitoring, and debugging. </p>
                <div class="c text-center"><img src="<?php echo __IMAGES__?>/CS_FOREX.jpg"></div>

                <br>
                <p>Fiorano ESB addressed each of the technical issues that in combination achieved the objectives set out by the Company.</p>
                <h4>Benefits</h4>
                <p>
                    The solution was designed to take advantage of Fiorano's component based approach by wrapping the most important System components into Fiorano components based on the JMS API. Fiorano truly decomposed the monolithic Trading application, which helped run the future Trading System in a distributed manner, thereby providing more reliability and scalability and preventing the need to handle even a single point of failure.
                </p>
                <ul>
                    <li><strong style="color:#CC3300;">Modularity achieved via Component based Architecture</strong><br/>
                        Fiorano ESB's component-based architecture enabled the de-coupling of different customer interfaces thereby enabling new customer interfaces to be plugged into the existing system seamlessly at runtime. Addition/changes for a new customer do not require the entire system or even individual processes or flows to be brought down. The resulting loosely coupled system also enabled modification of the existing process flows on the go as it was no longer dealing with one block of monolithic code. For instance, within a Fiorano ESB flow, one could now easily replace one transformation with another without stopping the flow or affecting any application components.</li>
                    <li><strong style="color:#CC3300;">Rapid Scalability</strong><br/>
                        Fiorano ESB's service-oriented and component-based architecture enabled change management to be a simple and cost effective exercise, allowing the Company to rapidly respond to market requirements. The system became simple and flexible enough to &quot;reconfigure&quot; or &quot;rewire&quot; based on changing business requirements, allowing new customers to be easily integrated into the existing system.</li>
                    <li><strong style="color:#CC3300;">Event-based Error Tracking</strong><br/>
                        Fiorano ESB allowed Real-Time monitoring and debugging of components including a powerful automated error reporting mechanism and a function to raise alerts and notifications.</li>
                    <li><strong style="color:#CC3300;">Drastic Reduction in Manual Programming Effort</strong><br/>
                        Using the Fiorano ESB Graphical User Interface (GUI), business managers and system architects could now easily respond to new customer requests or changes to data formats by using a simple drag-and-drop approach. Pre-built adapters shipped with Fiorano ESB provided ready means of communication across multiple protocols such as HTTP/HTTPs, FTP, SMTP, POP3, SOAP, EJB and JMS thereby achieving standards based integration. This meant custom coding was no longer required.</li>
                </ul>
                <p>Unlike other complex and expensive integration solutions, Fiorano's unique ESB architecture based on linearly scaling peer-to-peer messaging, together with full compliance to JMS standards, simplified integration and accelerated project execution allows the Company to achieve immediate tangible benefits of accelerated revenue, higher productivity, and a magnified Return on Investment (ROI). </p>
                <h4>Why Fiorano</h4>
                <p>

                    Fiorano  ESB  is  the  first  peer - to - peer  Enterprise  Service  Bus  (ESB)  platform  that  uses  standardized
                    interfaces for a full range of data tasks, from communication and transformation to portability and security.
                    Its standards-based Service Oriented Architecture (SOA) allows enterprises to draw on existing business
                    logic  residing  anywhere  within  their  application  environments  to  quickly  assemble  efficient  solutions  for
                    business problems. The proven middleware capabilities allow Fiorano ESB to reliably handle large scale
                    message transfer with highly competitive performance numbers.
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

                <img style=" padding-left: 17%;" src="<?php echo base_url('assets/images/casestudies/Forex-logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Fiorano ESB deployment forces and supports strict separation between functional roles of software architect, developer and user, which makes the whole life-cycle so well managed. Coarse grained components residing on top of the Fiorano messaging layer leave the designer with the responsibility of taking care of the business logic implementation only."
                </p>
                <p class="text-right">
                    <b>
                        Chief Software Architect<br/>
                        FOREX<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php echo  base_url('assets/pdf/casestudy/CS_Fin_FESB_USA_GlobalForex.pdf')?>" target="_blank">
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

