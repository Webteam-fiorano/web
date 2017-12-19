<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/8/2017
 * Time: 6:10 PM
 */
?>

<section class="casestudy-finance">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Financial Services – FinScope
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">FinScope</li>
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
                    Fiorano ESB enables Aboitiz Power to streamline power distribution and introduce mobile services for its customers
                </h3>
                <hr>
                <h4>Customer Profile</h4>
                <p>FinScope, UK based innovative start-up, operates exclusively in the financial sales and trading arena working closely with institutional brokers and fund managers and stock exchanges and execution service providers.</p>
                <h4>Business Problem</h4>
                <p>
                    FinScope's automated order planning system "Sabre" provides second and third tier sell-side trading firms with the ability to automate their order planning and execution thus narrowing a growing competitive gap with large buyer side institutions. Sabre uses FioranoMQ - (standards based messaging backbone) to bind together Sabre's fully distributed, multi-tier Java component architecture in a reliable manner thereby meeting the performance criteria of speed, guaranteed delivery and high availability.
                </p>
                <p>Sabre, their cutting edge solution, integrates with their client's trading platform to automate the planning and execution of institutional work-order business related to any exchange-trading instrument including equity, fixed income, currency and derivative products. </p>

                <p class="c b text-center"><img src="<?php echo __IMAGES__?>/CS_FINSCOPE_1.jpg"><br/><br/>FIGURE 1: The Sabre Implementation Model</p>

                <p>Sabre has a fully distributed, multi-tiered Java component architecture, allowing its components to operate independently and be co-located with high volume data sources. The architecture is bound together using the standards based messaging BUS (), FioranoMQ.</p>
                <p>Finscope was looking for a reliable messaging backbone for their auto trading software solution "Sabre". They needed a system that could reliably trade securities through existing client stock exchange links via current order management and execution platforms and also scale well to their future needs. With Sabre's unique fully distributed, multi-tiered Java component architecture, it was essential that the solution must have the ability to process a large volume of orders (typically in the range of 1000 transactions per second) as well as collate and process trade data real-time for metrics and forecasting. A tiered number of services were required to use XML messaging over JMS whereas others were pure JMS mapped messages. Hence having a reliable and scalable JMS server became a critical component in the entire trading system. From a technical standpoint some of the key requirements for a JMS solution included:</p>
                <ul>
                    <li>Scalability</li>
                    <li>Reliability</li>
                    <li>Guaranteed Messaging</li>
                    <li>Complete Failover support</li>
                    <li>Real-time performance with minimal latency</li>
                    <li>Multi-Platform support. Software must operate on UNIX platform NT and Linux platforms</li>
                    <li>Infrastructure should allow logging and tracing of all communication within the application</li>
                    <li>Minimum administration effort</li>
                    <li>Open standard API (like JMS)</li>
                </ul>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>
                    FioranoMQ provided precisely the kind of messaging solution that FinScope needed. Fiorano's file-based data store delivers guaranteed messages significantly faster in publish/subscribe mode than any other JMS implementation, which was a key requirement of FinScope's trading infrastructure. </p>

                <p class="c b text-center"><img src="<?php echo __IMAGES__?>/CS_FINSCOPE_2.jpg"><br/><br/>FIGURE 2: FioranoMQ HA Cluster</p>



                <p>Another key feature was FioranoMQ's reliability. "FioranoMQ's high reliability was proved by the fact that no shut down / start up has been done and no messages been lost so far," said David Derbyshire, Technology Principal at FinScope. The ability to withstand heavy load without any performance degradation was seen as something unique to FioranoMQ. FioranoMQ's could withstand a load of over 1500 orders simultaneously entered and passed through multiple topics. FioranoMQ's High Availability feature provided complete failover support for server as well as application failover. FioranoMQ JMS allows two servers to run in High Availability mode. In this mode, one server acts as the backup server for the other one. In case of a failure of the primary server, the backup server immediately detects this and takes over all the messaging operations. At the client application facilities like "automatic re-connection to backup server" & "store and forward capability" work together to provide a very powerful High Availability solution.</p>
                <p>And finally JMS standards compliance was met completely with FioranoMQ. FioranoMQ allowed easy administration and setup thus reducing the administration overheads to a minimum.</p>
                <p>Currently the application has been operating on NT 4.0, Windows XP and Solaris 8.0. FioranoMQ the messaging backbone for FinScope's high quality, cutting edge solution Sabre, automates the planning and execution of worked order flow, immediately stripping out costs, increasing trading capacity thereby adding direct value to trading desks.</p>
                <h4>Benefits</h4>
                <p>
                    After careful evaluation of various available JMS solutions, FinScope realized that FioranoMQ was the only JMS compliant messaging server that could scale well and not crash under heavy load. Fiorano was the only JMS solution that met every requirement of FinScope in totality.
                </p>
                <p>FinScope found that IBM WebsphereMQ was tedious to setup especially as the package does not come with a JMS server as standard. Configuration problems with IBM WebsphereMQ meant that topics and queues were cumbersome to create. Once setup the JMS message throughput seemed very sluggish. IBM WebsphereMQ uses a JMS component broker as opposed to FioranoMQ being a true JMS server. For the dynamic development environment it is essential that the JMS server used takes up minimum administration effort.</p>
                <p>"FioranoMQ has been a core third party component of Finscope's Sabre auto trading software. Extreme ease of setup and administration of FioranoMQ has led to maximum efforts to be used in application logic programming by our developers. With the remarkable availability of the FioranoMQ server there have been no concerns around messages failing. With a mission critical auto-trading software product message reliability and performance throughput is vital to the overall product success and thus far FioranoMQ has proved to be a more than able base for our messaging backbone. Through evaluations of other JMS servers FioranoMQ has met our both business and technical demands yet providing many other features that our application may grow to use", said David Derbyshire Technology Principal, FinScope.</p>


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

                <img style=" padding-left: 19%;" src="<?php echo __IMAGES__?>/finscope.gif" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "With a mission critical auto-trading software product message reliability and performance throughput is vital to the overall product success and thus far FioranoMQ has proved to be a more than able base for our messaging backbone. Through evaluations of other JMS servers FioranoMQ has met our both business and technical demands yet providing many other features that our application may grow to use."
                </p>
                <p class="text-right">
                    <b>
                        David Derbyshire <br>
                        Technology Principal,<br/>
                        FinScope<br/>

                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/CS_Fin_FMQ_UK_FinScope.pdf" target="_blank">
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

