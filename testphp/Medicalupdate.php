<?php
require_once('test.php');

if(isset($_GET['MedicalID']) && isset($_POST['Medicalsubmit'])){
    $medid = $_GET['MedicalID'];
    $newid = $_POST['mid'];
    $medinfo = $_POST['medinfo'];
    $alergies = $_POST['alergies'];

    $sql = "UPDATE `medical` SET 
    `MedicalID`='$newid',
    `MedicalInfo`='$medinfo',
    `Alergies`='$alergies' 
    WHERE MedicalID = $medid";

    if($con->query($sql) === TRUE){
        echo "Added to DataBase";
    }
    else{
        echo "Somthing Went Wrong";
    }
}
else{
    echo "Invalid";
}
?>

<br>
<a href="Medical.php">Back</a>