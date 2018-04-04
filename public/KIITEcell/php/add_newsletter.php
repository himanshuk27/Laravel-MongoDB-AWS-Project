<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {

$sql = "INSERT Newsletter SET Email = :Email";
$stmt = $con->prepare($sql);

$stmt->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR);   

$stmt->execute(); 
echo "Email Added Succesfully";

}

 
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>