<?php global $user; define("MAIL_TYPE","DOWNLOAD");
if (!empty($this->session->userdata['logged_in'])) {
    $session_array = $this->session->userdata['logged_in'];
    $u_id = $session_array['id'];
    $email = $session_array['email'];
    $name = $session_array['name'];
    $job_title = $session_array['job_title'];
    $country = $session_array['country'];
    $phone = $session_array['phone'];
    $verified = $session_array['verified'];
    $company = $session_array['company'];
    $ip_addr= $session_array['ip_adrs'];
    $browser=  $session_array['browser'];
    $locale=  $session_array['locale'];
}

?>
<html>
<head>
    <meta http-equiv="Content-Type content=text/html; charset=iso-8859-1">
    <style type="text/css">
        .text
        {
            font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333;text-align: left;
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
        .ftext
        {
            font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333;
            text-align:justify; padding-right:5px; padding-left:3px;
        }
        .fttext
        {
            font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333;
            text-align:justify; padding-right:5px; padding-left:3px;
        }
        .leaddt{
            font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#333333; text-align: right !important;
        }
    </style>
</head>
<body>
<div style="text-align: center;">
    <table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td width="4%"><a href="http://www.fiorano.com"><img src="http://www.fiorano.com/images/fiorano_logo.gif" border="0"></a></td>
            <td width="96%" class="text" valign="bottom"><div align="right">Date:<?php echo date("d-m-Y H:i") ?>&nbsp;<br><br></div></td>
        </tr>
        <tr>
            <td height="29" colspan="2" align="center" bgcolor="#E1E1E1"><p class="htext">Integration Pattern Demos - </p></td>
        </tr>
        <tr>
            <td colspan="2" class="tborder"><br>Dear <?php //echo $_SESSION['lead_owner']?>,<br>
                <br>The person with the following information has just viewed the Integration Pattern Demos: <br><br>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tr bgcolor="#E6F2F9">
                        <td height="33" class="text" width="350"><div align="left"><strong>User&nbsp;Information</strong></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Name&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<a href="https://www.fiorano.com/dashboards/marketing/user-information.php?email=<?php echo $email ?>" title="Show User Information"><?php echo $name ?></a><?php /*echo isset($sess_array["user"])? ' <img src="http://www.fiorano.com/images/new.jpg" border="0" />':'' */?><?php /*echo ($user->verified==1?'&nbsp;&nbsp;<img src="http://www.fiorano.com/images/verified_email.png" title="This Email ID has been verified VALID" width="20" align="absmiddle" />':'') */?></td>
                    </tr>

                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Country&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><?php echo $country?>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Phone Number&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $phone?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="25" class="text"><div align="right">E-Mail ID&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<a href="mailto:<?php echo $email?>"><?php echo $email?></a></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Job Title&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $job_title ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Company Name&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $company ?></td>
                    </tr>
                    <tr>
                        <td height="33" class="text" width="350"><div align="left"><strong>Misc Details</strong></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr bgcolor="#E6F2F9"><td>&nbsp;</td> <td></td><td></td></tr>
                    <tr>
                        <td height="23" class="text"><div align="right">User IP Address&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<a href="https://www.fiorano.com/dashboards/marketing/trackthisip.php?ip=<?php echo $ip_addr?>"><?php echo $ip_addr ?></a></td>
                    </tr>
                   <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">User Host Name&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php // echo $_SESSION['hostname']?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Locale&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $locale?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="30" class="text"><div align="right">Browser&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><?php // echo $browser?></td>
                    </tr>
                   <tr>
                        <td height="23" class="text"><div align="right">User Click Stream&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><div style="word-wrap: break-word;width:350px"><?php //echo $_SESSION['clickstream']?></div></td>
                    </tr>
                    <tr>
                        <td height="23" class="text">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="ftext">&nbsp;</td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Source&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><?php //echo $_SESSION['src']?></td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="leaddt" align="right">
                <table  align="right" width="250"  border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#E1E1E1">
                        <td width="101" height="23" class="leaddt">&nbsp;<strong>&raquo; Lead Owner</strong></td>
                        <td width="10" class="leaddt">:</td>
                        <td width="143" class="leaddt"><?php // echo $_SESSION['lead_owner']?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text"><br>Thanks,<br>Fiorano Webteam, Fiorano Software Inc.<br><a href="mailto:webteam@fiorano.com">webteam@fiorano.com</a></td>
        </tr>
    </table>
</div>
</body>
</html>