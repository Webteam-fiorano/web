
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
                Financial Services - Easypay
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Easypay</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-xs-12">

        </div>
        <div class="col-sm-9 col-xs-12  nopadding">

            <div class="col-xs-12">
                <h3 class="casestudyh3 ">EasyPay enhances infrastructure Agility and Dynamic Response with Fiorano ESB</h3>                <h4>Customer Profile</h4>
                <p>EasyPay (Pty) Ltd., the services division of Trusted Transactions Company, Prism Holdings, is the leading provider of electronic funds transfer (EFT) and bill payment processing services in South Africa's retail and financial sectors. Controlling the largest bank-independent financial switch in Southern Africa, the company's infrastructure connects into all major South African banks and switches, managing both debit and credit card EFT transactions. On an average EasyPay processes more than 286 million transactions annually. EasyPay focuses on the provision of high-volume, secure and convenient payment, pre-payment and value-added services to the South African market.</p>
                <h4>Business Problem</h4>
                <p>
                    EasyPay had a mix-and-match of Batch Jobs and Real-Time applications running on different systems. Several in-house Java-based applications rendered value added services, but the overall data environment was inflexible thus creating complex management issues. EasyPay also discovered that customers using direct channels such as Internet and Telephone expected a faster response.
                </p>
                <p>EasyPay's current message routing solution slowed down the message flow or retained confirmation messages for Store and Forward longer than required. The major pain points that the EasyPay identified were: </p>
                <ul>
                    <li>The current infrastructure was complex and difficult to manage. </li>
                    <li>Lack of agility meant that accommodating new clients and services quickly was difficult and time consuming. </li>
                    <li>Configuration changes were difficult because configurations were hard-coded into application systems. </li>
                    <li>The current message routing solution could not throttle or slow down the message flow or hold confirmation messages for store-and-forward. </li>
                    <li>The current integration and application infrastructure did not deliver the required performance.</li>
                </ul>
                <h4>Solution</h4>
                <p>
                    EasyPay required a solution to optimize customer services, which meant providing agility to its infrastructure, together with visibility, ease of use, and data control. EasyPay had identified that a Service Oriented Architecture (SOA) was needed which would allow easy integration of existing infrastructure and reduce management issues, enabling the delivery of dynamic business processes with short turn-around times.
                </p>
                <p>EasyPay began the search for a business integration software package that would cater to higher message volumes and also have the agility to easily accommodate new customers and services with a robust underlying infrastructure. After looking at several alternative platforms they chose Fiorano ESB, the Enterprise Service Bus (ESB) product from Fiorano Software, as the key enabling technology. The SOA is now being introduced. The illustration below shows how various servers at EasyPay provide services to clients. The ESB provides a messaging backbone, and client devices such as point of sale (POS) terminals, web browser clients and mobile (GSM - Global System for Mobile communication) devices originate requests that are published as messages on the ESB. These messages are translated, if necessary, and routed to the EFT Switch or to an appropriate Value Added Service (VAS) Response messages from the back-end services are routed back to the clients that made the requests. Trans							action data is sent to the Recon service for reconciliation while system problems generate events to the Escalation service for operator intervention. Systems that need to send messages such as email or FAX use the Notification service. A FAX device is shown as an example of a recipient. Data files are transferred by Connect Direct as a result of messages received via the ESB. All these activities can now be monitored and managed conveniently from a centralized management console.</p>
                <div class="c"><img src="<?php echo __IMAGES__?>/CS_EasyPay.jpg" ><br/>
                    FIGURE 1: TECHNICAL ARCHITECTURE WITH FIORANO ESB</div>
                <h4>Benefits</h4>
                <p>
                    The Fiorano ESB product provides message throughput of hundreds to thousands of messages per second. It scaled up the message processing and infrastructure management capabilities of EasyPay very easily and reliably.
                </p>
                <ul>
                    <li>The new architecture provided necessary throttling and store-and-forward capability to smooth out the peak transaction flows to protect servers from volume spikes. </li>
                    <li>EasyPay now has the agility to easily accommodate new customers and services and a robust infrastructure to support them.</li>
                    <li>Message translation and routing rules are defined <abbr title="Graphical User Interface">GUI</abbr>s and a management console enables the monitoring of message flow. </li>
                    <li>The ESB provides for the queuing of transactions for a more real-time enterprise. </li>
                    <li>The capability to route a message to multiple recipients enables events such as Global Configuration changes to be propagated with guaranteed delivery to all systems that are affected. </li>
                    <li>Business process automation (Orchestration) is defined within a <abbr title="Graphical User Interface">GUI</abbr>  which allows rapid development of automated business processes. </li>
                </ul>
                <p>The Fiorano ESB and SOA platform have provided EasyPay with the agility to be able to respond quickly to opportunities and threats.</p>
                <h4>Why Fiorano</h4>
                <p>
                    EasyPay evaluated all ESB products on the following criteria:
                </p>
                <ul>
                    <li><strong>Reliability</strong> - resistance of the solution to failure </li>
                    <li><strong>Availability</strong> - the degree to which the solution is available for use </li>
                    <li><strong>Agility</strong> - the ability to respond quickly and easily to changing business conditions </li>
                    <li><strong>Performance</strong> - the ability of a product to perform its tasks in an appropriate time </li>
                    <li><strong>Usability</strong> - ease of operation of the product by users </li>
                    <li><strong>Serviceability</strong> - the ability to identify problems and take corrective action in a running system. </li>
                </ul>
                <p>Fiorano ESB was proficient across all the selection criteria, particularly in the areas of Agility, Performance and Usability. &quot;EasyPay selected Fiorano ESB because it outperformed the competition in performance and ease of use. These criteria are important to us because of the high volume of transactions that we process and because we need the agility to be able to respond quickly to opportunities and threats&quot;, said Anthony Ferguson, CTO and Chief Architect at EasyPay.</p>
                <h4>About Fiorano Software</h4>
                <p>
                    Founded in 1995, Fiorano is a trusted provider of enterprise integration middleware, high performance messaging and distributed systems. Fiorano's innovative event-driven SOA platform integrates applications and complex technologies into an enterprise nervous system. Fiorano's hybrid Cloud-ESB integrates applications across SaaS, PaaS and on-premise worlds.

                    Global leaders including Federal Bank, Commercial Bank of Africa, NASA, US Coast Guard, POSCO, British Telecom, AT&T Labs, Vodafone and L'Oréal have deployed Fiorano's solutions to drive innovation through open, standards-based, event-driven SOA applications yielding unprecedented productivity.
                </p>
            </div>
        </div>

        <div class="col-sm-3 col-xs-12 padding-top-50 margintop-50">
            <div class="cs-quot">
                <div class="cs-logo"><img src="<?php echo __IMAGES__?>/easypay_logo.jpg" /></div>
                &quot;EasyPay selected Fiorano ESB because it outperformed the competition in performance and ease of use. These criteria are important to us because of the high volume of transactions that we process and because we need the agility to be able to respond quickly to opportunities and threats&quot;
                <div class="cs-author">
                    Anthony Ferguson,<br/>
                    CTO,<br/>EasyPay<br/>
                </div>
            </div>
            <div class="col-sm-12 padding-top-20 padding-bottom-20">
                <a href="/customers/casestudies/CS_Fin_FESB_USA_EasyPay.pdf" title="Download PDF" target="_blank">
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
