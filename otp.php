<?php
 $mailp;
 
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
        setcookie($cookieid,$otp);
        header('Location: sendmail.php');
        }

        if(isset($_COOKIE["uid"])){
         session_id("otp");session_start(); 
         header('Location: sendmail.php');}
 
        
         }
 }

       
        
    


   




?>
