<?php
   function getldapsam($a1)
     {$LDAPHost = "ldaps://yourADServer:ADPort"; 
$dn = "DC=yourorganization,DC=com";
$LDAPUser = "ADServiceAccountName@yourorganization.com";  
$LDAPUserPassword = "ADServiceAccountPassword";
$LDAPFieldsToFind = array("cn", "displayname", "samaccountname", "userprincipalname", "distinguishedname", "mail");
$cnx = ldap_connect($LDAPHost) or die("Could not connect to LDAP");
     ldap_set_option($cnx, LDAP_OPT_PROTOCOL_VERSION, 3);  
	   ldap_set_option($cnx, LDAP_OPT_REFERRALS, 0);  
	   ldap_bind($cnx,$LDAPUser,$LDAPUserPassword) or die("Could not bind to LDAP");
	   error_reporting (E_ALL ^ E_NOTICE); 
$SearchField='userprincipalname';
$filter="(&(&(objectClass=user)(!(objectClass=computer)))(userprincipalname=$a1))";  
$sr=ldap_search($cnx, $dn, $filter, $LDAPFieldsToFind);
$info = ldap_get_entries($cnx, $sr);
$infocnt = $info["count"];
  for ($x=0; $x<$info["count"]; $x++) {
    $sam=$info[$x]['samaccountname'][0];
    $giv=$info[$x]['displayname'][0];
    $tel=$info[$x]['distinguishedname'][0];
    $email=$info[$x]['mail'][0];
    $nam=$info[$x]['cn'][0];
    $dir=$info[$x]['userprincipalname'][0];
}
return ($sam);
}
?>
