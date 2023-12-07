<?php
require_once('test.php');

if(isset($_GET['MedicalID'])){
    $medid = $_GET['MedicalID'];
    $sql = "DELETE FROM medical WHERE MedicalID = $medid";

    if($con->query($sql) === TRUE){
        echo "Deleted data";
    }
    else{
        echo "Something Went Wrong";
    }
}
else{
    die('No ID');
}

?>
<br>
<a href="Medical.php">back</a>