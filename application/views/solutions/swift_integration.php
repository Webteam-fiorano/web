<section id="intro" class="bannersectionsolutions">
    <div class="container">
        <div class="col-xs-12 productBanner ">

            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano SWIFT Capability Overview</h1>
                <p class="productHeadDesc hidden-xs" >

                </p>
            </div>
            <div class="productHeadDownload col-sm-4 ">

            </div>
        </div>
    </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-left">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('solutions'); ?>">Solutions</a></li>
            <li> SWIFT Capability Overview</li>

        </ul>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-xs-12 text-center submenu-main">
            <div class="col-sm-4  ">
                <a class=" animated-button victoria-four" href="#overview">Overview <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-4 ">
                <a class=" animated-button victoria-four" href="#connectivity">  Connectivity <i class="fa fa-arrow-down"></i></a>
            </div>
            <div class="col-sm-4">
                <a class=" animated-button victoria-four" href="#messaging">Messaging<i class="fa fa-arrow-down"></i></a>
            </div>


        </div>
     </div>
</section>
<section id="overview">
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano SWIFT Capability Overview</h1>

            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-12">
            <br/>
           <!-- <div class="pull-right"><a href="#connectivity">Connectivity</a> <span style="color:#333;font-size:15px;">|</span>
                <a href="#messaging">Messaging</a> <span style="color:#333;font-size:15px;">|</span>
                <a href="#supported-message-types">Supported Message Types (MT)</a>
            </div>-->
            <h2>Fiorano SWIFT Solution Architecture</h2>
                <div class="col-sm-12 ">
                    <p>Fiorano ESB/SOA enables the creation of event flows to communicate with SWIFT systems, via prebuilt adapters / components shipped with the platform.</p>
                    <p>The figure below illustrates how Fiorano SOA connects and communicates with SWIFT Net:</p>
                </div>
                <div class="col-sm-12">
                    <p class="text-center do_image"><a href="<?php echo base_url('assets/images/solutions')?>/fiorano-swift-solution-architecture-hd.jpg" target="_blank" title="Click to enlarge"><img src="<?php echo base_url('assets/images/solutions')?>/fiorano-swift-solution-architecture.jpg" class="img-responsive" alt="Fiorano SWIFT Solution Architecture" /></a></p>
                </div>

<div>
</div></div></div></div></section>
<section class="even-section" id="connectivity">

    <div class="container">

        <div class="row">
            <div class="section-header">
                <a name="connectivity"></a>
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Connectivity</h2>

            </div>
        </div>
        <div class="col-sm-12 padding-bottom-50 ">
            <div class="col-sm-12">
                <p>Alliance Access provides various interfaces for SWIFT applications to connect for SWIFT communication. These interfaces include MQ Series, SOAP, File and FTP. Fiorano SOA has prebuilt adapters which support these protocols, enabling communication with Alliance Access. SWIFT Alliance Access (SAA) connects to SWIFTNet through the SWIFT Alliance Gateway.</p>
            </div>
            <div class="col-sm-7">
                <p>SWIFT Alliance Access provides below interfaces to connect to business applications:</p>
                <ul class="pad">
                    <li>SOAP Host Adapter</li>
                    <li>MQHA (IBM WebSphere MQ Interface)</li>
                    <li>MQSA (soon to be decommissioned)</li>
                    <li>File Transfer Adapter</li>
                    <li>Direct File Transfer</li>
                </ul>
            </div>
            <div class="col-sm-5">
                <table  class="swiftTable text-center" border="1" bordercolor="cccccc" cellspacing="0" cellpadding="7" align="center" style="border-collapse:collapse">
                    <tr class="thead" style="background-color:#00599C;color:#ffffff">
                        <td><strong>SAA Host Adapter</strong></td>
                        <td><strong>Fiorano Connectivity Adapter to be used in conjunction with the Fiorano SWIFT Adapter</strong></td>
                    </tr>
                    <tr class="trcontent">
                        <td>MQHA</td>
                        <td>MQ Series In and MQ Series Out Adapters</td>
                    </tr>
                    <tr>
                        <td>MQSA</td>
                        <td>No support required</td>
                    </tr>
                    <tr>
                        <td>SOAP</td>
                        <td>Web Service Consumer 4.0/ 5.0 </td>
                    </tr>
                    <tr>
                        <td>File Transfer</td>
                        <td>File Reader and File Writer </td>
                    </tr>
                    <tr>
                        <td>Direct File Transfer</td>
                        <td>File Reader and File Writer</td>
                    </tr>
                </table>
            </div>
        </div>

   </div>

</section>
<section id="messaging">
    <div class="container">

        <div class="row">
            <div class="section-header">

                <a name="messaging"></a>

                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Messaging</h2>

            </div>
        </div>
        <div class="col-xs-12 padding-bottom-50">
            <p>SWIFT comprises of two different types of messages - MT (Message Type) and MX (XML Message Type).</p>
            <p>MT messages are further categorized into 9 different categories. Each category in-turn consists of various messages in the MTxxx format.</p>
            <p>MX messages are similarly divided into various types with each message having its own MX identifier.</p>
            <p>MT messages are sent/received using the FIN messaging service whereas MX messages are transferred using the InterAct messaging service. The FileAct messaging service transfers files which have either of these message types.</p>
            <div class="col-sm-12 swift_top">
                <div class="col-sm-3 messBox swift_child">
                    <div class="messBoxSub swift_child">
                        <h3>Message Creation</h3><hr class="double-white">
                        <p>Definitions of different MTXML and MX messages from various business processes can be transformed to MTXML/MX using Fiorano transformation tools via a simple drag and drop approach. </p>
                        <p>The Fiorano MTXML convertor, based on the SWIFT SDK, can be used to convert MTXML messages to MT messages which can then be sent to the SWIFT system using the Fiorano connectivity adapters outlined in the table above.</p>
                    </div>

                </div>
                <div class="col-sm-3 messBox swift_child">
                    <div class="messBoxSub swift_child">
                    <h3>Message Validation</h3><hr class="double-white">
                    <p>The validation of MT messages can be done by using the Fiorano MT Validator component which performs the validations based on the latest validation rules mentioned in the SWIFT User Handbook and SDK.</p>
                    <p>The validation of MX messages can be done using the ISO20022Validator adapter.</p>
                    </div>
                </div>
                <div class="col-sm-3 messBox swift_child">
                    <div class="messBoxSub swift_child">
                    <h3>Message Conversion</h3><hr class="double-white">
                    <p>There are two types of message conversion - MT to MX and MT to XML.</p>
                    </div>
                </div>
                <div class="col-sm-3 messBox swift_child">
                    <div class="messBoxSub swift_child">
                    <h3>MT-XML</h3><hr class="double-white">
                    <p>All MT messages can be converted into XML messages based on the schemas defined in the SWIFT SDK using the FioranoMT2XMLConvertor adapter. Once converted, these messages can be transformed to any business process schemas using the Fiorano transformation tool.</p>
                    </div>
                </div>
            </div>



        </div>



    </div>

</section>
<section class="even-section" >
    <div class="container padding-bottom-50">
        <div class="row">
            <div class="section-header">
                <a name="supported-message-types"></a>
                <h2 class=" text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Supported Message Types (MT) are noted below:</h2>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-4 padding-bottom-20">
                <div class="col-sm-12">
                    <table cellpadding="10" class="tableData" border="1" bordercolor="cccccc" cellspacing="0">
                        <tr>
                            <th width="" style="background-color:#00599C;color:#ffffff;padding:5px;"><strong>MT</strong></th>
                            <th style="background-color:#00599C;color:#ffffff;padding:5px;"><strong>MT Name</strong></th>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td>Request For Transfer</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td rowspan="2">Multiple Customer Credit Transfer</td>
                        </tr>
                        <tr>
                            <td>102+</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td rowspan="2">Single Customer Credit Transfer</td>
                        </tr>
                        <tr>
                            <td>103+</td>
                        </tr>
                        <tr>
                            <td>200</td>
                            <td>Financial Institution Transfer for its Own Account</td>
                        </tr>
                        <tr>
                            <td>201</td>
                            <td>Multiple Financial Institution Transfer for its Own Account</td>
                        </tr>
                        <tr>
                            <td>202</td>
                            <td>General Financial Institution Transfer</td>
                        </tr>
                        <tr>
                            <td>202 COV</td>
                            <td>General Financial Institution Transfer</td>
                        </tr>
                        <tr>
                            <td>203</td>
                            <td>Multiple General Financial Institution Transfer</td>
                        </tr>
                        <tr>
                            <td>205</td>
                            <td>Financial Institution Transfer Execution</td>
                        </tr>
                        <tr>
                            <td>205 COV</td>
                            <td>Financial Institution Transfer Execution</td>
                        </tr>
                        <tr>
                            <td>210</td>
                            <td>Notice to Receive</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-4 padding-bottom-20">
                <div class="col-sm-12">
                    <table cellpadding="10" class="tableData" border="1" bordercolor="cccccc" cellspacing="0" style="">
                        <tr>
                            <th width="" style="background-color:#00599C;color:#ffffff;padding:5px;"><strong>MT</strong></th>
                            <th style="background-color:#00599C;color:#ffffff;padding:5px;"><strong>MT Name</strong></th>
                        </tr>
                        <tr>
                            <td>900</td>
                            <td>Confirmation of Debit</td>
                        </tr>
                        <tr>
                            <td>910</td>
                            <td>Confirmation of Credit</td>
                        </tr>
                        <tr>
                            <td>940</td>
                            <td>Customer Statement Message</td>
                        </tr>
                        <tr>
                            <td>950</td>
                            <td>Statement Message</td>
                        </tr>
                        <tr>
                            <td>n90</td>
                            <td>Advice of Charges, Interest and Other Adjustments</td>
                        </tr>
                        <tr>
                            <td>n91</td>
                            <td>Request for Payment of Charges, Interest and Other Expenses</td>
                        </tr>
                        <tr>
                            <td>n92</td>
                            <td>Request for Cancellation</td>
                        </tr>
                        <tr>
                            <td>n95</td>
                            <td>Queries</td>
                        </tr>
                        <tr>
                            <td>n96</td>
                            <td>Answers</td>
                        </tr>
                        <tr>
                            <td>n98</td>
                            <td>Proprietary Message</td>
                        </tr>
                        <tr>
                            <td>n99</td>
                            <td>Free Format Message</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-4 padding-bottom-20">
                <div class="col-sm-12">
                    <table cellpadding="10" class="tableDatax" border="1" bordercolor="cccccc" cellspacing="0"  style="">
                        <tr>
                            <td style="background-color:#00599C;color:#ffffff;padding:5px;"><strong>MX</strong></td>
                            <td style="background-color:#00599C;color:#ffffff;padding:5px;"><strong>MX Messages</strong></td>
                        </tr>
                        <tr>
                            <td>camt.052</td>
                            <td>BankToCustomerAccountReportV02</td>
                        </tr>
                        <tr>
                            <td>camt.053</td>
                            <td>BankToCustomerStatementV02</td>
                        </tr>
                        <tr>
                            <td>pacs.008.001.03 </td>
                            <td>FIToFICustomerCreditTransferV03</td>
                        </tr>
                        <tr>
                            <td>pacs.009.001.03</td>
                            <td>FinancialInstitutionCreditTransferV03</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>


</section>
<section>
    <div class="container">

        <div class="row padding-top-50 padding-bottom-20">
            <div class="section-header">
                <a name="supported-message-types"></a>
                <h3 class="text-center">Contact us at <a href="mailto:sales@fiorano.com">sales@fiorano.com</a> for more information, a personalized demo or even if you have a quick question. </h3>

            </div>
        </div>


    </div>

</section>
<div class="icon-bar-left">
    <a class="" href="#overview" >Overview</a>
    <a class="" href="#connectivity" >Connectivity</a>
    <a class="" href="#messaging" >Messaging</a>
</div>

<script>
    $(document).ready(function(){
        if(screen.width < 1024) {
            return;
        }
        $(".swift_child").css({'height':($(".swift_top").height()+'px')});
    });
</script>


