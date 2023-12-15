<?php

require_once('test.php');

if(isset($_POST['add'])){
    $pupilid = $_POST['puid'];
    $pupilname = $_POST['pname'];
    $pupilgrade = $_POST['pgrade'];
    $pupildob = $_POST['pdob'];

    $sql = "INSERT INTO `pupil`(`PupilID`, `PupilName`, `PupilGrade`, `DateOfBirth`) 
            VALUES ('$pupilid','$pupilname','$pupilgrade','$pupildob')";

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
<a href="pupil.php">Back</a>