<?php>
    session_id("otp");session_start();  
        $password=$_COOKIE["uid"];
        $to = $_COOKIE["email"];
        $subject = "TOURLANCERS";
        $txt = "VERIFICATION OTP: ".$_COOKIE[$password]." Valid for 10 minutes." ;
        $headers = "From: info@tourlancers.com" ;
        mail($to,$subject,$txt,$headers);
        header('Location: check.html');
?>
