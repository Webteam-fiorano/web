<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 8/24/2017
 * Time: 11:16 AM
 */
?>

<html>
<head>
    <meta http-equiv="Content-Type content=text/html; charset=iso-8859-1">
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
<body>




<div align="center">
    <table width="600" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="4%"><a href="http://www.fiorano.com"><img src="http://www.fiorano.com/images/fiorano_logo.gif" border="0"></a></td>
            <td width="96%" class="text" valign="bottom"><div align="right">Date:<?php echo date("d-m-Y H:i") ?>&nbsp;<br><br></div></td>
        </tr>
        <tr>
            <td height="29" colspan="2" align="center" bgcolor="#E1E1E1"><p class="htext">Whitepaper Download - <?php if(!empty( $whitepaper)) echo $whitepaper; ?> </p></td>
        </tr>
        <tr>
            <td colspan="2" class="tborder">
                 The person with following information just downloaded whitepaper from our website:
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="36%" height="33" class="text"><div align="left"><strong>User Information</strong></div></td>
                        <td width="2%"> </td>
                        <td width="62%"> </td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Whitepaper </div></td>
                        <td>:</td>
                        <td class="text"> <?php if(!empty( $whitepaper)) echo $whitepaper; else echo "-" ?></td>

                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Name </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $name)) echo $name; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height=25 class="text"><div align="right">E-Mail </div></td>
                        <td>:</td>
                        <td class="text"><a href="https://www.fiorano.com/dashboards/marketing/user-information.php?email=<?php  if(!empty( $data['email'])) echo $data['email']; ?>"><?php if(!empty( $email)) echo $email; else echo "-" ?></a></td>
                    </tr>
                    <tr>
                        <td height=25 class="text"><div align="right">Company </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $company)) echo $company; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Phone Number </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $phone)) echo $phone; else echo "-" ?></td>
                    </tr>

                    <tr>
                        <td height="23" class="text"><div align="right">Which best describes you? </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $profile)) echo $profile; else echo "-" ?></td>
                    </tr>


                    <tr>
                        <td height="23" class="text"><div align="right">Country </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $country)) echo $country; else echo "-" ?></td>
                    </tr>

                    <tr>
                        <td height="23" class="text"><div align="right">Interest in PSD2 </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $interest)) echo $interest; else echo "-" ?></td>
                    </tr>

                    <tr>
                        <td height="23" class="text"><div align="right">Comments </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $comments)) echo $comments; else echo "-" ?></td>
                    </tr>

                    <tr bgcolor="#E6F2F9">
                        <td height="33" colspan="3" class="text"><strong>Additional Infomation about the user</strong></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">IP </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $ipaddress)) echo $ipaddress; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Host Name </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $hostname)) echo $hostname; else echo "-" ?></td>
                    </tr>

                    <tr bgcolor="#E6F2F9">
                        <td height=30 class="text"><div align="right">Browser </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $browser)) echo $browser; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Locale </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $locale)) echo $locale; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Source </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty($source)) echo $source; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"> </td>
                        <td> </td>
                        <td class="ftext"> </td>
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