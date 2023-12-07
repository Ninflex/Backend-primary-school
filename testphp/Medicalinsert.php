<?php

require_once('test.php');

if(isset($_POST['Medicaladd'])){
    $medid = $_POST['mid'];
    $medinfo = $_POST['medinfo'];
    $alergies = $_POST['alergies'];

    $sql = "INSERT INTO `medical`(`MedicalID`, `MedicalInfo`, `Alergies`)
             VALUES ('$medid','$medinfo','$alergies')";

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