
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
                Energy – Aboitiz Power
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">Aboitiz Power</li>
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
                <p>Aboitiz Power, a leader in the power industry with revenues exceeding P85 billion, is a publicly listed company in the Philippines. The group harnesses power from a right-mix portfolio of renewable (hydro, geothermal and solar) and nonrenewable (coal and oil) sources through its 42 generation facilities across the country. It is currently one of the largest electricity distributors in the Philippines with ownership interests in seven distribution utilities including Visayan Electric Company, Inc. (VECO) the second largest electric utility in the Philippines and Davao Light and Power the third largest in Philippines. </p>
                <h4> Business Challenge</h4>
                <p>
                    Aboitiz Power is a vertically integrated
                    company engaged in power generation,
                    distribution and retail electricity services,
                    serving more than 800,000 customers in Philippines. In order to ef
                    fectively serve such a large customer base, they have
                    maintained a very well defined and distributed IT landscape
                    that spans applications and databases for specific business
                    functions like work assignments, billing, customer care,
                    support and more.
                    <br>
                    The IT team itself is segregated to manage the distributed systems.
                    A large part of regular job of the IT
                    team at the distribution
                    utlities such as Visayan and Davao was to maintain the data
                    consistency across the IT landscape. Not only was this job
                    resource intensive, but also time consuming and repetitive in
                    nature. Moreover the constant querying of databases also
                    decreased the overall performance of the systems.
                    To make the  organization more agile to  respond to current
                    and  future needs Aboitz  had ambitious plans to introduce
                    new initiatives like mobile based applications for increasing
                    customer satisfaction and improving productivity

                    <br>
                    Consumers
                    could then use these applications for viewing and paying bills,
                    lodging complaints, or filing a new service request.
                    Aboitiz staff could effectively provide services to consumers.
                    It became clear to Aboitiz that to leverage the benefits of
                    mobile based digital applications, they would require
                    enterprise-grade middleware.

                </p>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Solution</h4>
                <p>
                    The ideal solution that Aboitiz was looking for was middleware that would allow:
                </p>
                <p>
                    <ul>
                    <li>Real-time database synchronization among multiple internal applications </li>
                    <li>Easy intra-application data transfer with minimum coding efforts </li>
                    <li>Service enablement of specific modules of their business applications Effective change management within the organization </li>

                </ul>
                </p>
                <p>
                    After a careful examination of various integration products in the market, Aboitiz Power Corporation chose Fiorano ESB to serve as the middleware due to its innovative microservicecentric architecture that enabled rapid deployment and dramatically improved productivity of existing resources. With Fiorano's efficient mapping tools and ESB infrastructure, the time taken to deliver new services was significantly reduced, resulting in a notable increase in customer satisfaction. Soon after the selection, Aboitiz started deploying its applications on the Fiorano Platform.
                    Fiorano consultants designed the first project implementation in 2 different phases:
                </p>
                <p>
                   <b> 1) Seamless integration among enterprise apps</b>
                </p>
                <p>
                    The first phase of implementation comprised of integrating core enterprise applications like ERP (e-Business Suite), WAM (work and asset management) and CCB (Customer care and billing). ERP contains the information on accounts, inventory management, sales orders and human resources. WAM contains the records of the working staff and materials used for service jobs. These service jobs are generated in the system through CCB which takes care of customer interaction and management.
                    <br>
                    For smooth business operations, it was imperative that all 3 systems work in co-ordination and have synchronized data from the MDM (master data management).
                    <br>
                    Database synchronization flows were developed on Fiorano e-Studio via a drag and drop visual interface. Pre-built database adapters, which can connect to any JDBC compliant database, reduced the burden of manual coding. With the resulting development, the databases of these 3 applications are now synchronized with real-time information added/updated/queried multiple times a day.
                </p>
                <p>
                    <img src="<?php echo base_url('assets/images/casestudies/aboitiz-diagram-01.jpg')?>" class="img-responsive "/>

                </p>
                <p>
                   <b> 2) Service enablement through REST based APIs</b>
                </p>
                <p> The second phase of implementation involved digitization through mobile applications. Aboitiz wanted to provide mobile based services to its customers. Through the applications the customers could log and track complaints, pay and view bills, and check their power consumption.
                    <br>
                    Instead of creating a new backend application server for the mobile applications, Aboitiz's IT team used the Fiorano platform to expose REST-based web services. These services are consumed by the mobile applications created for increasing customer engagement.
                    <br>
                    The applications also include a location based service from Google APIs which directs the employees of Aboitiz to locate the origin of a complaint. This feature has drastically reduced the time to provide maintenance services as agents get realtime information while on the move.The Fiorano Integration platform provides several powerful features that make business process automation simple and quick.
                </p>
                <p>
                    <img src="<?php echo base_url('assets/images/casestudies/aboitiz-diagram-02.jpg')?>" class="img-responsive "/>

                </p>
                <p>
                   <b> Database Synchronization </b>- Pre-built database adapters establish data consistency between distributed databases and the MDM implementation of Aboitiz. The data is replicated and updated in real-time as they are connected by a message broker, ensuring zero data loss during the synchronization process.
                </p><p>
                    <b>Exposing Web Services </b>- Fiorano's WS Stub component can easily expose core application services as web services. Existing WSDLs are used to develop Web Services which is the simplest way to integrate with External systems (such as mobile apps in the case of Aboitiz)
                </p><p>
                    <b>Accelerated Development and Deployment </b>- Fiorano studio provides the IT team at Aboitiz with visual tools for orchestrating and creating the event processes, obviating requirement for coding/development.
                </p><p>
                    <b>Agility and Reliability </b>- Aboitiz can now easily change/update any service or workflow without any negative impact on the overall system. The underlying messaging broker guarantees message delivery and provides message interception capabilities (ability to alter the processes during runtime.)
                </p>
            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>Results</h4>
                <p>
                    <b>Increased Data Availability </b>- Real-time updates in distributed databases across the IT landscape of Aboitiz make information readily available to all stakeholders. Complaints are now resolved quickly as the company's staff has access to all necessary information on the go, including the location.
                </p>
                <p>
                    <b>Reduced Maintenance Costs </b>- Aboitiz had separate teams maintaining individual systems and the integrations between these systems. With Fiorano in place, different teams now have a unified view of their entire IT architecture. Increased co-ordination among the teams has made several previous intermediate steps redundant reduced maintenance costs and accelerated time to market.
                </p>
                <p>
                    <b>Increased Customer Satisfaction </b> - With the quick launch of mobile services for its customers, Aboitiz witnessed new levels of customer satisfaction scores leading to a quick Return on Investment and expansion of multiple revenue streams.
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

                <img style=" padding-left: 19%;" src="<?php echo base_url('assets/images/casestudies/aboitiz-logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Fiorano provides a highly scalable integration platform enabling us to standardize and service enable all applications built on different technologies. Fiorano ESB is now part of our core infrastructure serving multiple applications."
                </p>
                <p class="text-right">
                    <b>
                        SAladino B. Borja Jr., AVP,<br>
                        APC Distribution Information Services,<br>
                        Aboitiz Power Corporation
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php  echo __ROOT__ ?>/customers/casestudies/aboitiz-casestudy.pdf" target="_blank">
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
