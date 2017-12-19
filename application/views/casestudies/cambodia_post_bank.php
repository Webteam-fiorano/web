
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
                Financial Services – Cambodia Post Bank
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Cambodia Post Bank</li>
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
                    Fiorano enables Mobile Banking Services for Cambodia Post Bank.
                </h3>
                <hr>
                <h4> Fiorano ESB underpins the CPB's IT landscape for all integration requirements including NBC's FAST system and countrywide ATM network</h4>
                <hr>
                <h4> Customer Profile</h4>
                <p>Cambodia Post Bank (CPB) is a Phnom-Penh, Cambodia based licensed commercial bank, offering financial solutions to aspiring individuals and
                    enterprises in Cambodia. Established as a strategic partnership between Canadia Investment Holding Plc, Cambodia's Ministry of Post and
                    Telecommunications and Fullerton Financial Holdings Pte. Ltd., CPB received the â€œOutstanding Banking Growth Awardâ€ from International
                    Data Group (IDG) ASEAN, recognized as a strong, profitable, and sustainable growth bank in Cambodia. </p>
                <h4> Business Challenge</h4>
                <p>
                    Harnessing technology-driven innovation has become an imperative for banks in the emerging markets. The number of bank depositors in Cambodia alone has burgeoned from a mere 230,000 to almost 2 million, a blistering 5 year compound annual growth (CAGR) of 40%. This is necessary to not only differentiate themselves but also to operate and scale their business more efficiently. Similarly, growth in digital connectivity in Cambodia has allowed the introduction of branchless banking through ATMs, mobile phones and the internet.
                </p><p>
                    Cambodia Post Bank realized the importance of technology to tap the market of a growing millennial generation that relies heavily on mobile transactions. CPB uses CamboPay to provide the mobile banking service through which customers perform banking transactions like balance inquiries, inter and intrabank money transfers, bill payments, credit information lookups and more. These transactions had to be integrated with CPB's Temenos T24 core banking system.
                </p><p>
                    Additionally, in July 2016, National Bank of Cambodia (NBC), in co-operation with 13 commercial banks and several Microfinance Deposit taking Institutions (MDIs), launched a national interbank payment transfer system called Fast and Secure Transfer (FAST). The system was introduced to provide immediate funds to consumers with liquidity needs.
                </p><p>
                    With a time-bound NBC mandate to implement the FAST system, banks had to integrate their core-banking systems with FAST as soon as possible.
                </p><p>
                    The IT team at CPB foresaw the effort required for such resource intensive integrations and realized that it had to invest in a quality integration platform to launch new services and comply with the regulatory requirements of the National Bank of Cambodia.

                </p>



            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>
                    AAfter a detailed evaluation, Cambodia Post Bank chose
                    Fiorano over other middleware providers based on Fiorano's
                    productivity, innovation and ease of deployment. With Fiorano's
                    efficient mapping tools and ESB infrastructure, the time taken
                    to deliver projects was significantly reduced, resulting in a
                    notable increase in savings and customer satisfaction.
                </p>
                <p>
                    Fiorano ESB was deployed to meet 3 major immediate
                    integration needs:
                </p>
                <p><b>Mobile Banking:</b></p>
                <p>
                    To successfully launch mobile banking services, CPB had to
                    integrate the CamboPay system with its TemenosT24 core
                    banking system to process financial transactions received via
                    mobile phones. Fiorano ESB allowed Web services to receive
                    CamboPay system requests while authenticating and filtering
                    valid requests for further conversion into Temenos-specific
                    OFS messages. These messages were then processed by
                    Temenos T24 core and the corresponding responses were sent
                    back to the CamboPay system via Fiorano. The mediation and
                    orchestration of these integration flows was designed and
                    implemented with zero coding on the Fiorano Platform.
                </p>
                <p><b>NBC FAST Integration:</b></p>
                <p>
                    For every transaction processed in the core banking system of
                    the bank and the transactions and acknowledgments from
                    participating banks via FAST, the integration was expected to
                    trigger a process in the FAST payment system to update T24 in
                    real time.
                </p>
                <p>
                    All integrations were developed on Fiorano e-Studio which
                    features a drag and drop interface for building flows.
                    Connectivity to the Temenos T24 platform was provided by
                    Fiorano T24 adapters deployed as Microservices. Several
                    integrations were deployed, including
                </p>
                <p>
                <ul>
                    <li> Outbound Fund Transfer</li>
                    <li>Inbound Fund Transfer and Acknowledgement</li>
                    <li>Account Enquiry</li>
                </ul>
                Fiorano pre-built adapters and flows helped Cambodia Post
                Bank to immediately roll out the integration project and
                comply with the FAST integration with near zero coding and
                minimal configuration changes.
                </p>

                <p><b>ATM Integration:</b></p>
                <p>
                    Scaling its ATM Operations was a major priority for the bank
                    not only to meet customer’s cash needs but as a revenue
                    generator by rolling out multiple value added services. ATMs
                    are the second most accessible touch points for customers to
                    reach out to their banks.
                </p>
                <p>
                    Fiorano's Socket Adapter and ISO8583 Microservices helped
                    in receiving, parsing, transformation of messages between
                    CPB’s SmartVista ATM switch and Temenos T24 core.
                </p>
                <p>
                    The services that are now accessible via ATM transactions
                    include the following:
                </p>
                <div class="col-sm-6">
                    <p >
                    <ul class="col-xs-12">
                        <li>Account Inquiry</li>
                        <li>Deposit</li>
                        <li>Withdrawal</li>
                        <li>Chequebook Requests</li>
                        <li>Reversal</li>
                        <li>Check Mini Statements</li>
                        <li>Utility Bill Payments</li>
                        <li>Fund Transfer via FAST</li>
                        <li>Fund Transfer to Mobile (Mobile Banking)</li>
                    </ul>
                    </p></div>
                <div class="col-sm-6">
                    <p>
                        <img src="<?php echo base_url('assets/images/casestudies/CPB_dia.jpg')?>"  class="img-responsive">

                    </p>
                </div>


                <h4>Solution Highlights</h4>
                <p>
                    The Fiorano Integration Platform provides several powerful
                    features that make business process automation simple and
                    efficient.
                </p>
                <p><b>
                        Improved productivity with “Citizen Integrators”
                    </b>
                </p>
                <p>
                    Unlike traditional approaches, Fiorano enables CPB IT staff to
                    perform lightweight, self-service data and application
                    integration, where "Citizen Integrators" can visually assemble
                    instantly running solutions by drawing application and service
                    nodes on a canvas through drag-and-drop of active Fiorano
                    Microservice components.
                </p>
                <p><b>Core Banking Integration -</b>
                    Fiorano ESB, effortlessly integrates
                    Core Banking applications with
                    multiple systems making Fiorano a
                    fundamental part of the banking
                    architecture. Fiorano's solution
                    supports an incremental deployment model, enabling
                    modular and standardized implementations with lower risk
                    and expense.</p>

                <p><b>Peer-to-peer architecture - </b>
                    Fiorano's distributed, peer-to-peer architecture linearly increases performance as it
                    supports in-built messaging at the end-points with a direct
                    end to end communication and enables parallel data-flows.
                    This provides the capability to handle an increasing
                    number of users with no degradation in performance.
                </p>
                <p>
                    <b>Codeless Integration through Fiorano prebuilt
                        TemenosT24 Adaptors -
                    </b>
                    Fiorano, in collaboration with
                    Temenos, offers T24 adaptors enabling codeless
                    integration with the T24 Core Banking applications server
                    thus dramatically reducing the implementation time.
                </p>
                <h4>Results and Benefits</h4>
                <p>
                    <b> Expeditious launch of new service - </b>Delivering mobile
                    banking services to market was an immediate goal. With
                    Fiorano ESB implemented in less than 5 weeks, CPB could
                    launch its new mobile banking services in a hitherto
                    unprecedented time frame
                </p>
                <p>
                    <b>Efficient issue escalation and resolution - </b>In case of a
                    functional breakdown, the Fiorano platform alerts the
                    functional team in real time, avoiding any business
                    disruptions, quickening the process of issue escalation.
                    Document tracking (Message logging) also helps the CPB
                    team analyse any issue to further accelerate the resolution
                    process.
                </p>
                <p>
                    <b>Fast tracking Regulatory Norms Compliance - </b>The
                    Fiorano ESB implementation allowed CPB to become one of
                    the first banks in Cambodia to integrate with NBC's FAST
                    system.
                </p>
                <p>
                    <b>
                        Improved bottom line - </b>CPB saved significantly on
                    development costs as Fiorano ESB is a codeless integration
                    platform. Moreover, Fiorano ESB obviated the need to invest
                    in additional software for ATM and mobile service integrations
                    resulting in an estimated 30%-40% reduction in overall costs.
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

                <img style=" padding-left: 17%;" src="<?php echo base_url('assets/images/casestudies/cambodia_logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Fiorano's efficient integration solution provides us the agility to rapidly roll out new services for our customers. After implementing the current integrations, Fiorano will serve as the backbone of IT infrastructure for all our future services and applications"
                </p>
                <p class="text-right">
                    <b>
                        Mr. Chanthol Krouch,<br>
                        IT Head,
                        Cambodia Post Bank
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
