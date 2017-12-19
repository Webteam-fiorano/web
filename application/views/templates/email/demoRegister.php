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

    <table width="600" border="0" cellspacing="0" cellpadding="5">
        <tr>
            <td width="4%"><a href="http://www.fiorano.com"><img src="http://www.fiorano.com/images/fiorano_logo.gif" border="0"></a></td>
            <td width="96%" class="text" valign="bottom"><div align="right">Date:<?php echo date("d-m-Y H:i"); ?>&nbsp;<br><br></div></td>
        </tr>
        <tr>
            <td height="29" colspan="2" align="center" bgcolor="#E1E1E1"><p class="htext">Request for Demo</p></td>
        </tr>
        <tr>
            <td colspan="2" class="tborder">
                <table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tr>
                        <td colspan="3" width="36%" height="33" class="text"><div align="left">The following person has requested a Demo :</div></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Name </div></td>
                        <td>:</td>
                        <td class="text"> <?php if(!empty( $name)) echo $name; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height=25 class="text"><div align="right">Company </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $company)) echo $company; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="25" class="text"><div align="right">Role </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $role)) echo $role; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="25" class="text"><div align="right">E-Mail </div></td>
                        <td>:</td>
                        <td class="text"><a href="https://www.fiorano.com/dashboards/marketing/user-information.php?email=<?php if(!empty( $email)) echo $email; else echo '-' ?>"><?php if(!empty( $email)) echo $email; else echo '-' ?></a></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Phone Number </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty($phone)) echo $phone; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="25" class="text"><div align="right">Demo Choice </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $choice)) echo $choice; else echo "-" ?></td>
                    </tr>

                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right"><?php if(!empty( $choice)) echo $choice; else echo "-" ?> Interested </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $userchoices)){
                            $i=0;
                            foreach ($userchoices as $sel){
                                if($i==0){
                                    echo $sel;
                                }else{
                                    echo ', '.$sel;
                                }
                                $i++;
                            }
                            }  else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Preferred Date </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $date)) echo $date; else echo "-" ?> </td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Time </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $time)) echo $time; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Country </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $country)) echo $country; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Project Description </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $comments)) echo $comments; else echo "-" ?></td>
                    </tr>

                    <tr>
                        <td colspan="3">&nbsp;</td>
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