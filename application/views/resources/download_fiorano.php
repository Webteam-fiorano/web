<?php
$selVersion = array("1040"=>'selected', "1033"=>'',"1032"=>'',"1031"=>'',"1030"=>'',"1020"=>'',"1010"=>'',"10"=>'',"951"=>'',"950"=>'',"942"=>'',
    "941"=>'',"940"=>'',"930"=>'',"922"=>'',"921"=>'',"920"=>'',"911"=>'',"910"=>'',
    "902"=>'',"901"=>'',"900"=>'');

if (empty($this->session->userdata['logged_in'])) {
  //  $location = site_url() . '/accounts';
  // header('Location:' . $location);
   // exit;
} else {
    //Store the section for download processing
    $_SESSION['s'] = 'fsoa';

}
if(isset($_GET['v'])) {
    $selVersion[$_GET['v']] = 'selected';
}

if (isset($_POST['product'])) {
    __::load("Downloads.php", Resource::PLUGIN);
    FSOA_Download();
}

$layout_data = array(
    "css" => array(),
    "js" => array(),
    "lhs" => "devzone_lhs.htm",
    "navigation" => "navigation.php",
    "header" => "header.php",
    "footer" => "footer.php",
    "breads" => array("title"=>"Product Download - Fiorano Platform","img"=>"/images/v3/stripe.jpg","crumbs"=>array(array("url"=>"/Accounts/Login","title"=> "Accounts"))),
    "title" => "Fiorano Platform, Message-Driven SOA, SOA platform, Java Message Service (JMS), SAP Solutions, JMS Server, Messaging Queue",
    "meta" => array("keywords" => "Message-Driven SOA, SOA platform, Java Message Service (JMS), SAP Solutions, JMS Server, ESB, JMS, SOA, FioranoMQ, Enterprise Service Bus, Java Messaging Service, Service Oriented Architecture, Messaging Queue, Enterprise messaging, SAP integration, JMS performance, JMS Server, SOA platform, Busines process management",
        "description" => "Fiorano is a leading provider of enterprise software for service-oriented architecture, enterprise  and business process management (BPM), including Java Messaging Service, JMS Server, SAP integration, Messaging Queue",
        "abstract" => "Message-Driven SOA, SOA platform, Java Message Service (JMS), SAP Solutions, JMS Server, ESB, JMS, SOA, FioranoMQ, Enterprise Service Bus, Java Messaging Service, Service Oriented Architecture, Messaging Queue, Enterprise messaging, SAP integration, JMS performance, JMS Server, SOA platform, Busines process management, BMS")
);
?>

<?php // CONTENT ?>

<script language="JavaScript" type="text/JavaScript">
    function check()
    {
        var checkbox_choices = 0;
        var BI=[];
        BI=document.getElementsByName("checkgroup[]");
        for(i=0;i<BI.length;i++){
            if(BI[i].checked){
                checkbox_choices = checkbox_choices + 1;
            }
        }
        if(checkbox_choices == 0)
        {
            alert ("Please check all the Business Issues that applies");
            return false;
        }
        if(checkbox_choices >=1 && BI[12].checked)
        {
            if(document.download_fesb.Other_Business_Issues.value == "(Please specify)" || document.download_fesb.Other_Business_Issues.value =="")
            {
                alert ("Please provide other Business Issue that applies");
                document.download_fesb.Other_Business_Issues.focus();
                return false;
            }
        }
        if(document.download_fesb.implementationstages.value == "Select")
        {
            alert ("Please select appropriate Implementation Stages");
            document.download_fesb.implementationstages.focus();
            return false;
        }
        if(document.download_fesb.implementationstages.value == "Other" && document.getElementById('Other_Implementations').style.display == "inline")
        {
            if(document.download_fesb.Other_Implementation_Stages.value == "(Please specify)" || document.download_fesb.Other_Implementation_Stages.value =="")
            {
                alert ("Please provide other Implementation Stage");
                document.download_fesb.Other_Implementation_Stages.focus();
                return false;
            }
        }
        if(document.download_fesb.usage.value == "Select")
        {
            alert ("Please select Planned Usage");
            document.download_fesb.usage.focus();
            return false;
        }
        else
        {
            childWindow=open('EULA_fesb.php','disclaimer','scrollbars=yes,resizable=yes,width=800,height=600');
            if (childWindow.opener == null) childWindow.opener = self;
            return false;
        }
    }
    function enableordisableme()
    {
        var current = document.download_fesb.Other_Business_Issues.disabled;
        if(current)
        {
            document.download_fesb.Other_Business_Issues.disabled = false;
            document.download_fesb.Other_Business_Issues.focus();
            document.download_fesb.Other_Business_Issues.value = "";
        }
        else
        {
            document.download_fesb.Other_Business_Issues.value = "(Please Specify)";
            document.download_fesb.Other_Business_Issues.disabled = true;
        }
    }
    function disp_others()
    {
        var current_others = document.getElementById('Other_Implementations').style.display;
        if(current_others == "none" && document.download_fesb.implementationstages.value == "Other")
        {
            document.getElementById('Other_Implementations').style.display = "inline";
            document.download_fesb.Other_Implementation_Stages.focus();
        }
        else
        {
            document.getElementById('Other_Implementations').style.display = "none";
        }
    }
</script>


<section id="download_fiorano">
    <div class="container">
        <form action="./download_fsoa.php" method="post" enctype="application/x-www-form-urlencoded" name="download_fesb" onsubmit="return check()">
               <input type="hidden" name="product_name" value="fsoa">
            <div class="row well" id="upper_arrow_div">
                <p>To download an evaluation copy of the Fiorano Platform<sup>&reg;</sup>, please complete the form below and click the '<b>Download Now</b>' button, and you will receive Fiorano Platform download instructions shortly. You may also contact us at: +1-650-326-1136 or <a href="javascript: void(0);" onclick="showContactUs();">Email us, we will contact you! </a></p>
                <div class="form-group">
                    <label>Select Product Version : </label>
                    <select name="product">
                        <option value="Fiorano Platform 10.4.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1040']?>>Fiorano Platform<sup>&reg;</sup> 10.4.0</option>
                        <option value="Fiorano Platform 10.3.3 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1033']?>>Fiorano Platform<sup>&reg;</sup> 10.3.3</option>
                        <option value="Fiorano Platform 10.3.2 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1032']?>>Fiorano Platform<sup>&reg;</sup> 10.3.2</option>
                        <option value="Fiorano Platform 10.3.1 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1031']?>>Fiorano Platform<sup>&reg;</sup> 10.3.1</option>
                        <option value="Fiorano Platform 10.3.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1030']?>>Fiorano Platform<sup>&reg;</sup> 10.3.0</option>
                        <option value="Fiorano Platform 10.2.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1020']?>>Fiorano Platform<sup>&reg;</sup> 10.2.0</option>
                        <option value="Fiorano Platform 10.1.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['1010']?>>Fiorano Platform<sup>&reg;</sup> 10.1.0</option>
                        <option value="Fiorano Platform 10.0.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['10']?>>Fiorano Platform<sup>&reg;</sup> 10.0.0</option>
                        <option value="Fiorano SOA Platform 9.5.1 for Windows/Unix/Linux/Mac" <?php echo $selVersion['951']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.5.1</option>
                        <option value="Fiorano SOA Platform 9.5.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['950']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.5.0</option>
                        <option value="Fiorano SOA Platform 9.4.2 for Windows/Unix/Linux/Mac" <?php echo $selVersion['942']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.4.2</option>
                        <option value="Fiorano SOA Platform 9.4.1 for Windows/Unix/Linux/Mac" <?php echo $selVersion['941']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.4.1</option>
                        <option value="Fiorano SOA Platform 9.4.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['940']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.4.0</option>
                        <option value="Fiorano SOA Platform 9.3.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['930']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.3.0</option>
                        <option value="Fiorano SOA Platform 9.2.2 for Windows/Unix/Linux/Mac" <?php echo $selVersion['922']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.2.2</option>
                        <option value="Fiorano SOA Platform 9.2.1 for Windows/Unix/Linux/Mac" <?php echo $selVersion['921']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.2.1</option>
                        <option value="Fiorano SOA Platform 9.2.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['920']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.2.0</option>
                        <option value="Fiorano SOA Platform 9.1.1 for Windows/Unix/Linux/Mac" <?php echo $selVersion['911']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.1.1</option>
                        <option value="Fiorano SOA Platform 9.1.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['910']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.1.0</option>
                        <option value="Fiorano SOA Platform 9.0.2 for Windows/Unix/Linux/Mac" <?php echo $selVersion['902']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.0.2</option>
                        <option value="Fiorano SOA Platform 9.0.1 for Windows/Unix/Linux/Mac" <?php echo $selVersion['901']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.0.1</option>
                        <option value="Fiorano SOA Platform 9.0.0 for Windows/Unix/Linux/Mac" <?php echo $selVersion['900']?>>Fiorano SOA Platform<sup>&reg;</sup> 9.0.0</option>
                        <option value="Fiorano SOA Platform 2007 SP7 Update1 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP7 Update1</option>
                        <option value="Fiorano SOA Platform 2007 SP7 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP7</option>
                        <option value="Fiorano SOA Platform 2007 SP6 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP6</option>
                        <option value="Fiorano SOA Platform 2007 SP5 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP5</option>
                        <option value="Fiorano SOA Platform 2007 SP4 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP4</option>
                        <option value="Fiorano SOA Platform 2007 SP3-2 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP3-2</option>
                        <option value="Fiorano SOA Platform 2007 SP3-1 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP3-1</option>
                        <option value="Fiorano SOA Platform 2007 SP3 for Windows/Unix/Linux/Mac">Fiorano SOA Platform<sup>&reg;</sup> 2007 with SP3</option>
                    </select>
                </div>
            </div>
            <div class="row well" id="lower_arrow_div"">
                <div class="col-sm-12"><h2>Help us with Information : </h2></div>
                <hr>
                <div class="col-sm-12">Please fill out the information below and click "<b>Download Now</b>" to initiate the process.</div>
                <div class="col-sm-12">Fields marked with <span class="reqMention"> *</span> are compulsory.</div>
                <div class="col-sm-3"><b><br/>Business Issues <span class="reqMention"> *</span></b>&nbsp; <br/><span>(Check all that apply)</span></div>
                     <!--   <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
                            <tr>
                                <td colspan="2" class="r">Please fill out the information below and click "<strong class="b">Download Now</strong>" to initiate the process.
                                    <div class="r">Fields marked with <b class="red">*</b> are compulsory. </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="200px" height="28" class="r" valign="top"><strong>Business Issues <b class="red">*</b></strong>&nbsp; <br/><span style="font-size:10px;">(Check all that apply)&nbsp;&nbsp;&nbsp;</span></td> -->

                <div class="col-sm-9">
                    <div class="checkbox">
                        <label><input type="checkbox" name="checkgroup[]" value="Integration of disparate applications" id="Integration of disparate applications">Integration of disparate applications</label>
                        <label><input type="checkbox" name="checkgroup[]" value="Messaging middleware" id="Messaging middleware">Messaging middleware</label>
                        <label><input type="checkbox" name="checkgroup[]" value="Enterprise Architecture - SOA Initiative" id="Enterprise Architecture - SOA Initiative">Enterprise Architecture &ndash; SOA Initiative</label>

                        <label><input type="checkbox" name="checkgroup[]" value="Database synchronization/dataflow" id="Database synchronization/dataflow">Database synchronization/dataflow</label>
                        <label><input type="checkbox" name="checkgroup[]" value="Extending existing IT infrastructure" id="Extending existing IT infrastructure">Extending existing IT infrastructure </label>
                        <label><input type="checkbox" name="checkgroup[]" value="SAP Integration" id="SAP Integration">SAP Integration</label>

                        <label><input type="checkbox" name="checkgroup[]" value="Legacy System Integration" id="Legacy System Integration">Legacy System Integration </label>
                        <label><input type="checkbox" name="checkgroup[]" value="Mergers and Acquisitions" id="Mergers and Acquisitions">Mergers and Acquisitions </label>
                        <label><input type="checkbox" name="checkgroup[]" value="Cloud Integration (on-premise to cloud etc.)" id="aa1">Cloud Integration (on-premise to cloud etc.)</label>

                        <label><input type="checkbox" name="checkgroup[]" value="Cloud ESB (hosted PaaS)" id="aa2">Cloud ESB (hosted PaaS)</label>
                        <label><input type="checkbox" name="checkgroup[]" value="VAR/ISV/Distributor" id="VAR/ISV/Distributor">VAR/ISV/Distributor</label>
                        <label><input type="checkbox" name="checkgroup[]" value="Academic/Research" id="aa3">Academic/Research</label>

                        <label><input type="checkbox" name="checkgroup[]" value="Other" id="Other" onClick="enableordisableme()">Other</label>
                        <input type="text" value="(Please specify)" name="Other_Business_Issues" disabled>
                    </div>
                                  <!--  <div>
                                        <div>
                                            <div style="width: 280px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Integration of disparate applications" id="Integration of disparate applications">
                                                <label for="Integration of disparate applications">Integration of disparate applications</label>
                                            </div>
                                            <div style="width: 270px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Messaging middleware" id="Messaging middleware">
                                                <label for="Messaging middleware">Messaging middleware</label>
                                            </div>
                                        </div>
                                        <br/>
                                        <div>
                                            <div style="width: 280px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Enterprise Architecture - SOA Initiative" id="Enterprise Architecture - SOA Initiative">
                                                <label for="Enterprise Architecture - SOA Initiative">Enterprise Architecture &ndash; SOA Initiative </label>
                                            </div>
                                            <div style="width: 270px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Database synchronization/dataflow" id="Database synchronization/dataflow">
                                                <label for="Database synchronization/dataflow">Database synchronization/dataflow </label>
                                            </div>
                                        </div>
                                        <br/>
                                        <div>
                                            <div style="width: 280px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Extending existing IT infrastructure" id="Extending existing IT infrastructure">
                                                <label for="Extending existing IT infrastructure">Extending existing IT infrastructure </label>
                                            </div>
                                            <div style="width: 270px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="SAP Integration" id="SAP Integration">
                                                <label for="SAP Integration">SAP Integration </label></div>
                                        </div>
                                        <br/>
                                        <div>
                                            <div style="width: 280px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Legacy System Integration" id="Legacy System Integration">
                                                <label for="Legacy System Integration">Legacy System Integration </label></div>
                                            <div style="width: 270px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Mergers and Acquisitions" id="Mergers and Acquisitions">
                                                <label for="Mergers and Acquisitions">Mergers and Acquisitions </label>
                                            </div>
                                        </div>
                                        <br/>
                                        <div>
                                            <div style="float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Cloud Integration (on-premise to cloud etc.)" id="aa1">
                                                <label for="aa1">Cloud Integration (on-premise to cloud etc.)</label>
                                            </div>
                                            <div style="width: 280px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Cloud ESB (hosted PaaS)" id="aa2">
                                                <label for="aa2">Cloud ESB (hosted PaaS)</label>
                                            </div>
                                        </div>
                                        <br/>
                                        <div>
                                            <div style="width: 280px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="VAR/ISV/Distributor" id="VAR/ISV/Distributor">
                                                <label for="VAR/ISV/Distributor">VAR/ISV/Distributor</label>
                                            </div>
                                            <div style="width: 280px; float: left;"
                                            <input type="checkbox" name="checkgroup[]" value="Academic/Research" id="aa3">
                                            <label for="aa3">Academic/Research</label></div>
                                        </div>
                                        <div>
                                            <div style="width: 270px; float: left;">
                                                <input type="checkbox" name="checkgroup[]" value="Other" id="Other" onClick="enableordisableme()">
                                                <label for="Other">Other</label>
                                                <input type="text" value="(Please specify)" name="Other_Business_Issues" disabled>
                                            </div>
                                        </div>
                                    </div> -->
                </div>
                <div class="col-xs-12 nopadding">
                    <div class="col-sm-3"><b>Implementation Stage</b><span class="reqMention"> *</span></div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select class="selectwrap" name="implementationstages" OnChange="disp_others()">
                                <option value="Select" selected>Please Select</option>
                                <option value="Researching technology choices">Researching technology choices</option>
                                <option value="Evaluating shortlisted choices/vendors">Evaluating shortlisted choices/vendors</option>
                                <option value="Proof of concept in progress">Proof of concept progress</option>
                                <option value="Researching implementation best practices">Researching implementation best practices</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div id="Other_Implementations"><input type="text" value="" name="Other_Implementation_Stages"></div>
                    </div>
                </div>

                <div class="col-xs-12 nopadding">
                <div class="col-sm-3"><b>Planned Usage</b><span class="reqMention"> *</span></div>
                <div class="col-sm-9">
                    <div class="form-group">
                        <select name="usage">
                            <option value="Select" selected>Please Select</option>
                            <option value="End-user">End-user</option>
                            <option value="SI/Partner">SI/Partner</option>
                            <option value="Academic/Community (Non-Commercial)">Academic/Community (Non-Commercial)</option>
                        </select>
                    </div>
                    <div id="Other_Implementations"><input type="text" value="" name="Other_Implementation_Stages"></div>
                </div>
                </div>
            <div class="col-xs-12 nopadding">
            <div class="col-sm-3"><b>Brief Description of Project</b></div>
                <div class="col-sm-9"><textarea name="description" rows="5"></textarea></div>
            </div>
                <input type="submit" name="B12" value="Download Now" class="btn btn-info col-xs-12">

                <!--    </tr>
                    <tr>
                        <td class="r" valign="top"><strong>Implementation Stage<b class="red">*</b></strong>&nbsp;
                        </td>
                        <td><select name="implementationstages" style="width: 100%"
                                    OnChange="disp_others()">
                                <option value="Select" selected>Please Select</option>
                                <option value="Researching technology choices">Researching technology choices</option>
                                <option value="Evaluating shortlisted choices/vendors">Evaluating shortlisted choices/vendors</option>
                                <option value="Proof of concept in progress">Proof of concept progress</option>
                                <option value="Researching implementation best practices">Researching implementation best practices</option>
                                <option value="Other">Other</option>
                            </select>
                            <div style="display: none; padding-left: 15px;" id="Other_Implementations"><input type="text" value="" name="Other_Implementation_Stages"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="r" valign="top"><strong>Planned Usage<b class="red">*</b></strong>&nbsp; </td>
                        <td valign="top">
                            <select name="usage" style="width: 100%">
                                <option value="Select" selected>Please Select</option>
                                <option value="End-user">End-user</option>
                                <option value="SI/Partner">SI/Partner</option>
                                <option value="Academic/Community (Non-Commercial)">Academic/Community (Non-Commercial)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td height="28" class="r" valign="top"><strong class="b">Brief Description of Project</strong>&nbsp; </td>
                        <td height="28"><textarea name="description" rows="5" style="width: 98%"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="l"><br/>
                            <input type="submit" name="B12" value="Download Now" class="theme-button"> <br/>
                            <br/>
                        </td>
                    </tr>
                </table> -->
            </div>
        </form>
    </div>
    <div id="fs"></div>
</section>