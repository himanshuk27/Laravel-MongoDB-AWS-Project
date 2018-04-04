<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try { 
     
      $sql = "INSERT members SET name = :name,                
      dept = :dept,
      email = :email,
      fb_link = :fb_link,
      twitter = :twitter,
      year = :year,
      linkedin = :linkedin";
      $stmt = $con->prepare($sql);                                  
      $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);   
      $stmt->bindParam(':dept', $_POST['dept'], PDO::PARAM_STR);
      $stmt->bindParam(':twitter', $_POST['twitter'], PDO::PARAM_STR); 
      $stmt->bindParam(':linkedin', $_POST['linkedin'], PDO::PARAM_STR);  
      $stmt->bindParam(':fb_link', $_POST['fb_link'], PDO::PARAM_STR);
      $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);  
      $stmt->bindParam(':year', $_POST['year'], PDO::PARAM_STR);  
  

     
      $stmt->execute();

      echo "Form Submitted Succefully!";
      die();
    }
    
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
      die();
    }


?>    