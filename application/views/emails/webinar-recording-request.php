<?php global $user; define("MAIL_TYPE","DOWNLOAD");?>
<html>
<head>
    <meta http-equiv="Content-Type content=text/html; charset=iso-8859-1">
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
            <td height="29" colspan="2" align="center" bgcolor="#E1E1E1"><p class="htext">Webinar Recording View - <?php echo WEBINAR_NAME ?></p></td>
        </tr>
        <tr>
            <td colspan="2" class="tborder"><br>Dear <?php echo $_SESSION['lead_owner']?>,<br>
                <br>The person with the following information has just viewed the Webinar Recording: <br><br>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tr bgcolor="#E6F2F9">
                        <td height="33" class="text" width="350"><div align="left"><strong>User&nbsp;Information</strong></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Name&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<a href="https://www.fiorano.com/dashboards/marketing/user-information.php?email=<?php echo $user->email ?>" title="Show User Information"><?php echo $user->salutation . $user->first_name .' '.$user->last_name ?></a><?php echo isset($_SESSION["new_user"])? ' <img src="http://www.fiorano.com/images/new.jpg" border="0" />':'' ?><?php echo ($user->verified==1?'&nbsp;&nbsp;<img src="http://www.fiorano.com/images/verified_email.png" title="This Email ID has been verified VALID" width="20" align="absmiddle" />':'') ?></td>
                    </tr>

                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Country&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><?php echo $user->country?>&nbsp;<img align="absmiddle" src="http://www.fiorano.com/images/flags/<?php echo countrymap($user->country)?>.gif" height="13px" width="18px"></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Phone Number&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $user->phone?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="25" class="text"><div align="right">E-Mail ID&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<a href="mailto:<?php echo $user->email?>"><?php echo $user->email?></a></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Job Title&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $user->job_title ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Company Name&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $user->company ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Level of Interest&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $user->interest ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Do you have an Integration Project planned or in progress?&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $user->progress ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">What do you expect from us? Check all that apply&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo implode(", " , $user->expectation) ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Queries&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $user->queries?></td>
                    </tr>
                    <tr>
                        <td height="33" class="text"><strong>Misc&nbsp;Details</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Referring URL&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><a href="<?php echo $_SESSION['referenceurl']?>"><?php echo $_SESSION['referenceurl']?></a></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">User IP Address&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<a href="https://www.fiorano.com/dashboards/marketing/trackthisip.php?ip=<?php echo $_SESSION['ipaddress']?>"><?php echo $_SESSION['ipaddress'] ?></a></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">User Host Name&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $_SESSION['hostname']?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Locale&nbsp;</div></td>
                        <td>:</td>
                        <td class="text">&nbsp;<?php echo $_SESSION['locale']?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="30" class="text"><div align="right">Browser&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><?php echo $_SESSION['browser']?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">User Click Stream&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><div style="word-wrap: break-word;width:350px"><?php echo $_SESSION['clickstream']?></div></td>
                    </tr>
                    <tr>
                        <td height="23" class="text">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="ftext">&nbsp;</td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Source&nbsp;</div></td>
                        <td>:</td>
                        <td class="ftext"><?php echo $_SESSION['src']?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text" align="right">
                <table width="250"  border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#E1E1E1">
                        <td width="101" height="23" class="text">&nbsp;<strong>&raquo; Lead Owner</strong></td>
                        <td width="10" class="text">:</td>
                        <td width="143" class="text"><?php echo $_SESSION['lead_owner']?></td>
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