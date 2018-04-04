<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');

try {
     $sql = "INSERT Makovation_reg SET TeamName = :TeamName,          
            Theme = :Theme,
            Name_mem1 = :Name_mem1,
            Email_mem1 = :Email_mem1,
            Roll_mem1 = :Roll_mem1,
            Mobile_mem1 = :Mobile_mem1,
            Name_mem2 = :Name_mem12,
            Email_mem2 = :Email_mem2,
            Roll_mem2 = :Roll_mem2,
            Mobile_mem2 = :Mobile_mem2,
            Name_mem3 = :Name_mem3,
            Email_mem3 = :Email_mem3,
            Roll_mem3 = :Roll_mem3,
            Mobile_mem3 = :Mobile_mem3,
            Name_mem4 = :Name_mem4,
            Email_mem4 = :Email_mem4,
            Roll_mem4 = :Roll_mem4,
            Mobile_mem4 = :Mobile_mem4,
            Address = :Address";
$stmt = $con->prepare($sql); 
$stmt->bindParam(':TeamName', $_POST['TeamName'], PDO::PARAM_STR);   
$stmt->bindParam(':Theme', $_POST['Theme'], PDO::PARAM_STR);

$stmt->bindParam(':Name_mem1', $_POST['Name_mem1'], PDO::PARAM_STR);   
$stmt->bindParam(':Email_mem1', $_POST['Email_mem1'], PDO::PARAM_STR);
$stmt->bindParam(':Roll_mem1', $_POST['Roll_mem1'], PDO::PARAM_STR);   
$stmt->bindParam(':Mobile_mem1', $_POST['Mobile_mem1'], PDO::PARAM_STR);

$stmt->bindParam(':Name_mem2', $_POST['Name_mem2'], PDO::PARAM_STR);   
$stmt->bindParam(':Email_mem2', $_POST['Email_mem2'], PDO::PARAM_STR);
$stmt->bindParam(':Roll_mem2', $_POST['Roll_mem2'], PDO::PARAM_STR);   
$stmt->bindParam(':Mobile_mem2', $_POST['Mobile_mem2'], PDO::PARAM_STR);

$stmt->bindParam(':Name_mem3', $_POST['Name_mem3'], PDO::PARAM_STR);   
$stmt->bindParam(':Email_mem3', $_POST['Email_mem3'], PDO::PARAM_STR);
$stmt->bindParam(':Roll_mem3', $_POST['Roll_mem3'], PDO::PARAM_STR);   
$stmt->bindParam(':Mobile_mem3', $_POST['Mobile_mem3'], PDO::PARAM_STR);

$stmt->bindParam(':Name_mem4', $_POST['Name_mem4'], PDO::PARAM_STR);   
$stmt->bindParam(':Email_mem4', $_POST['Email_mem4'], PDO::PARAM_STR);
$stmt->bindParam(':Roll_mem4', $_POST['Roll_mem4'], PDO::PARAM_STR);   
$stmt->bindParam(':Mobile_mem4', $_POST['Mobile_mem4'], PDO::PARAM_STR);   

$stmt->bindParam(':Address', $_POST['Address'], PDO::PARAM_STR); 
$stmt->execute();  
echo "Form Submitted!";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>