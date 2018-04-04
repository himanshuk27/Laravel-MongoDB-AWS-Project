<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
if (isset($_POST['email'])) {
	$email = $_POST['email'];
} else if (isset($_GET['email'])) {
	$email = $_GET['email'];
} else {
	$email = '';
}

try {

$sql = "INSERT Newsletter SET Email = :Email";
$stmt = $con->prepare($sql);

$stmt->bindParam(':Email', $email, PDO::PARAM_STR);   

$stmt->execute(); 
echo "Email Added Succesfully";

}
 
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }