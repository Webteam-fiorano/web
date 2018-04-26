
<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/20/2017
 * Time: 11:31 AM
 */?>
<section class="casestudy-goverment">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Government and Defense – JNET
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Commonwealth of Pennsylvania</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12">

        </div>
        <div class="col-sm-9 col-xs-12  nopadding">

            <div class="col-xs-12">
                <h3 class="casestudyh3">Commonwealth of Pennsylvania uses Fiorano's solution to enhance public safety in the state by enabling real time exchange of criminal justice information between participating law enforcement agencies.</h3>
                <hr>
                <h4>Business Problem</h4>
                <p>
                    The goal of the Pennsylvania Justice Network (JNET) was to provide a common on-line environment whereby authorized state, county and local officials could access offender records and other justice information from participating agencies. The JNET System serves as a platform for broad-based knowledge sharing among its users. JNET started as a system based in partnering agencies at the state level, but now it is growing toward a full partnership with county governments as well as municipalities, local police departments and federal agencies.
                </p>
                <p>The JNET System operates through a secure statewide Extranet specifically designed for the administration of justice. It provides a single interface to offender information at multiple agencies and a mechanism for publishing information and accessing JNET resources. Each agency retains complete control over the information it shares and who has access to specific data.</p>
                <ul>
                    <li>Build a messaging infrastructure (MI) to support distributed applications spanning multiple agencies, including Notifications and other applications.</li>
                    <li>The MI must provide a means for different agency systems running on different platforms at different locations to communicate with each other.</li>
                    <li>The MI must be fully secure, 100% reliable (no dropped messages) and robust.</li>
                    <li>The MI should be standards based.</li>
                </ul>
                <p>An automated system was required to prevent this from occurring. Thus the Business Requirement became: Provide a Notifications System to notify law enforcement officials of key events e.g. Escapes, Warrants, Wants (Wanted Persons), Arrests, with at least the following features:</p>
                <ul>
                    <li>All Vital data stored/produced in geographically dispersed locations e.g. Arrests are at State Police, Probationer/Parole status stored at Department of Probation need to be pulled together on demand.</li>
                    <li>Agencies have the flexibility to determine locally which users receive which notifications.</li>
                    <li>Notifications should be sent by e-mail, fax, pager, web, and subscriptions should be configurable by users.</li>
                    <li>All data transmissions are encrypted, and all users accessing the system are authenticated.</li>
                </ul>
                <p>The diagram below illustrates a real-life example on some of the issues that Commonwealth of Pennsylvania wanted to solve within the JNET Project. The problem involved four state agencies: the Pennsylvania State Police (PSP), the Department of Corrections (DOC), Pennsylvania Board of Pardons (PBPP), and the AOPC.</p>
                <p class="c b text-center"><img class="img-responsive" src="<?php echo base_url('assets/images/casestudies/Commonwealth_diagram2.jpg')?>"><br/><br/>FIGURE 1: Real life issue pre-implementation</p>
                <ol>
                    <li>The offender is arrested for some reason, and is fingerprinted by police on a Live Scan machine.</li>
                    <li>The Live Scan machine immediately communicates with PSP and National systems, creating an arrest record. PSP 'publishes' this arrest record on the JNET Network.</li>
                    <li>PBPP, DOC, BOP, AOPC Subscriber Modules each receive the arrest from PSP. The module at each agency checks that agency's database to determine the status of the offender.</li>
                    <li>In this example, lets say that the offender is found in the PBPP database, listed as being on Parole. PBPP then 'publishes' a new event, containing the information about the arrest and the fact that the offender is on parole.</li>
                    <li>Any agency may have chosen to subscribe to this event. For this example, lets assume that PBPP and PSP have subscribed to 'Arrests of Parolees'. Subscriber modules at PBPP and PSP therefore pick up the event.</li>
                    <li>The subscriber modules pass the events to the delivery modules, which then send out the Notification to particular users, based on each agency's requirements. In addition, email alerts can also sent out to each user.</li>
                    <li>The appropriate users receive an email or page notifying them of the arrest.</li>
                    <li>The user then checks the Notifications Application Web page to view more details of the Notification, and acts accordingly</li>
                </ol>
                <h4>Solution</h4>
                <p>
                    KPMG Consulting Services (now Bearing Point Inc.) was engaged by the Commonwealth of Pennsylvania to develop numerous applications for all the justice related agencies, this initiative was entitled The 'JNET' Project JNET's mandate was to provide various applications enabling the sharing on data across justice related agencies e.g. State Police, Department of Probation, Department of Corrections, Board of Pardons, and Courts etc. </p>
                <p class="c b text-center"><img class="img-responsive" src="<?php echo base_url('assets/images/casestudies/Commonwealth_diagram1.jpg')?>"><br/><br/>FIGURE 2: Application architecture for JNET using FioranoMQ
                <p>Ultimately, we settled on publish/subscribe messaging; where departments could subscribe to any individual they were interested in. Should the suspect show up at a welfare agency or be pulled over for a traffic stop, this information would be published to all subscribing parties in real time." said KPMG's Chief Architect on the Project, Woolfenden</p>
                <h4>Benefits</h4>
                <ul>
                    <li>Real Time enablement of information exchange between different Agencies.</li>
                    <li>Improved response time by Enforcement Agencies.</li>
                    <li>Reduced cost of operations due to timely information availability.</li>
                    <li>Correct strategic direction for Messaging Infrastructure.</li>
                    <li>Risk mitigation due to Standards-based implementation.</li>
                </ul>
                <h4>Why Fiorano</h4>
                <ul>
                    <li>Responsive vendor (added SSL security in a matter of days)</li>
                    <li>Server-to-Server architecture</li>
                    <li>PKI Security</li>
                    <li>Worked out of the box the first time</li>
                    <li>Low total cost of ownership</li>
                </ul>
                <p>Another important driver for the JNET Project was highly configurable security requirements. Fiorano's highly configurable, comprehensive security system allows application security to be easily configured by an external visual Administration tool. The FioranoMQ security system is completely standards-based and implements the Java security API. FioranoMQ also implements dynamic load balancing and failover protection making the system highly available and allowing an unlimited number of concurrent client connections to a server cluster.</p>
                <h4>About Fiorano Software</h4>
                <p>
                    Founded in 1995, Fiorano is a trusted provider of enterprise integration middleware, high performance messaging and distributed systems. Fiorano's innovative event-driven SOA platform integrates applications and complex technologies into an enterprise nervous system. Fiorano's hybrid Cloud-ESB integrates applications across SaaS, PaaS and on-premise worlds.
                    Global leaders including Federal Bank, Commercial Bank of Africa, NASA, US Coast Guard, POSCO, British Telecom, AT&T Labs, Vodafone and L'Oréal have deployed Fiorano's solutions to drive innovation through open, standards-based, event-driven SOA applications yielding unprecedented productivity.
                </p>
            </div>
        </div>

        <div class="col-sm-3 col-xs-12 padding-top-50 margintop-50">
            <div class="cs-quot">
                <div class="cs-logo"><img src="<?php echo base_url('assets/images/casestudies/Commonwealth_logo.jpg')?>" /></div>
                "We wanted to tie in the State Police, motor vehicles agency, the Parole department, Board of Pardons, Department of Corrections and other agencies so when an arrest was made, for example, anyone looking for the suspect would be immediately notified."
                <div class="cs-author">
                    Linda Rosenberg, Executive Director,<br/>
                    JNET<br/>
                </div>
            </div>
            <div class="col-sm-12 padding-top-20 padding-bottom-20">
                <a href="<?php echo  base_url('assets/pdf/casestudy/PS_Gov_FMQ_USA_JNetPennsylvania.pdf')?>" title="Download PDF" target="_blank">
                    <img src="<?php echo base_url('assets/images/casestudies/casestudy-download-pdf.jpg')?>" class="img-responsive">
                </a>

            </div>
        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12 text-center align-center do_image">
            <img class="img-responsive" src="<?php echo base_url('assets/images/casestudies/casestudy-bottom-image.jpg')?>" class="text-center">
        </div>
    </div>
</section>
