<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/8/2017
 * Time: 4:28 PM
 */?>

<section class="casestudy-finance">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Financial Services – FairEx
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">FairEx</li>
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
                    FairEx achieves seamless "e-fx" trading with Fiorano Enterprise Backbone solutions
                </h3>
                <hr>
                <h4>Customer Profile</h4>
                <p>FairEx develops high quality, cutting edge web-based financial systems solutions for the banking and financial industries. FairEx offers a full range of products to achieve seamless e-fx trading for any level of trading. From turnkey solutions to intricate custom build projects, FairEx provides the technology that enables its clients to deliver reliable, scalable and leading edge e-banking solutions and services at internet speed.</p>
                <h4> Business Challenge</h4>
                <p>
                    FairEx Virtual Trading Engine, the most powerful web-based exchange mechanism that not only performs lightningly fast order matching, but is bundled with some of the most critical credit and risk control mechanisms that facilitate safe and secure transactions. FairEx always understood that they could offer greater benefits to customers if they could send information more securely, reliably and at a greater speed.
                </p>
                <p>FairEx Trading Engine uses a lot of inter-component messaging by Uses topics (text and serialized objects) and queues. Messages get published from the Web Server to the Order Matching Server (OMS), from the EJB container to the Order Matching Server (OMS), and from the OMS to the Web Server. Within these 3 sub systems, there are intensive message publishing and subscribing, the topics ranging from heart-beat, rate feed, order and trade confirmation, etc. Hence, a reliable and scalable JMS Server became a critical component in the entire FairEx trading system. FairEx needed a JMS solution that allows data to move through various paths, some sequential and some parallel, in a reliable and secure manner.</p>
                <p>Some of the key requirements for a JMS solution include:</p>
                <ul>
                    <li><strong style="color:#CC3300;">Scalability</strong> - to be able to scale vertically and horizontally</li>
                    <li><strong style="color:#CC3300;">Reliability </strong> - will not crash under heavy load</li>
                    <li>Very fast performance</li>
                    <li>ability to tune and configure transport details and Tools to monitor the server performance</li>
                    <li>ability to cluster servers</li>
                </ul>
                <p>The solution should have the ability to publish and subscribe several hundreds of messages per second without crashing under load. Most of these messages are text based (strings), while a few were serializable objects. "The uptime of the server had to be solid" said C.K Lim, Chief Architect at FairEx.</p>
            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>
                    FairEx had several critical requirements that needed to be met by the proposed solution:</p>
                <ul>
                    <li>Fast performance for text and serialized object messages, was critical for their trading engine to dispatch the volatile forex prices to several machines at the Web Server farm.</li>
                    <li>Assurance that performance levels do not deteriorate particularly under heavy load conditions.</li>
                    <li>Clustering Architecture</li>
                    <li>Responsive Technical Support</li>
                </ul>
                <p>In intensive evaluations conducted by FairEx, FioranoMQ proved to be the fastest and most scalable JMS server for guaranteed message delivery. It performed reliably under heavy load conditions making FioranoMQ the Backbone Middleware solution of choice for FariEx.</p>
                <p>FioranoMQ provided precisely the kind of messaging solution that FairEx needed. Fiorano's file based data store delivers guaranteed messages significantly faster in publish/subscribe mode than any other JMS implementation, which was a key requirement of FairEx's trading infrastructure. In addition, Fiorano's highly configurable, multi-level security system added Java REALMS support to improve security management by centralizing and combining user authentication sources. Another key feature was FioranoMQ's reliability. The ability to withstand heavy load to tune and configure the transport details to monitor the Server performance was seen as something unique to FioranoMQ.</p>
                <div class="c b text-center"><img src="<?php echo __IMAGES__?>/CS_FAIREX.jpg"><br/>FIGURE1: FairEx Trading Engine Overall Architecture</div>
                <p>Only FioranoMQ used a Scalable Connection Management Module (SCM) to achieve scalability levels unmatched by any other JMS (Java Message Service) vendor.</p>
                <p>The FioranoMQ cluster can share destinations and provide load-balancing facilities. The FioranoMQ clustering architecture incorporates automatic failover protection thereby reducing, ot the point of eliminating. Server downtime. If other Servers in a cluster go down, the client application automatically reconnects to the dispatcher FairEx's trading engine deployed on Java 2 Enterprise Edition, using technologies such as JSP, EJB, JMS, JNDI and so on. In some cases, FairEx also uses JMS to integrate two partner systems.</p>


            </div>
            <div class="col-xs-12 padding-top-20">

                <h4>Benefits</h4>
                <p>
                    Implementing their solution with Fiorano, FairEx achieved several important business related goals leading to cost effectiveness and improved profitability through enhanced productivity.
                </p>
                <p>Speed and reliability added to the customer experience and allowed FairEx to focus on its core competencies thereby providing an attractive return on investment. Says C.K Lim, Chief Architect with FairEx International Financial Systems: "We have tested several JMS servers, and Fiorano was among the top in terms of performance/ throughput in our evaluation. We are also very satisfied with their technical support, the response is fast whenever we have any queries."</p>
                <p>FairEx's online trading engine requires dispatching different types of messages between the different components, deployed through various hardware. It was critical that FairEx had a scalable and high performance messaging backbone to dispatch these messages. FioranoMQ &ndash; a JMS compliant Server allowed them to move data through various paths, sequentially and in parallel and reliably and securely.</p>
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

                <img style=" padding-left: 19%;" src="<?php echo base_url('assets/images/casestudies/FairEx-logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Our online trading system makes extensive use of JMS to send different types of messages among the different components, these components are deployed on several hardware, and it is critical that we have a high performance messaging backbone to dispatch the messages. We have tested several JMS servers, and Fiorano is among the top in terms of performance/throughput in our evaluation, and we are also very satisfied with their technical support, the response is fast whenever we have any queries."
                </p>
                <p class="text-right">
                    <b>
                        C.K Lim, <br/>Chief Architect,<br/>
                        FairEx International Financial Systems<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php echo  base_url('assets/pdf/casestudy/CS_Fin_FMQ_APAC_FairEx.pdf')?>" target="_blank">
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

