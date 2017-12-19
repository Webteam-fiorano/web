<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 9/19/2017
 * Time: 12:41 PM
 */
?>
<html>
<head>
    <title>Fiorano Cloud ESB - Proof-of-Concept</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
</head>
<style type="text/css">
    .text
    {
        font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333;
    }
    .htext
    {
        font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333;
        font-size:x-small;
        font-weight:bold;
    }
    .tborder
    {
        font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333;
        border:5px Solid #E1E1E1; padding-left:2px; padding-right:2px;
    }
</style>
<body>
<div align="center">
    <table width="600" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="4%"><a href="http://www.fiorano.com"><img src="http://www.fiorano.com/images/fiorano_logo.gif" border="0" /></a></td>
            <td width="96%" class="text" valign="bottom"><div align="right"><?php echo date("l jS \of F Y"); ?> <br/><br/></div></td>
        </tr>
        <tr>
            <td height="29" colspan="2" align="center" bgcolor="#E1E1E1">
                <p class="htext" style="font-size:12px;padding-top:5px;">
                    Request for Demo
                </p></td>
        </tr>
        <tr>
            <td colspan="2" class="tborder">

                <div>
                    <div style="padding:15px;">

                        <div style="font-size:12px;padding:10px;padding-left:0px;"><strong>Dear</strong> <?php if(!empty( $uname)) echo $uname; else echo "-" ?>,</div>
                        <div>&nbsp;</div>
                        <div style="text-align:left;padding:10px;padding-left:0px;font-size:12px;">Thank you for your interest in Fiorano. Your request for demo at <br/><b><?php if(!empty( $date)) echo $date; else echo "-" ?>  &ndash; <?php if(!empty( $time)) echo $time; else echo "-";?></b> has been submitted. We will contact you shortly.</div>
                        <div>&nbsp;</div>
                        <div style="text-align:justify;padding:10px;padding-left:0px;font-size:12px;">
                            <div style="padding:10px;padding-left:0px;"><strong>Quick Links</strong></div>
                            Fiorano Platform is the first SOA platform for real-time business built on a standards-based Enterprise Service Bus, enabling the effective coordination and interaction of software assets across the extended enterprise.
                            <div style="text-align:right;padding:5px;">
                                <strong><a href="http://www.fiorano.com/downloads/download_fsoa.php">&raquo; Fiorano Platform Download</a> </strong>
                            </div>

                        </div>
                    </div>

                </div>


            </td>
        </tr>
        <tr>
            <td colspan="2" class="text" align="right">

            </td>
        </tr>
        <tr>
            <td colspan="2" class="text"><br/>Thanks,<br/>Fiorano Webteam, Fiorano Software Inc.<br/><a href="mailto:webteam@fiorano.com">webteam@fiorano.com</a></td>
        </tr>
    </table>
</div>
</body>
</html>

