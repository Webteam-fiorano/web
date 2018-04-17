
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
            <td height="29" colspan="2" align="center" bgcolor="#E1E1E1"><p class="htext">Event Register Request - <?php if(!empty( $eventname)) echo $eventname. '-'. $eventdate; else echo "-" ?> </p></td>
        </tr>
        <tr>
            <td colspan="2" class="tborder">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="36%" height="33" class="text"><div align="left"><strong>User Information</strong></div></td>
                        <td width="2%"> </td>
                        <td width="62%"> </td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Event Name </div></td>
                        <td>:</td>
                        <td class="text"> <?php if(!empty( $eventname)) echo $eventname; else echo "-" ?></td>

                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Name </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $name)) echo $name; else echo "-" ?></td>
                    </tr>
                    <!--<tr  bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Zoho Status </div></td>
                        <td>:</td>
                        <td class="text"><?php /*if(!empty( $zoho_status)) echo $zoho_status; else echo "-" */?></td>
                    </tr>-->
                    <tr >
                        <td height=25 class="text"><div align="right">E-Mail </div></td>
                        <td>:</td>
                        <td class="text"><a href="https://www.fiorano.com/dashboards/marketing/user-information.php?email=<?php  if(!empty( $data['email'])) echo $data['email']; ?>"><?php if(!empty( $email)) echo $email; else echo "-" ?></a></td>
                    </tr>
                    <tr  bgcolor="#E6F2F9">
                        <td height=25 class="text"><div align="right">Company </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $company)) echo $company; else echo "-" ?></td>
                    </tr>
                    <tr >
                        <td height="23" class="text"><div align="right">Phone Number </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $phone)) echo $phone; else echo "-" ?></td>
                    </tr>

                    <tr  bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Which best describes you? </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $profile)) echo $profile; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Country </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $country)) echo $country; else echo "-" ?></td>
                    </tr>

                   <!-- <tr  bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Interest in PSD2 </div></td>
                        <td>:</td>
                        <td class="text"><?php /*if(!empty( $interest)) echo $interest; else echo "-" */?></td>
                    </tr>-->
                    <!--<tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Products Choice * </div></td>
                        <td>:</td>
                        <td class="text"><?php /*if(!empty( $pchoice)){ $i=0; $opt=""; foreach ($pchoice as $choice){
                            if(empty($opt)){ $opt=  $choice; }else{
                                $opt= $opt.','.$choice;
                            }
                            $i++;}
                            echo $opt;
                            } */?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Are you currently working on any integration project? </div></td>
                        <td>:</td>
                        <td class="text"><?php /*if(!empty( $curentwork)) echo $curentwork; else echo "-" */?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Preferred date </div></td>
                        <td>:</td>
                        <td class="text"><?php /*if(!empty( $pdate)) echo $pdate; else echo "-" */?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right"> Preferred Time  </div></td>
                        <td>:</td>
                        <td class="text"><?php /*if(!empty( $ptime)) echo $ptime; else echo "-" */?></td>
                    </tr>-->
                    <tr>
                        <td height="23" class="text"><div align="right"> Comments </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $comments)) echo $comments; else echo "-" ?></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="33" colspan="3" class="text"><strong>Additional Infomation about the user</strong></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">IP </div></td>
                        <td>:</td>
                        <td class="text"> <a href="https://www.fiorano.com/dashboards/marketing/trackthisip.php?ip=<?php if(!empty( $ipaddress)) echo $ipaddress; ?>"><?php if(!empty( $ipaddress)) echo $ipaddress; else echo "-" ?></a></td>
                    </tr>
                    <tr bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Host Name </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $hostname)) echo $hostname; else echo "-" ?></td>
                    </tr>

                    <tr>
                        <td height=30 class="text"><div align="right">Browser </div></td>
                        <td>:</td>
                        <td class="ftext"><?php if(!empty( $browser)) echo $browser; else echo "-" ?></td>
                    </tr>
                    <tr  bgcolor="#E6F2F9">
                        <td height="23" class="text"><div align="right">Locale </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $locale)) echo $locale; else echo "-" ?></td>
                    </tr>
                    <tr>
                        <td height="23" class="text"><div align="right">Source </div></td>
                        <td>:</td>
                        <td class="text"><?php if(!empty( $source)) echo $source; else echo "-" ?></td>
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