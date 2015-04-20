PIVLogin
This MediaWiki extension works with HSPD-12 Access Cards in conjunction with Active Directory. It will allow users to login via their HSPD-12 Access Cards. Be sure to follow the more extensive directions on the [PIVLogin Extension Page on MediaWiki](https://www.mediawiki.org/wiki/Extension:PIVLogin).

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
