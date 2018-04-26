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
                Mortgage  – General American Corporation
            </h2>
        </div>
    </div>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/casestudies'); ?>">Case Studies</a></li>
            <li class="active">General American Corporation</li>
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
                    General American Corporation[GAC] uses Fiorano ESB&trade; to integrate its Web Enabled B2B Platform, Gators
                </h3>
                <hr>

                <h4>Customer Profile</h4>
                <p>General American Corporation (GAC), leader in the $25 billion real estate settlement services market in the United States, provides services to the first mortgage, refinance and equity lenders industry. It also licenses its core B2B web-enabled technology solution, GATORS through its affiliate ATOR Systems. GATORS  is recognized by industry leaders as the most capable software platform for both vendor management functions and efficient production of real estate settlement services and has been widely adopted by some of the country's largest title and settlement service providers including Old Republic and Stewart Information.</p>
                <h4>Business Problem</h4>
                <p>
                    General American Corporation (GAC) is a leader in the $25 billion real estate settlement services market. GAC uses GATORS, its proprietary, web enabled B2B vendor management platform to provide services to the mortgage finance industry. Before deployment of the Fiorano solution, management of GATORS involved huge expenses of custom programming, testing and extensive system downtimes leading to lost revenues and extended time-to-market. With over 30,000 vendors and 750,000 mortgage transactions worth billions of dollars processed in a single year, GAC needed to find ways to meet the increasing demands of customers and vendors for speed, service and responsiveness, all at a reduced cost. Fiorano Enterprise Service Bus (Fiorano ESB) enabled seamless integration of the GATORS platform enabling real-time change management, driving revenues, cutting costs and significantly improving productivity.
                </p>
                <p>GAC customers used the GATORS system to regularly place orders, do status tracking and updating, run property searches, title searches, title commitments, check broker price opinions etc., submitting thousands of such requests every day.</p>
                <p>With over 30,000 vendors and 750,000 mortgage transactions worth billions of dollars processed in a single year, GAC needed to find ways to meet the increasing demands of customers and vendors for speed, service and responsiveness, all at a reduced cost.</p>
                <ul>
                    <li><strong style="color:#CC3300;">Differing Data formats:</strong> Each customer used its own proprietary data format to access the GATORS system and further, each customer also used different communication mechanisms.</li>
                    <li><strong style="color:#CC3300;">Long Product Release Cycles:</strong> To enable processing, each such proprietary format had to be parsed and transformed to the GATORS' standard format to enable communication. All such data transformations were performed with custom code, which required modification each time there were changes to the data formats.</li>
                    <li><strong style="color:#CC3300;">System downtimes:</strong> This in turn implied that each time a change was requested by a customer or a new customer had to be added, GAC had to stop the entire system to do code level changes and re-deploy newer builds, making the system tightly coupled and difficult to maintain. This downtime, though related to a single customer, adversely impacted all GATORS' users leading to overall reduction in productivity and profit margins for GAC.</li>
                    <li><strong style="color:#CC3300;">High Maintenance Costs:</strong> Maintaining the GATORS software required operating costs of a dedicated support staff. GAC also had to entertain modification requests from all vendor-management companies that had licensed GATORS to provide services to their individual clients. The process of incorporating changes from different vendors and customers was expensive, time consuming and error-prone, depending as it did purely on custom coding.</li>
                    <li><strong style="color:#CC3300;">No Error Tracking:</strong> In addition to the above problems there was no fail-over system to catch errors in submissions or data mismatches leading to loss of productivity and costly manual interventions to rectify such problems.</li>
                </ul>
                <p>Managing heterogeneous platforms and data formats through GATORS in its current form involved huge expenses of custom programming, testing and extensive system downtimes leading to lost revenues and extended time-to-market.</p>
                <p>What GAC needed was a real-time change management system for GATORS with error handling facilities which could be implemented without disruption to it's existing operations and utilize investments in its existing infrastructure.</p>
            </div>
            <div class="col-xs-12 padding-top-20">

                <h4>Solution</h4>
                <p>
                    A successful approach to the GAC problems and Business Objectives involved a paradigm shift in the way the solution was approached. GAC had a proprietary server that did not lend well to making changes to Business Processes dynamically. However GAC wanted to extract value from its existing investments, not spend more money on buying new infrastructure.
                </p>
                <p>The process requirements demanded support for synchronous request response, reliable asynchronous messaging, a store and forward mechanism, extensive transformations from XML to XML, XML to flat file and vice versa, communication over multiple protocols like HTTP/HTTPs, FTP, SMTP, POP3, SOAP, WSDL etc.</p>
                <p>Fiorano ESB addressed each of the technical issues that in combination achieved the business objectives set out by GAC at the beginning:</p>
                <ul>
                    <li>Reduce Iterative Manual Programming Effort: Handling differing data formats across multiple communication channels now became a cinch for GAC Managers. Using the Fiorano ESB graphical user interface (GUI), business managers could now easily respond to customer requests for changes to data formats by simply using a drag and drop approach. Pre-built adapters shipped with Fiorano ESB provided ready means of communication across multiple protocols like HTTP/HTTPs, FTP, SMTP, POP3, SOAP, EJB and JMS. This meant custom coding was no longer required.</li>
                    <li>Business Process Definition in Real-Time: Fiorano ESB's component-based architecture enabled de-coupling of different vendor and customer interfaces thereby enabling new customer interfaces to be plugged into the existing system seamlessly. Addition/Changes for one customer did not require the entire system to be brought down. No longer dealing with one block of monolithic code, the resulting loosely coupled system also enabled modification of the existing process flows on the fly. For instance, within a Fiorano ESB flow, one could now easily replace one transformation with another without stopping the flow or affecting any application components.</li>
                    <li>Simplified and Flexible Change Management: Fiorano ESB's service oriented and event-driven architecture enabled change management to be a simple and cost effective exercise, allowing GAC to rapidly respond to market requirements. The system became simple and flexible enough to 'reconfigure' or 'rewire' based on changing business requirements, allowing new customers to be easily integrated into the existing system</li>
                    <li>Event-based Error Tracking: Fiorano ESB allowed real-time monitoring and debugging of components out of the box including a powerful automated error reporting mechanism and functionality to raise alerts and notifications.</li>
                    <li>Non-intrusive deployment of Fiorano ESB was perhaps the most valuable benefit to GAC. The solution was deployed seamlessly on top of existing hardware and software infrastructures without disruption to existing systems and operations</li>
                </ul>
                <div class="c text-center"><img src="<?php echo __IMAGES__?>/CS_GAC.jpg"></div>
                <h4>Benefits</h4>
                <p>
                    Fiorano ESB provided precisely the kind of integration platform that GAC was looking for. Fiorano ESB addressed each of the problems that GAC was facing, met all its business criteria and provided a flexible platform for future expansion and re-use providing an unmatched return on investment.
                </p>
                <p>"After an intensive evaluation process Fiorano ESB became the logical choice," said Chris Behning, Senior VP of IT at General American. "It was the only solution that offered simplicity, flexibility and ease of use. It's unique architecture and powerful tools enabled a non-intrusive implementation, optimizing our existing investment without disrupting operations. Added to this was Fiorano's proven track record as a provider of leading edge technology supporting mission critical operations at Fortune 500s worldwide." he added.</p>
                <p>"Fiorano ESB provides us with a flexible platform for future expansion with some major value adds like Real Time error notification. This solution has brought us closer to achieving real-time competencies, enabling us to drive revenues, drastically cut costs and achieve a significant ROI," said Norman Gottschalk, VP of IT at General American.</p>
                <p>GAC achieved significant qualitative and quantitative benefits by implementing the Fiorano solution:</p>
                <ul>
                    <li><strong style="color:#CC3300;">Reduced Time to Market</strong><br/>Shortened product release cycles relating to the GATORS system enabled GAC to sign on new customers quickly and implement customer change requests faster.</li>
                    <li><strong style="color:#CC3300;">Maintain Competitiveness</strong><br/>By providing an infrastructure that allows real-time responsiveness to demanding customers and vendors, GAC ensured it will maintain its leadership position in the market and continue to increase its market share.</li>
                    <li><strong style="color:#CC3300;">Higher Revenues</strong><br/>New customers can be added seamlessly. Increased customer satisfaction due to speed and accuracy of delivering change requests. Minimal downtime enabling round the clock availability of the system to all customers and partners, reducing overall processing times.</li>
                    <li><strong style="color:#CC3300;">Reduced Costs</strong><br/>Dramatically reduced need for programmer intervention. Significantly reduced the overhead costs of installation, development and maintenance. Key customer resources are freed up for other strategic projects and initiatives.</li>
                    <li><strong style="color:#CC3300;">Improved Productivity</strong><br/>Reduction in system downtime as well as real-time error notifications greatly enhanced the productivity of GAC employees, customers and vendors, thus driving higher revenues.</li>
                    <li><strong style="color:#CC3300;">Reduced Transaction Errors</strong><br/>The system allowed them to easily track, monitor and rectify errors in transaction requests submitted by customers and vendors. Fiorano ESB provided an attractive return on investment while meeting all the business objectives of the customer.</li>
                </ul>

            </div>
            <div class="col-xs-12 padding-top-20">
                <h4>About Fiorano Software</h4>
                <p>
                	Fiorano Software (<a href="/">www.fiorano.com</a>) is a leading provider of enterprise class business process integration and messaging infrastructure technology. Fiorano's network-centric solutions set a new paradigm in ROI, performance, interoperability and scalability. Global leaders including Fortune 500 companies such as Boeing, British Telecom, Credit Agricole Titres, Lockheed Martin, NASA, POSCO, Qwest Communications, Schlumberger and Vodafone among others have used Fiorano technology to deploy their enterprise nervous systems.
                </p>
                <p>
                To find out more about how Fiorano can help you meet your enterprise integration objectives, visit <a href="/">www.fiorano.com</a> or <a onclick="showContactUs();" href="javascript: void(0);">Email us, we will contact you!</a>
                </p>
                
            </div>
        </div>

        <div class="col-sm-3 padding-top-50 margintop-50">
            <div class="col-sm-12 col-xs-6 user-casestudy padding-top-20 padding-bottom-20">

                <img style=" padding-left: 19%;" src="<?php echo base_url('assets/images/casestudies/General_American_logo.jpg')?>" class="img-responsive align-right"/>
                <p class="Ucomments padding-top-20">
                    "Fiorano ESB provides us with a flexible platform for future expansion with some major value adds like Real Time error notification. This solution has brought us closer to achieving real-time competencies, enabling us to drive revenues, drastically cut costs and achieve a significant ROI.."
                </p>
                <p class="text-right">
                    <b>
                        Norman Gottschalk,<br/>
                        VP of IT,<br/>General American Corporation<br/>
                    </b>
                </p>

            </div>
            <div class="col-sm-12 col-xs-6 padding-top-20 padding-bottom-20">
                <a href="<?php echo  base_url('assets/pdf/casestudy/CS_Mortgage_FESB_USA_GeneralAmerican.pdf')?>" target="_blank">
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

