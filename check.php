<?php
session_id("otp");session_start();  //start the OTP session

if($_SERVER['REQUEST_METHOD']=='POST')  // check if 'POST' Method in form attached
{ 
if(isset($_POST['verify'])) // check if the button to submit signup form has been clicked
	{
        $ckid=$_COOKIE["uid"];echo $ckid; //get the User Id in this cookie
        $ver=$_POST['otp']; //store the OTP by client in this var
	echo $_COOKIE[$ckid]; //just to check the working
	echo $_COOKIE["email"]; // just to check the working
        
        if($ver==$_COOKIE[$ckid]) // check if OTP Matched
        {
        $to=$_COOKIE["email"];
        $subject1 = "SUBJECT";
        $txt1 = "WELCOME   ".$_COOKIE["uid"]." to the Community" ;
        $header = "From: subject@yourdomain.com" ;
        mail($to,$subject1,$txt1,$header); //send mail
        setcookie("uid","",time()-3600); // destroy cookie
        setcookie($ckid,"",time()-3600); // destroy cookie
        setcookie("email","",time()-3600); // destroy cookie
        session_id("otp"); session_destroy();  // destroy session as OTP Verified
         header('Location: index.html'); //redirects
         }

        else echo "NOT MATCHED"; //condition, you change accordingly
    
       
        
        }
}?>
