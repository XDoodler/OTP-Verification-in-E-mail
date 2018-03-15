<?php>
    session_id("otp");session_start();  
        $password=$_COOKIE["uid"];
        $to = $_COOKIE["email"];
        $subject = "OTP Verification";
        $txt = "VERIFICATION OTP: ".$_COOKIE[$password]." Kindly Enter in the OTP Box" ;
        $headers = "From: otp@your_domain.com" ;
        mail($to,$subject,$txt,$headers);
        header('Location: check.html');
?>
