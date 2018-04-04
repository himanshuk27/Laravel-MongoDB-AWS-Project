<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off      

    
       try {
            $db_host = 'blog.ecell.org.in';  //  hostname
            $db = 'Ecell'; //database name
            $user_pw = 'db@2018';  //  password
            $db_user = 'root';

            $con = new PDO('mysql:host='.$db_host.'; dbname='.$db, $db_user, $user_pw);  
            $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8               
        }
        catch (PDOException $err) {  
            echo "harmless error message if the connection fails";
            $err->getMessage() . "<br/>";
            //file_put_contents('PDOErrors.txt',$err, FILE_APPEND);  // write some details to an error-log outside public_html  
            die();  //  terminate connection
        }
       
  

//

    ?>    
