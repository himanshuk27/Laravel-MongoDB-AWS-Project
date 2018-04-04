<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');

try {
     $sql = "INSERT startups_reg SET StartupName = :StartupName,          
            Industry = :Industry,
            Website = :Website,
            CurrentStatus = :CurrentStatus,
            Address = :Address,
            Email = :Email,
            MobileNo = :MobileNo,
            Facebook = :Facebook,
            Twitter = :Twitter,
            Instagram = :Instagram,
            FoundersName = :FoundersName,
            College = :College,
            Branch = :Branch";
$stmt = $con->prepare($sql); 
$stmt->bindParam(':StartupName', $_POST['StartupName'], PDO::PARAM_STR);   
$stmt->bindParam(':Industry', $_POST['Industry'], PDO::PARAM_STR);
$stmt->bindParam(':Website', $_POST['Website'], PDO::PARAM_STR);   
$stmt->bindParam(':CurrentStatus', $_POST['CurrentStatus'], PDO::PARAM_STR);
$stmt->bindParam(':Address', $_POST['Address'], PDO::PARAM_STR);   
$stmt->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR);   
$stmt->bindParam(':MobileNo', $_POST['MobileNo'], PDO::PARAM_STR);
$stmt->bindParam(':Facebook', $_POST['Facebook'], PDO::PARAM_STR);   
$stmt->bindParam(':Twitter', $_POST['Twitter'], PDO::PARAM_STR);
$stmt->bindParam(':Instagram', $_POST['Instagram'], PDO::PARAM_STR);
$stmt->bindParam(':FoundersName', $_POST['FoundersName'], PDO::PARAM_STR);   
$stmt->bindParam(':College', $_POST['College'], PDO::PARAM_STR);
$stmt->bindParam(':Branch', $_POST['Branch'], PDO::PARAM_STR); 
$stmt->execute();  
echo "Form Submitted!";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>