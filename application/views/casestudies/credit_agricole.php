
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
                Financial Services - Credit Agricole Titres
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Credit Agricole Titres</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12">

        </div>
        <div class="col-sm-9 col-xs-12  nopadding">

            <div class="col-xs-12">
                <h3 class="casestudyh3">Amid Mergers, FioranoMQ helps maintain daily retail stock trade volume for French Bank with 40% Market Share</h3>
                <h4>Customer Profile</h4>
                <p>Cr&#233;dit Agricole Titres (an investment company) is Cr&#233;dit Agricole's securities custody services subsidiary for the retail banking sector. It manages securities and savings products, as well as Internet platforms for Cr&#233;dit Agricole's Caisses Regionales and LCL. Cr&#233;dit Agricole Titres markets a variety of securities back office services and Internet platforms to outside institutions (private banks, online brokers, etc.)</p>
                <h4>Business Problem</h4>
                <p>
                    As is the case in other global markets, the French financial industry is in a constant state of change-and Credit Agricole Titres is no exception. In 2003, for example, the investment subsidiary formed a partnership with BNP Paribas to create Euro Securities Partners, a way to streamline both companies' backoffice production systems.
                </p>
                <p>Today Credit Agricole Titres holds a nearly 40% share of the French retail and private bank custody services market.  Maintaining industry-leading customer service levels amid multiple mergers and partnerships, however, is a continuing challenge.  Of greatest importance, the firm's stock exchange Web site must securely and reliably facilitate stock transactions and account management, as well as deliver news, analysis and other services, for its growing list of customers.</p>
                <p>To accomplish these many tasks, the Credit Agricole Titres IT department has created a powerful Web-based trading infrastructure.  Buy/sell orders from customers must be accurately transformed into FIX (Financial Information exchange) messages for execution by brokers.  These messages, as well as others passed between various producers and consumers of information, require world-class middleware that can communicate between heterogeneous systems.</p>
                <h4>Solution</h4>
                <p>
                    Credit Agricole Titres' integration team determined it needed a communication backbone that could not only interface with its FIX engine, but also reliably cache messages.  "Our trading site is unique in that 65% of our daily transaction activity is produced between 9:00 and 10:00 CET-the first hour that our markets are open," said Jean Louis David, Project Manager for Credit Agricole Titres.  "It's essential that we be able to ensure persistence and integrity of data prior to, and during, our heaviest trading times."
                </p>
                <p>With assured messaging, persistence, security and data integrity as its primary goals, David and his team, with the help of an outside consultant, sought out a best-of-breed JMS (Java Messaging Server) messaging platform.  After evaluating several alternatives, including open source products, the group selected FioranoMQ.</p>
                <p>"We had used Fiorano products before and we were comfortable with their quality.  Our evaluation of FioranoMQ showed it would work well with our new FIX engine," noted David.  </p>
                <p>Used at many leading corporations around the world, FioranoMQ is a high performance enterprise communication backbone designed to support mission-critical applications.  Among its many advantages is a guaranteed, fault tolerant messaging architecture featuring high availability clustering as well as robust load balancing with failover protection.  To maximize message throughput and minimize latency, the platform offers a file-based message store that typically enables applications to run up to 10 times faster than with competitive products.</p>
                <p>With FioranoMQ as its core, Credit Agricole Titres' JNDI (Java Naming and Directory Interface)/JMS middleware server receives trade orders coming from the site's Order Manager.  The orders are placed in the message queue where they are translated as a FIX instance for use by Appia, the investment subsidiary's FIX server product.  From there, the orders are outputted to Reuters Order Routing for brokers.</p>
                <div class="c"><img src="<?php echo __IMAGES__?>/CS_Credit_Agricole.jpg" ></div>
                <p>FioranoMQ's 256-bit SSL-encryption plug-in for both TCP as well as HTTP[s] connections, and strong authentication/authorization capabilities, also deliver system security.  "FioranoMQ and Appia are standardized products.," said Belhassen Belkhechine, Study and Integration Team Leader, "With this architecture, we can't lose any messages.  Fiorano ensures that no market transaction can be lost."</p>
                <h4>Benefits</h4>
                <p>
                    David has his team have found that FioranoMQ is more than up to the task of handling the thousands of messages that travel through Credit Agricole Titres' trading site each day.  "We use the FioranoMQ console to see how many transactions are in our queue before the markets open," he noted.  "We receive many alerts and transactions during our burst of activity at the beginning of each trading day, so with FioranoMQ we can detect any potential problems that can impact our transmissions to the market."
                </p>
                <p>Beyond its stated goals of accurate messaging, persistence, data integrity and security, David's team has found FioranoMQ's scalability and speed, as well as its Enterprise Service Bus (ESB) and Service Oriented Architecture (SOA), of additional value in responding to changing business needs.</p>
                <p>"To be a leading market player, we must act quickly to leverage market trends," he stated.  "FioranoMQ enables us to put strategic schemes into practice that would have been too expensive in the past.  We can use FioranoMQ to provide services our customer's desire, at a reasonable cost."</p>
                <h4>About Fiorano Software</h4>
                <p>
                    Founded in 1995, Fiorano is a trusted provider of enterprise integration middleware, high performance messaging and distributed systems. Fiorano's innovative event-driven SOA platform integrates applications and complex technologies into an enterprise nervous system. Fiorano's hybrid Cloud-ESB integrates applications across SaaS, PaaS and on-premise worlds.

                    Global leaders including Federal Bank, Commercial Bank of Africa, NASA, US Coast Guard, POSCO, British Telecom, AT&T Labs, Vodafone and L'Oréal have deployed Fiorano's solutions to drive innovation through open, standards-based, event-driven SOA applications yielding unprecedented productivity.
                </p>
            </div>
        </div>

        <div class="col-sm-3 padding-top-50 margintop-50">
            <div class="cs-quot">
                <div class="cs-logo"><img src="<?php echo __IMAGES__?>/credit_agricole_logo.jpg" /></div>
                "To be a leading market player, we ought to act fast to gain benefit of market trends. FioranoMQ<sup>&reg;</sup> enables us to put into practice strategic schemes that would have been too expensive in the past - we can use FioranoMQ<sup>&reg;</sup> to provide desired service to the customer at a reasonable cost."
                <div class="cs-author">
                    Software Architect,<br/>
                    Credit Agricole Titres<br/>
                </div>
            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="/customers/casestudies/CS_Fin_FMQ_EMEA_CreditAgricole.pdf" title="Download PDF" target="_blank">
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
