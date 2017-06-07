<?php
@date_default_timezone_set("Asia/Kolkata");
if(isset($_REQUEST['demo']))readFile($_REQUEST['demo']);
$f=fopen("demoviews.log","a+");
$content=$_SERVER['REMOTE_ADDR']."  |  {$_REQUEST['demo']}   |   ".
date('l jS \of F Y h:i:s A')."   |   {$_GET['src']}\r\n"; 
fputs($f,$content);
fclose($f);
?>
