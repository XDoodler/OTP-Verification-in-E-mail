<?php
 
 
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['submit']))
	{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['con'];
        
        $pos=strpos($email,"@");
       
        $cookieid=substr($email,0,$pos);
      
        $otp=rand(1000,9999);
       

       if(!isset($_COOKIE["uid"])){
           
           session_id("otp");session_start();

        setcookie("uid",$cookieid);
        setcookie("email",$email);
        setcookie($cookieid,$otp, time() +(3600*30));
         header('Location: otp.html');
          }

        if(isset($_COOKIE["uid"])){
         session_id("otp");session_start(); 
          $to = $email;
        $subject = "TOURLANCERS";
        $txt = "VERIFICATION OTP: ".$_COOKIE[$cookieid]."   Valid for 10 minutes." ;
        $headers = "From: info@tourlancers.com" ;
        mail($to,$subject,$txt,$headers);
        header('Location: check.html');
          }
     }
    
       }

       
        
    


   




?>
