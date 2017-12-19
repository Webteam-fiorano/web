<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/8/2017
 * Time: 5:03 PM
 */
?>

<section class="casestudy-finance">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Financial Services – Federal Bank
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Federal Bank</li>
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
                    Federal Bank selects Fiorano ESB for Infosys Finacle core banking and retail channel integration
                </h3>
                <hr>
                <h4>Customer Profile</h4>
                <p><strong><a href="http://www.federal-bank.com" target="_blank" rel="nofollow">Federal Bank Limited</a></strong> (NSE: FEDERALBNK, BSE: 500469, LSE: FEDS) is a major commercial bank listed on the Bombay and London stock exchanges and is headquartered in India. As of July 2012, it had 1000 branches spread across 24 states in India and 1029 ATMs around the country (across 108 metro centers, 224 urban centers, 384 semi-urban locations and 87 rural areas). Federal Bank, with its wide range of products and services, is a financial supermarket providing banking services, e-trading (Fed e-trade), foreign currency, internet banking (FedNet) and mobile banking (Fedmobile) among others. </p>
                <p> The bank has also recently taken over the management of the World Exchange Center in Bahrain and is a major player catering to the large ex-pat population in UAE for deposits and foreign currency remittance services.</p>
                <h4>Business Problem</h4>
                <p>Federal Bank is using over 30 retail banking related applications from
                    various vendors including Infosys Core banking platform FINACLE
                    running on mixture of hardware including IBM AIX servers. As part of
                    their expansion plans to increase the number of value added services to its customers, the Bank wanted to
                    provide near real-time availability of
                    foreign exchange remittances through
                    SWIFT. In addition they had ambitious
                    plans to extend their offering to build a
                    multichannel payment gateway,
                    expand their kiosk facilities and
                    ATM network. </p>
                <p>Their IT team realized that integration with multiple partners
                    of SWIFT would require monumental investments in
                    hardware, software and consulting efforts, putting their
                    entire project behind schedule. The point to point nature of
                    connections between these different applications would
                    make the scalability and management of such a system a
                    challenge and introduce multiple security vulnerabilities.
                    Such a system would fall short of enterprise performance,
                    reliability, scalability and affordability goals of the Bank.</p>

                <ul class="pad">
                    <li><strong class="fb">Time to Market for new Services</strong><br/>Delivering new services to market as fast as they
                        wanted was an immediate goal. Integration with
                        multiple partners in the current system would take
                        months to implement and deploy. Software asset
                        reuse would be severely limited, adding a layer of
                        costs and increased time to market.</li>
                    <li><strong class="fb">Reliability &amp; Security challenges</strong><br/>Implementing a point to point type of network as
                        many other banks had chosen would expose their
                        network to multiple points of vulnerability and in the
                        long term the rigidity of the system could become
                        its Achilles heel, undermining the Bank's
                        competitiveness in a rapidly changing environment</li>
                    <li><strong class="fb">High Total cost of ownership</strong><br/>Federal Bank measured their return on investment
                        along two vectors-direct costs &amp; indirect benefits.
                        While the requirement to add more hardware to
                        accommodate newer functionality increased direct
                        costs, meeting customer requirements and
                        attending to system downtimes added to indirect
                        costs and time overruns.</li>
                </ul>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution Selection</h4>
                <p>At this point Federal Bank's IT team decided that the best
                    long term solution was to revisit the architectural blue print
                    of their Enterprise middleware infrastructure. After extended
                    research their team decided on implementing an
                    Enterprise Service Bus architecture. An ESB would allow
                    reuse, rapid connectivity to partners and third parties across
                    heterogeneous data formats and hardware.</p>
                <p>Given the competitive nature of the industry and the
                    increasing demands of the customer base for real-time
                    banking with availability through multiple channels, they
                    decided the ESB would give them the competitive edge and
                    put in place a flexible and agile IT infrastructure that could
                    respond quickly and effectively to growing business demands
                    of a banking conglomerate like Federal Bank.</p>
                <p>As they worked through a POC scenario, the team found
                    several operating advantages which came primarily from the
                    architectural uniqueness of the Fiorano ESB product as
                    compared to other solutions in the market:</p>
                <ul class="pad">
                    <li><strong class="fb">Ease of use</strong><br/>Whereas traditional large stack solutions took
                        several weeks to install and configure with complex
                        pre-requisites, Fiorano ESB could be installed on a
                        simple i3 core laptop in under 5 minutes. With the
                        Fiorano Studio, changing or enabling new services
                        was just a simple-drag-and-drop routine. There was
                        minimal requirement for complex coding.</li>
                    <li><strong class="fb">Significantly lower learning curve</strong><br/>Fiorano ESB offered a lower learning curve;
                        whereas it would take a new software engineer
                        almost 6 months to get productive on other
                        systems, a new un-trained resource could learn
                        and become part of the live Project team with
                        Fiorano in just a week.</li>
                    <li><strong class="fb">Transaction speed and Scalability</strong><br/>With the peer-to-peer architecture of the Fiorano
                        product, near linear scalability was possible.
                        Customers that earlier had to wait 24-48 hours for
                        credits could now have their transfers available in
                        under 60 seconds</li>
                    <li><strong class="fb">Reliability</strong><br/>Absence of a single point of failure made the
                        system inherently more robust and able to meet the
                        Bank's high transactional volume and stress without
                        fear of breakdowns.</li>
                    <li><strong class="fb">High Availability</strong><br/>Software based high availability in Fiorano lowered
                        the required  investments in hardware as compared
                        to competing solutions.</li>
                    <li><strong class="fb">Error handling</strong><br/>Errors could be quickly identified, isolated and dealt
                        with swiftly minimizing and sometime completely
                        obviating any system downtime at all.</li>
                </ul>

                <p>On a detailed evaluation they concluded that many of the
                    offerings from traditional large stack vendors, though
                    apparently feature rich, were not as simple and cohesive
                    an ESB product. Implementation and deployment would
                    necessarily require custom coding and extensive use of
                    consulting services leading to a high cost structure.</p>
                <p>After conducting a rigorous Proof-of-concept, the
                    Architectural and IT team at Federal Bank picked Fiorano
                    as the preferred solution that met all their criteria.</p>


                <h4>Benefits</h4>
                <p>While many of the benefits of the Fiorano ESB solution
                    will be achieved over multiple projects over a period
                    giving an ongoing ROI, the following are among the main
                    benefits of this solution:</p>
                <ul class="pad">
                    <li><strong>Significantly improved Customer response levels:</strong><br/>Delivery of financial services today demands real-time
                        event processing, one of Fiorano ESB's key strengths.
                        <p class="c text-center"><br/>
                          <a href="<?php echo __IMAGES__?>/fiorano_esb_developement_in_bank_hd.jpg" target="_blank" title="Click to enlarge"><img src="<?php echo __IMAGES__?>/fiorano_esb_developement_in_bank.jpg" alt="Fiorano ESB deployment in Banking" /></a></p>
                    </p>
                        <p class="text-center">
                            <span class="h4">Fiorano ESB deployment in Banking</span><br/>
                        </p>
                        <p class="c">

                        The Federal Bank IT team plans to
                        use the ESB to implement its SWIFT
                        integration project immediately
                        followed by its multichannel
                        integration projected to be completed
                        by March 2013.
                    </li>
                    <li><strong>Enabled rapid addition of new revenue channels:</strong><br/>
                        New business flows can be implemented 50%
                        faster with Fiorano ESB allowing delivery of new
                        services as fast as the business requires and meet
                        the Bank's stringent ROI objectives. The Bank
                        hopes to put in place myriad value added services
                        through multiple delivery channels including ATMs,
                        kiosks, hand-held devices, mobile and internet.
                        Fiorano's architecture supports incremental
                        implementation. Therefore, deployments can be
                        more modular and standardized, and less risky
                        and less expensive.
                    </li>
                    <li><strong>Improved profitability of existing channels:</strong><br/>Business flows can be modified dynamically
                        (i.e. changes to the flow do not require the flow to be
                        stopped &amp; redeployed), which is necessary for
                        mission-critical, 24x7 environments.</li>
                    <li><strong>Faster response to internal business needs:</strong><br/>Automatically configuring the underlying middleware
                        allows the logical process design to be mapped directly
                        to physical services distributed across the ESB,
                        empowering non-technical business-users to compose,
                        deploy, and modify event-driven business processes.</li>
                    <li><strong>Implement Central bank regulatory requirements within
                            stipulated time frames:</strong><br/>Going forward the ESB may also be leveraged in
                        managing data for compliance of Central bank (viz. the
                        Reserve Bank of India) regulations and reporting
                        requirements.</li>
                </ul>

            </div>
            <div class="col-xs-12 padding-top-20">
                <div class="cs-quot" style="clear:both;width:auto;border:1px solid #efefef;">
                    "With readily available, reasonably priced consulting services in India there is always a temptation to try and continue custom development for every project with a point-to-point style of integration. The question is how big you want to be and how fast you want to grow. The largest and best banks have shown that a solid middleware infrastructure is the secret to building an agile bank ready to roll out any new service that the market asks for. Revenue acceleration is only possible through cutting edge technology. This is the bottom line for us and we have chosen to go with Fiorano for precisely this reason."
                    <div class="cs-author">
                        K.P. Sunny<br/>
                        Head, IT <br/>Federal Bank<br/>
                    </div>
                </div>
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

                <img style=" padding-left: 19%;" src="<?php echo __IMAGES__?>/federal-bank-logo.jpg" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    There is no doubt in my mind that competing in the
                    banking and financial services market today requires
                    cutting edge technology. Customers are no longer
                    content to wait and going forward responsiveness,
                    accuracy and customer service will delineate the
                    leaders from the laggards. Federal Bank made a
                    conscious decision to invest in Fiorano ESB as the
                    solution of choice. The power of the product is in its
                    architectural simplicity which allows the Bank to put in
                    place a flexible architecture that will scale linearly and
                    allow business decisions to be implemented at the IT
                    level speedily.
                </p>
                <p class="text-right">
                    <b>
                        K.P. Sunny<br/>
                        Head, IT <br/>Federal Bank<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/CS_Federal_Bank.pdf" target="_blank">
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

