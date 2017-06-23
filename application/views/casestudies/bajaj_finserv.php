
<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/20/2017
 * Time: 11:31 AM
 */?>
<section class="casestudy-energy">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Financial Services – Bajaj Finserv
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Bajaj Finserv</li>
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
                    Bajaj Finserv streamlines loan approvals with Fiorano
                </h3>
                <hr>
                <h4> Customer Profile</h4>
                <p>Bajaj Finance Limited is part of the non banking financial
                    conglomerate Bajaj Finserv group which also include the
                    insurance arm Bajaj Alllianz and the advisory firm, Bajaj Wealth Management.
                    The lending arm of the group, Bajaj Finance
                    Limited is one of the most diversified NBFCs in the Indian market,
                    catering to more than 6 million customers across the country.
                    Headquartered in Pune, the company's product offering includes
                    Consumer Durable Loans, Personal Loans, Loan against
                    Property, Small Business Loans, Home loans, Credit Cards,Two-wheeler and
                    Three-wheeler Loans, Construction Equipment
                    Loans, Loan against Securities and the recently introduced
                    Lifestyle Finance. Bajaj Finance Limited prides itself for holding
                    the highest credit rating of FAAA/Stable for any NBFC in the  country today</p>
                <h4> Business Challenge</h4>
                <p>
                    Bajaj Finserv of fers an extensive range of loan and insurance products
                    and services to its customers. These services are hosted by disparate
                    applications at the Bajaj datacenter, connected via decentralized 'Point-to-Point'
                    interfaces using various customized interfaces. With the number of such
                    programmed interfaces increasing, the sheer volume was becoming unmanageable
                    requiring incremental resources with specialized skill sets to maintain. Some customer
                    account activities required tedious manual processes to update standard customer contact details, such as
                    address, telephone number, email address etc.
                    <br>
                    Apart from Kiosk operations, Bajaj Finserv uses FinnOne,
                    a loan management application, which keeps track of
                    customer accounts and maintains transactional data of
                    customer interactions. DataMart, a data warehouse
                    application populates data from FinnOne and
                    Salesforce.com applications which data is then used by
                    partner portals (that perform various actions including
                    Address verification) and by customer portals, allowing
                    customers to check their accounts

                </p>
                <p>
                    <b>Target Needs:</b>
                </p><p>
                    A burgeoning middle-class with high purchasing power
                    and the fast paced financial marketplace in India requires
                    quick and consistent communication between applications
                    so customers get updates in near real-time. While this was
                    a clear business goal, the slow and cumbersome business
                    applications framework compromised operational
                    efficiency with risk of frequent breakdowns. It was critical
                    for Bajaj Finserv to streamline ad revamp its business
                    processes. Requirements were broadly classified as:
                </p>
                <p>
                    <span class="colorred"> De-clutter Applications </span>- Set up cluster architecture for
                    servers for efficient performance
                </p>  <p>

                    <span class="colorred">A Centralized Monitoring System </span>- A centralized hub to
                    easily monitor the process flows across all applications
                </p>  <p>
                    <span class="colorred">A Reliable System </span>- A
                    system that can sustain large
                    number of users and eliminate the risk of errors and
                    breakdowns
                </p>  <p>
                    <span class="colorred">Easy Maintenance </span> -
                    A system that can be easily configured/reconfigured by isolating each component
                    <br>
                    <span class="colorred"> Resource Friendly System </span> - Perform all operations with
                    a smaller development team
                </p>  <p>
                    <span class="colorred">Fast & Reliable Communication
                    </span>
                </p>  <p>
                    <span class="colorred">Easy Scalability</span>- Financial processes to depend on
                    many inter-related applications, Bajaj Finserv needed a
                    system architecture that can rapidly scale to support the
                    company's growing operational needs.
                </p>


            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>
                    After evaluating various vendors, Bajaj Finserv narrowed
                    down few vendors to conduct detailed proofs of concept.
                    Bajaj Finserv found that Fiorano SOA
                    platform will address
                    their business requirements in a faster and more efficient
                    manner; Fiorano's peer-to-peer architecture was a perfect
                    fit to overcome the growing business demands of a
                    financial service conglomerate like itself.
                    The solution was achieved by building various “Fiorano flows” to address
                    each integration problem.
                </p><p>
                    The point-to-point connections of customized programmed
                    web-service interfaces, databases and similar integration
                    interfaces were replaced by designing Fiorano Event
                    Process flows with appropriate standards-based Fiorano
                    adapters and deploying these business flows on the plug-n-play Fiorano ESB platform in each case, allowing easier
                    maintenance and reconfiguration for all the interfaces.
                </p>
                <p>
                <ul>
                    <li>Access of Insurance Certificates provided by Bajaj
                        Finserv's subsidiary Bajaj
                        Allianz is now handled
                        using the Fiorano HTTP
                        Service adapter, which
                        directly connects to the Bajaj
                        Allianz database to
                        fetch the required information. </li>

                    <li>
                        The Kiosk portal displays predefined of
                        fers to
                        customers based on parameters like their prior
                        relationship with Bajaj, by fetching records from
                        the relvant databases and Salesforce.com
                        accounts.
                    </li><li>
                        This requirement was implemented with
                        Fiorano Web Service, DB and Sales force.com
                        adapters.
                    </li><li>
                        Access to all information pertaining to loan
                        accounts, including the interest certificates,
                        payment schedules et al from the digital portal is
                        facilitated by enabling W
                        eb Service calls through
                        Fiorano's WebService Consumer adapter.
                    </li><li>
                        Reverse communication from the customer such
                        as requests, feedback and complaints are handled
                        and stored in a separate CRMR application.
                        These features are enabled by Fiorano's
                        WebService Consumer adapters in the backend.
                    </li><li>
                        Critical correspondence such as sending
                        passwords, an EMI Card PIN or a Loan
                        Account
                        Number (via SMS) in an automated manner that is
                        quick, ef
                        ficient and does not break down is of
                        prime importance for Bajaj Finserv.
                    </li><li>
                        This requirement is handled via Fiorano W
                        ebService
                        Consumer adapters.
                    </li>


                </ul>
                </p>
                <p>
                    <b>FinnOne, DataMart, Salesforce.com communication
                    flows:</b></p>
                </p><p>
                    Earlier customer account activities were being carried out
                    by making point-to-point connections between W
                    ebService
                    interfaces and databases using database procedure calls.
                    The total number of such programmed interfaces was
                    becoming too large to maintain and required extra
                    resources with specialized skills.
                    These flows involved:
                </p>
                <p>
                <ul>
                <li> Capturing customer leads from IVR
                    Toll free
                    numbers and using that data to reinitiate calls with
                    the customers in the event of a call being
                    disrupted</li><li>
                    Updating lead contact information</li>
                <li> Sending SMS alertsfor
                    customer cases pending at different stages, such as De-duplication, CIBIL
                    verification
                    etc </li>
                <li>             Capturing data of of
                    fers available to customers
                    and the offers that they choose </li>
                </ul>

                </p>

                <p>
                    These and other such activities have been mapped to
                    Fiorano Event Process flows deployed on the Fiorano
                    ESB and are handled using a range of Fiorano Web
                    Service, Database and Salesforce.com adapters.
                </p>


            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Benefits</h4>
                <p>The key to Bajaj Finserv's phenomenal success has been
                    its willingness to employ technology to meet business
                    needs on a scale unmatched by its peers.</p>
                <p><b>Strategic and Operational Benefits</b></p>
                <p>
                    <ul>

                    <li>A single, unified and centralized system across
                        organization
                    </li><li>
                    Automation of many hitherto manual tasks
                    </li><li>
                        Processes that were executed in isolation are now
                        executed within Fiorano SOA
                    </li><li>
                        More than 350,000 transactions each week
                        executed with high speed and low latency
                    </li><li>
                        High visibility and control over processes using a
                        Studio GUI provided by Fiorano
                    </li><li>
                        The reconciliation and availability problem has
                        now been eliminated
                    </li><li>
                        Readiness to expand and add more processes is
                        now much easier
                    </li><li>
                        Enhanced information capture and ability to
                        retrieve data easily
                    </li>
                </ul>
                </p>
                <p><b>Business Benefits</b></p>
                <p>
                    <ul>
                    <li> Single customer view and enhanced customer relationship</li>
                    <li>  Customer gratification through speedy approvals
                        and transaction</li>
                    <li> Ability to launch new products or services quickly</li>
                    <li> Respond to change in market regulations and
                        practices Efficient IT
                        management practices</li>
                    <li> Reduced Total Cost of Ownership (TCO)</li>
                </ul>
                </p>
                <p>
                    By employing Fiorano's integration technology
                    , Bajaj
                    Finserv has drastically reduced the maintenance and
                    monitoring ef
                    fort involved in mission critical processes.
                    With transactions running on real-time at high speed,
                    customers that earlier had to wait for hours together could
                    now have their loans approved in matter of seconds.
                    Business processes can now readily be monitored and
                    updated using the Fiorano Studio GUI. Moreover
                    , since
                    the process flow design involves simple configurations
                    involving drop-down menus and some text fields,
                    expansion needs are easily met by existing resources
                    without needing additional resources with specialized skill
                    sets.
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

                <img style=" padding-left: 26%;" src="<?php echo base_url('assets/images/casestudies/bajaj_logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "With Fiorano's seamless deployment, we were
                    able to consolidate various integration processes
                    into one single platform across organization.
                    The integration not only made it convenient for
                    us to monitor all process flows centrally, but
                    also enabled us to provide our customers with
                    a simple and hassle-free experience."
                </p>
                <p class="text-right">
                    <b>
                        Mr. Rakesh Bhatt,<br>
                    Chief Operating Officer,<br>
                        Bajaj Finserv
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/bajaj-finserv.pdf" target="_blank">
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
