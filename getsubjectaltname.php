<?php

    function getsubjectaltname()
      {   $ssl_RN = $_SERVER['SSL_CLIENT_S_DN_CN'];
$clicertarray = openssl_x509_parse($_SERVER["SSL_CLIENT_CERT"]);
$getcli = $clicertarray["extensions"]["subjectAltName"];
$yourcn = $_SERVER['SSL_CLIENT_S_DN_CN']; 
$filename=str_replace('(Affiliate)', '', str_replace(' ', '.', $yourcn)).rand().".cer";
$file1 = $_SERVER['SSL_CLIENT_CERT'];
file_put_contents('extensions/SSLauthentication/USERCERT/'.$filename, $file1);
$cmd1 = "openssl asn1parse  -in extensions/SSLauthentication/USERCERT/$filename | grep -A 1 'Subject Alternative Name' | cut -f1 -d':' | tail -1";
$output1 = shell_exec($cmd1);
$output3 = shell_exec("sh extensions/SSLauthentication/testname.sh '$output1' 'extensions/SSLauthentication/USERCERT/$filename'");
$output2 = rtrim($output3);
        return ($output2);
   }
?>
