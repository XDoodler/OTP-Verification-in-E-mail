<?php>
    session_id("otp");session_start();  
        $password=$_COOKIE["uid"];
        $to = $_COOKIE["email"];
        $subject = "SUBJECT";
        $txt = "VERIFICATION OTP: ".$_COOKIE[$password]."Thank you!" ;
        $headers = "From: otp@yourdomain.com" ;
        mail($to,$subject,$txt,$headers);
        header('Location: check.html');
?>
