<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/9/2017
 * Time: 5:59 PM
 */
?>

<section class="casestudy-hospital">
    <div class="container ">
        <div class="col-xs-12 padding-top-20">
            <h2 class="white">
                Hospitality  – Fujinami
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Fujinami</li>
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
                   Japanese Hospitality major Fujinami adopts Fiorano ESB to empower franchisees
                </h3>
                <hr>
                <h4><b>Fiorano SOA compresses order-delivery cycle, improves productivity</b><br/></h4>
                <p><strong>Key points of this case study</strong></p>
                <ul class="pad" style="list-style:decimal">
                    <li>Order processing automation by web based system</li>
                    <li>Individual sales management for each franchise</li>
                    <li>System design based on enterprise architecture</li>
                    <li>REST based SOA - Reduced complexity and costs </li>
                    <li>High productivity</li>
                </ul>
                <h4>Customer Profile</h4>
                <p>Fujinami Towel Service (<a href="http://www.fujinami.co.jp/" target="_blank" rel="nofollow">www.fujinami.co.jp</a>, <a href="http://www.oshiborijapan.com/about_us_e.html" target="_blank" rel="nofollow">www.oshiborijapan.com/about_us_e.html</a>) was founded in 1967 as a seller and rental supplier of
                    "Oshibori", or "hot towel" in English. It is believed that the history of Oshibori
                    started in the Edo period in the 1600s. At Tea houses, a piece of cloth was
                    soaked in water, and given to travelers who stopped by to rest. It gave them
                    comfort from their long journey and was considered to be a heartwarming
                    gesture. The popularity of Oshibori rapidly spread in modern Japan and is now
                    widely used in the entire hospitality industry around the world from airlines ,
                    hotels, restaurants, salons and spas. Facilities that used oshibori in large
                    quantities began using oshibori-rental services like that provided by Fujinami.  </p>
                <p>Fujinami established Oshibori-Japan
                    as a brand name and redefined the
                    sensation and originality of Oshibori itself.
                    After expanding their towel service to Kanto district (in the
                    eastern half of Japan, including Tokyo), Fujinami began, in
                    1979, to handle non-towel services such as doormat rentals
                    and the supply of sanitary materials and store articles,
                    leveraging their established service network for the towel
                    service. By 1999, Fujimami had achieved sales volumes of
                    over 500 million oshiboris per month and it began aggressive
                    expansion into the Pacific region including Vietnam and China,
                    aiming for a "hub" business for procurement and sale of their
                    goods</p>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Business Problem</h4>
                <p>A major retail destination of oshibori is the hospitality industry
                    and each business unit consists of small-scale shops/
                    restaurants. Therefore, Fujinami has been using franchisees
                    for collecting sales orders and supplies from/to shops/
                    restaurants in a relevant district. </p>
                <strong class="fb">Manual order processing</strong>
                <p>Over the years a practice developed of the franchise agency
                    sending collected orders to Fujinami headquarters via fax.
                    These were then manually processed at the Fujinami
                    offices - obviously a relatively slow and error-prone process
                    once volumes increased the way they did.</p>

                <strong class="fb">Complex sales rules for different Franchise/Product combinations</strong>
                <p>With an increase in the number of different product lines,
                    applying sales rules which differed from franchise to franchise
                    became a highly complex task. Order processing became
                    cumbersome and unwieldy and frequent errors began creeping
                    into the system leading to delays and increased costs. Manual
                    practices such as hand writing comments and making
                    corrections by strikethrough on the faxed order sheets further
                    made order processing highly error-prone. If the person
                    responsible for processing orders was absent, the entire
                    process would come to a grinding halt.</p>

                <strong class="fb">Intricate packing and shipping logistics</strong>
                <p>Complex calculations were required to compute the number of
                    cases to be simultaneously packed which varied according to
                    the destination warehouse. Specific bundle discounts applicable for each warehouse had to be factored into the decision making
                    process. This also meant that Franchisees had to fill out multiple
                    order sheets for each warehouses or each product.</p>
                <p>All of the above factors led to significant bottlenecks in the
                    entire order-delivery and sales fulfillment cycle thereby severely
                    limiting Fujinami's ability to scale operations with high costs
                    eroding their profitability.</p>
            </div>
            <div class="col-xs-12 padding-top-20">

                <h4>Solution</h4>
                <strong class="fb">Requirement analysis</strong>
                <p>Fujinami Towel Service commissioned Japanese system
                    integrator, Intermirage to research options for digitizing their
                    order processing system. They wanted a scalable system that
                    could be adopted to meet their growing needs and one that
                    would also use their existing legacy systems (Database) and
                    networks. Given the fluid nature of business relations with the
                    Franchisees they needed a flexible system that allowed them to
                    make changes easily based on business expediency. Fujinami
                    evaluated solution-specific business application packages but
                    concluded that in the long run such a selection would result in a
                    spaghetti-like architecture with many end points. Their goal was
                    simplicity of design coupled with performance and flexibility.
                    They finally decided to use middleware-centric Enterprise
                    Service Bus (ESB) technology and selected the Fiorano SOA
                    Platform to deliver the solution. The key values driving the
                    selection of Fiorano over other technologies were:</p>
                <ul class="pad" style="list-style:decimal">
                    <li>Ability to use existing IT infrastructure (network, Database systems, etc)</li>
                    <li>High reusability of services allowing Fujinami to rapidly deploy and develop new business flows based on their internal equirements</li>
                    <li>In-built architectural-level scalability for future expansion overseas</li>
                    <li>Ease of use, so new business flows could be quickly developed and deployed by Fujinami engineers in-house</li>
                </ul>
                <strong class="fb">Deployment in 90 days</strong>
                <p>The new order processing system was built in just three months
                    with the support of partner, Intermirage. This support included
                    architecture design and development of functionality of security,
                    data, and user interface screens and to utilize Fiorano SOA
                    Platform as a bridge to those functionalities.</p>

                <p class="c text-center"><a href="<?php echo __IMAGES__?>/fujinami_fiorano_esb_hd.jpg" target="_blank"><img src="<?php echo __IMAGES__?>/fujinami_fiorano_esb.jpg" alt="Fujinami - Fiorano ESB" /></a></p>

                <p class="text-center"><strong class="fb">Features of the new Fiorano ESB based system:</strong></p>

                <strong class="b">Business Use case driven: "Drag-Drop-Deploy"</strong>
                <p>When developing new business flows and/or user interfaces
                    screens, changes and enhancements often occur even after
                    beta testing. On the Fiorano SOA Platform, the business flow
                    designer can easily deploy Fiorano's prebuilt components
                    which map to business functions and physical IT systems. The
                    designers were able to rapidly implement change requirements
                    even after beta testing using just a drag-drop-deploy approach.</p>

                <strong class="b">REST component</strong>
                <p>Web based user interface screens connect to the Fiorano SOA
                    Platform via REST APIs (a combination of HTTP GET/PUT and
                    XML response). This capability of communicating via a defined
                    service API without any direct access to databases from web
                    screens written by PHP or HTTP is very important as it is the
                    key feature that enables flexible system expansion and enhancements. Fiorano SOA provides a REST adapter prebuilt
                    component which got the job done via simple configuration
                    (XSD and property sheet) settings.</p>

                <strong class="b">Remote monitoring &amp; Error handling</strong>
                <p>Fiorano SOA Platform provides web based monitoring
                    functions such as logging in a variety of log levels,
                    communication recording and problem tracing. This enables
                    effective investigation for resolving problems and error tracking.</p>
                <strong class="b">High productivity</strong>
                <p>Productivity increases were significant with the Fiorano SOA
                    Platform; one use case took only 2 days to implement and
                    most of that time was spent on validating SQL statements for
                    existing databases. </p>

                <h4>Benefits</h4>
                <p>Mr. Noriaki Aoki the Chief Architect of
                    Intermirage who designed architecture of
                    the Fujinami system noted that, <em>"When
                        we select an SOA platform product, we
                        carefully evaluate implementation efficiency value per use case.
                        With the Fiorano SOA Platform, development processes from
                        configuration to deployment were very smooth and easy so that
                        alternative business scenarios could be completed very quickly.
                        In addition, Fiorano's REST adapter and event-port mechanism
                        eliminated the effort of script coding (such as branching by IF or
                        WHEN statements in XSLT syntax) which are required by other
                        products. We saved significant time in creating and deploying
                        REST APIs for business partners just by parameter settings in
                        the Wizard."</em> </p>
                <p>The new order system is now available as an online
                    e-commerce site, "e-shinzai" (e-professional-materials in
                    English) market, and every franchisee uses the system.
                    This new system brought numerous benefits to the franchisees
                    and Fujinami Towel Service:</p>
                <ul class="pad" style="list-style:decimal">
                    <li>Order-to-delivery cycle was compressed by an order of magnitude</li>
                    <li>Reduced complexity and costs </li>
                    <li>Exceptions handled expeditiously</li>
                    <li>Improved accuracy of orders</li>
                    <li>Employee productivity increased significantly</li>
                    <li>Provided transaction recording to franchisees</li>
                    <li>Automatic numbering management by each franchisee</li>
                    <li>Flexibility to change sales-rules or packaging/shipping algorithm on demand</li>
                    <li>Linked with sales campaigns</li>
                </ul>
                <h4>Future Plan at Fujinami Towel Service</h4>
                <p>Fujinami is planning to integrate this order system with
                    inventory management, and to expand the system for overseas
                    operations.</p>

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

                <img style=" padding-left: 19%;" src="<?php echo __IMAGES__?>/fujinami_logo.png" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "When we select an SOA platform product,
                    we carefully evaluate implementation
                    efficiency value per use case. With the
                    Fiorano SOA Platform, development
                    processes from configuration to deployment
                    were very smooth and easy so that alternative
                    business scenarios could be completed very
                    quickly. In addition, Fiorano's REST adapter
                    and event-port mechanism eliminated the
                    effort of script coding (such as branching by
                    IF or WHEN statements in XSLT syntax)
                    which are required by other products.
                    We saved significant time in creating and
                    deploying REST APIs for business partners
                    just by parameter settings in the Wizard."
                </p>
                <p class="text-right">
                    <b>
                        Mr. Noriaki Aoki<br/>
                        Chief Architect of Intermirage<br/>
                        Fujinami implementation partner<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/CS_Fujinami.pdf" target="_blank">
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

