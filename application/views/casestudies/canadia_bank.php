
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
                Financial Services – Canadia Bank
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Canadia Bank</li>
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

                    Canadia Bank witnesses a 60% reduction in time to market for new services.
                </h3>
                <hr>
                <h4> Powered by Fiorano ESB, the bank became the first to integrate its T24 core with National Bank of Cambodia's FAST system</h4>
                <hr>
                <h4> Customer Profile</h4>
                <p>
                    Founded in 1991, Canadia Bank is the largest local bank in Cambodia, with a worldwide network of correspondent banking relationships and a solid base of local and international customers, operating a network of 57 branches, 100+ ATMs with 40 branches located in Phnom Penh. It also holds commanding market shares in loans as well as deposits. The bank offers commercial banking services to customers, together with online and mobile banking services.
                </p>
                <p>
                </p>
                <h4>Business Challenge</h4>
                <p>
                    In July 2016, National Bank of Cambodia (NBC), in co-operation with 13 commercial banks and several MDIs (Microfinance Deposit taking Institutions), launched a national interbank payment transfer system called FAST (Fast and Secure Transfer). The system was introduced to provide immediate funds to consumers with liquidity needs.
                </p>
                <p>
                    NBC mandated that all the banks use the newly launched FAST system within a specified time frame. In order to leverage this service, banks had to integrate their core-banking systems with the new FAST system as soon as possible.
                </p>
                <p>
                    Apart from the compliance with NBC, Canadia bank also had plans to introduce new services to its customers through ATM transactions. These new services had to communicate with the bank's Temenos T24 Core banking system. Point to point integration was proving to be very expensive and inefficient; the IT team foresaw huge integration bottlenecks which could put the project behind schedule.
                </p>

                <h4>Solution</h4>
                <p>
                    With the objective of meeting the customer needs and NBC's regulations, Canadia Bank selected Fiorano ESB to serve their integration needs. Fiorano solution architects and consultants studied the bank's existing architecture and laid out a plan to address the integration challenges, keeping the implementation of the FAST system as a priority.
                </p>
                <p>
                    Post FAST - T24 integration, Canadia team performed several follow-on projects including integration of the Anti-money laundering over the Fiorano ESB.
                </p>

                <img src="<?php echo base_url('assets/images/casestudies/candia-bank-cs-architecure.png')?>" class="img-responsive"/>

                <p>The different systems integrated with the Temenos T24 core banking system are explained below:</p>
                <p>
                    <b>NBC - FAST Integration solution</b><br/>
                    This integration scenario required that any payment done in the core banking system (CBS) triggered a process in the FAST payment system. Similarly, the payments and the acknowledgement from other participating banks via FAST have to be polled and committed /updated in CBS.
                </p>

                <img src="<?php echo base_url('assets/images/casestudies/canadia-bank-cs-flexibility.png')?>" class="img-responsive"/>
                <p>
                    All integrations were developed on Fiorano e-Studio which features a drag and drop interface for building flows. Connectivity to the Temenos T24 platform was provided by Fiorano T24 adapters deployed as Microservices. Several integrations were deployed, including:
                </p>
                <ul>
                    <li>Outbound Fund Transfer</li>
                    <li>Inbound Fund Transfer and Acknowledgement </li>
                    <li>Account Enquiry</li>
                </ul>
                <p>
                    Fiorano pre-built adapters and flows helped Canadia bank to immediately roll out the integration project and comply with the FAST integration with near zero coding and minimal configuration changes in record time.
                </p>

                <b>ATM-T24 Integration</b><br/>
                <p>
                    Fiorano's Socket Adapter and ISO8583 Microservices help in exposing various internal functions from the Temenos core banking system. These services are now accessible via ATM transactions and include the following:
                </p>

                <ul>
                    <li>Account Inquiry </li>
                    <li>Balance Inquiry</li>
                    <li>Deposit </li>
                    <li>Withdrawal</li>
                    <li>Currency exchange</li>
                    <li>PIN change</li>
                    <li>Various Payment Services (Telephone bills, Mobile recharges, Utility payments, Credit card payments etc.)</li>
                </ul>

                <p>
                    Different utility payments, mobile recharge and other payment services can now be accessed from ATMs and data flows are orchestrated through Fiorano ESB to integrate with the Temenos core banking system.
                </p>

                <p>
                    <b>AML (Anti Money Laundering)</b><br/>
                    Canadia Bank uses the CORAL iSEM<sup>&trade;</sup> solution for Watchlist Filtering. This helps the bank perform document verification for new and existing customers. The whole process of Watchlist Filtering includes 8 different steps with multiple decision-making steps and automatic alerts for inserting, approving, rejecting customers. These flows involve exchange of information among the T24 core, iSEM Webservices and front-end banking systems and are implemented on Fiorano.
                </p>

                <p>
                    <b>SWIFT Integration</b><br/>
                    The SWIFT international payment network is one of the largest financial messaging systems in the world. They have their own message format and integration with SWIFT requires knowledge and working of SWIFT message standards. Fiorano, in partnership with SWIFT, has developed pre-built adapters for parsing SWIFT inbound and outbound messages.
                    <br/><br/>Canadia bank now uses Fiorano's SWIFT adapters to integrate the T24 core with the SWIFT payment network for carrying out international transfers.
                </p>

                <p>
                    <b>Payment Gateway X-Pay</b><br/>
                    X-PAY is a payment gateway for the bank to do transaction payments via merchants. Another system called Axiom is the password management and authentication platform which works in tandem with X-PAY.
                    <br/><br/>
                    Fiorano is used to integrate X-PAY, Axiom and the T24 core banking system via different message formats like SMTP connection/HTTP/Webservices. Fiorano exposes several APIs from X-PAY to T24 core banking.
                </p>

                <h4>Benefits</h4>
                Fiorano enables easier change management, secure and reliable data exchange, easier to deploy new data exchange processes and easier integration of heterogeneous systems.
                <ul>
                    <li>
                        <b>Speed of Development and Deployment </b>- Fiorano studio provides the IT team at Canadia Bank with a visual tool for orchestrating and creating the event processes, obviating requirement for coding/development. 
                    </li>
                    <li>
                        <b>Agility and Reliability </b>- Canadia Bank can now easily change/update any service or workflow without any negative impact on the overall system. The underlying messaging broker guarantees message delivery and provides message interception capabilities (ability to alter the processes during runtime.)
                    </li>
                    <li>
                        <b>Ease of Management and Maintenance </b>- Fiorano's unique peer-to-peer architecture with centralized control provides a single monitoring service to check the status of interfaces. Prior to Fiorano, Canadia Bank had to monitor multiple servers and interfaces to ensure that services were running.
                    </li>
                    <li>
                        <b>Reduction in consulting/development costs </b>- Since the process flow design involves simple configurations involving drop-down menus and some text fields, expansion needs are easily met by existing resources without requiring additional resources with specialized skill sets. Easy to use Fiorano Tools drastically reduce consulting and implementation costs for add-on projects.
                    </li>
                </ul>
                <h4>Results</h4>
                <ul>
                    <li>
                        <b>Quick Compliance to Regulatory Norms</b><br/>
                        One of the biggest achievements of Fiorano ESB implementation was that it made Canadia Bank one of the first banks in Cambodia to integrate with NBC's FAST system.  
                    </li>
                    <li>
                        <b>Reduced Development Costs</b><br/>
                        Canadia Bank saved significantly on development costs as Fiorano ESB is a codeless integration platform. Moreover, Fiorano ESB obviated the need to invest in additional software for ATM and SWIFT integrations resulting in an estimated 30%-40% reduction in overall costs.
                    </li>
                    <li>
                        <b>Faster time to market</b><br/>
                        Development of flows for FAST integration took only a week and the flows for ATM integration were built within 10 working days. With increased developer productivity Canadia bank saved almost 80% in development time, rolling out services at a much faster rate thereby improving customer satisfaction rates.
                    </li>
                </ul>


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

                <img style=" padding-left: 17%;" src="<?php echo base_url('assets/images/casestudies/canadia-logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Fiorano provides a highly scalable integration platform enabling us to standardize and service enable all applications built on different technologies. Fiorano ESB will become part of our core infrastructure serving multiple applications"
                </p>
                <p class="text-right">
                    <b>
                        Mr. Luis Chen,<br>
                        Executive VP,<br>
                        Canadia Bank
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/CPB_Casestudy.pdf" target="_blank">
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
