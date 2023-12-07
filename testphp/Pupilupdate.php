<?php
require_once('test.php');

if(isset($_GET['PupilID']) && isset($_POST['submit'])){
    $pupilid = $_GET['PupilID'];
    $newid = $_POST['puid'];
    $pupilname = $_POST['pname'];
    $pupildgrade = $_POST['pgrade'];
    $dob =$_POST['pdob'];

    $sql = "UPDATE `pupil` SET 
        `PupilID`='$newid',
        `PupilName`='$pupilname',
        `PupilGrade`='$pupildgrade',
        `DateOfBirth`='$dob' 
        WHERE PupilID = $pupilid";
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