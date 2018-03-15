<?php
session_id("otp");session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{ 
if(isset($_POST['verify']))
	{
        $ckid=$_COOKIE["uid"];
        $ver=$_POST['otp'];
        
        if($ver==$_COOKIE[$ckid])
        {
        $to=$_COOKIE["email"];
        $subject1 = "TOURLANCERS";
        $txt1 = "WELCOME   ".$_COOKIE["uid"]." to the Tourlancers Community" ;
        $header = "From: info@tourlancers.com" ;
        mail($to,$subject1,$txt1,$header);
        setcookie("uid","",time()-3600);
        setcookie($ckid,"",time()-3600);
        setcookie("email","",time()-3600);
        session_id("otp"); session_destroy();
         header('Location: index.html');
         }

        else echo $_COOKIE[$ckid]."   ".$_COOKIE["email"]. $ver . $_COOKIE["uid"];
 
        }
}?>
