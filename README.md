PIVLogin
========
1. Create a folder with name, USERCERT. under extensions/SSLAuthentication with permision rwxr-xr-x and owned by apache
2. place the zip file under extensions/SSLAuthentication where your MediaWiki installation directory
3. unzip this master zip file
4. modify the following code in getldapsam.php with your AD information

 
      $LDAPHost = "ldaps://yourADServer:ADPort"; 

      $dn = "DC=yourorganization,DC=com";
      
      $LDAPUser = "ADServiceAccountName@yourorganization.com"; 
      
      $LDAPUserPassword = "ADServiceAccountPassword";

    ex: ---------------------------------
      $LDAPHost = "ldaps://ADServer.abc.org:636"; 
      
     $dn = "DC=abc,DC=org";
     
     $LDAPUser = "ADServiceAccountName@abc.org"; 
     
     $LDAPUserPassword = "ADServiceAccountPassword";       
