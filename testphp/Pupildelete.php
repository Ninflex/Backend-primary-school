<?php
require_once('test.php');

if(isset($_GET['PupilID'])){
    $pupilid = $_GET['PupilID'];
    $sql = "DELETE FROM pupil WHERE PupilID = $pupilid";

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
<a href="pupil.php">back</a>